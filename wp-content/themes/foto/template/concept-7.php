<?php foto_header_menu_page();

/*
Template Name: Concept Album Masonry
*/

$foto_select_column = get_field('select_column');
$foto_with_space	= get_field('with_space');

$foto_content_padding_top       = get_field('content_padding_top');
$foto_content_padding_bottom    = get_field('content_padding_bottom');

?>

<?php foto_page_title(); ?>

<div class="concept-7 concept-masonry-iso clearfix <?php if($foto_with_space == true) { ?>with-space<?php } ?>" style="margin: <?php if(!empty($foto_content_padding_top)) { echo sanitize_text_field( $foto_content_padding_top ); ?>px <?php } else { echo "0px "; } ?>0px <?php if(!empty($foto_content_padding_bottom)) { echo sanitize_text_field( $foto_content_padding_bottom ); ?>px<?php } else { echo "0px"; } ?>;">

	<?php foto_concept_layout_acf_top(); ?>

			<!-- GALLERY START
			============================================= -->
			<div id="iso-man" class="gallery-section clearfix">
				<?php $foto_album_post_list = get_field('album_post_list', false, false);
				$foto_concept_7_args = array(
				'post_type'			=> 'foto-gallery',
        		'post__in'          => $foto_album_post_list,
				);

				$foto_concept_7_loop = new WP_Query($foto_concept_7_args);
				if ($foto_concept_7_loop->have_posts()) : while($foto_concept_7_loop->have_posts()) : $foto_concept_7_loop->the_post(); ?>
					
				<div class="gallery-item column <?php echo sanitize_text_field( $foto_select_column ); ?>">
					<div class="wow fadeIn">
						<a class="image-link" title="<?php esc_html_e( 'Gallery', 'foto' ); ?>" href="<?php the_permalink(); ?>">
							<div class="image">
								<?php the_post_thumbnail(); ?>
								<div class="gallery-overlay">
									<div class="gallery-info">
										<h4><?php the_title(); ?></h4>
									</div>
								</div>
							</div>
						</a>
					</div>
				</div>

				<?php endwhile; wp_reset_postdata(); endif; ?>
			</div>
			<!-- GALLERY END -->

	<?php foto_concept_layout_acf_bottom(); ?>

	<script type="text/javascript">
	jQuery(window).load(function(){
		var jQuerycontainer = jQuery('.gallery-section');
		
		jQuerycontainer.masonry({
		  itemSelector: '.gallery-item',
		});

		jQuery(window).resize(function() {
			jQuerycontainer.masonry('layout');
		});
	});
	</script>
</div>

<?php foto_footer_page(); ?>