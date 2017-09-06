<?php

$foto_gallery_images		= get_field('gallery_images');

$foto_gallery_column		= get_field('gallery_column');
$foto_gallery_with_space	= get_field('gallery_with_space');

?>

<div class="gallery-isomasonry<?php if($foto_gallery_with_space == true) { ?> with-space<?php } ?> clearfix">

	<!-- GALLERY START
	============================================= -->
	<div id="gall-sec" class="gallery-section clearfix">
		<?php if( $foto_gallery_images){ ?>

			<?php foreach( $foto_gallery_images as $foto_image ):

			$attachment_id = $foto_image['ID'];
			$foto_name = $foto_image['title'];
			$foto_image_meta = wp_get_attachment_metadata( $attachment_id );
			$foto_image_deep_meta = $foto_image_meta['image_meta'];
			/*metadata*/
			$foto_image_camera = $foto_image_deep_meta['camera'];
			$foto_image_iso = $foto_image_deep_meta['iso'];
			$foto_image_focal_length = $foto_image_deep_meta['focal_length'];
			$foto_image_aperture = $foto_image_deep_meta['aperture'];
			$foto_image_shutter_speed = $foto_image_deep_meta['shutter_speed'];
		?>
			
		<div class="gallery-item column <?php echo sanitize_text_field( $foto_gallery_column ); ?> <?php echo esc_attr( $foto_image['alt'] ); ?>">
			<a class="image-link tooltip-item chocolat-image wow fadein" title="<?php echo sanitize_text_field( $foto_name ); ?>" href="<?php echo esc_url( $foto_image['url'] ); ?>">
				<div class="image" style="max-height: 100%;">
					<img src="<?php echo esc_url( $foto_image['url'] ); ?>" alt="<?php echo esc_attr( $foto_name ); ?>"/>
					<div class="gallery-overlay">
						<div class="gallery-info">
							<h4><?php echo sanitize_text_field( $foto_name ); ?></h4>
						</div>
					</div>
				</div>
			</a>
		</div>

		<?php endforeach; ?>
		<?php } ?>

	</div>
	<!-- GALLERY END -->

	<?php if($foto_gallery_with_space == false) { ?>
	<script type="text/javascript">
	jQuery(window).load(function(){

		var galitemWidth = jQuery('.gallery-item').width();
		var galitemHeight = jQuery('.gallery-item').height();
		jQuery(".gallery-item.wide").css('width', galitemWidth * 2);
		jQuery(".gallery-item.wide").css('height', galitemHeight);
		jQuery(".gallery-item.height").css('height', galitemHeight * 2);
	});
	</script>
	<?php }
	else { ?>
	<script type="text/javascript">
	jQuery(window).load(function(){

		var galitemWidth = jQuery('.gallery-item').width();
		var galitemHeight = jQuery('.gallery-item').height();
		jQuery(".gallery-item.wide").css('width', galitemWidth * 2 + 10);
		jQuery(".gallery-item.wide").css('height', galitemHeight);
		jQuery(".gallery-item.height").css('height', galitemHeight * 2 + 10);
	});
	</script>
	<?php } ?>
	<script>
	jQuery(window).load(function(){
		jQuery('.gallery-section').masonry({
		  itemSelector: '.gallery-item',
		});
	});
    jQuery(function(){
        jQuery('#gall-sec').Chocolat({
            imageSize: 'contain'
        });
    });
    jQuery(document).on('mouseover', '.gallery-item', function(e) {
		jQuery('.gallery-item').stop().animate({ opacity: "0.5" }, 'slow');
		jQuery(this).stop().animate({ opacity: "1" }, 'slow');
	});	
		
	jQuery(document).on('mouseleave', '.gallery-item', function(e) {
		jQuery('.gallery-item').stop().animate({ opacity: "1" }, 'slow');
	});
	</script>
</div>