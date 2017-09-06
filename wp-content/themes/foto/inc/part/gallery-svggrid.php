<?php

$foto_gallery_images		= get_field('gallery_images');

?>

<div class="concept-5 single-svg-grid demo-1">
	<div id="grid" class="grid-svg clearfix">
		
		<?php if( $foto_gallery_images){ 
			foreach( $foto_gallery_images as $foto_image ):
			$attachment_id = $foto_image['ID'];
			$foto_name = $foto_image['title'];
			$foto_caption = $foto_image['caption'];
			$foto_image_meta = wp_get_attachment_metadata( $attachment_id );
			$foto_image_deep_meta = $foto_image_meta['image_meta'];
			/*metadata*/
			$foto_image_camera = $foto_image_deep_meta['camera'];
			$foto_image_iso = $foto_image_deep_meta['iso'];
			$foto_image_focal_length = $foto_image_deep_meta['focal_length'];
			$foto_image_aperture = $foto_image_deep_meta['aperture'];
			$foto_image_shutter_speed = $foto_image_deep_meta['shutter_speed'];
			$foto_svggrid_img = aq_resize($foto_image['url'],  475 , 825, true);
		?>

		<a href="<?php echo esc_url( $foto_image['url'] ); ?>" data-path-hover="m 180,34.57627 -180,0 L 0,0 180,0 z" title="<?php echo sanitize_text_field( $foto_name ); ?>">
			<figure>
				<img src="<?php echo esc_url( $foto_svggrid_img ); ?>" alt="<?php echo esc_attr( $foto_name ); ?>"/>
				<svg viewBox="0 0 180 320" preserveAspectRatio="none"><path d="M 180,160 0,218 0,0 180,0 z"/></svg>
				<figcaption>
					<h2><?php echo sanitize_text_field( $foto_name ); ?></h2>
					<?php if(!empty($foto_caption)) { ?>
						<p><?php echo balancetags( $foto_caption ); ?></p>
					<?php } ?>
					<button><?php esc_html_e( 'VIEW', 'foto' ); ?></button>
				</figcaption>
			</figure>
		</a>

		<?php endforeach; } ?>

	</div>
</div>
<script type="text/javascript">
	jQuery(window).load(function(){
		jQuery('.single-svg-grid .grid-svg').magnificPopup({
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