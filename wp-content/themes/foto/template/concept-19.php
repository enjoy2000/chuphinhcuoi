<?php foto_header_menu_page(); 

/*
Template Name: Concept Polaroid Grid
*/
while ( have_posts() ) : the_post();

$foto_select_column = get_field('select_column');
$foto_with_space	= get_field('with_space');

$foto_content_padding_top       = get_field('content_padding_top');
$foto_content_padding_bottom    = get_field('content_padding_bottom');

?>

<div class="gallery-polaroid-grid<?php if($foto_with_space == true) { ?> with-space<?php } ?> clearfix">

<?php foto_page_title(); ?>

<div id="iso-grid" class="gallery-section polaroid-grid clearfix" style="margin: <?php if(!empty($foto_content_padding_top)) { echo sanitize_text_field( $foto_content_padding_top ); ?>px <?php } else { echo "0px "; } ?>0px <?php if(!empty($foto_content_padding_bottom)) { echo sanitize_text_field( $foto_content_padding_bottom ); ?>px<?php } else { echo "0px"; } ?>;">
	<?php foto_concept_layout_acf_top(); ?>

	<?php $foto_album_post_list = get_field('album_post_list', false, false);
	$foto_concept_19_args = array(
	'post_type'			=> 'foto-gallery',
    'post__in'          => $foto_album_post_list,
	);

	$foto_concept_19_loop = new WP_Query($foto_concept_19_args);
	if ($foto_concept_19_loop->have_posts()) : while($foto_concept_19_loop->have_posts()) : $foto_concept_19_loop->the_post();

	$foto_gallery_subtitle		= get_field('page_subtitle');

	$foto_trimmed = wp_trim_words( $foto_gallery_subtitle, $num_words = 5, $more = null ); ?>
		
	<div class="gallery-item column <?php echo sanitize_text_field( $foto_select_column ); ?>">
		<div class="border-wrap wow fadeIn">
			<a class="image-link" title="<?php esc_html_e( 'Gallery', 'foto' ); ?>" href="<?php the_permalink(); ?>">
				<div class="image">
					<?php the_post_thumbnail('foto-concept-6'); ?>
				</div>
				<div class="gallery-info">
					<h4><?php the_title(); ?></h4>
					<?php if(!empty($foto_gallery_subtitle)) { ?>
						<p class="caption"><?php echo balancetags($foto_trimmed); ?></p>
					<?php } ?>
				</div>
			</a>
		</div>
	</div>

	<?php endwhile; wp_reset_postdata(); endif; ?>

	<?php foto_concept_layout_acf_bottom(); ?>
</div>

<?php 
endwhile; // end of the loop.

foto_footer_page(); ?>