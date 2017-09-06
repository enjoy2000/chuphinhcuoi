<?php 
while ( have_posts() ) : the_post();

$gallery_type		=	get_field('gallery_type');

if($gallery_type == 'samsunggridGallery') {
get_header('noloader');
}
else {
	foto_header_menu_page();
}

?>

<div id="content" class="single-gallery clearfix">

<?php
//title
$foto_allow_gallery_title	= get_field('use_concept_title');
$foto_gallery_subtitle		= get_field('page_subtitle');
$foto_title_align_choice	= get_field('title_align_choice');
$foto_the_title_background	= get_field('the_title_background');
$foto_the_title_color		= get_field('the_title_color');
$foto_album_author			= get_field('album_author');

//padding & margin
$foto_title_wrap_padding_top	= get_field('title_wrap_padding_top');
$foto_title_wrap_padding_bottom	= get_field('title_wrap_padding_bottom');
$foto_content_padding_top		= get_field('content_padding_top');
$foto_content_padding_bottom	= get_field('content_padding_bottom');
?>

	<?php if($foto_allow_gallery_title == true && $gallery_type != 'fullsliderGallery' && $gallery_type != 'sliderinfogallery') { ?>
	<div class="page-title" style="<?php if(!empty($foto_the_title_background)) { ?>background-image: url(<?php echo esc_url( $foto_the_title_background ); ?>); <?php } ?>padding: <?php if(!empty($foto_title_wrap_padding_top)) { echo sanitize_text_field( $foto_title_wrap_padding_top ); ?>px <?php } else { echo "0px "; } ?>0px <?php if(!empty($foto_title_wrap_padding_bottom)) { echo sanitize_text_field( $foto_title_wrap_padding_bottom ); ?>px<?php } else { echo "0px"; } ?>;">
		<div class="container">
			<div class="title-wrap" style="color: <?php echo esc_html( $foto_the_title_color ); ?>; text-align: <?php echo sanitize_text_field( $foto_title_align_choice ); ?>;">
				<h2 class="wow fadeInUp" data-wow-delay="0.5s"><?php the_title(); ?></h2>
				<?php if(!empty($foto_gallery_subtitle)) { ?>
					<span class="subtitle-album wow fadeIn" data-wow-delay="0.7s"><?php echo sanitize_text_field( $foto_gallery_subtitle ); ?></span>
				<?php }
				if(!empty($foto_album_author)) { ?>
				<div class="title-content">
					<cite style="color: <?php echo esc_html( $foto_the_title_color ); ?>;">
						<?php echo sanitize_text_field( $foto_album_author ); ?>
					</cite>
				</div>
				<?php } ?>
			</div>
		</div>
	</div>
	<?php } ?>

	<?php
	if ( post_password_required() ) { ?>
	<div class="container">
		<?php echo get_the_password_form(); ?>
	</div>
	<?php }
	else { ?>

	<div class="single-gallery-wrap" style="margin: <?php if(!empty($foto_content_padding_top)) { echo sanitize_text_field( $foto_content_padding_top ); ?>px <?php } else { echo "0px "; } ?>0px <?php if(!empty($foto_content_padding_bottom)) { echo sanitize_text_field( $foto_content_padding_bottom ); ?>px<?php } else { echo "0px"; } ?>;">

	<?php if($gallery_type != 'fullsliderGallery' && $gallery_type != 'sliderinfogallery') { ?>
	<?php foto_page_layout_acf_top(); ?>

		<div class="gallery-inner-content">
		<?php the_content(); } ?>
		</div>

		<script>window.galleryImages = JSON.parse('<?php echo json_encode(get_field('gallery_images')) ?>');</script>

		<?php if($gallery_type == 'defaultGallery') {
			get_template_part( 'inc/part/gallery', 'mansonry' ); 
		}

		elseif($gallery_type == 'polaroidGallery') {
			get_template_part( 'inc/part/gallery', 'polaroid' ); 
		} 

		elseif($gallery_type == 'isogridGallery') {
			get_template_part( 'inc/part/gallery', 'isogrid' ); 
		} 

		elseif($gallery_type == 'isomasonryGallery') {
			get_template_part( 'inc/part/gallery', 'isomasonry' ); 
		}

		elseif($gallery_type == 'samsunggridGallery') {
			get_template_part( 'inc/part/gallery', 'samsunggrid' ); 
		}

		elseif($gallery_type == 'carouselGallery') {
			get_template_part( 'inc/part/gallery', 'carousel' ); 
		}

		elseif($gallery_type == 'gridexpandGallery') {
			get_template_part( 'inc/part/gallery', 'gridexpand' ); 
		}

		elseif($gallery_type == 'fullsliderGallery') {
			get_template_part( 'inc/part/gallery', 'fullslider' ); 
		}

		elseif($gallery_type == 'svggridgallery') {
			get_template_part( 'inc/part/gallery', 'svggrid' ); 
		}

		elseif($gallery_type == 'polargridgallery') {
			get_template_part( 'inc/part/gallery', 'polariodgrid' ); 
		}

		elseif($gallery_type == 'sliderinfogallery') {
			get_template_part( 'inc/part/gallery', 'sliderinfo' ); 
		}

		elseif($gallery_type == 'listgallery') {
			get_template_part( 'inc/part/gallery', 'list' ); 
		} ?>

		<?php if($gallery_type != 'fullsliderGallery' && $gallery_type != 'sliderinfogallery') { ?>
		<?php foto_page_layout_acf_bottom(); } ?>

	</div>

	<?php } ?>
</div>

<?php

foto_footer_page();
endwhile; // end of the loop.  ?>