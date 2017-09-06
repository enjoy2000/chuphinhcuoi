<?php 

	/*
	*
	*	Theme Customizer Options
	*	------------------------------------------------
	*	Themes Awesome Framework
	* 	Copyright Themes Awesome 2016 - http://www.themesawesome.com
	*
	*	foto_customize_register()
	*	foto_customize_preview()
	*
	*/
	
	if (!function_exists('foto_customize_register')) {
		function foto_customize_register($wp_customize) {
		
			$wp_customize->get_setting('blogname')->transport='postMessage';
			$wp_customize->get_setting('blogdescription')->transport='postMessage';
			$wp_customize->get_setting('header_textcolor')->transport='postMessage';

			// general Controls
			require_once get_template_directory() . '/inc/panels/general-options.php';

			// color Controls
			require_once get_template_directory() . '/inc/panels/color-options.php';

			// header default Controls
			require_once get_template_directory() . '/inc/panels/header-options.php';


		}
		add_action( 'customize_register', 'foto_customize_register' );

	}

	require_once get_template_directory() . '/inc/panels/color-output.php';

	require_once get_template_directory() . '/inc/panels/thememod-output.php';

if ( ! function_exists( 'foto_sanitize_html' ) ) {
	function foto_sanitize_html( $input ) {
		$input = force_balance_tags( $input );

		$allowed_html = array(
			'a'      => array(
				'href'  => array(),
				'title' => array(),
			),
			'br'     => array(),
			'em'     => array(),
			'img'    => array(
				'alt'    => array(),
				'src'    => array(),
				'srcset' => array(),
				'title'  => array(),
			),
			'strong' => array(),
		);
		$output       = wp_kses( $input, $allowed_html );

		return $output;
	}
}

if ( ! function_exists( 'foto_sanitize_select' ) ) {
	function foto_sanitize_select( $input ) {
		if ( is_numeric( $input ) ) {
			return intval( $input );
		}
	}
}