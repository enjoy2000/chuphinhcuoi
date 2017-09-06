<?php foto_header_menu_choice(); ?>

<?php 
if ( class_exists( 'Redux' ) ) { ?>

<!-- CONTENT START
============================================= -->
<div id="content" class="search-page single-wrapper">
	<?php 
	$options = get_option('foto_framework');
		$content_type = $options['content_type'];
	?>
	<?php if($content_type == 'container') { ?>
		<div class="container">
	<?php } ?>

		<?php 
		if ( class_exists( 'Redux' ) ) {
		    $options = get_option('foto_framework');
		    $blog_title = $options['blog_title'];
		    $blog_subtitle = $options['blog_subtitle']; ?>

		<!-- PAGE TITLE START
		============================================= -->
		<div class="page-title content-wrapper">
			<div class="title-wrap container">
				<h2 class="wow fadeInUp" data-wow-delay="2.3s"><?php esc_html_e( 'Search Result', 'foto' ); ?></h2>
			</div>
	    </div>
		<!-- PAGE TITLE END -->
		<?php } ?>

		<!-- BLOG START
		============================================= -->
		<div class="blog content-wrapper">

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

	<?php if($content_type == 'container') { ?>
		</div>
	<?php } ?>

</div>
<!-- CONTENT END -->
<?php }
else { ?>
<!-- CONTENT START
============================================= -->
<div id="content" class="search-page single-wrapper">
	<div class="container">

	<!-- PAGE TITLE START
	============================================= -->
	<div class="page-title content-wrapper">
		<div class="title-wrap container">
			<h2 class="wow fadeInUp" data-wow-delay="2.3s"> <?php esc_html_e( 'Search Result', 'foto' ); ?></h2>
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
<?php } ?>

<?php foto_footer_option(); ?>