<?php

$foto_gallery_images		= get_field('gallery_images');
?>

<div class="gallery-polaroid">

	<?php if( $foto_gallery_images){ ?>
	<section id="photostack-3" class="photostack">
		<div class="photostack-wrapper">

			<?php foreach( $foto_gallery_images as $foto_image ):
			$attachment_id = $foto_image['ID'];
			$foto_name = $foto_image['title'];
			$caption = $foto_image['caption'];
			$foto_image_meta = wp_get_attachment_metadata( $attachment_id );
			$foto_image_deep_meta = $foto_image_meta['image_meta'];
			/*metadata*/
			$foto_image_camera = $foto_image_deep_meta['camera'];
			$foto_image_iso = $foto_image_deep_meta['iso'];
			$foto_image_focal_length = $foto_image_deep_meta['focal_length'];
			$foto_image_aperture = $foto_image_deep_meta['aperture'];
			$foto_image_shutter_speed = $foto_image_deep_meta['shutter_speed'];

			$foto_paraloid_img = aq_resize($foto_image['url'],  320 , 340, true);
			?>
			<figure>
				<a href="<?php echo esc_url( $foto_image['url'] ); ?>" class="photostack-img"><img src="<?php echo esc_url( $foto_paraloid_img ); ?>" alt="<?php echo esc_attr( $foto_image['alt'] ); ?>"/></a>
				<figcaption>
					<h2 class="photostack-title"><?php echo sanitize_text_field( $foto_name ); ?></h2>
					<div class="photostack-back">
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
				</figcaption>
			</figure>
			<?php endforeach; ?>

		</div>
	</section>
	<script type="text/javascript">

		jQuery(window).load(function(){

			jQuery('.photostack').magnificPopup({
	        delegate: 'a',
	        type: 'image',
	        tLoading: 'Loading image #%curr%...',
	        mainClass: 'mfp-img-mobile',
	        gallery: {
	          enabled: true,
	          navigateByImgClick: true,
	          preload: [0,1] // Will preload 0 - before current, and 1 after the current image
	        },
	        image: {
	          tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
	          
	        }
	      });

		});
	</script>
	<?php } ?>
</div>