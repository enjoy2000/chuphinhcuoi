<?php get_header('noloader'); 

/*
Template Name: Concept Swap Grid
*/

$foto_grid_effect	= get_field('grid_effect');

$foto_content_padding_top       = get_field('content_padding_top');
$foto_content_padding_bottom    = get_field('content_padding_bottom');

?>

<?php foto_page_title(); ?>

<div class="concept-8 clearfix" style="margin: <?php if(!empty($foto_content_padding_top)) { echo sanitize_text_field( $foto_content_padding_top ); ?>px <?php } else { echo "0px "; } ?>0px <?php if(!empty($foto_content_padding_bottom)) { echo sanitize_text_field( $foto_content_padding_bottom ); ?>px<?php } else { echo "0px"; } ?>;">
	<div class="container">
		<div class="row">

			<!-- GALLERY START
			============================================= -->
			<section class="grid-wrap-concept8">
				<ul class="grid-concept8 <?php echo sanitize_text_field( $foto_grid_effect ); ?>" id="grid-concept8">

					<?php $foto_album_post_list = get_field('album_post_list', false, false);
					$foto_concept_8_args = array(
					'post_type'			=> 'foto-gallery',
					'post__in'          => $foto_album_post_list,
					);

					$foto_concept_8_loop = new WP_Query($foto_concept_8_args);
					if ($foto_concept_8_loop->have_posts()) : while($foto_concept_8_loop->have_posts()) : $foto_concept_8_loop->the_post(); ?>

						<li>
							<a href="<?php the_permalink(); ?>">
								<?php the_post_thumbnail(); ?>
								<h3>
									<span>
										<?php the_title(); ?>
									</span>
								</h3>
							</a>
						</li>

					<?php endwhile; wp_reset_postdata(); endif; ?>
				</ul>
			</section>
			<!-- GALLERY END -->

		</div>
	</div>
</div>

<?php foto_footer_page(); ?>