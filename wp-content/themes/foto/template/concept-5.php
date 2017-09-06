<?php foto_header_menu_page();

/*
Template Name: Concept SVG Grid
*/

$foto_content_padding_top       = get_field('content_padding_top');
$foto_content_padding_bottom    = get_field('content_padding_bottom');

?>

<?php foto_page_title(); ?>

<div class="concept-5 demo-1" style="margin: <?php if(!empty($foto_content_padding_top)) { echo sanitize_text_field( $foto_content_padding_top ); ?>px <?php } else { echo "0px "; } ?>0px <?php if(!empty($foto_content_padding_bottom)) { echo sanitize_text_field( $foto_content_padding_bottom ); ?>px<?php } else { echo "0px"; } ?>;">
	<?php foto_concept_layout_acf_top(); ?>
		<div id="grid" class="grid-svg clearfix">
			
			<?php $foto_album_post_list = get_field('album_post_list', false, false);
			$foto_concept5_args = array(
			'post_type'          => 'foto-gallery',
			'post_status'        => 'publish',
        	'post__in'          => $foto_album_post_list,

			);
			$foto_concept5_loop = new WP_Query($foto_concept5_args);
			if ($foto_concept5_loop->have_posts()) : while($foto_concept5_loop->have_posts()) : $foto_concept5_loop->the_post();

			$foto_gallery_subtitle	= get_field('page_subtitle'); 
			$foto_trimmed = wp_trim_words( $foto_gallery_subtitle, $num_words = 15, $more = null ); ?>

			<a href="<?php the_permalink(); ?>" data-path-hover="m 180,34.57627 -180,0 L 0,0 180,0 z">
				<figure>
					<?php the_post_thumbnail('foto-gridsvg-concept'); ?>
					<svg viewBox="0 0 180 320" preserveAspectRatio="none"><path d="M 180,160 0,218 0,0 180,0 z"/></svg>
					<figcaption>
						<h2><?php the_title(); ?></h2>
						<?php if(!empty($foto_trimmed)) { ?>
							<p><?php echo balancetags( $foto_trimmed ); ?></p>
						<?php } ?>
						<button><?php esc_html_e( 'VIEW', 'foto' ); ?></button>
					</figcaption>
				</figure>
			</a>

			<?php endwhile; wp_reset_postdata(); endif; ?>

		</div>
	<?php foto_concept_layout_acf_bottom(); ?>
</div>

<?php foto_footer_page(); ?>