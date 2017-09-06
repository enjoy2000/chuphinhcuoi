<?php foto_header_menu_page(); 

/*
Template Name: Concept Polaroid Stack 5 Images
*/

$foto_content_padding_top       = get_field('content_padding_top');
$foto_content_padding_bottom    = get_field('content_padding_bottom');

?>

<?php foto_page_title(); ?>

<main class="concept-13 codrops full-height" style="margin: <?php if(!empty($foto_content_padding_top)) { echo sanitize_text_field( $foto_content_padding_top ); ?>px <?php } else { echo "0px "; } ?>0px <?php if(!empty($foto_content_padding_bottom)) { echo sanitize_text_field( $foto_content_padding_bottom ); ?>px<?php } else { echo "0px"; } ?>;">
	<div class="slideshow container" tabindex="0">
			<?php $foto_album_post_list = get_field('album_post_list', false, false);
			$foto_concept_13_args = array(
			'post_type'			=> 'foto-gallery',
			'post_status'        => 'publish',
			'posts_per_page'     => -1,
        	'post__in'          => $foto_album_post_list,
			);

			$foto_concept_13_loop = new WP_Query($foto_concept_13_args);
			if ($foto_concept_13_loop->have_posts()) : while($foto_concept_13_loop->have_posts()) : $foto_concept_13_loop->the_post();

			$foto_gallery_images = get_field('gallery_images');
			$foto_gallery_subtitle	= get_field('page_subtitle');

			$foto_trimmed = wp_trim_words( $foto_gallery_subtitle, $num_words = 20, $more = null ); ?>

				<div class="slide slide--layout-2" data-layout="layout2">
					<div class="slide-imgwrap">

						<?php if( $foto_gallery_images){
						foreach( array_slice($foto_gallery_images, 0, 5) as $foto_image ):

						$foto_name = $foto_image['title']; 
						$image 		= aq_resize($foto_image['url'],  450, 400, true);
					?>
							
								<div class="slide__img"><div class="slide__img-inner" style="background-image:url(<?php echo esc_url( $image  ); ?>);"><h4 class="slide__img-caption"><?php echo sanitize_text_field($foto_name); ?></h4></div></div>

						<?php endforeach; ?>

						<?php } ?>
						
					</div>

					<div class="slide__title">
						<h3 class="slide__title-main"><?php the_title(); ?></h3>
						<?php if(!empty($foto_trimmed)) { ?>
						<p class="slide__title-sub"><?php echo balancetags($foto_trimmed); ?></p>
						<?php } ?>
						<div class="view-album">
							<a href="<?php the_permalink(); ?>"><?php esc_html_e( 'View Album', 'foto' ); ?></a>
						</div>
					</div>
				</div>
			<!-- /slide --><?php endwhile; wp_reset_postdata(); endif; ?>

		<nav class="slideshow__nav slideshow__nav--arrows">
			<button id="prev-slide" class="btn btn--arrow" aria-label="Previous slide"><i class="icon foto-themify"></i></button>
			<button id="next-slide" class="btn btn--arrow" aria-label="Next slide"><i class="icon foto-single-arrow-right"></i></button>
		</nav>
	</div>
</main>

<?php get_footer('null'); ?>