<?php foto_header_menu_page();

/*
Template Name: Concept Polaroid Photostack
*/

?>

<div class="concept-3 clearfix">
	<div class="photostack-wrap">

		<div class="gallery-polaroid">
			<div id="photostack-3" class="photostack">
				<div class="photostack-wrapper">

				<?php $foto_album_post_list = get_field('album_post_list', false, false);
				$foto_concept3_args = array(
				'post_type'          => 'foto-gallery',
				'post_status'        => 'publish',
        		'post__in'          => $foto_album_post_list,

				);
				$foto_concept3_loop = new WP_Query($foto_concept3_args);
				if ($foto_concept3_loop->have_posts()) : while($foto_concept3_loop->have_posts()) : $foto_concept3_loop->the_post();

				$foto_gallery_subtitle	= get_field('page_subtitle');
				$foto_trimmed = wp_trim_words( $foto_gallery_subtitle, $num_words = 15, $more = null );  ?>

					<figure>
						<a href="<?php the_permalink(); ?>" class="photostack-img"><?php the_post_thumbnail('foto-concept-3'); ?></a>
						<figcaption>
							<h2 class="photostack-title"><?php the_title(); ?></h2>
							<div class="photostack-back">
								<?php if(!empty($foto_trimmed)) { ?>
									<p><?php echo balancetags( $foto_trimmed ); ?></p>
								<?php } ?>
							</div>
						</figcaption>
					</figure>

				<?php endwhile; wp_reset_postdata(); endif; ?>
				</div>
			</div>

		</div>
		
	</div>
</div>

<?php //foto_fullscreen_acf(); ?>

<?php foto_footer_page(); ?>