<?php
// Set Panel ID
$panel_id = 'foto_panel_general';

// Set prefix
$prefix = 'foto';

// Change panel for Colors
$site_bg_color        = $wp_customize->get_section( 'colors' );
$site_bg_color->panel = $panel_id;
$site_bg_color->title = esc_html__( 'Background Color', 'foto' );
$site_bg_color->priority = 4;

// Change panel for Background Image
$site_bg_img        = $wp_customize->get_section( 'background_image' );
$site_bg_img->panel = $panel_id;
$site_bg_img->priority = 5;

// Change panel for Static Front Page
$site_title        = $wp_customize->get_section( 'static_front_page' );
$site_title->panel = $panel_id;

// Change panel for Static Front Page
$bocah        = $wp_customize->get_section( 'title_tagline' );
$bocah->panel = $panel_id;
$bocah->priority    = 1;

/***********************************************/
/************** GENERAL OPTIONS  ***************/
/***********************************************/


$wp_customize->add_panel( $panel_id, array(
	'priority'       => 1,
	'capability'     => 'edit_theme_options',
	'theme_supports' => '',
	'title'          => esc_html__( 'General Options', 'foto' ),
	'description'    => esc_html__( 'You can change the site layout in this area as well as your contact details (the ones displayed in the header & footer) ', 'foto' ),
) );