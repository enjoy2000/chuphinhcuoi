<?php foto_header_menu_choice(); ?>

<?php 
if ( class_exists( 'Redux' ) ) {
$options = get_option('foto_framework');
	$content_type = $options['content_type'];
	$foto_blog_type = $options['blog_type']; 
		$blog_title = $options['blog_title'];
		$blog_subtitle = $options['blog_subtitle'];
?>

<!-- CONTENT START
============================================= -->
<div id="content" class="single-wrapper <?php if($content_type == 'fullwidth') { ?> fullwidth<?php } ?>">
	
	<?php if($content_type == 'container') { ?>
		<div class="container">
	<?php } ?>

	<?php if(!empty($blog_title) || !empty($blog_subtitle)) { ?>
	<!-- PAGE TITLE START
	============================================= -->
	<div class="page-title content-wrapper">
		<div class="title-wrap">
			<?php if(!empty($blog_title)) { ?>
				<h2 class="wow fadeInUp" data-wow-delay="2.3s"><?php echo sanitize_text_field($blog_title); ?></h2>
			<?php }
			if(!empty($blog_subtitle)) { ?>
				<p class="wow fadeIn" data-wow-delay="2.7s"><?php echo balancetags( $blog_subtitle ); ?></p>
			<?php } ?>
		</div>
	</div>
	<!-- PAGE TITLE END -->
	<?php } ?>

		<!-- BLOG START
		============================================= -->
		<div class="blog content-wrapper clearfix">

			<!-- BLOG LOOP START
			============================================= -->
			<?php if($foto_blog_type == 'sidebar') {
				echo '<div class="with-sidebar">';
			} ?>

			<div class="blog-post wow fadeIn">

				<?php while ( have_posts() ) : the_post(); 
					get_template_part( 'inc/format/loop', get_post_format() );
				endwhile; // end of the loop. ?>

			</div>
			<!-- BLOG LOOP END -->

			<?php foto_content_nav($pages = '', $range = 2); ?>

			<?php if($foto_blog_type == 'sidebar') {
				echo '</div>';
			} ?>

			<!-- SIDEBAR START
			============================================= -->
			<?php if($foto_blog_type == 'sidebar') {
				get_sidebar();
			} ?>
			<!-- SIDEBAR END -->

		</div>
		<!-- BLOOG END -->

	<?php if($content_type == 'container') { ?>
		</div>
	<?php } ?>

</div>
<!-- CONTENT END -->
<?php }
else { ?>
<!-- CONTENT START
============================================= -->
<div id="content" class="single-wrapper">
	<div class="container">

	<!-- PAGE TITLE START
	============================================= -->
	<div class="page-title content-wrapper">
		<div class="title-wrap container">
			<h2 class="wow fadeInUp" data-wow-delay="2.3s"> <?php esc_html_e( 'Blog', 'foto' ); ?></h2>
		</div>
	</div>
	<!-- PAGE TITLE END -->

	<!-- BLOG START
	============================================= -->
	<div class="blog content-wrapper clearfix">

		<!-- BLOG LOOP START
		============================================= -->

		<div class="blog-post wow fadeIn">

			<?php while ( have_posts() ) : the_post(); 
				get_template_part( 'inc/format/loop', get_post_format() );
			endwhile; // end of the loop. ?>

		</div>
		<!-- BLOG LOOP END -->

		<?php foto_content_nav($pages = '', $range = 2); ?>

	</div>
	<!-- BLOOG END -->

	</div>
</div>
<!-- CONTENT END -->
<?php } ?><!-- redux not active end -->

<?php foto_footer_option(); ?>