<?php foto_header_menu_page();  ?>

<?php 
if ( class_exists( 'Redux' ) ) {
$options = get_option('foto_framework');
	$content_type = $options['content_type'];
	$foto_blog_type = $options['blog_type'];
?>

<!-- CONTENT START
============================================= -->
<div id="content" class="single-wrapper clearfix<?php if($content_type == 'fullwidth') { ?> fullwidth<?php } ?>">

	<?php if($content_type == 'container') { ?>
		<div class="container">
	<?php } ?>

		<!-- BLOG START
		============================================= -->
		<div class="blog-single content-wrapper">

			<!-- BLOG LOOP START
			============================================= -->
			<div class="single-post-wrap wow fadeIn">

				<?php if($foto_blog_type == 'sidebar') {
					echo '<div class="with-sidebar">';
				} ?>

				<?php while ( have_posts() ) : the_post(); 
					get_template_part( 'inc/format/content', get_post_format() );
				endwhile; // end of the loop. ?>
				
				<?php if($foto_blog_type == 'sidebar') {
					echo '</div>';
				} ?>

			</div>
			<!-- BLOG LOOP END -->

			<!-- SIDEBAR START
			======================================= ====== -->
			<?php if($foto_blog_type == 'sidebar') {
				get_sidebar();
			} ?>
			
			<!-- SIDEBAR END -->

		</div>
		<!-- BLOG END -->

	<?php if($content_type == 'container') { ?>
	</div>
	<?php } ?>
</div>
<!-- CONTENT END -->
<?php }
else { ?>	
<!-- CONTENT START
============================================= -->
<div id="content" class="single-wrapper content-wrapper clearfix">
	<div class="container">

		<!-- BLOG START
		============================================= -->
		<div class="blog-single">

			<!-- BLOG LOOP START
			============================================= -->
			<div class="single-post-wrap wow fadeIn">
				<div class="with-sidebar">

				<?php while ( have_posts() ) : the_post(); 
					get_template_part( 'inc/format/content', get_post_format() );
				endwhile; // end of the loop. ?>

				</div>
			</div>
			<!-- BLOG LOOP END -->

			<!-- SIDEBAR START
			============================================= -->
			<?php get_sidebar(); ?>
			<!-- SIDEBAR END -->

		</div>
		<!-- BLOG END -->

	</div>
</div>
<!-- CONTENT END -->
<?php } ?>

<?php foto_footer_page(); ?>