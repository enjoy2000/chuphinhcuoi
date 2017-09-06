<?php 

$foto_gallery_images		= get_field('gallery_images');

$foto_carousel_column			= get_field('carousel_column');
$foto_carousel_images_width		= get_field('carousel_images_width');
$foto_carousel_images_height	= get_field('carousel_images_height');

?>

<div class="owl-carousel-layout nopadding-bottom clearfix">

	<!-- GALLERY START
	============================================= -->
	<div class="carousel-wrap-layout">

	<?php if( $foto_gallery_images){ ?>
	<?php foreach( $foto_gallery_images as $foto_image ):

	$attachment_id = $foto_image['ID'];
	$foto_name = $foto_image['title'];
	$caption = $foto_image['caption'];
	$alt = $foto_image['alt']; 

	$foto_carousel_img = aq_resize($foto_image['url'],  $foto_carousel_images_width , $foto_carousel_images_height, true);
	?>

	<div class="owl-carousel-layout-item">
		<a class="chocolat-image" href="<?php echo esc_url( $foto_image['url'] ); ?>" title="<?php echo sanitize_text_field( $foto_name ); ?>">
			<div class="image">
				<img src="<?php echo esc_url( $foto_carousel_img ); ?>" alt="<?php echo esc_attr( $foto_image['alt'] ); ?>"/>
			</div>
			<div class="gallery-overlay">
				<h4><?php echo sanitize_text_field($foto_name); ?></h4>
			</div>
		</a>
	</div>

	<?php endforeach; } ?>
	</div>
	<!-- GALLERY END -->

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
		            items: <?php echo sanitize_text_field($foto_carousel_column); ?>,
		            nav:true
		        }
		    }
		});
	});
    jQuery(function(){
        jQuery('.carousel-wrap-layout').Chocolat({
            imageSize: 'contain'
        });
    });
</script>