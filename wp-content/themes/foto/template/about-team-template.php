<?php foto_header_menu_page();

/*
Template Name: About Studio Template
*/
while ( have_posts() ) : the_post();
?>

<div id="content" class="about team single-wrapper">

	<!-- About Wrap -->
	<div class="about-wrap clearfix">
		<div class="container">

			<!-- about section -->
			<div class="about-section clearfix">
				<?php if ( has_post_thumbnail()) { ?>
				<div class="about-image">
					<?php the_post_thumbnail(); ?>
				</div>
				<?php } ?>

				<div class="about-detail">
					<div class="inner-detail">
						<h2 class="section-title"><?php the_title(); ?></h2>
						<div class="about-content"><?php the_content(); ?></div>
						<div class="bord"></div>
					</div>
				</div><!-- about-detail end -->
			</div><!-- about-section end -->

			<!-- team section -->
			<?php 
			$foto_use_team_section		= get_field('use_team_section');
			$foto_team_section_title	= get_field('team_section_title');
			$foto_team_section_text		= get_field('team_section_text');
			$foto_team_posts_per_page	= get_field('team_posts_per_page');
			?>
			<?php if($foto_use_team_section == true) { ?>
			<div class="team-studio clearfix">
				<div class="row">
					<div class="team-description column">
						<div class="title-section">
						<?php if(!empty($foto_team_section_title)) { ?>
							<h2 class="section-title"><?php echo sanitize_text_field( $foto_team_section_title ); ?></h2>
							<div class="bord"></div>
						</div>
						
						<?php }

						if(!empty($foto_team_section_text)) { ?>
							<div class="body-detail">
								<?php echo balancetags( $foto_team_section_text ); ?>
							</div>
						<?php } ?>
					</div>

					<div class="team-member column">
					<?php $team_about_args = array(
					'post_type'			=> 'foto-team',
					'post_status'		=> 'publish',
					'posts_per_page'	=> $foto_team_posts_per_page,

					);
					$team_about_loop = new WP_Query($team_about_args);
					if ($team_about_loop->have_posts()) : while($team_about_loop->have_posts()) : $team_about_loop->the_post();

					$foto_team_function 			= get_field('team_function');
					$foto_team_facebook 			= get_field('facebook');
					$foto_team_twitter 				= get_field('twitter');
					$foto_team_google_plus 			= get_field('google_plus');
					$foto_team_instagram 			= get_field('instagram'); ?>

						<div class="team-person column col-2">
							<div class="team-inner">
								<?php the_post_thumbnail(); ?>
								<div class="team-overlay">
									<span class="nyet top"></span><span class="nyet tiang left"></span><span class="nyet tiang right"></span><span class="nyet bottom"></span>
									<div class="team-detail">
										<h3 class="team-name"><?php the_title(); ?></h3>
										<?php if(!empty($foto_team_function)){ ?>
										<p class="position"><?php echo sanitize_text_field( $foto_team_function ); ?></p>
										<?php } ?>
										<ul>
										<?php if(!empty($foto_team_facebook)){ ?>
											<li><a href="<?php echo esc_url( $foto_team_facebook ); ?>"><i class="fa fa-facebook-square"></i></a></li>
										<?php }
										if(!empty($foto_team_twitter)){ ?>
											<li><a href="<?php echo esc_url( $foto_team_twitter ); ?>"><i class="fa fa-twitter-square"></i></a></li>
										<?php }
										if(!empty($foto_team_instagram)){ ?>
											<li><a href="<?php echo esc_url( $foto_team_instagram ); ?>"><i class="fa fa-instagram"></i></a></li>
										<?php }
										if(!empty($foto_team_google_plus)){ ?>
											<li><a href="<?php echo esc_url( $foto_team_google_plus ); ?>"><i class="fa fa-google-plus-square"></i></a></li>
										<?php } ?>
										</ul>
									</div>
								</div>
							</div>
						</div>

					<?php endwhile; wp_reset_postdata(); endif; ?>
					</div>
				</div>
			<?php } ?>
			</div><!-- team section end -->

		</div><!-- container end -->
	</div>
	<!-- about wrap end -->

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
endwhile; // end of the loop.
foto_footer_page(); ?>