<?php foto_header_menu_choice(); ?>

<?php if ( class_exists( 'Redux' ) ) {
	$options = get_option('foto_framework');
	$foto_content_type = $options['content_type'];
	$foto_blog_type = $options['blog_type']; 
?>

<!-- CONTENT START
============================================= -->
<section id="content" class="single-wrapper<?php if($foto_content_type == 'fullwidth') { ?> fullwidth<?php } ?> clearfix">
	<!-- Page Title -->
	<?php if ( class_exists( 'acf' ) ) {

	$foto_use_concept_title			= get_field('use_concept_title');
	$foto_page_subtitle				= get_field('page_subtitle');
	$foto_title_align_choice		= get_field('title_align_choice');
	$foto_the_title_background		= get_field('the_title_background');
	$foto_the_title_color			= get_field('the_title_color');

	//padding & margin
	$foto_title_wrap_padding_top	= get_field('title_wrap_padding_top');
	$foto_title_wrap_padding_bottom	= get_field('title_wrap_padding_bottom');
	$foto_content_padding_top		= get_field('content_padding_top');
	$foto_content_padding_bottom	= get_field('content_padding_bottom'); ?>

	<?php if($foto_use_concept_title == true) { ?>
	<div class="page-title" style="background-image: url(<?php echo esc_url( $foto_the_title_background ); ?>); padding:<?php if(!empty($foto_title_wrap_padding_top)) { echo sanitize_text_field( $foto_title_wrap_padding_top ); ?>px <?php } else { echo "0px "; } ?>0px <?php if(!empty($foto_title_wrap_padding_bottom)) { echo sanitize_text_field( $foto_title_wrap_padding_bottom ); ?>px<?php } else { echo "0px"; } ?>;">
		<div class="container">
			<div class="title-wrap">
				<h2 class="wow fadeInUp" data-wow-delay="0.5s" style="color: <?php echo esc_html( $foto_the_title_color ); ?>;"><?php the_title(); ?></h2>
				<?php if(!empty($foto_page_subtitle)) { ?>
					<span class="subtitle-album wow fadeIn" data-wow-delay="0.7s"><?php echo sanitize_text_field( $foto_page_subtitle ); ?></span>
				<?php } ?>
			</div>
		</div>
	</div>
	<?php } }
	else { ?>
	<div class="default-page-title no-acf">
		<div class="container">
			<div class="heading-block page-title">
				<h1><?php the_title(); ?></h1>
			</div>
		</div>
	</div>
	<?php } ?>



	<div class="custom-wrap" style="margin: <?php if(!empty($foto_content_padding_top)) { echo sanitize_text_field( $foto_content_padding_top ); ?>px <?php } else { echo "0px "; } ?>0px <?php if(!empty($foto_content_padding_bottom)) { echo sanitize_text_field( $foto_content_padding_bottom ); ?>px<?php } else { echo "0px"; } ?>;">

		<?php if($foto_content_type == 'container') { ?>
			<div class="container">
		<?php } ?>

		<?php if($foto_blog_type == 'sidebar') {
			echo '<div class="with-sidebar">';
		} ?>

		<div id="content-wrapper" class="wrapper">
		
			<?php while ( have_posts() ) : the_post(); 
				get_template_part( 'inc/format/content', 'page' );	
			endwhile; // end of the loop. ?>

		</div><!-- wrapper -->

		<?php if($foto_blog_type == 'sidebar') {
			echo '</div>';
		} ?>

		<!-- SIDEBAR START
		============================================= -->
		<?php if($foto_blog_type == 'sidebar') {
			get_sidebar();
		} ?>
		<!-- SIDEBAR END -->

		<?php if($foto_content_type == 'container') { ?>
			</div>
		<?php } //end of container ?>

	</div><!-- custom wrap end -->

</section>
<!-- CONTENT END -->

<?php } //redux active end
else { ?>

<!-- CONTENT START
============================================= -->
<section id="content" class="content-wrapper single-wrapper clearfix">
	<!-- Page Title -->
	<div class="default-page-title">
		<div class="container">
			<div class="heading-block page-title">
				<h1><?php the_title(); ?></h1>
			</div>
		</div>
	</div>

	<div class="container">
		<div id="content-wrapper" class="wrapper">
		
			<?php while ( have_posts() ) : the_post(); 
				get_template_part( 'inc/format/content', 'page' );	
			endwhile; // end of the loop. ?>

		</div><!-- wrapper -->
	</div><!-- end of container -->

</section>
<!-- CONTENT END -->

<?php } //redux not active / default page ?>

<?php foto_footer_page(); ?>