<?php

$foto_gallery_images	= get_field('gallery_images');
$foto_gallery_swap_effect	= get_field('gallery_swap_effect');

?>

<?php if( $foto_gallery_images){ ?>
<div class="concept-8 clearfix">
	<div class="container">
		<div class="row">

			<!-- GALLERY START
			============================================= -->
			<section class="grid-wrap-concept8">
				<ul class="grid-concept8 single-gallery <?php echo sanitize_text_field( $foto_gallery_swap_effect ); ?>" id="grid-concept8">

					<?php foreach( $foto_gallery_images as $foto_image ):
					$attachment_id = $foto_image['ID'];
					$foto_name = $foto_image['title'];

					//$team_img1 = aq_resize($foto_image['url'],  320 , 240, true);
					?>

						<li>
							<a href="<?php echo esc_url( $foto_image['url'] ); ?>" title="<?php echo sanitize_text_field( $foto_name ); ?>">
								<img src="<?php echo esc_url( $foto_image['url'] ); ?>" alt="<?php echo esc_attr( $foto_image['alt'] ); ?>"/>
								<h3><?php echo sanitize_text_field( $foto_name ); ?></h3>
							</a>
						</li>

					<?php endforeach; ?>
				</ul>
			</section>
			<!-- GALLERY END -->

		</div>
	</div>
	<script type="text/javascript">
		jQuery(window).load(function(){
			jQuery('.grid-wrap-concept8 .single-gallery').magnificPopup({
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
</div>
<?php } ?>