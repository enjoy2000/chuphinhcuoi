<?php foto_header_menu_page();

/*
Template Name: Blog Masonry Template
*/
?>

<?php 
if ( class_exists( 'Redux' ) ) {
$options = get_option('foto_framework');
	$content_type = $options['content_type'];
	$foto_blog_type = $options['blog_type'];
?>

<!-- CONTENT START
============================================= -->
<div id="content" class="single-wrapper <?php if($content_type == 'fullwidth') { ?> fullwidth<?php } ?>">
	
	<?php if($content_type == 'container') { ?>
		<div class="container">
	<?php } ?>

	<!-- PAGE TITLE START
	============================================= -->
	<div class="page-title content-wrapper">
		<div class="title-wrap">
				<h2 class="wow fadeInUp" data-wow-delay="2.3s"><?php the_title(); ?></h2>
				<?php while ( have_posts() ) : the_post();
				the_content(); 
				endwhile; // end of the loop.?>
		</div>
	</div>
	<!-- PAGE TITLE END -->

		<!-- BLOG START
		============================================= -->
		<div class="blog content-wrapper clearfix">

			<!-- BLOG LOOP START
			============================================= -->
			<?php if($foto_blog_type == 'sidebar') {
				echo '<div class="with-sidebar">';
			} ?>

			<div class="blog-post wow fadeIn">

				<?php 
				$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
				$foto_blog_args = array(
				'post_type'          => 'post',
            	'paged' 			 => $paged,
				'post_status'        => 'publish',
				'posts_per_page' 	 => 10,

				);
				$foto_posts_loop = new WP_Query($foto_blog_args);
				if ($foto_posts_loop->have_posts()) : while($foto_posts_loop->have_posts()) : $foto_posts_loop->the_post();

					get_template_part( 'inc/format/loop', get_post_format() );

				endwhile; ?>

				
			</div>
			<!-- BLOG LOOP END -->

			<nav role="navigation" id="" class="navigation-paging clearfix">
				<div class="nav-previous pull-right button-normal black">
					<?php next_posts_link( esc_html__( 'Older Entries', 'foto' ), $foto_posts_loop->max_num_pages ); ?>
				</div>
				<div class="nav-next pull-left button-normal black">
					<?php previous_posts_link( esc_html__( 'Newer Entries', 'foto' ) ); wp_reset_postdata(); endif; ?>
				</div>
			</nav>


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
	<div class="page-title">
		<div class="title-wrap container">
			<h2 class="wow fadeInUp" data-wow-delay="2.3s"><?php the_title(); ?></h2>
		</div>
	</div>
	<!-- PAGE TITLE END -->

	<!-- BLOG START
	============================================= -->
	<div class="blog content-wrapper clearfix">

		<!-- BLOG LOOP START
		============================================= -->

		<div class="blog-post wow fadeIn">

			<?php 
			$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
			$foto_blog_args = array(
			'post_type'          => 'post',
        	'paged' 			 => $paged,
			'post_status'        => 'publish',
			'posts_per_page' 	 => 10,

			);
			$foto_posts_loop = new WP_Query($foto_blog_args);
			if ($foto_posts_loop->have_posts()) : while($foto_posts_loop->have_posts()) : $foto_posts_loop->the_post();

				get_template_part( 'inc/format/loop', get_post_format() );

			endwhile; ?>

		</div>
		<!-- BLOG LOOP END -->

		<nav role="navigation" id="" class="navigation-paging clearfix">
			<div class="nav-previous pull-right button-normal black">
				<?php next_posts_link( esc_html__( 'Older Entries', 'foto' ), $foto_posts_loop->max_num_pages ); ?>
			</div>
			<div class="nav-next pull-left button-normal black">
				<?php previous_posts_link( esc_html__( 'Newer Entries', 'foto' ) ); wp_reset_postdata(); endif; ?>
			</div>
		</nav>

	</div>
	<!-- BLOOG END -->

	</div>
</div>
<!-- CONTENT END -->
<?php } ?><!-- redux not active end -->

<?php
foto_footer_page(); ?>