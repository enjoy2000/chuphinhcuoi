<?php foto_header_menu_choice(); ?>

<?php 
if ( class_exists( 'Redux' ) ) {
$options = get_option('foto_framework');
	$content_type = $options['content_type'];
	$foto_blog_type = $options['blog_type']; 
?>

<!-- CONTENT START
============================================= -->
<div id="content" class="blog archives single-wrapper<?php if($content_type == 'fullwidth') { ?> fullwidth<?php } ?>">
	
	<?php if($content_type == 'container') { ?>
		<div class="container">
	<?php } ?>

	<div class="page-title content-wrapper">
		<div class="title-wrap container">
			<h2 class="wow fadeInUp" data-wow-delay="2.3s"> <?php esc_html_e( 'Archives', 'foto' ); ?></h2>
		</div>
	</div>

		<!-- BLOG START
		============================================= -->
		<div class="blog content-wrapper clearfix">

			<!-- BLOG LOOP START
			============================================= -->
			<?php if($foto_blog_type == 'sidebar') {
				echo '<div class="with-sidebar">';
			} ?>

			<div class="blog-post wow fadeIn">

				<?php if ( have_posts() ) : ?>
					<?php while ( have_posts() ) : the_post(); 

						get_template_part( 'inc/format/loop', get_post_format() );

					endwhile; ?>
					
				<?php else : ?>

				<?php get_template_part( 'inc/format/content', 'no-result' ); ?>

				<?php endif; ?>

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
			<h2 class="wow fadeInUp" data-wow-delay="2.3s"> <?php esc_html_e( 'Archives', 'foto' ); ?></h2>
		</div>
	</div>
	<!-- PAGE TITLE END -->

	<!-- BLOG START
	============================================= -->
	<div class="blog content-wrapper clearfix">

		<!-- BLOG LOOP START
		============================================= -->

		<div class="blog-post wow fadeIn">

			<?php if ( have_posts() ) : ?>
					<?php while ( have_posts() ) : the_post(); 

						get_template_part( 'inc/format/loop', get_post_format() );

					endwhile; ?>
					
				<?php else : ?>

				<?php get_template_part( 'inc/format/content', 'no-result' ); ?>

				<?php endif; ?>

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