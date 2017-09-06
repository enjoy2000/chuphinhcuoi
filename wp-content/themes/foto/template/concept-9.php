<?php foto_header_menu_page();

/*
Template Name: Concept Carousel
*/

$foto_concept_carousel_column	= get_field('concept_carousel_column');
$foto_album_image_width			= get_field('album_image_width');
$foto_album_image_height		= get_field('album_image_height');

$foto_content_padding_top       = get_field('content_padding_top');
$foto_content_padding_bottom    = get_field('content_padding_bottom');
?>

<?php foto_page_title(); ?>

<div class="concept-9 owl-carousel-layout nopadding-bottom clearfix" style="margin: <?php if(!empty($foto_content_padding_top)) { echo sanitize_text_field( $foto_content_padding_top ); ?>px <?php } else { echo "0px "; } ?>0px <?php if(!empty($foto_content_padding_bottom)) { echo sanitize_text_field( $foto_content_padding_bottom ); ?>px<?php } else { echo "0px"; } ?>;">
	<?php foto_concept_layout_acf_top(); ?>

	<!-- GALLERY START
	============================================= -->
	<div class="carousel-wrap-layout">

	<?php $foto_album_post_list = get_field('album_post_list', false, false);
	$foto_concept_9_args = array(
	'post_type'			=> 'foto-gallery',
	'post__in'          => $foto_album_post_list,
	);

	$foto_concept_9_loop = new WP_Query($foto_concept_9_args);
	if ($foto_concept_9_loop->have_posts()) : while($foto_concept_9_loop->have_posts()) : $foto_concept_9_loop->the_post();

	$concept_9_thumb = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full'); 
	$foto_carousel_img = aq_resize($concept_9_thumb[0],  $foto_album_image_width , $foto_album_image_height, true); ?>

		<div class="concept-9-item owl-carousel-layout-item">
			<a href="<?php the_permalink(); ?>">
				<img src="<?php echo esc_url( $foto_carousel_img ); ?>" alt="<?php the_title(); ?>">
				<div class="gallery-overlay">
					<h3><?php the_title(); ?></h3>
				</div>
			</a>
		</div>

	<?php endwhile; wp_reset_postdata(); endif; ?>
	</div>
	<!-- GALLERY END -->
	<?php foto_concept_layout_acf_bottom(); ?>
</div>
<script>
	jQuery(document).ready(function() {
	var owl = jQuery('.carousel-wrap-layout');
		owl.owlCarousel({
		    center: true,
		    loop:true,
		    dots: false,
		    margin:25,
		    navText: [
              "<i class='foto-ios-arrow-thin-left'></i>",
              "<i class='foto-ios-arrow-thin-right'></i>"
              ],
		    responsive:{
		        0:{
		            items:1,
		            nav:true
		        },
		        600:{
		            items:2,
		            nav:false
		        },
		        1000:{
		            items: <?php echo sanitize_text_field($foto_concept_carousel_column); ?>,
		            nav:true
		        }
		    }
		});
	});
</script>

<?php foto_footer_page(); ?>