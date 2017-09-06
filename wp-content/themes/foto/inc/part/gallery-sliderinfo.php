<?php 

$foto_gallery_subtitle	= get_field('page_subtitle');
$foto_gallery_images	= get_field('gallery_images');
$foto_album_author		= get_field('album_author');

?>
<div class="gallery-info-slide clearfix">

	<div class="gallery-slider-info">
		<div class="flexslider clearfix">
			<ul class="slides">

			<?php if( $foto_gallery_images){ 
				foreach( $foto_gallery_images as $foto_image ):

				$attachment_id = $foto_image['ID'];
				$foto_name = $foto_image['title'];
				$foto_caption = $foto_image['description'];
				$foto_image_meta = wp_get_attachment_metadata( $attachment_id );
				$foto_image_deep_meta = $foto_image_meta['image_meta'];
				/*metadata*/
				$foto_image_camera = $foto_image_deep_meta['camera'];
                $foto_image_iso = $foto_image_deep_meta['iso'];
                $foto_image_focal_length = $foto_image_deep_meta['focal_length'];
                $foto_image_aperture = $foto_image_deep_meta['aperture'];
                $foto_image_shutter_speed = $foto_image_deep_meta['shutter_speed'];
			?>

			<li class="full-height-slide" style="background-image:url(<?php echo esc_url( $foto_image['url'] ); ?>);">
				<div class="gallery-slider-content">
					<div class="content-text">
						<div class="info-content">
							<h2 class="album-title"><?php echo sanitize_text_field( $foto_name ); ?></h2>
							
							<p class="album-text"><?php echo balancetags( $foto_caption ); ?></p>
							
							<h5 class="gallery-author"><?php echo sanitize_text_field( $foto_album_author ); ?></h5>
						</div>
					</div>

					<?php if(!empty($foto_image_camera) || !empty($foto_image_focal_length) || !empty($foto_image_aperture) || $foto_image_shutter_speed || !empty($foto_image_iso) ) { ?>

					<div class="gallery-slider-details">

					<i class="info-icon foto foto-information"></i>

						<ul>
                            <?php if(!empty($foto_image_camera)) { ?>
                                <li><i class="icon icon-camera"></i><span><?php echo sanitize_text_field( $foto_image_camera ); ?></span></li>
                            <?php } 
                            if(!empty($foto_image_focal_length)) { ?>
                                <li><i class="icon icon-focal_length"></i><span><?php echo sanitize_text_field( $foto_image_focal_length ); ?></span></li>
                            <?php } 
                            if(!empty($foto_image_aperture)) { ?>
                                <li><i class="icon icon-aperture"></i><span><?php echo sanitize_text_field( $foto_image_aperture ); ?></span></li>
                            <?php } 
                            if(!empty($foto_image_shutter_speed)) { ?>
                                <li><i class="icon icon-exposure_time"></i><span><?php echo sanitize_text_field( $foto_image_shutter_speed ); ?></span></li>
                            <?php } 
                            if(!empty($foto_image_iso)) { ?>
                                <li><i class="icon icon-iso"></i><span><?php echo sanitize_text_field( $foto_image_iso ); ?></span></li>
                            <?php } ?>
                        </ul>
					</div>
					<?php } ?>
				</div>
			</li>
			<?php endforeach; ?>
			<?php } ?>
			<script type="text/javascript">
			jQuery(document).ready(function() { 
				jQuery(".gallery-slider-details .info-icon").on('click', function () {
					jQuery(".gallery-slider-details ul, .gallery-slider-details .info-icon").toggleClass('active');
		        });
			});
			
			</script>
			</ul>
		</div>
	</div>
	<!-- testimonial-slider end -->

	<script type="text/javascript">
	jQuery(window).load(function() { 

		BackgroundCheck.init({
			targets: '.logo.target, .menu.target, .header-social a, .foto-menu-mobile, .album-title, .album-text',
			images: '.full-height-slide'
		});
		BackgroundCheck.refresh();

		jQuery('.gallery-slider-info .flexslider').flexslider({
			animation: "fade",
			animationLoop: true,
	        animationSpeed: 1500,
	        slideshow: true,
	        pauseOnHover: true,
	        controlNav: false,
	        directionNav: true,
	        keyboard: true,
	        before: function(slider) {
		      BackgroundCheck.refresh();
		    },
	        after: function(slider) {
		      BackgroundCheck.refresh();
		    }
		});

		
	});

	jQuery(".gallery-slider-details .info-icon").on('click', function () {
			jQuery(".gallery-slider-detail ul").toggleClass('active');
        });
	</script>

</div>