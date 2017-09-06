<?php

	/*=====================================================================================================*/
	// Set Panel ID
	/*=====================================================================================================*/
	$panel_id_1 = 'foto_header_section';

	$wp_customize->add_panel( $panel_id_1,
	    array(
	        'priority'          => 199,
	        'capability'        => 'edit_theme_options',
	        'theme_supports'    => '',
	        'title'             => esc_html__( 'Header Section', 'foto' ),
	        'description'       => esc_html__( 'Edit your header color here.', 'foto' ),
	    )
	);

	/* HEADER STYLING
	================================================== */
	
	$wp_customize->add_section( 'header_styling', array(
		'title'		=>	esc_html__( 'Header Default & Header Center', 'foto' ),
		'priority'	=>	200,
		'panel' 	  => $panel_id_1
	) );
	
	//SECTION

	$wp_customize->add_setting( 'menu_list', array(
		'default'		=> 	'#222222',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'submenu_list', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'submenu_hover', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'submenu_bg', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'submenu_bg_hover', array(
		'default'		=> 	'#f3f3f3',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'slide_button', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'menu_close', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'menu_mobile', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'menu_mobile_border', array(
		'default'		=> 	'#424242',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'menu_mobile_bg', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	//CONTROL
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'menu_list', array(
		'label'		=>	esc_html__( 'Menu List Color', 'foto' ),
		'section'	=>	'header_styling',
		'settings'	=>	'menu_list',
		'priority'	=>	1,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'submenu_list', array(
		'label'		=>	esc_html__( 'Submenu List Color (All Header)', 'foto' ),
		'section'	=>	'header_styling',
		'settings'	=>	'submenu_list',
		'priority'	=>	2,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'submenu_hover', array(
		'label'		=>	esc_html__( 'Submenu List Hover Color (All Header)', 'foto' ),
		'section'	=>	'header_styling',
		'settings'	=>	'submenu_hover',
		'priority'	=>	3,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'submenu_bg', array(
		'label'		=>	esc_html__( 'Submenu List Background Color (All Header)', 'foto' ),
		'section'	=>	'header_styling',
		'settings'	=>	'submenu_bg',
		'priority'	=>	4,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'submenu_bg_hover', array(
		'label'		=>	esc_html__( 'Submenu List Background Hover Color (All Header)', 'foto' ),
		'section'	=>	'header_styling',
		'settings'	=>	'submenu_bg_hover',
		'priority'	=>	5,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'slide_button', array(
		'label'		=>	esc_html__( 'Menu Slide Button Color (All Header)', 'foto' ),
		'section'	=>	'header_styling',
		'settings'	=>	'slide_button',
		'priority'	=>	6,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'menu_close', array(
		'label'		=>	esc_html__( 'Menu Close Icon Color', 'foto' ),
		'section'	=>	'header_styling',
		'settings'	=>	'menu_close',
		'priority'	=>	7,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'menu_mobile', array(
		'label'		=>	esc_html__( 'Mobile Menu List Color', 'foto' ),
		'section'	=>	'header_styling',
		'settings'	=>	'menu_mobile',
		'priority'	=>	8,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'menu_mobile_border', array(
		'label'		=>	esc_html__( 'Mobile Menu List Border Color', 'foto' ),
		'section'	=>	'header_styling',
		'settings'	=>	'menu_mobile_border',
		'priority'	=>	9,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'menu_mobile_bg', array(
		'label'		=>	esc_html__( 'Mobile Menu Background Color', 'foto' ),
		'section'	=>	'header_styling',
		'settings'	=>	'menu_mobile_bg',
		'priority'	=>	10,
	) ) );


	/* HEADER LEFT SIDE BAR STYLING
	================================================== */
	
	$wp_customize->add_section( 'header_left_styling', array(
		'title'		=>	esc_html__( 'Header Left Sidebar', 'foto' ),
		'priority'	=>	200,
		'panel' 	  => $panel_id_1
	) );
	
	//SECTION

	$wp_customize->add_setting( 'bg_left', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'text_left', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'border_left', array(
		'default'		=> 	'#363636',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	//CONTROL
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bg_left', array(
		'label'		=>	esc_html__( 'Background Color', 'foto' ),
		'section'	=>	'header_left_styling',
		'settings'	=>	'bg_left',
		'priority'	=>	1,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'text_left', array(
		'label'		=>	esc_html__( 'Menu List Color', 'foto' ),
		'section'	=>	'header_left_styling',
		'settings'	=>	'text_left',
		'priority'	=>	2,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'border_left', array(
		'label'		=>	esc_html__( 'Menu List Color', 'foto' ),
		'section'	=>	'header_left_styling',
		'settings'	=>	'border_left',
		'priority'	=>	3,
	) ) );


	/* HEADER TWO STYLING
	================================================== */
	
	$wp_customize->add_section( 'header_two_styling', array(
		'title'		=>	esc_html__( 'Header Two', 'foto' ),
		'priority'	=>	200,
		'panel' 	  => $panel_id_1
	) );
	
	//SECTION

	$wp_customize->add_setting( 'two_list_menu', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'two_sticky_menu', array(
		'default'		=> 	'#222222',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'two_sticky_bg', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	//CONTROL
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'two_list_menu', array(
		'label'		=>	esc_html__( 'Menu List Color', 'foto' ),
		'section'	=>	'header_two_styling',
		'settings'	=>	'two_list_menu',
		'priority'	=>	1,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'two_sticky_menu', array(
		'label'		=>	esc_html__( 'Sticky Menu List Color', 'foto' ),
		'section'	=>	'header_two_styling',
		'settings'	=>	'two_sticky_menu',
		'priority'	=>	2,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'two_sticky_bg', array(
		'label'		=>	esc_html__( 'Sticky Menu Background Color', 'foto' ),
		'section'	=>	'header_two_styling',
		'settings'	=>	'two_sticky_bg',
		'priority'	=>	3,
	) ) );

	/*=====================================================================================================*/
	// Set Panel ID
	/*=====================================================================================================*/
	$panel_id_2 = 'foto_demo_section';

	$wp_customize->add_panel( $panel_id_2,
	    array(
	        'priority'          => 199,
	        'capability'        => 'edit_theme_options',
	        'theme_supports'    => '',
	        'title'             => esc_html__( 'Concept / Album Section', 'foto' ),
	        'description'       => esc_html__( 'Edit your header color here.', 'foto' ),
	    )
	);


	/* DEMO-1 CREATIVE GRID STYLING
	================================================== */
	
	$wp_customize->add_section( 'demo1_styling', array(
		'title'		=>	esc_html__( 'Demo-1 Creative Grid', 'foto' ),
		'priority'	=>	200,
		'panel' 	=> $panel_id_2,
	) );
	
	//SECTION

	$wp_customize->add_setting( 'toggle_bg', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'toggle_arrow', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'title_album', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'border_title', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'author_name', array(
		'default'		=> 	'#999999',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'detail_photo', array(
		'default'		=> 	'#9d9d9d',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'detail_icon_photo', array(
		'default'		=> 	'#9d9d9d',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'title_img', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	//CONTROL
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'toggle_bg', array(
		'label'		=>	esc_html__( 'Toggle Background Color', 'foto' ),
		'section'	=>	'demo1_styling',
		'settings'	=>	'toggle_bg',
		'priority'	=>	1,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'toggle_arrow', array(
		'label'		=>	esc_html__( 'Toggle Arrow Color', 'foto' ),
		'section'	=>	'demo1_styling',
		'settings'	=>	'toggle_arrow',
		'priority'	=>	2,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'title_album', array(
		'label'		=>	esc_html__( 'Album Title Color', 'foto' ),
		'section'	=>	'demo1_styling',
		'settings'	=>	'title_album',
		'priority'	=>	3,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'border_title', array(
		'label'		=>	esc_html__( 'Title Border Hover Color', 'foto' ),
		'section'	=>	'demo1_styling',
		'settings'	=>	'border_title',
		'priority'	=>	4,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'author_name', array(
		'label'		=>	esc_html__( 'Author Name Color', 'foto' ),
		'section'	=>	'demo1_styling',
		'settings'	=>	'author_name',
		'priority'	=>	5,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'detail_photo', array(
		'label'		=>	esc_html__( 'Detail Photo Color', 'foto' ),
		'section'	=>	'demo1_styling',
		'settings'	=>	'detail_photo',
		'priority'	=>	6,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'detail_icon_photo', array(
		'label'		=>	esc_html__( 'Detail Photo icon Color', 'foto' ),
		'section'	=>	'demo1_styling',
		'settings'	=>	'detail_icon_photo',
		'priority'	=>	7,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'title_img', array(
		'label'		=>	esc_html__( 'Title Image Color', 'foto' ),
		'section'	=>	'demo1_styling',
		'settings'	=>	'title_img',
		'priority'	=>	8,
	) ) );


	/* DEMO-2 FULLWIDTH SLIDER STYLING
	================================================== */
	
	$wp_customize->add_section( 'demo2_styling', array(
		'title'		=>	esc_html__( 'Demo-2 Fullwidth Slider', 'foto' ),
		'priority'	=>	200,
		'panel' 	=> $panel_id_2,
	) );
	
	//SECTION

	$wp_customize->add_setting( 'border_btn', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'bbg_btn_hov', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'text_btn', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'text_btn_hov', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'title_album2', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'desc_album', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'author_name2', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'arrow_btn', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	//CONTROL
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'border_btn', array(
		'label'		=>	esc_html__( 'Border Button Color', 'foto' ),
		'section'	=>	'demo2_styling',
		'settings'	=>	'border_btn',
		'priority'	=>	1,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bbg_btn_hov', array(
		'label'		=>	esc_html__( 'Border & Background Button Hover Color', 'foto' ),
		'section'	=>	'demo2_styling',
		'settings'	=>	'bbg_btn_hov',
		'priority'	=>	2,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'text_btn', array(
		'label'		=>	esc_html__( 'Text Button Color', 'foto' ),
		'section'	=>	'demo2_styling',
		'settings'	=>	'text_btn',
		'priority'	=>	3,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'text_btn_hov', array(
		'label'		=>	esc_html__( 'Text Button Hover Color', 'foto' ),
		'section'	=>	'demo2_styling',
		'settings'	=>	'text_btn_hov',
		'priority'	=>	4,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'title_album2', array(
		'label'		=>	esc_html__( 'Album Title Color', 'foto' ),
		'section'	=>	'demo2_styling',
		'settings'	=>	'title_album2',
		'priority'	=>	5,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'desc_album', array(
		'label'		=>	esc_html__( 'Description Album Color', 'foto' ),
		'section'	=>	'demo2_styling',
		'settings'	=>	'desc_album',
		'priority'	=>	6,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'author_name2', array(
		'label'		=>	esc_html__( 'Author Name Color', 'foto' ),
		'section'	=>	'demo2_styling',
		'settings'	=>	'author_name2',
		'priority'	=>	7,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'arrow_btn', array(
		'label'		=>	esc_html__( 'Arrow Button Color', 'foto' ),
		'section'	=>	'demo2_styling',
		'settings'	=>	'arrow_btn',
		'priority'	=>	8,
	) ) );


	/* DEMO-3 POLAROID PHOTOSTACK STYLING
	================================================== */
	
	$wp_customize->add_section( 'demo3_styling', array(
		'title'		=>	esc_html__( 'Demo-3 Polaroid Photostack', 'foto' ),
		'priority'	=>	200,
		'panel' 	=> $panel_id_2,
	) );
	
	//SECTION

	$wp_customize->add_setting( 'photo_figure', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'title_album3', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'paginations_1', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'icon_flip', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	//CONTROL
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'photo_figure', array(
		'label'		=>	esc_html__( 'Photostack Figure Color', 'foto' ),
		'section'	=>	'demo3_styling',
		'settings'	=>	'photo_figure',
		'priority'	=>	1,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'title_album3', array(
		'label'		=>	esc_html__( 'Album Title Color', 'foto' ),
		'section'	=>	'demo3_styling',
		'settings'	=>	'title_album3',
		'priority'	=>	2,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'paginations_1', array(
		'label'		=>	esc_html__( 'Paginations Color', 'foto' ),
		'section'	=>	'demo3_styling',
		'settings'	=>	'paginations_1',
		'priority'	=>	3,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'icon_flip', array(
		'label'		=>	esc_html__( 'Flip Icon Color', 'foto' ),
		'section'	=>	'demo3_styling',
		'settings'	=>	'icon_flip',
		'priority'	=>	4,
	) ) );


	/* DEMO-4 POLAROID ELASTIC PHOTOSTACK STYLING
	================================================== */
	
	$wp_customize->add_section( 'demo4_styling', array(
		'title'		=>	esc_html__( 'Demo-4 Polaroid Elastic Photostack', 'foto' ),
		'priority'	=>	200,
		'panel' 	=> $panel_id_2,
	) );
	
	//SECTION

	$wp_customize->add_setting( 'photo_figure2', array(
		'default'		=> 	'#f5f5f5',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'title_album4', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	//CONTROL
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'photo_figure2', array(
		'label'		=>	esc_html__( 'Photostack Figure Color', 'foto' ),
		'section'	=>	'demo4_styling',
		'settings'	=>	'photo_figure2',
		'priority'	=>	1,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'title_album4', array(
		'label'		=>	esc_html__( 'Album Title Color', 'foto' ),
		'section'	=>	'demo4_styling',
		'settings'	=>	'title_album4',
		'priority'	=>	2,
	) ) );


	/* DEMO-5 SVG GRID CONCEPT STYLING
	================================================== */
	
	$wp_customize->add_section( 'demo5_styling', array(
		'title'		=>	esc_html__( 'Demo-5 SVG Grid Concept', 'foto' ),
		'priority'	=>	200,
		'panel' 	=> $panel_id_2,
	) );
	
	//SECTION

	$wp_customize->add_setting( 'title_album5', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'desc_album5', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'border_btn5', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'title_btn5', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'bg_btn5', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'text_btn5_hover', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	//CONTROL
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'title_album5', array(
		'label'		=>	esc_html__( 'Album Title Color', 'foto' ),
		'section'	=>	'demo5_styling',
		'settings'	=>	'title_album5',
		'priority'	=>	1,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'desc_album5', array(
		'label'		=>	esc_html__( 'Album Description Color', 'foto' ),
		'section'	=>	'demo5_styling',
		'settings'	=>	'desc_album5',
		'priority'	=>	2,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'border_btn5', array(
		'label'		=>	esc_html__( 'Border Button Color', 'foto' ),
		'section'	=>	'demo5_styling',
		'settings'	=>	'border_btn5',
		'priority'	=>	3,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'title_btn5', array(
		'label'		=>	esc_html__( 'Text Button Color', 'foto' ),
		'section'	=>	'demo5_styling',
		'settings'	=>	'title_btn5',
		'priority'	=>	4,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bg_btn5', array(
		'label'		=>	esc_html__( 'Background Button Hover Color', 'foto' ),
		'section'	=>	'demo5_styling',
		'settings'	=>	'bg_btn5',
		'priority'	=>	5,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'text_btn5_hover', array(
		'label'		=>	esc_html__( 'Text Button Hover Color', 'foto' ),
		'section'	=>	'demo5_styling',
		'settings'	=>	'text_btn5_hover',
		'priority'	=>	6,
	) ) );


	/* DEMO-6&7 GRID CONCEPT & MASONRY STYLING
	================================================== */
	
	$wp_customize->add_section( 'demo6_styling', array(
		'title'		=>	esc_html__( 'Demo-6&7 Grid Concept & Masonry', 'foto' ),
		'priority'	=>	200,
		'panel' 	=> $panel_id_2,
	) );
	
	//SECTION

	$wp_customize->add_setting( 'title_album6', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	//CONTROL
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'title_album6', array(
		'label'		=>	esc_html__( 'Album Title Color', 'foto' ),
		'section'	=>	'demo6_styling',
		'settings'	=>	'title_album6',
		'priority'	=>	1,
	) ) );


	/* DEMO-8 GRID SWAP EFFECT STYLING
	================================================== */
	
	$wp_customize->add_section( 'demo8_styling', array(
		'title'		=>	esc_html__( 'Demo-8 Grid Grid Swap Effect', 'foto' ),
		'priority'	=>	200,
		'panel' 	=> $panel_id_2,
	) );
	
	//SECTION

	$wp_customize->add_setting( 'title_album8', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'title_hov8', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'title_bg8', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'title_bg8_hov', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	//CONTROL
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'title_album8', array(
		'label'		=>	esc_html__( 'Album Title Color', 'foto' ),
		'section'	=>	'demo8_styling',
		'settings'	=>	'title_album8',
		'priority'	=>	1,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'title_hov8', array(
		'label'		=>	esc_html__( 'Album Title Hover Color', 'foto' ),
		'section'	=>	'demo8_styling',
		'settings'	=>	'title_hov8',
		'priority'	=>	2,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'title_bg8', array(
		'label'		=>	esc_html__( 'Album Title Background Color', 'foto' ),
		'section'	=>	'demo8_styling',
		'settings'	=>	'title_bg8',
		'priority'	=>	3,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'title_bg8_hov', array(
		'label'		=>	esc_html__( 'Album Title Background Hover Color', 'foto' ),
		'section'	=>	'demo8_styling',
		'settings'	=>	'title_bg8_hov',
		'priority'	=>	4,
	) ) );


	/* DEMO-9 CAROUSEL ALBUM STYLING
	================================================== */
	
	$wp_customize->add_section( 'demo9_styling', array(
		'title'		=>	esc_html__( 'Demo-9 Carousel Album', 'foto' ),
		'priority'	=>	200,
		'panel' 	=> $panel_id_2,
	) );
	
	//SECTION

	$wp_customize->add_setting( 'title_album9', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'arrow_btn9', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	//CONTROL
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'title_album9', array(
		'label'		=>	esc_html__( 'Album Title Color', 'foto' ),
		'section'	=>	'demo9_styling',
		'settings'	=>	'title_album9',
		'priority'	=>	1,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'arrow_btn9', array(
		'label'		=>	esc_html__( 'Arrow Button (for all of the concepts used) Color', 'foto' ),
		'section'	=>	'demo9_styling',
		'settings'	=>	'arrow_btn9',
		'priority'	=>	2,
	) ) );


	/* DEMO-10 MULTI SCROLL STYLING
	================================================== */
	
	$wp_customize->add_section( 'demo10_styling', array(
		'title'		=>	esc_html__( 'Demo-10 Multi Scroll', 'foto' ),
		'priority'	=>	200,
		'panel' 	=> $panel_id_2,
	) );
	
	//SECTION

	$wp_customize->add_setting( 'title_album10', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'desc_album10', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'border_title10', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'border_btn10_hov', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'bbg_btn10', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'text_btn10', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'text_btn_hov10', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'paginations_scroll', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	//CONTROL
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'title_album10', array(
		'label'		=>	esc_html__( 'Album Title Color', 'foto' ),
		'section'	=>	'demo10_styling',
		'settings'	=>	'title_album10',
		'priority'	=>	1,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'desc_album10', array(
		'label'		=>	esc_html__( 'Album Description Color', 'foto' ),
		'section'	=>	'demo10_styling',
		'settings'	=>	'desc_album10',
		'priority'	=>	2,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'border_title10', array(
		'label'		=>	esc_html__( 'Title Border Color', 'foto' ),
		'section'	=>	'demo10_styling',
		'settings'	=>	'border_title10',
		'priority'	=>	3,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'border_btn10_hov', array(
		'label'		=>	esc_html__( 'Border Button Hover Color', 'foto' ),
		'section'	=>	'demo10_styling',
		'settings'	=>	'border_btn10_hov',
		'priority'	=>	5,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bbg_btn10', array(
		'label'		=>	esc_html__( 'Border & Background Button Color', 'foto' ),
		'section'	=>	'demo10_styling',
		'settings'	=>	'bbg_btn10',
		'priority'	=>	4,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'text_btn10', array(
		'label'		=>	esc_html__( 'Text Button Color', 'foto' ),
		'section'	=>	'demo10_styling',
		'settings'	=>	'text_btn10',
		'priority'	=>	6,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'text_btn_hov10', array(
		'label'		=>	esc_html__( 'Text Button Hover Color', 'foto' ),
		'section'	=>	'demo10_styling',
		'settings'	=>	'text_btn_hov10',
		'priority'	=>	7,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'paginations_scroll', array(
		'label'		=>	esc_html__( 'Pagination Active Color', 'foto' ),
		'section'	=>	'demo10_styling',
		'settings'	=>	'paginations_scroll',
		'priority'	=>	8,
	) ) );


	/* DEMO-11 GRID IMAGE FLIP STYLING
	================================================== */
	
	$wp_customize->add_section( 'demo11_styling', array(
		'title'		=>	esc_html__( 'Demo-11 Grid Image Flip', 'foto' ),
		'priority'	=>	200,
		'panel' 	=> $panel_id_2,
	) );
	
	//SECTION

	$wp_customize->add_setting( 'title_album11', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	//CONTROL
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'title_album11', array(
		'label'		=>	esc_html__( 'Album Title Color', 'foto' ),
		'section'	=>	'demo11_styling',
		'settings'	=>	'title_album11',
		'priority'	=>	1,
	) ) );


	/* DEMO-12/18 STYLING
	================================================== */
	
	$wp_customize->add_section( 'demo12_18styling', array(
		'title'		=>	esc_html__( 'Demo 12-18', 'foto' ),
		'priority'	=>	200,
		'panel' 	=> $panel_id_2,
	) );
	
	//SECTION

	$wp_customize->add_setting( 'title_album28', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'subtitle_album28', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'border_btn28', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'bg_btn28_hov', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'text_btn28', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'text_btn28_hov', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'arrow_btn28', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'arrow_icon', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'arrow_icon_hov', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'arrow_btn28_hov', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'figure_stack', array(
		'default'		=> 	'#e2e2e2',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'caption_stack', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	//CONTROL
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'title_album28', array(
		'label'		=>	esc_html__( 'Album Title Color', 'foto' ),
		'section'	=>	'demo12_18styling',
		'settings'	=>	'title_album28',
		'priority'	=>	1,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'subtitle_album28', array(
		'label'		=>	esc_html__( 'Album Subtitle Color', 'foto' ),
		'section'	=>	'demo12_18styling',
		'settings'	=>	'subtitle_album28',
		'priority'	=>	2,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'border_btn28', array(
		'label'		=>	esc_html__( 'Border Button Color', 'foto' ),
		'section'	=>	'demo12_18styling',
		'settings'	=>	'border_btn28',
		'priority'	=>	3,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bg_btn28_hov', array(
		'label'		=>	esc_html__( 'Background & Border Button Hover Color', 'foto' ),
		'section'	=>	'demo12_18styling',
		'settings'	=>	'bg_btn28_hov',
		'priority'	=>	4,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'text_btn28', array(
		'label'		=>	esc_html__( 'Text Button Color', 'foto' ),
		'section'	=>	'demo12_18styling',
		'settings'	=>	'text_btn28',
		'priority'	=>	5,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'text_btn28_hov', array(
		'label'		=>	esc_html__( 'Text Button Hover Color', 'foto' ),
		'section'	=>	'demo12_18styling',
		'settings'	=>	'text_btn28_hov',
		'priority'	=>	6,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'arrow_btn28', array(
		'label'		=>	esc_html__( 'Arrow Button Color', 'foto' ),
		'section'	=>	'demo12_18styling',
		'settings'	=>	'arrow_btn28',
		'priority'	=>	7,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'arrow_icon', array(
		'label'		=>	esc_html__( 'Icon Arrow Button Color', 'foto' ),
		'section'	=>	'demo12_18styling',
		'settings'	=>	'arrow_icon',
		'priority'	=>	8,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'arrow_icon_hov', array(
		'label'		=>	esc_html__( 'Icon Arrow Button Hover Color', 'foto' ),
		'section'	=>	'demo12_18styling',
		'settings'	=>	'arrow_icon_hov',
		'priority'	=>	9,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'arrow_btn28_hov', array(
		'label'		=>	esc_html__( 'Arrow Button Background Hover Color', 'foto' ),
		'section'	=>	'demo12_18styling',
		'settings'	=>	'arrow_btn28_hov',
		'priority'	=>	10,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'figure_stack', array(
		'label'		=>	esc_html__( 'Figure on Demo-13 Color', 'foto' ),
		'section'	=>	'demo12_18styling',
		'settings'	=>	'figure_stack',
		'priority'	=>	11,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'caption_stack', array(
		'label'		=>	esc_html__( 'Image Caption on Demo-13 Color', 'foto' ),
		'section'	=>	'demo12_18styling',
		'settings'	=>	'caption_stack',
		'priority'	=>	12,
	) ) );


	/* DEMO-19 GRID POLAROID STYLING
	================================================== */
	
	$wp_customize->add_section( 'demo19_styling', array(
		'title'		=>	esc_html__( 'Demo-19 Polaroid Grid', 'foto' ),
		'priority'	=>	200,
		'panel' 	=> $panel_id_2,
	) );
	
	//SECTION

	$wp_customize->add_setting( 'title_album19', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'subtitle_19', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'bgdemo_19', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	//CONTROL
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'title_album19', array(
		'label'		=>	esc_html__( 'Album Title Color', 'foto' ),
		'section'	=>	'demo19_styling',
		'settings'	=>	'title_album19',
		'priority'	=>	1,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'subtitle_19', array(
		'label'		=>	esc_html__( 'Album Subtitle Color', 'foto' ),
		'section'	=>	'demo19_styling',
		'settings'	=>	'subtitle_19',
		'priority'	=>	2,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bgdemo_19', array(
		'label'		=>	esc_html__( 'Album Polaroid Background', 'foto' ),
		'section'	=>	'demo19_styling',
		'settings'	=>	'bgdemo_19',
		'priority'	=>	3,
	) ) );



	/*=====================================================================================================*/
	// Set Panel ID
	/*=====================================================================================================*/
	$panel_id_3 = 'foto_gallery_section';

	$wp_customize->add_panel( $panel_id_3,
	    array(
	        'priority'          => 199,
	        'capability'        => 'edit_theme_options',
	        'theme_supports'    => '',
	        'title'             => esc_html__( 'Gallery Section', 'foto' ),
	        'description'       => esc_html__( 'Edit your gallery color here.', 'foto' ),
	    )
	);


	/* GALLERY-1 CREATIVE GRID STYLING
	================================================== */
	
	$wp_customize->add_section( 'gallery_styling', array(
		'title'		=>	esc_html__( 'Gallery Creative Grid', 'foto' ),
		'priority'	=>	200,
		'panel' 	=> $panel_id_3,
	) );
	
	//SECTION

	$wp_customize->add_setting( 'title_image', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'caption_gallery', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'detail_icon', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'detail_icon_text', array(
		'default'		=> 	'#909090',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	//CONTROL
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'title_image', array(
		'label'		=>	esc_html__( 'Image Title Color', 'foto' ),
		'section'	=>	'gallery_styling',
		'settings'	=>	'title_image',
		'priority'	=>	1,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'caption_gallery', array(
		'label'		=>	esc_html__( 'Image Caption Color', 'foto' ),
		'section'	=>	'gallery_styling',
		'settings'	=>	'caption_gallery',
		'priority'	=>	2,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'detail_icon', array(
		'label'		=>	esc_html__( 'Detail Camera Icon Color', 'foto' ),
		'section'	=>	'gallery_styling',
		'settings'	=>	'detail_icon',
		'priority'	=>	3,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'detail_icon_text', array(
		'label'		=>	esc_html__( 'Detail Camera text Color', 'foto' ),
		'section'	=>	'gallery_styling',
		'settings'	=>	'detail_icon_text',
		'priority'	=>	4,
	) ) );


	/* GALLERY-2 STANDARD GRID & MASONRY STYLING
	================================================== */
	
	$wp_customize->add_section( 'gallery2_styling', array(
		'title'		=>	esc_html__( 'Gallery Standard Grid & Masonry', 'foto' ),
		'priority'	=>	200,
		'panel' 	=> $panel_id_3,
	) );
	
	//SECTION

	$wp_customize->add_setting( 'title_gallery', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	//CONTROL
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'title_gallery', array(
		'label'		=>	esc_html__( 'Image Title Color', 'foto' ),
		'section'	=>	'gallery2_styling',
		'settings'	=>	'title_gallery',
		'priority'	=>	1,
	) ) );


	/* GALLERY-3 SLIDER INFO GALLERY STYLING
	================================================== */
	
	$wp_customize->add_section( 'gallery3_styling', array(
		'title'		=>	esc_html__( 'Gallery Slider Info Gallery', 'foto' ),
		'priority'	=>	200,
		'panel' 	=> $panel_id_3,
	) );
	
	//SECTION

	$wp_customize->add_setting( 'image_title', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'image_desc', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'image_author', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'type_camera', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	//CONTROL
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'image_title', array(
		'label'		=>	esc_html__( 'Image Title Color', 'foto' ),
		'section'	=>	'gallery3_styling',
		'settings'	=>	'image_title',
		'priority'	=>	1,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'image_desc', array(
		'label'		=>	esc_html__( 'Image Description Color', 'foto' ),
		'section'	=>	'gallery3_styling',
		'settings'	=>	'image_desc',
		'priority'	=>	2,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'image_author', array(
		'label'		=>	esc_html__( 'Image Author Color', 'foto' ),
		'section'	=>	'gallery3_styling',
		'settings'	=>	'image_author',
		'priority'	=>	3,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'type_camera', array(
		'label'		=>	esc_html__( 'Camera Type Text Color', 'foto' ),
		'section'	=>	'gallery3_styling',
		'settings'	=>	'type_camera',
		'priority'	=>	4,
	) ) );

	/*=====================================================================================================*/
	// Set Panel ID
	/*=====================================================================================================*/
	$panel_id_4 = 'foto_page_section';

	$wp_customize->add_panel( $panel_id_4,
	    array(
	        'priority'          => 199,
	        'capability'        => 'edit_theme_options',
	        'theme_supports'    => '',
	        'title'             => esc_html__( 'Pages Section', 'foto' ),
	        'description'       => esc_html__( 'Edit your page color here.', 'foto' ),
	    )
	);

	/* ABOUT ME STYLING
	================================================== */
	
	$wp_customize->add_section( 'about_styling', array(
		'title'		=>	esc_html__( 'About Me', 'foto' ),
		'priority'	=>	200,
		'panel' 	=> $panel_id_4,
	) );
	
	//SECTION

	$wp_customize->add_setting( 'about_title', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'name_author', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'author_desc', array(
		'default'		=> 	'#999999',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'partner_title', array(
		'default'		=> 	'#999999',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'partner_desc', array(
		'default'		=> 	'#999999',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'testi_text', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'testi_author', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	//CONTROL
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'about_title', array(
		'label'		=>	esc_html__( 'About Title (h5) Color', 'foto' ),
		'section'	=>	'about_styling',
		'settings'	=>	'about_title',
		'priority'	=>	1,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'name_author', array(
		'label'		=>	esc_html__( 'Author Name Color', 'foto' ),
		'section'	=>	'about_styling',
		'settings'	=>	'name_author',
		'priority'	=>	2,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'author_desc', array(
		'label'		=>	esc_html__( 'Author Description Color', 'foto' ),
		'section'	=>	'about_styling',
		'settings'	=>	'author_desc',
		'priority'	=>	3,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'partner_title', array(
		'label'		=>	esc_html__( 'Block Partner Title Color', 'foto' ),
		'section'	=>	'about_styling',
		'settings'	=>	'partner_title',
		'priority'	=>	4,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'partner_desc', array(
		'label'		=>	esc_html__( 'Block Partner Description Color', 'foto' ),
		'section'	=>	'about_styling',
		'settings'	=>	'partner_desc',
		'priority'	=>	5,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'testi_text', array(
		'label'		=>	esc_html__( 'Testimonial Text Color', 'foto' ),
		'section'	=>	'about_styling',
		'settings'	=>	'testi_text',
		'priority'	=>	6,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'testi_author', array(
		'label'		=>	esc_html__( 'Testimonial Author Name Color', 'foto' ),
		'section'	=>	'about_styling',
		'settings'	=>	'testi_author',
		'priority'	=>	7,
	) ) );


	/* ABOUT US STYLING
	================================================== */
	
	$wp_customize->add_section( 'about_us_styling', array(
		'title'		=>	esc_html__( 'About Us', 'foto' ),
		'priority'	=>	200,
		'panel' 	=> $panel_id_4,
	) );
	
	//SECTION

	$wp_customize->add_setting( 'title_about', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'desc_about', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'team_name', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'team_job', array(
		'default'		=> 	'#999999',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'team_sosmed', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'bord_deco', array(
		'default'		=> 	'#363636',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	//CONTROL
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'title_about', array(
		'label'		=>	esc_html__( 'About Title (H2) Color', 'foto' ),
		'section'	=>	'about_us_styling',
		'settings'	=>	'title_about',
		'priority'	=>	1,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'desc_about', array(
		'label'		=>	esc_html__( 'About & Team Description Color', 'foto' ),
		'section'	=>	'about_us_styling',
		'settings'	=>	'desc_about',
		'priority'	=>	2,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'team_name', array(
		'label'		=>	esc_html__( 'Team Name Color', 'foto' ),
		'section'	=>	'about_us_styling',
		'settings'	=>	'team_name',
		'priority'	=>	3,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'team_job', array(
		'label'		=>	esc_html__( 'Team Position/job Color', 'foto' ),
		'section'	=>	'about_us_styling',
		'settings'	=>	'team_job',
		'priority'	=>	4,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'team_sosmed', array(
		'label'		=>	esc_html__( 'Team Social Media Icon Color', 'foto' ),
		'section'	=>	'about_us_styling',
		'settings'	=>	'team_sosmed',
		'priority'	=>	5,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bord_deco', array(
		'label'		=>	esc_html__( 'Border Decorations Color', 'foto' ),
		'section'	=>	'about_us_styling',
		'settings'	=>	'bord_deco',
		'priority'	=>	6,
	) ) );


	/* BLOG STYLING
	================================================== */
	
	$wp_customize->add_section( 'blog_styling', array(
		'title'		=>	esc_html__( 'Blog', 'foto' ),
		'priority'	=>	200,
		'panel' 	=> $panel_id_4,
	) );
	
	//SECTION

	$wp_customize->add_setting( 'border_blog', array(
		'default'		=> 	'#f0f0f0',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'border_top', array(
		'default'		=> 	'#e3e3e3',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'bg_blog', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'category_border', array(
		'default'		=> 	'#e4e4e4',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'category_border_hov', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'category_text', array(
		'default'		=> 	'#cacaca',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'category_text_hov', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'title_blog', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'post_meta', array(
		'default'		=> 	'#737479',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'title_border', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'post_desc', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'read_btn', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'icon_share', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'block_quote', array(
		'default'		=> 	'#cccccc',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'tags_post', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'title_sidebar', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'title_border_sidebar', array(
		'default'		=> 	'#e4e4e4',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'sidebar_widget_border', array(
		'default'		=> 	'#eaeaea',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'btn_post_comment_bg', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'btn_comment_bordhov', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'btn_comment_text', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'btn_comment_text_hover', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	//CONTROL
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'border_blog', array(
		'label'		=>	esc_html__( 'Border Color', 'foto' ),
		'section'	=>	'blog_styling',
		'settings'	=>	'border_blog',
		'priority'	=>	1,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'border_top', array(
		'label'		=>	esc_html__( 'Border Bottom Color', 'foto' ),
		'section'	=>	'blog_styling',
		'settings'	=>	'border_top',
		'priority'	=>	2,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bg_blog', array(
		'label'		=>	esc_html__( 'BLog Background Color', 'foto' ),
		'section'	=>	'blog_styling',
		'settings'	=>	'bg_blog',
		'priority'	=>	3,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'category_border', array(
		'label'		=>	esc_html__( 'Category Border Color', 'foto' ),
		'section'	=>	'blog_styling',
		'settings'	=>	'category_border',
		'priority'	=>	4,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'category_border_hov', array(
		'label'		=>	esc_html__( 'Category Border Hover Color', 'foto' ),
		'section'	=>	'blog_styling',
		'settings'	=>	'category_border_hov',
		'priority'	=>	5,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'category_text', array(
		'label'		=>	esc_html__( 'Category Text Color', 'foto' ),
		'section'	=>	'blog_styling',
		'settings'	=>	'category_text',
		'priority'	=>	6,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'category_text_hov', array(
		'label'		=>	esc_html__( 'Category Text Hover Color', 'foto' ),
		'section'	=>	'blog_styling',
		'settings'	=>	'category_text_hov',
		'priority'	=>	7,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'title_blog', array(
		'label'		=>	esc_html__( 'Blog Title Color', 'foto' ),
		'section'	=>	'blog_styling',
		'settings'	=>	'title_blog',
		'priority'	=>	8,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'post_meta', array(
		'label'		=>	esc_html__( 'Post Meta Color', 'foto' ),
		'section'	=>	'blog_styling',
		'settings'	=>	'post_meta',
		'priority'	=>	9,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'title_border', array(
		'label'		=>	esc_html__( 'Border Title Color', 'foto' ),
		'section'	=>	'blog_styling',
		'settings'	=>	'title_border',
		'priority'	=>	10,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'post_desc', array(
		'label'		=>	esc_html__( 'Post Description Color', 'foto' ),
		'section'	=>	'blog_styling',
		'settings'	=>	'post_desc',
		'priority'	=>	11,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'read_btn', array(
		'label'		=>	esc_html__( 'Read Article Button Color', 'foto' ),
		'section'	=>	'blog_styling',
		'settings'	=>	'read_btn',
		'priority'	=>	12,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'icon_share', array(
		'label'		=>	esc_html__( 'Social Share Button Background Color', 'foto' ),
		'section'	=>	'blog_styling',
		'settings'	=>	'icon_share',
		'priority'	=>	13,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'block_quote', array(
		'label'		=>	esc_html__( 'Block Quote Background Color', 'foto' ),
		'section'	=>	'blog_styling',
		'settings'	=>	'block_quote',
		'priority'	=>	14,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tags_post', array(
		'label'		=>	esc_html__( 'Tags Color', 'foto' ),
		'section'	=>	'blog_styling',
		'settings'	=>	'tags_post',
		'priority'	=>	15,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'title_sidebar', array(
		'label'		=>	esc_html__( 'Sidebar Title Color', 'foto' ),
		'section'	=>	'blog_styling',
		'settings'	=>	'title_sidebar',
		'priority'	=>	16,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'title_border_sidebar', array(
		'label'		=>	esc_html__( 'Sidebar Title Border Color', 'foto' ),
		'section'	=>	'blog_styling',
		'settings'	=>	'title_border_sidebar',
		'priority'	=>	17,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sidebar_widget_border', array(
		'label'		=>	esc_html__( 'Sidebar Content Border Color', 'foto' ),
		'section'	=>	'blog_styling',
		'settings'	=>	'sidebar_widget_border',
		'priority'	=>	18,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'btn_post_comment_bg', array(
		'label'		=>	esc_html__( 'Post Comment Button Background Color', 'foto' ),
		'section'	=>	'blog_styling',
		'settings'	=>	'btn_post_comment_bg',
		'priority'	=>	19,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'btn_comment_bordhov', array(
		'label'		=>	esc_html__( 'Post Comment Button Border hover Color', 'foto' ),
		'section'	=>	'blog_styling',
		'settings'	=>	'btn_comment_bordhov',
		'priority'	=>	20,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'btn_comment_text', array(
		'label'		=>	esc_html__( 'Post Comment Text Color', 'foto' ),
		'section'	=>	'blog_styling',
		'settings'	=>	'btn_comment_text',
		'priority'	=>	21,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'btn_comment_text_hover', array(
		'label'		=>	esc_html__( 'Post Comment Text Hover Color', 'foto' ),
		'section'	=>	'blog_styling',
		'settings'	=>	'btn_comment_text_hover',
		'priority'	=>	22,
	) ) );


	/* CONTACT MAP FULL WIDTH STYLING
	================================================== */
	
	$wp_customize->add_section( 'contact_styling', array(
		'title'		=>	esc_html__( 'Contact Map Full Width', 'foto' ),
		'priority'	=>	200,
		'panel' 	=> $panel_id_4,
	) );
	
	//SECTION

	$wp_customize->add_setting( 'title_contact', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'contact_info', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'contact_desc', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'form_text', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'btn_contact', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'btn_contact_hov', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'btn_contact_text', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'btn_contact_text_hov', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'form_bg', array(
		'default'		=> 	'#e7e7e7',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	//CONTROL
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'title_contact', array(
		'label'		=>	esc_html__( 'Page Title Color', 'foto' ),
		'section'	=>	'contact_styling',
		'settings'	=>	'title_contact',
		'priority'	=>	1,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'contact_info', array(
		'label'		=>	esc_html__( 'Contact Info Color', 'foto' ),
		'section'	=>	'contact_styling',
		'settings'	=>	'contact_info',
		'priority'	=>	2,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'contact_desc', array(
		'label'		=>	esc_html__( 'Contact Description Color', 'foto' ),
		'section'	=>	'contact_styling',
		'settings'	=>	'contact_desc',
		'priority'	=>	3,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'form_text', array(
		'label'		=>	esc_html__( 'Contact Form Text Color', 'foto' ),
		'section'	=>	'contact_styling',
		'settings'	=>	'form_text',
		'priority'	=>	4,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'btn_contact', array(
		'label'		=>	esc_html__( 'Contact Form Button Send Background Color', 'foto' ),
		'section'	=>	'contact_styling',
		'settings'	=>	'btn_contact',
		'priority'	=>	5,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'btn_contact_hov', array(
		'label'		=>	esc_html__( 'Contact Form Button Send Background Hover Color', 'foto' ),
		'section'	=>	'contact_styling',
		'settings'	=>	'btn_contact_hov',
		'priority'	=>	6,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'btn_contact_text', array(
		'label'		=>	esc_html__( 'Contact Form Button Send Text Color', 'foto' ),
		'section'	=>	'contact_styling',
		'settings'	=>	'btn_contact_text',
		'priority'	=>	7,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'btn_contact_text_hov', array(
		'label'		=>	esc_html__( 'Contact Form Button Send Text Hover Color', 'foto' ),
		'section'	=>	'contact_styling',
		'settings'	=>	'btn_contact_text_hov',
		'priority'	=>	8,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'form_bg', array(
		'label'		=>	esc_html__( 'Contact Form Color (All Layout)', 'foto' ),
		'section'	=>	'contact_styling',
		'settings'	=>	'form_bg',
		'priority'	=>	9,
	) ) );


	/* CONTACT HALF COLUMN MAP AND INFO STYLING
	================================================== */
	
	$wp_customize->add_section( 'contact2_styling', array(
		'title'		=>	esc_html__( 'Contact Half Column Map & Info', 'foto' ),
		'priority'	=>	200,
		'panel' 	=> $panel_id_4,
	) );
	
	//SECTION

	$wp_customize->add_setting( 'bg_info', array(
		'default'		=> 	'#555555',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'title_info', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'detail_info', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'desc_contact', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'contact_form_text', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	//CONTROL
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bg_info', array(
		'label'		=>	esc_html__( 'Contact Info Background Color', 'foto' ),
		'section'	=>	'contact2_styling',
		'settings'	=>	'bg_info',
		'priority'	=>	1,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'title_info', array(
		'label'		=>	esc_html__( 'Contact Info Title Color', 'foto' ),
		'section'	=>	'contact2_styling',
		'settings'	=>	'title_info',
		'priority'	=>	2,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'detail_info', array(
		'label'		=>	esc_html__( 'Contact Info Detail Color', 'foto' ),
		'section'	=>	'contact2_styling',
		'settings'	=>	'detail_info',
		'priority'	=>	3,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'desc_contact', array(
		'label'		=>	esc_html__( 'Contact Description Color', 'foto' ),
		'section'	=>	'contact2_styling',
		'settings'	=>	'desc_contact',
		'priority'	=>	4,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'contact_form_text', array(
		'label'		=>	esc_html__( 'Contact Form Text Color', 'foto' ),
		'section'	=>	'contact2_styling',
		'settings'	=>	'contact_form_text',
		'priority'	=>	5,
	) ) );


	/* PAGE STYLING
	================================================== */
	
	$wp_customize->add_section( 'page_styling', array(
		'title'		=>	esc_html__( 'Page Content', 'foto' ),
		'priority'	=>	200,
		'panel' 	=> $panel_id_4,
	) );
	
	//SECTION

	$wp_customize->add_setting( 'subtitle_page', array(
		'default'		=> 	'#cacaca',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	//CONTROL
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'subtitle_page', array(
		'label'		=>	esc_html__( 'Subtitle Color', 'foto' ),
		'section'	=>	'page_styling',
		'settings'	=>	'subtitle_page',
		'priority'	=>	1,
	) ) );


	/*=====================================================================================================*/
	// Set Panel ID
	/*=====================================================================================================*/
	$panel_id_5 = 'foto_footer_section';

	$wp_customize->add_panel( $panel_id_5,
	    array(
	        'priority'          => 199,
	        'capability'        => 'edit_theme_options',
	        'theme_supports'    => '',
	        'title'             => esc_html__( 'Footer Section', 'foto' ),
	        'description'       => esc_html__( 'Edit your footer color here.', 'foto' ),
	    )
	);


	/* FOOTER-1 STYLING
	================================================== */
	
	$wp_customize->add_section( 'footer1_styling', array(
		'title'		=>	esc_html__( 'Footer Default & Footer Copyright Center', 'foto' ),
		'priority'	=>	200,
		'panel' 	=> $panel_id_5,
	) );
	
	//SECTION

	$wp_customize->add_setting( 'footer_default_bg', array(
		'default'		=> 	'',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'copyright_text1', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'footer_sosmed', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'footer_icon_sosmed', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	//CONTROL

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_default_bg', array(
		'label'		=>	esc_html__( 'Footer Default Background', 'foto' ),
		'section'	=>	'footer1_styling',
		'settings'	=>	'footer_default_bg',
		'priority'	=>	1,
	) ) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'copyright_text1', array(
		'label'		=>	esc_html__( 'Copyright Color', 'foto' ),
		'section'	=>	'footer1_styling',
		'settings'	=>	'copyright_text1',
		'priority'	=>	1,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_sosmed', array(
		'label'		=>	esc_html__( 'Icon Social Media Background Color', 'foto' ),
		'section'	=>	'footer1_styling',
		'settings'	=>	'footer_sosmed',
		'priority'	=>	2,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_icon_sosmed', array(
		'label'		=>	esc_html__( 'Icon Social Media Icon Color', 'foto' ),
		'section'	=>	'footer1_styling',
		'settings'	=>	'footer_icon_sosmed',
		'priority'	=>	3,
	) ) );


	/* FOOTER-2 STYLING
	================================================== */
	
	$wp_customize->add_section( 'footer2_styling', array(
		'title'		=>	esc_html__( 'Footer With Description', 'foto' ),
		'priority'	=>	200,
		'panel' 	=> $panel_id_5,
	) );
	
	//SECTION

	$wp_customize->add_setting( 'footer_bg', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'footer_desc', array(
		'default'		=> 	'#a2a2a2',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'footer_cr', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'footer_sosmed2', array(
		'default'		=> 	'#a2a2a2',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'footer_icon_sosmed2', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'btn_buy_bord', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'btn_buy_hov', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'btn_buy_text', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'btn_buy_texthov', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	//CONTROL
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_bg', array(
		'label'		=>	esc_html__( 'Footer Background Color', 'foto' ),
		'section'	=>	'footer2_styling',
		'settings'	=>	'footer_bg',
		'priority'	=>	1,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_desc', array(
		'label'		=>	esc_html__( 'Footer Description Color', 'foto' ),
		'section'	=>	'footer2_styling',
		'settings'	=>	'footer_desc',
		'priority'	=>	2,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_cr', array(
		'label'		=>	esc_html__( 'Footer Copyright Color', 'foto' ),
		'section'	=>	'footer2_styling',
		'settings'	=>	'footer_cr',
		'priority'	=>	3,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_sosmed2', array(
		'label'		=>	esc_html__( 'Footer Social Media Background Color', 'foto' ),
		'section'	=>	'footer2_styling',
		'settings'	=>	'footer_sosmed2',
		'priority'	=>	4,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_icon_sosmed2', array(
		'label'		=>	esc_html__( 'Footer Social Media Icon Color', 'foto' ),
		'section'	=>	'footer2_styling',
		'settings'	=>	'footer_icon_sosmed2',
		'priority'	=>	5,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'btn_buy_bord', array(
		'label'		=>	esc_html__( 'Button Border Color', 'foto' ),
		'section'	=>	'footer2_styling',
		'settings'	=>	'btn_buy_bord',
		'priority'	=>	6,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'btn_buy_hov', array(
		'label'		=>	esc_html__( 'Button Border & Background Hover Color', 'foto' ),
		'section'	=>	'footer2_styling',
		'settings'	=>	'btn_buy_hov',
		'priority'	=>	7,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'btn_buy_text', array(
		'label'		=>	esc_html__( 'Button Text Color', 'foto' ),
		'section'	=>	'footer2_styling',
		'settings'	=>	'btn_buy_text',
		'priority'	=>	8,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'btn_buy_texthov', array(
		'label'		=>	esc_html__( 'Button Text Hover Color', 'foto' ),
		'section'	=>	'footer2_styling',
		'settings'	=>	'btn_buy_texthov',
		'priority'	=>	9,
	) ) );

//require_once get_template_directory() . '/inc/panels/color-output.php';