<!DOCTYPE html>
<!--[if (gte IE 9)|!(IE)]><!--><html <?php language_attributes(); ?> > <!--<![endif]-->

<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<!--[if ie]><meta http-equiv='X-UA-Compatible' content="IE=edge,IE=9,IE=8,chrome=1" /><![endif]-->

<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

<?php wp_head(); ?>

</head>

<body <?php body_class() ;?>>

<?php 
if ( class_exists( 'Redux' ) ) {
$options = get_option('foto_framework');
$foto_header_fixed = $options['header_fixed'];
//$foto_allow_mobile = $options['allow_mobile'];
$foto_loader_gif = $options['loader_gif']['background-image'];

if ( ! empty( $foto_loader_gif ) ) { ?>
<div id="preloader">
    <div id="status">&nbsp;</div>
</div>

<div id="main-wrapper" class="clearfix">
<?php }
else { ?>
<div id="main-wrapper" class="clearfix">

<!-- Loader -->
<div class="ip-header">
    <div class="ip-loader">
        <svg class="ip-inner" width="60px" height="60px" viewBox="0 0 80 80">
            <path class="ip-loader-circlebg" d="M40,10C57.351,10,71,23.649,71,40.5S57.351,71,40.5,71 S10,57.351,10,40.5S23.649,10,40.5,10z"/>
            <path id="ip-loader-circle" class="ip-loader-circle" d="M40,10C57.351,10,71,23.649,71,40.5S57.351,71,40.5,71 S10,57.351,10,40.5S23.649,10,40.5,10z"/>
        </svg>
    </div>
</div>
<?php } }
else { ?>
<div id="main-wrapper" class="clearfix">

<!-- Loader -->
<div class="ip-header">
    <div class="ip-loader">
        <svg class="ip-inner" width="60px" height="60px" viewBox="0 0 80 80">
            <path class="ip-loader-circlebg" d="M40,10C57.351,10,71,23.649,71,40.5S57.351,71,40.5,71 S10,57.351,10,40.5S23.649,10,40.5,10z"/>
            <path id="ip-loader-circle" class="ip-loader-circle" d="M40,10C57.351,10,71,23.649,71,40.5S57.351,71,40.5,71 S10,57.351,10,40.5S23.649,10,40.5,10z"/>
        </svg>
    </div>
</div>
<?php } ?>
<!-- HEADER START
============================================= -->

<header id="header" class="<?php if ( class_exists( 'Redux' )  && $foto_header_fixed == false ) { ?>relative <?php } ?>two-menus clearfix">
	<div class="site-header width-container">
		<div class="logo target">
            <?php foto_logo_type(); ?>
        </div>
		<!-- MAIN NAVIGATION START
		============================================= -->
		<nav id="main-nav" role="navigation" class="menu target">
			<div class="width-container">
				<div class="primary-left-nav">
					<div class="logo-container"></div>
					<div class="menu-main-navigation-left-container">
			            <?php foto_top_nav_menu(); ?>
					</div>
				</div>
				<div class="primary-right-nav">
					<div class="logo-container"></div>
					<div class="menu-main-navigation-right-container">
						<?php 
							if ( has_nav_menu( 'menu-right' ) ) {
								foto_right_nav_menu();
							}
							else { ?>
							<div class="header-social">
	        					<?php foto_social_profile(); ?>
	        				</div>
						<?php } ?>
					</div>
				</div>
			</div>
        </nav>
		<!-- MAIN NAVIGATION END -->

		<div class="mobile-menu">
			<button id="slide-buttons" class="foto-menu-mobile"></button>
		</div>
	</div>

</header>

<?php if( class_exists( 'Redux' )  && $foto_header_fixed == true ) { ?>
<div class="header-holder"></div>
<?php } ?>
<!-- HEADER END -->