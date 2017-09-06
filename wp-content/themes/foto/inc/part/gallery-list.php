<?php 

$foto_gallery_images		= get_field('gallery_images');
$foto_album_author			= get_field('album_author');

$foto_adaptive_background	= get_field('adaptive_background');

?>
<div class="gallery-list clearfix">

	<ul class="lists-gallery">

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
	?>

	<li class="list-gallery<?php if($foto_adaptive_background == false) { ?> normal-background<?php } ?>">
		<a class="image-link chocolat-image" title="<?php echo sanitize_text_field( $foto_name ); ?>" href="<?php echo esc_url( $foto_image['url'] ); ?>">
		<img src="<?php echo esc_url( $foto_image['url'] ); ?>" alt="<?php echo esc_attr( $foto_image['alt'] ); ?>" data-adaptive-background />
		</a>
		<div class="list-gallery-content clearfix">
			<div class="container">
				<div class="gallery-content">
					<h2 class="title">
						<?php echo sanitize_text_field( $foto_name ); ?>
					</h2>
					<p class="caption"><?php echo balancetags( $foto_caption ); ?></p>
				</div>
				<?php if(!empty($foto_image_camera) || !empty($foto_image_focal_length) || !empty($foto_image_aperture) || $foto_image_shutter_speed || !empty($foto_image_iso) ) { ?>
				<div class="gallery-details">
					<ul>
						<li class="album-author"><i class="fa fa-user"></i><span><?php echo sanitize_text_field( $foto_album_author ); ?></span></li>
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
		</div><!-- list gallery content end -->
	</li>

	<?php endforeach; ?>
	<?php } ?>

	</ul>

	<?php if($foto_adaptive_background == true) { ?>
	<script type="text/javascript">
	jQuery(function(){
        jQuery('.list-gallery').Chocolat({
            imageSize: 'contain'
        });
    });
	(function($) {
	'use strict'; 
		$(document).ready(function(){
		  $.adaptiveBackground.run({
		  	parent: '.list-gallery'
		  });
		});

		$( ".list-gallery img" ).hover(
		  function() {
		    $( '.list-gallery .expander-image' ).toggleClass( 'active' );
		  }
		);
		$( ".list-gallery .expander-image" ).hover(
		  function() {
		    $( '.list-gallery .expander-image' ).toggleClass( 'active' );
		  }
		);
	})(jQuery); 
	</script>
	<?php } ?> <!-- adaptive background script -->

</div>