<?php foto_header_menu_page();

/*
Template Name: Concept Multi Scroll
*/

?>

<div id="myContainer" class="concept-10">

	<div class="ms-left">

		<?php $foto_album_post_list = get_field('album_post_list', false, false);
		$foto_concept10_args = array(
		'post_type'			=> 'foto-gallery',
		'post_status'		=> 'publish',
        'post__in'          => $foto_album_post_list,
		);

		$counter = 0;
		$foto_concept10_loop = new WP_Query($foto_concept10_args);
		if ($foto_concept10_loop->have_posts()) : while($foto_concept10_loop->have_posts()) : $foto_concept10_loop->the_post(); $counter++;
		if( $counter % 2 == 0 ) :

		$foto_album_author = get_field('album_author');
		$foto_gallery_subtitle	= get_field('page_subtitle');
		$concept_1_10_thumb = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full'); ?>

			<div class="ms-section" id="left1" style="background-image:url(<?php echo esc_url( $concept_1_10_thumb['0'] ); ?>);">

				<div class="gallery-caption">
					<div class="concept-10-gallery-title">
						<h2><?php the_title(); ?></h2>
					</div>
					
					<div class="concept-10-gallery-content">
						<?php if(!empty($foto_gallery_subtitle)) { ?>
						<p><?php echo balancetags($foto_gallery_subtitle); ?></p>
						<?php } ?>
						<?php if(!empty($foto_album_author)) { ?>
						<cite class="album-author"><?php echo sanitize_text_field( $foto_album_author ); ?></cite>
					</div>
					
					<?php } ?>

					<div class="button-normal white">
						<a href="<?php the_permalink(); ?>" class="button"><?php esc_html_e( 'View Album', 'foto' ); ?></a>
					</div>
				</div>

				<div class="overlay"></div>
			</div>

		<?php endif;
		endwhile; wp_reset_postdata(); endif; ?>

	</div>
	
	<div class="ms-right">

	<?php $foto_album_post_list2 = get_field('album_post_list', false, false);
	$foto_concept10_args2 = array(
		'post_type'          => 'foto-gallery',
		'post_status'        => 'publish',
        'post__in'          => $foto_album_post_list2,

		);

		$counter = 0;
		$foto_concept10_loop2 = new WP_Query($foto_concept10_args2);
		if ($foto_concept10_loop2->have_posts()) : while($foto_concept10_loop2->have_posts()) : $foto_concept10_loop2->the_post(); $counter++;
		if( $counter % 2 !== 0 ) : 

		$foto_album_author = get_field('album_author');
		$concept_2_10_thumb = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full'); ?>

		<div class="ms-section" id="right1" style="background-image:url(<?php echo esc_url( $concept_2_10_thumb['0'] ); ?>);">
			<div class="gallery-caption">
				<div class="concept-10-gallery-title">
					<h2><?php the_title(); ?></h2>
				</div>
				
				<div class="concept-10-gallery-content">
					<?php if(!empty($foto_gallery_subtitle)) { ?>
						<p><?php echo balancetags($foto_gallery_subtitle); ?></p>
					<?php } ?>
					<?php if(!empty($foto_album_author)) { ?>
					<cite class="album-author"><?php echo sanitize_text_field( $foto_album_author ); ?></cite>
				</div>
				
				<?php } ?>

				<div class="button-normal white">
					<a href="<?php the_permalink(); ?>" class="button"><?php esc_html_e( 'View Album', 'foto' ); ?></a>
				</div>
			</div>

			<div class="overlay"></div>
		</div>

		<?php endif;
		endwhile; wp_reset_postdata(); endif; ?>

	</div>	
</div>

<script type="text/javascript">
	 jQuery(document).ready(function() {
	 		var screenHeight = jQuery(window).height();
	        var screenWidth = jQuery(window).width();
	        
	 		if(screenWidth > 768) {
			jQuery('#myContainer').multiscroll({
		        verticalCentered : true,
		        scrollingSpeed: 700,
		        easing: 'easeInQuart',
		        menu: false,
		        navigation: true,
		        navigationPosition: 'right',
		        loopBottom: true,
		        loopTop: true,
		        css3: false,
		        paddingTop: 0,
		        paddingBottom: 0,
		        normalScrollElements: null,
		        keyboardScrolling: true,
		        touchSensitivity: 5,
		    });

			}; //screen 768 end
			function verticalCenterHeight() {
	            var screenHeight = jQuery(window).height();
	            var headerHeight = jQuery("#header").height();
	            var screenWidth = jQuery(window).width();

	            if( screenWidth < 769 ) {
	                jQuery(".ms-section").each(function() {
	                jQuery(this).css('height', screenHeight - headerHeight);
		            });
		            jQuery("body").parent().addClass('mobile');
		        }
	        } //verticalCenterHeight
	        window.onload = function() {
	          verticalCenterHeight();
	        };

	        window.onresize = function() {
	          verticalCenterHeight();
	        };
		});
	</script>

<?php get_footer('null'); ?>