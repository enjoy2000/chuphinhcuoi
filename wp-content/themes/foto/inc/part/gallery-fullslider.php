<?php 

$foto_gallery_subtitle	= get_field('page_subtitle');
$foto_gallery_images	= get_field('gallery_images');
$foto_album_author		= get_field('album_author');

?>
<div class="concept-2 slider-gallery slit-demo-1">

	<div id="slider" class="sl-slider-wrapper">
		<div class="sl-slider">

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
		
			<div class="sl-slide bg-1" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
				<div class="sl-slide-inner">
					<div class="bg-img" style="background-image:url(<?php echo esc_url( $foto_image['url'] ); ?>);"></div>
					
					<div class="view-album">
						<a href="<?php echo esc_url( $foto_image['url'] ); ?>" title="<?php echo sanitize_text_field( $foto_name ); ?>"><?php esc_html_e( 'View Image', 'foto' ); ?></a>
					</div>
					<h2><?php echo sanitize_text_field( $foto_name ); ?></h2>
					<blockquote>
						<?php if(!empty($foto_caption)) { ?>
						<p class="caption-gallery"><?php echo balancetags( $foto_caption ); ?></p>
						<?php } ?>
						<?php if(!empty($foto_album_author)) { ?>
						<cite><?php echo sanitize_text_field( $foto_album_author ); ?></cite>
						<?php } ?>
					</blockquote>
				</div>
			</div>

			<?php endforeach; ?>
			<?php } ?>

		</div><!-- /sl-slider -->
		
		<nav id="nav-arrows" class="nav-arrows">
			<span class="nav-arrow-prev"><?php esc_html_e( 'Previous', 'foto' ); ?></span>
			<span class="nav-arrow-next"><?php esc_html_e( 'Next', 'foto' ); ?></span>
		</nav>

		<script type="text/javascript">
			jQuery(window).load(function(){

				jQuery('.slider-gallery').magnificPopup({
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

	</div><!-- /slider-wrapper -->
</div>
	<!-- CONTENT END -->