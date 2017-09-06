<?php foto_header_menu_page();

/*
Template Name: Concept Polariod Elastic Stack
*/

$foto_content_padding_top       = get_field('content_padding_top');
$foto_content_padding_bottom    = get_field('content_padding_bottom');

?>

<?php foto_page_title(); ?>

<div class="concept-4 clearfix" style="margin: <?php if(!empty($foto_content_padding_top)) { echo sanitize_text_field( $foto_content_padding_top ); ?>px <?php } else { echo "0px "; } ?>0px <?php if(!empty($foto_content_padding_bottom)) { echo sanitize_text_field( $foto_content_padding_bottom ); ?>px<?php } else { echo "0px"; } ?>;">
	<div class="elastic-wrap fullscreen clearfix">

		<ul id="elasticstack" class="elasticstack">
			<?php $foto_album_post_list = get_field('album_post_list', false, false);
			$foto_concept4_args = array(
			'post_type'          => 'foto-gallery',
			'post_status'        => 'publish',
        	'post__in'          => $foto_album_post_list,

			);
			$foto_concept4_loop = new WP_Query($foto_concept4_args);
			if ($foto_concept4_loop->have_posts()) : while($foto_concept4_loop->have_posts()) : $foto_concept4_loop->the_post(); ?>
			
			<li>
				<?php the_post_thumbnail('foto-elastistack-concept'); ?>
				<h5>
					<a href="<?php the_permalink(); ?>">
						<?php the_title(); ?>
					</a>
				</h5>
			</li>

			<?php endwhile; wp_reset_postdata(); endif; ?>
		</ul>
			
	</div>
</div>

<?php foto_footer_page(); ?>