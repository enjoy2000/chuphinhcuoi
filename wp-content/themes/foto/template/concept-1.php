<?php foto_header_menu_page();

/*
Template Name: Concept Slider Stack
*/


$foto_content_padding_top       = get_field('content_padding_top');
$foto_content_padding_bottom    = get_field('content_padding_bottom');

?>

<!-- CONTENT START
============================================= -->

<!-- Concept Title -->
<?php foto_page_title(); ?>

<section class="stack-1 full-height" style="margin: <?php if(!empty($foto_content_padding_top)) { echo sanitize_text_field( $foto_content_padding_top ); ?>px <?php } else { echo "0px "; } ?>0px <?php if(!empty($foto_content_padding_bottom)) { echo sanitize_text_field( $foto_content_padding_bottom ); ?>px<?php } else { echo "0px"; } ?>;">
    <div class="stack-slider">
        <div class="stacks-wrapper">

        <?php $foto_album_post_list = get_field('album_post_list', false, false);
        $foto_concept1_args = array(
			'post_type'          => 'foto-gallery',
			'post_status'        => 'publish',
			'posts_per_page' 	 => -1,
            'post__in'          => $foto_album_post_list,

			);
			$foto_concept1_loop = new WP_Query($foto_concept1_args);
			if ($foto_concept1_loop->have_posts()) : while($foto_concept1_loop->have_posts()) : $foto_concept1_loop->the_post();

			$foto_gallery_images = get_field('gallery_images');
            $foto_album_author = get_field('album_author');

			?>

           <div class="stack chocolat-parent" data-chocolat-title="<?php the_title(); ?>">

                <h2 class="stack-title">
                    <a href="#" data-text="<?php echo sanitize_text_field( $foto_album_author ); ?>">
                        <span><?php the_title(); ?></span>
                    </a>
                </h2>

                <div class="gallery-album">
                    <div class="img">
                        <?php the_post_thumbnail('foto-concept-1'); ?>
                    </div>
                </div>

                <?php if( $foto_gallery_images){
				foreach( $foto_gallery_images as $foto_image ):						

				$attachment_id = $foto_image['ID'];
				$foto_name = $foto_image['title'];
				$foto_caption = $foto_image['caption'];
				$foto_alt = $foto_image['alt']; 
				$foto_image_meta = wp_get_attachment_metadata( $attachment_id );
				$foto_image_deep_meta = $foto_image_meta['image_meta'];
                /*metadata*/
				$foto_image_camera = $foto_image_deep_meta['camera'];
                $foto_image_iso = $foto_image_deep_meta['iso'];
                $foto_image_focal_length = $foto_image_deep_meta['focal_length'];
                $foto_image_aperture = $foto_image_deep_meta['aperture'];
                $foto_image_shutter_speed = $foto_image_deep_meta['shutter_speed'];

				$con1img = aq_resize($foto_image['url'],  602 , 401, true);
				?>
            
                <div class="item">
                    <div class="item__content">
                        <a class="chocolat-image" href="<?php echo esc_url( $foto_image['url'] ); ?>" title="<?php echo sanitize_text_field( $foto_name ); ?>">
                            <img src="<?php echo esc_url( $con1img ); ?>" alt="<?php echo esc_attr( $foto_alt ); ?>" />
                        </a>

                        <h3 class="item__title"><?php echo sanitize_text_field( $foto_name ); ?>
                            <span class="item__date"><?php echo balancetags( $foto_caption ); ?></span>
                        </h3>

                        <div class="item__details">
                            <ul>
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
                    </div>
                </div>                       
				<?php endforeach; } ?>

            </div>

            <?php endwhile; wp_reset_postdata(); endif; ?>

        </div>
        <!-- /stacks-wrapper -->
    </div>
    <!-- /stacks -->
    
</section>
<!-- CONTENT END -->


<?php foto_footer_page(); ?>