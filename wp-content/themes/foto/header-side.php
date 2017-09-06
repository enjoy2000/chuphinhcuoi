<!DOCTYPE html>
<!--[if (gte IE 9)|!(IE)]><!--><html <?php language_attributes(); ?> > <!--<![endif]-->

<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<!--[if ie]><meta http-equiv='X-UA-Compatible' content="IE=edge,IE=9,IE=8,chrome=1" /><![endif]-->

<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

<?php wp_head(); ?>

</head>

<body <?php body_class() ;?>>


<!-- HEADER START
============================================= -->
<?php 
$options = get_option('foto_framework');
	$foto_header_side_size	= $options['header_side_size'];
	$foto_wrap_side_size 	= $options['wrap_side_size'];

	$foto_footer_side		= $options['footer_side'];
	$foto_loader_gif 		= $options['loader_gif']['background-image'];
?>
<header id="header" class="left-side clearfix" style="width: <?php echo sanitize_text_field($foto_header_side_size); ?>">
	<div class="site-header">
		<div class="logo target">
            <?php foto_logo_type(); ?> 
        </div>
		<!-- MAIN NAVIGATION START
						============================================= -->
		<nav id="main-nav" role="navigation" class="menu target">
            <?php foto_top_nav_menu(); ?>
        </nav>
        <!-- MAIN NAVIGATION END -->

        <div class="mobile-menu">
            <button id="slide-buttons" class="foto-menu-mobile"></button>
        </div> 

	</div>

	<?php if($foto_footer_side == true) { ?>
	<div class="footer-header">

		<!-- Social LInks Start -->
		<div class="social-link">
			<ul>
				<?php foto_social_profile(); ?>
			</ul>
		</div>

		<div class="copyright-text">
			<?php foto_footer_copyright(); ?>
		</div>
		<!-- Copyright Text End -->

	</div>
	<?php } ?>

</header>
<!-- HEADER END -->

<!-- MAIN WRAPPER START
============================================= -->
<?php if(!empty( $foto_loader_gif ) ) { ?>
<div id="preloader">
    <div id="status">&nbsp;</div>
</div>
<div id="main-wrapper" class="main-wrap-side<?php if(!empty($foto_wrap_side_size)) { ?> side-active-wrap<?php } ?> clearfix" style="padding-left: <?php echo sanitize_text_field($foto_wrap_side_size); ?>">
<?php }
else { ?>
<div id="main-wrapper" class="main-wrap-side<?php if(!empty($foto_wrap_side_size)) { ?> side-active-wrap<?php } ?> clearfix" style="padding-left: <?php echo sanitize_text_field($foto_wrap_side_size); ?>">

<!-- Loader -->
<div class="ip-header" style="margin-left: -<?php echo sanitize_text_field($foto_wrap_side_size); ?>">
	<div class="ip-loader">
		<svg class="ip-inner" width="60px" height="60px" viewBox="0 0 80 80">
			<path class="ip-loader-circlebg" d="M40,10C57.351,10,71,23.649,71,40.5S57.351,71,40.5,71 S10,57.351,10,40.5S23.649,10,40.5,10z"/>
			<path id="ip-loader-circle" class="ip-loader-circle" d="M40,10C57.351,10,71,23.649,71,40.5S57.351,71,40.5,71 S10,57.351,10,40.5S23.649,10,40.5,10z"/>
		</svg>
	</div>
</div>
<?php } ?>