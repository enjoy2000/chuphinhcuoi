<?php 

$foto_gallery_images		= get_field('gallery_images');

$foto_gallery_column		= get_field('gallery_column');
$foto_gallery_with_space	= get_field('gallery_with_space');

?>

<div class="gallery-isogrid<?php if($foto_gallery_with_space == true) { ?> with-space<?php } ?> clearfix">

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

			
			$foto_isogrid_img = aq_resize($foto_image['url'], 940, 705, false);
		?>
			
		<div class="gallery-item column <?php echo sanitize_text_field( $foto_gallery_column ); ?>">
			<a class="image-link chocolat-image wow fadeIn" title="<?php echo sanitize_text_field( $foto_name ); ?>" href="<?php echo esc_url( $foto_image['url'] ); ?>">
				<div class="image">
					<img src="<?php echo esc_url( $foto_isogrid_img ); ?>" alt="<?php echo esc_attr( $foto_image['alt'] ); ?>"/>
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

	<script type="text/javascript">
	jQuery(window).load(function(){
		jQuery('.gallery-section').masonry({
		  itemSelector: '.gallery-item',
		});
	});
	</script>
	<script>
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