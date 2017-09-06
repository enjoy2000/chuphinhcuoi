<?php 

$foto_gallery_images		= get_field('gallery_images');

?>

<div class="main clearfix">
	<ul id="og-grid" class="og-grid">

	<?php if( $foto_gallery_images){ ?>
	<?php foreach( $foto_gallery_images as $foto_image ):

	$attachment_id = $foto_image['ID'];
	$name = $foto_image['title'];
	$caption = $foto_image['caption'];
	$alt = $foto_image['alt']; 
	$foto_image_meta = wp_get_attachment_metadata( $attachment_id );
	$foto_image_deep_meta = $foto_image_meta['image_meta'];
	/*metadata*/
	$foto_image_camera = $foto_image_deep_meta['camera'];
	$foto_image_iso = $foto_image_deep_meta['iso'];
	$foto_image_focal_length = $foto_image_deep_meta['focal_length'];
	$foto_image_aperture = $foto_image_deep_meta['aperture'];
	$foto_image_shutter_speed = $foto_image_deep_meta['shutter_speed'];

	?>

	<li class="og-lists" style="width: 48%;">
		<a href="<?php echo esc_url( $foto_image['url'] ); ?>" data-largesrc="<?php echo esc_url( $foto_image['url'] ); ?>" data-title="<?php echo sanitize_text_field( $name ); ?>">
			<img src="<?php echo esc_url( $foto_image['url'] ); ?>" alt="<?php echo sanitize_text_field( $name ); ?>"/>
		</a>
	</li>

	<?php endforeach; } ?>

	</ul>
</div>