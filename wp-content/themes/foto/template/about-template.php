<?php foto_header_menu_page();

/*
Template Name: About Template
*/?>

<div id="content" class="about single-wrapper">

	<!-- Author Section -->
	<?php 
	$foto_use_author_section	= get_field('use_author_section');
	$foto_author_image			= get_field('author_image');
	$foto_author_name			= get_field('author_name');
	$foto_author_content		= get_field('author_content');
	$foto_author_signature		= get_field('author_signature');
	$foto_author_image_res		= aq_resize($foto_author_image,  300 , 300, true);
	?>

	<?php if($foto_use_author_section == true) { ?>
	<div class="author-section clearfix">
		<div class="container">

			<div class="author-image">
				<img src="<?php echo esc_url( $foto_author_image_res ); ?>" alt="<?php echo sanitize_text_field( $foto_author_name ); ?>">
			</div>

			<div class="author-detail">
				<div class="head-detail">
					<h5><?php the_title(); ?></h5>
					<?php if(!empty($foto_author_name)) { ?>
						<h2 class="section-title"><?php echo sanitize_text_field( $foto_author_name ); ?></h2>
					<?php } ?>
				</div>

				<?php if(!empty($foto_author_name)) { ?>
					<div class="body-detail">
						<?php echo balancetags( $foto_author_content ); ?>
					</div>
				<?php } ?>

				<?php if(!empty($foto_author_name)) { ?>
					<div class="signature">
						<img src="<?php echo esc_url( $foto_author_signature ); ?>" alt="<?php echo sanitize_text_field( $foto_author_name ); ?>">
					</div>
				<?php } ?>
			</div><!-- author-detail end -->

		</div><!-- container end -->
	</div>
	<?php } ?>
	<!-- author section end -->

	<!-- Client Section -->
	<?php 
	$foto_use_client_section	= get_field('use_client_section');
	$foto_client_title			= get_field('client_title');
	$foto_client_description	= get_field('client_description');
	$foto_client_posts_per_page	= get_field('client_posts_per_page');
	?>

	<?php if($foto_use_client_section == true) { ?>
	<div class="client-section clearfix">
		<div class="container">

			<div class="client-detail clearfix">
				<?php if(!empty($foto_client_title)) { ?>
					<h2 class="section-title"><?php echo sanitize_text_field( $foto_client_title ); ?></h2>
				<?php }

				if(!empty($foto_client_description)) { ?>
					<div class="body-detail">
						<?php echo balancetags( $foto_client_description ); ?>
					</div>
				<?php } ?>			
			</div>

			<div class="the-clients clearfix">

			<?php $client_about_args = array(
				'post_type'			=> 'foto-client',
				'post_status'		=> 'publish',
				'posts_per_page'	=> $foto_client_posts_per_page,

				);
				$client_about_loop = new WP_Query($client_about_args);
				if ($client_about_loop->have_posts()) : while($client_about_loop->have_posts()) : $client_about_loop->the_post();

				$foto_client_url			= get_field('client_url'); ?>

				<div class="clients column col-3">
					<a href="<?php echo esc_url( $foto_client_url ); ?>">
						<?php the_post_thumbnail(); ?>
					</a>
				</div>

			<?php endwhile; wp_reset_postdata(); endif; ?>
			</div>
		</div>
	</div>
	<?php } ?>
	<!-- client section end -->

	<!-- Testimonial Section -->
	<?php 
	$foto_use_testimonial_section	= get_field('use_testimonial_section');
	$foto_testimonial_background	= get_field('testimonial_background');
	$foto_testimonial_posts_per_page	= get_field('testimonial_posts_per_page');
	?>
	<?php if($foto_use_testimonial_section == true) { ?>
	<div class="testimonial-section clearfix" style="<?php if(!empty($foto_testimonial_background)) { echo 'background-image: url('. esc_url( $foto_testimonial_background ) .');'; } ?>">
		<div class="container">

			<div class="testimonial-slider">
				<div class="flexslider clearfix">
					<ul class="slides">

					<?php $testi_about_args = array(
					'post_type'			=> 'foto-testimonial',
					'post_status'		=> 'publish',
					'posts_per_page'	=> $foto_testimonial_posts_per_page,

					);
					$testi_about_loop = new WP_Query($testi_about_args);
					if ($testi_about_loop->have_posts()) : while($testi_about_loop->have_posts()) : $testi_about_loop->the_post();
					?>

					<li>
						<div class="testimonial-content">

							<div class="testimonial-text">

								<div class="testi-content">
									<?php the_content(); ?>
									
									<h5 class="testi-author"><?php the_title(); ?></h5>
								</div>
							</div>
						</div>
					</li>

					<?php endwhile; wp_reset_postdata(); endif; ?>
					</ul>
				</div>
			</div>
			<!-- testimonial-slider end -->

			<script type="text/javascript">
			jQuery(window).load(function() { 
				jQuery('.testimonial-slider .flexslider').flexslider({
					animation: "fade",
					slideshow: true,
					directionNav: false,
					controlNav: true,  
					touch: true
				});
			});
			</script>

		</div>
	</div>
	<?php } ?>
	<!-- testimonial section end -->

</div>

<?php
foto_footer_page(); ?>