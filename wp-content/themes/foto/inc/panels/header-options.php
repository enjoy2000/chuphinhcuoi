<?php

/*=====================================================================================================*/
// Set Panel ID
/*=====================================================================================================*/
$panel_id_1 = 'foto_header_options';

$wp_customize->add_panel( $panel_id_1,
    array(
        'priority'          => 197,
        'capability'        => 'edit_theme_options',
        'theme_supports'    => '',
        'title'             => esc_html__( 'Header Options', 'foto' ),
        'description'       => esc_html__( 'Edit your header options here.', 'foto' ),
    )
);

/* HEADER STYLING
================================================== */

$wp_customize->add_section( 'header_default', array(
	'title'		=>	esc_html__( 'Header Default Option', 'foto' ),
	'priority'	=>	1,
	'panel' 	  => $panel_id_1
) );

//SECTION

$wp_customize->add_setting( 'foto_default_logo_height', array(
	'default'		=> 	'',
	'transport'		=> 	'postMessage',
	'priority'	=>	1,
) );

$wp_customize->add_setting( 'foto_default_menu_top', array(
	'default'		=> 	'',
	'transport'		=> 	'postMessage',
	'priority'	  => 2,
) );

$wp_customize->add_setting( 'header_bg', array(
	'default'		=> 	'',
	'type'			=> 	'option',
	'transport'		=> 	'postMessage',
	'capability'	=>	'edit_theme_options',
	'sanitize_callback' => 'sanitize_hex_color',
) );

//control

$wp_customize->add_control( 'foto_default_logo_height', array(
	'label'		=>	esc_html__( 'Logo Height', 'foto' ),
	'section'	=>	'header_default',
	'settings'	=>	'foto_default_logo_height',
	'type'      => 'number',
) );

$wp_customize->add_control( 'foto_default_menu_top', array(
	'label'       => esc_html__( 'Default Header Menu Margin Top', 'foto' ),
	'section'     => 'header_default',
	'settings'    => 'foto_default_menu_top',
	'type'        => 'number',
) );

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_bg', array(
	'label'		=>	esc_html__( 'Header Default Color', 'foto' ),
	'section'	=>	'header_default',
	'settings'	=>	'header_bg',
	'priority'	=>	3,
) ) );


/* HEADER STYLING
================================================== */

$wp_customize->add_section( 'header_two', array(
	'title'		=>	esc_html__( 'Header Two Option', 'foto' ),
	'priority'	=>	2,
	'panel' 	  => $panel_id_1
) );

//SECTION

$wp_customize->add_setting( 'foto_two_logo_height', array(
	'default'		=> 	'',
	'transport'		=> 	'postMessage',
	'priority'	=>	1,
) );

$wp_customize->add_setting( 'foto_two_menu_top', array(
	'default'		=> 	'',
	'transport'		=> 	'postMessage',
	'priority'	  => 2,
) );

$wp_customize->add_setting( 'foto_two_menu_bot', array(
	'default'		=> 	'',
	'transport'		=> 	'postMessage',
	'priority'	  => 2,
) );

$wp_customize->add_setting( 'header_2_bg', array(
	'default'		=> 	'',
	'type'			=> 	'option',
	'transport'		=> 	'postMessage',
	'capability'	=>	'edit_theme_options',
	'sanitize_callback' => 'sanitize_hex_color',
) );

//control

$wp_customize->add_control( 'foto_two_logo_height', array(
	'label'		=>	esc_html__( 'Logo Height', 'foto' ),
	'section'	=>	'header_two',
	'settings'	=>	'foto_two_logo_height',
	'type'      => 'number',
) );

$wp_customize->add_control( 'foto_two_menu_top', array(
	'label'       => esc_html__( 'Header Two Menu Margin Top', 'foto' ),
	'section'     => 'header_two',
	'settings'    => 'foto_two_menu_top',
	'type'        => 'number',
) );

$wp_customize->add_control( 'foto_two_menu_bot', array(
	'label'       => esc_html__( 'Header Two Menu Margin Bottom', 'foto' ),
	'section'     => 'header_two',
	'settings'    => 'foto_two_menu_bot',
	'type'        => 'number',
) );

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_2_bg', array(
	'label'		=>	esc_html__( 'Header Two Color', 'foto' ),
	'section'	=>	'header_two',
	'settings'	=>	'header_2_bg',
	'priority'	=>	3,
) ) );

/* HEADER STYLING
================================================== */

$wp_customize->add_section( 'header_side', array(
	'title'		=>	esc_html__( 'Header Side Option', 'foto' ),
	'priority'	=>	3,
	'panel' 	  => $panel_id_1
) );

//SECTION

$wp_customize->add_setting( 'foto_side_logo_height', array(
	'default'		=> 	'',
	'transport'		=> 	'postMessage',
) );

$wp_customize->add_setting( 'foto_side_menu_top', array(
	'default'		=> 	'',
	'transport'		=> 	'postMessage',
) );

//control

$wp_customize->add_control( 'foto_side_logo_height', array(
	'label'		=>	esc_html__( 'Logo Height', 'foto' ),
	'section'	=>	'header_side',
	'settings'	=>	'foto_side_logo_height',
	'type'      => 'number',
	'priority'	=>	1,
) );

$wp_customize->add_control( 'foto_side_menu_top', array(
	'label'       => esc_html__( 'Header Side Menu Margin Top', 'foto' ),
	'section'     => 'header_side',
	'settings'    => 'foto_side_menu_top',
	'type'        => 'number',
	'priority'	  => 2,
) );

/* HEADER STYLING
================================================== */

$wp_customize->add_section( 'header_center', array(
	'title'		=>	esc_html__( 'Header Center Option', 'foto' ),
	'priority'	=>	4,
	'panel' 	  => $panel_id_1
) );

//SECTION

$wp_customize->add_setting( 'foto_center_logo_height', array(
	'default'		=> 	'',
	'transport'		=> 	'postMessage',
	'priority'	=>	1,
) );

$wp_customize->add_setting( 'foto_center_menu_top', array(
	'default'		=> 	'',
	'transport'		=> 	'postMessage',
	'priority'	  => 2,
) );

$wp_customize->add_setting( 'foto_center_menu_bot', array(
	'default'		=> 	'',
	'transport'		=> 	'postMessage',
	'priority'	  => 2,
) );

$wp_customize->add_setting( 'header_center_bg', array(
	'default'		=> 	'',
	'type'			=> 	'option',
	'transport'		=> 	'postMessage',
	'capability'	=>	'edit_theme_options',
	'sanitize_callback' => 'sanitize_hex_color',
) );

//control

$wp_customize->add_control( 'foto_center_logo_height', array(
	'label'		=>	esc_html__( 'Logo Height', 'foto' ),
	'section'	=>	'header_center',
	'settings'	=>	'foto_center_logo_height',
	'type'      => 'number',
) );

$wp_customize->add_control( 'foto_center_menu_top', array(
	'label'       => esc_html__( 'Header Two Menu Margin Top', 'foto' ),
	'section'     => 'header_center',
	'settings'    => 'foto_center_menu_top',
	'type'        => 'number',
) );

$wp_customize->add_control( 'foto_center_menu_bot', array(
	'label'       => esc_html__( 'Header Two Menu Margin Bottom', 'foto' ),
	'section'     => 'header_center',
	'settings'    => 'foto_center_menu_bot',
	'type'        => 'number',
) );

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_center_bg', array(
	'label'		=>	esc_html__( 'Header Two Color', 'foto' ),
	'section'	=>	'header_center',
	'settings'	=>	'header_center_bg',
	'priority'	=>	3,
) ) );