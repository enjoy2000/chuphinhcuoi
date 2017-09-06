<!DOCTYPE html>
<!--[if (gte IE 9)|!(IE)]><!--><html <?php language_attributes(); ?> > <!--<![endif]-->

<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<!--[if ie]><meta http-equiv='X-UA-Compatible' content="IE=edge,IE=9,IE=8,chrome=1" /><![endif]-->

<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

<?php wp_head(); ?>

</head>

<body <?php body_class() ;?>>

<!-- MAIN WRAPPER START
    ============================================= -->
<div id="main-wrapper" class="clearfix">

<!-- HEADER START
============================================= -->
<?php 
$options = get_option('foto_framework');
$foto_header_fixed = $options['header_fixed'];

?>
<header id="header" class="default <?php if ( class_exists( 'Redux' )  && $foto_header_fixed == false ) { ?>relative <?php } ?>clearfix">
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

</header>

<?php if( class_exists( 'Redux' )  && $foto_header_fixed == true) { ?>
<div class="header-holder"></div>
<?php } ?>
<!-- HEADER END -->