<?php foto_header_menu_page();

/*
Template Name: Contact Template
*/

while ( have_posts() ) : the_post();

if( class_exists('acf') ) { 
	$foto_select_contact_layout	= get_field('select_contact_layout');
	$google_maps			= get_field('google_maps');
	$telephone				= get_field('telephone');
	$email_address			= get_field('email_address');
	$location				= get_field('location');
	$contact_form_template	= get_field('contact_form_template');
?>

<!-- CONTENT START
============================================= -->
<?php if($foto_select_contact_layout == 'fullmap'){ ?>
<div class="contact-page clearfix">
	
	<?php if(!empty($google_maps)){ ?>
	<div class="contact-map">
		<div class="maps wow fadeIn">
			<div class="overlay" onClick="style.pointerEvents='none'"></div>
			<?php echo balancetags( $google_maps ); ?>
		</div>
	</div>
	<?php } ?>

	<div id="content" class="contact-content clearfix">
		<div class="container">
			<div class="row">

				<div class="contact-details clearfix">

					<!-- CONTACT FORM START
					============================================= -->
					<div class="contact-form column col-2">
						<?php if(!empty($contact_form_template)){ ?>
						<div class="form wow fadeIn">
							<?php echo do_shortcode( $contact_form_template ); ?>
						</div>
						<?php } ?>
					</div>
					<!-- CONTACT FORM END -->

					<div class="contact-desc column col-2">
						<div class="title">
							<h2><?php the_title(); ?></h2>
						</div>

						<div class="contact-text">
							<div class="contact-author-details">
								<?php if(!empty($telephone)) { ?>
									<p><?php echo balancetags( $telephone ); ?></p>
								<?php }
								if(!empty($email_address)) { ?>
									<p><?php echo balancetags( $email_address ); ?></p>
								<?php }
								if(!empty($location)) { ?>
									<p><?php echo balancetags( $location ); ?></p>
								<?php } ?>
							</div>
						</div>

						<div class="contact-full-desc">
							<?php the_content(); ?>
						</div>
					</div>

				</div>

			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
jQuery(document).ready(function(){
	jQuery(".page-template-contact-template").addClass('bg-colored');
});
</script>
<?php }
else { ?>
<div class="contact-page white clearfix">
	<div class="container">
		<div class="row">
			<div class="contact-section-top">
				<div class="column">
					<div class="contact-desc">
						<div class="title">
							<h2><?php the_title(); ?></h2>
						</div>

						<div class="contact-text">
							<div class="contact-author-details">
								<?php if(!empty($telephone)) { ?>
									<p><?php echo balancetags( $telephone ); ?></p>
								<?php }
								if(!empty($email_address)) { ?>
									<p><?php echo balancetags( $email_address ); ?></p>
								<?php }
								if(!empty($location)) { ?>
									<p><?php echo balancetags( $location ); ?></p>
								<?php } ?>
							</div>
						</div>
					</div>
				</div>

				<?php if(!empty($google_maps)){ ?>
				<div class="contact-map column">
					<div class="maps wow fadeIn">
						<div class="overlay" onClick="style.pointerEvents='none'"></div>
						<?php echo balancetags( $google_maps ); ?>
					</div>
				</div>
				<?php } ?>
			</div>

			<div id="content" class="contact-content clearfix">
				<div class="contact-details clearfix">

					<!-- CONTACT FORM START
					============================================= -->
					<div class="contact-form column col-2">
						<?php if(!empty($contact_form_template)){ ?>
						<div class="form wow fadeIn">
							<?php echo do_shortcode( $contact_form_template ); ?>
						</div>
						<?php } ?>
					</div>
					<!-- CONTACT FORM END -->

					<div class="contact-inner column col-2">
						<?php the_content(); ?>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>
<?php } ?>
<!-- CONTENT END -->

<?php } 

else { ?>


<section id="content" class="single-wrapper">
	<!-- Page Title -->
	<div class="grey-background wow fadeIn">
		<div class="container">
			<div class="heading-block page-title wow fadeIn">
				<h1>
					<?php esc_html_e( 'Please Activate ACF plugin to use this Page Template', 'foto' ); ?>
				</h1>
			</div>
		</div>
	</div>	

</section>
<!-- CONTENT END -->


<?php } ?>

<?php
endwhile; // end of the loop.
foto_footer_page();
?>