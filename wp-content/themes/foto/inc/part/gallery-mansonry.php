<?php

$foto_gallery_images		= get_field('gallery_images');
?>

<div class="album-2">
	
	<div class="grid">

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
		<div class="grid__item" data-size="1280x857">
			<a href="<?php echo esc_url( $foto_image['url'] ); ?>" class="img-wrap">
			<img src="<?php echo esc_url( $foto_image['url'] ); ?>" alt="<?php echo esc_attr( $foto_image['alt'] ); ?>" />
				<div class="description description--grid">
					<h3><?php echo sanitize_text_field( $foto_name ); ?></h3>
					<?php if(!empty($foto_caption)) { ?>
					<div class="caption-gallery"><?php echo balancetags( $foto_caption ); ?></div>
					<?php } ?>
					<div class="details">
						<ul>
							<li><i class="icon icon-camera"></i><span><?php echo sanitize_text_field( $foto_image_camera ); ?></span></li>
							<li><i class="icon icon-focal_length"></i><span><?php echo sanitize_text_field( $foto_image_focal_length ); ?></span></li>
							<li><i class="icon icon-aperture"></i><span>&fnof;<?php echo sanitize_text_field( $foto_image_aperture ); ?></span></li>
							<li><i class="icon icon-exposure_time"></i><span><?php echo sanitize_text_field( $foto_image_shutter_speed ); ?></span></li>
							<li><i class="icon icon-iso"></i><span><?php echo sanitize_text_field( $foto_image_iso ); ?></span></li>
						</ul>
					</div>
				</div>
			</a>
		</div>
		<?php endforeach; ?>

		<?php } ?>
		
	</div>
	<div class="preview">
		<button class="action action--close"><i class="fa fa-times"></i><span class="text-hidden"><?php esc_html_e( 'Close', 'foto' ); ?></span></button>
		<div class="description description--preview"></div>
	</div>

</div>