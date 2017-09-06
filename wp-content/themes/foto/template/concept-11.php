<?php get_header('noloader'); 

/*
Template Name: Concept Grid Image Flip
*/

$foto_content_padding_top       = get_field('content_padding_top');
$foto_content_padding_bottom    = get_field('content_padding_bottom');

?>

<?php foto_page_title(); ?>

<div class="isolayer isolayer--scroll1 isolayer--shadow" style="<?php if(!empty($foto_content_padding_top)) { echo sanitize_text_field( $foto_content_padding_top ); ?>px <?php } else { echo "0px "; } ?>0px <?php if(!empty($foto_content_padding_bottom)) { echo sanitize_text_field( $foto_content_padding_bottom ); ?>px<?php } else { echo "0px"; } ?>;">
	<ul class="grid-isometric grid--effect-flip">

		<?php $foto_album_post_list = get_field('album_post_list', false, false);
		$foto_concept_11_args = array(
		'post_type'			=> 'foto-gallery',
        'post__in'          => $foto_album_post_list,
		);

		$foto_concept_11_loop = new WP_Query($foto_concept_11_args);
		if ($foto_concept_11_loop->have_posts()) : while($foto_concept_11_loop->have_posts()) : $foto_concept_11_loop->the_post();

		$concept_11_thumb = wp_get_attachment_image_src( get_post_thumbnail_id(), 'foto-concept-11');
		$foto_gallery_images = get_field('gallery_images'); ?>

		<li class="grid__item">
			<a class="grid__link" href="<?php the_permalink(); ?>">
				<img class="grid__img layer" src="<?php echo esc_url( $concept_11_thumb[0] ); ?>" alt="a" />

				<?php if( $foto_gallery_images){
				$foto_concept_11_1 = aq_resize($foto_gallery_images[0]['url'],  270 , 203, true);
				$foto_concept_11_2 = aq_resize($foto_gallery_images[1]['url'],  270 , 203, true);
				$foto_name1 = $foto_gallery_images[0]['title'];
				$foto_name2 = $foto_gallery_images[1]['title']; ?>
				<img class="grid__img layer" src="<?php echo esc_url( $foto_concept_11_1 ); ?>" alt="<?php echo sanitize_text_field( $foto_name1 ); ?>" />
				<img class="grid__img layer" src="<?php echo esc_url( $foto_concept_11_2 ); ?>" alt="<?php echo sanitize_text_field( $foto_name2 ); ?>" />
				<?php } ?>
				<span class="grid__title"><?php the_title(); ?></span>
			</a>
		</li>
		<?php endwhile; wp_reset_postdata(); endif; ?>
	</ul>
</div>

<?php get_footer('null'); ?>