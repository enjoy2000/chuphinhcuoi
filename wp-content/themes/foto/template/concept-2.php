<?php foto_header_menu_page();

/*
Template Name: Concept Fullwidth Slider
*/

?>

<section class="concept-2 slit-demo-1">

	<div id="slider" class="sl-slider-wrapper">

		<div class="sl-slider">

		<?php $foto_album_post_list = get_field('album_post_list', false, false);
		$foto_concept2_args = array(
		'post_type'          => 'foto-gallery',
		'post_status'        => 'publish',
		'posts_per_page'     => -1,
		'orderby'			=> 'post__in',
        'post__in'          => $foto_album_post_list,

			);
			$foto_concept2_loop = new WP_Query($foto_concept2_args);
			if ($foto_concept2_loop->have_posts()) : while($foto_concept2_loop->have_posts()) : $foto_concept2_loop->the_post();

			$foto_album_author 			= get_field('album_author');
			$foto_gallery_subtitle		= get_field('page_subtitle');

			$foto_concept_2_thumb = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full');

			?>
		
			<div class="sl-slide bg-1" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
				<div class="sl-slide-inner">
					<div class="bg-img" style="background-image:url(<?php echo esc_url( $foto_concept_2_thumb['0'] ); ?>);"></div>
					
					<div class="view-album">
						<a href="<?php the_permalink(); ?>"><?php esc_html_e( 'View Album', 'foto' ); ?></a>
					</div>
					<h2><?php the_title(); ?></h2>
					<blockquote>
						<p><?php echo balancetags( $foto_gallery_subtitle ); ?></p>
						<?php if(!empty($foto_album_author)) { ?>
						<cite><?php echo sanitize_text_field( $foto_album_author ); ?></cite>
						<?php } ?>
					</blockquote>
				</div>
			</div>

			<?php endwhile; wp_reset_postdata(); endif; ?>

		</div><!-- /sl-slider -->
		
		<nav id="nav-arrows" class="nav-arrows">
			<span class="nav-arrow-prev"><?php esc_html_e( 'Previous', 'foto' ); ?></span>
			<span class="nav-arrow-next"><?php esc_html_e( 'Next', 'foto' ); ?></span>
		</nav>

	</div><!-- /slider-wrapper -->

</section>
<!-- CONTENT END -->

<?php get_footer('null'); ?>