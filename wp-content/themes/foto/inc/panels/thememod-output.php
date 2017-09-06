<?php
function foto_customizer_mod_output() {	

$foto_logo_height_default	= get_theme_mod( 'foto_default_logo_height', '' );
$foto_default_menu_top		= get_theme_mod( 'foto_default_menu_top', '' );

$foto_two_logo_height		= get_theme_mod( 'foto_two_logo_height', '' );
$foto_two_menu_top			= get_theme_mod( 'foto_two_menu_top', '' );
$foto_two_menu_bot			= get_theme_mod( 'foto_two_menu_bot', '' );

$foto_side_logo_height		= get_theme_mod( 'foto_side_logo_height', '' );
$foto_side_menu_top			= get_theme_mod( 'foto_side_menu_top', '' );

$foto_center_logo_height		= get_theme_mod( 'foto_center_logo_height', '' );
$foto_center_menu_top			= get_theme_mod( 'foto_center_menu_top', '' );
$foto_center_menu_bot			= get_theme_mod( 'foto_center_menu_bot', '' );

echo '<style type="text/css">';

	echo '#header.default .site-header img{height:'.$foto_logo_height_default.'px}' ;
	echo '#header.default nav.menu{margin-top:'.$foto_default_menu_top.'px}' ;

	//header two
	echo '#header.two-menus .site-header img{height:'.$foto_two_logo_height.'px}' ;
	echo '.primary-left-nav, .primary-right-nav{margin-top:'.$foto_two_menu_top.'px}' ;
	echo '.primary-left-nav, .primary-right-nav{margin-bottom:'.$foto_two_menu_bot.'px}' ;

	//header side
	echo '#header.left-side .site-header img{height:'.$foto_side_logo_height.'px}' ;
	echo '#header.left-side nav.menu{margin-top:'.$foto_side_menu_top.'px}' ;

	//header center
	echo '#header.center.site-header img{height:'.$foto_center_logo_height.'px}' ;
	echo '#header.center nav.menu{margin-top:'.$foto_center_menu_top.'px}' ;
	echo '#header.center nav.menu{padding-bottom:'.$foto_center_menu_bot.'px}' ;


echo '</style> ';

}

add_action( 'wp_head', 'foto_customizer_mod_output');