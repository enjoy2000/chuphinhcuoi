<?php
	/*
	Plugin Name: Foto Extra
	Plugin URI: http://www.themesawesome.com
	Description: A plugin to add functionality to Premium Theme Foto from Themes Awesome
	Version: 1.0
	Author: Themes Awesome
	Author URI: http://www.themesawesome.com
	License: GPL2
	*/



define( 'FOTO_EXTRA_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
define( 'FOTO_EXTRA_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );



// Flush rewrite rules on activation
function foto_extra_activation() {
    flush_rewrite_rules(true);
}


/*-----------------------------------------------------------------------------------*/
/* The Album custom post type
/*-----------------------------------------------------------------------------------*/

if ( ! function_exists('foto_gallery_register') ) {

// Register Custom Post Type
function foto_gallery_register() {

    $labels = array(
        'name'               => _x('Album', 'Album General Name', 'finance'),
        'singular_name'      => _x('Album', 'Album Singular Name', 'finance'),
        'add_new'            => _x('Add New', 'Add New Album Name', 'finance'),
        'add_new_item'       => __('Add New Album', 'finance'),
        'edit_item'          => __('Edit Album', 'finance'),
        'new_item'           => __('New Album', 'finance'),
        'view_item'          => __('View Album', 'finance'),
        'search_items'       => __('Search Album', 'finance'),
        'not_found'          => __('Nothing found', 'finance'),
        'not_found_in_trash' => __('Nothing found in Trash', 'finance'),
        'parent_item_colon'  => ''
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'query_var'          => 'gallery',
        'capability_type'    => 'post',
        'hierarchical'       => false,
        'rewrite'            => array( 'slug' => 'album' ),
        'supports'           => array('title','editor','thumbnail'),
        'menu_position'       => 5,

    ); 

    register_post_type( 'foto-gallery', $args );

}

// Hook into the 'init' action
add_action( 'init', 'foto_gallery_register', 0 );

}

/*-----------------------------------------------------------------------------------*/
/* The Team custom post type
/*-----------------------------------------------------------------------------------*/

if ( ! function_exists('foto_team_register') ) {

// Register Custom Post Type
function foto_team_register() {

    $labels = array(
        'name'               => _x('Team', 'Team General Name', 'finance'),
        'singular_name'      => _x('Team', 'Team Singular Name', 'finance'),
        'add_new'            => _x('Add New', 'Add New Team Name', 'finance'),
        'add_new_item'       => __('Add New Team', 'finance'),
        'edit_item'          => __('Edit Team', 'finance'),
        'new_item'           => __('New Team', 'finance'),
        'view_item'          => __('View Team', 'finance'),
        'search_items'       => __('Search Team', 'finance'),
        'not_found'          => __('Nothing found', 'finance'),
        'not_found_in_trash' => __('Nothing found in Trash', 'finance'),
        'parent_item_colon'  => ''
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'query_var'          => 'team',
        'capability_type'    => 'post',
        'hierarchical'       => false,
        'rewrite'            => array( 'slug' => 'team' ),
        'supports'           => array('title','editor','thumbnail'),
        'menu_position'       => 5,

    ); 

    register_post_type( 'foto-team', $args );

}

// Hook into the 'init' action
add_action( 'init', 'foto_team_register', 0 );

}

/*-----------------------------------------------------------------------------------*/
/* The Client custom post type
/*-----------------------------------------------------------------------------------*/

if ( ! function_exists('foto_client_register') ) {

// Register Custom Post Type
function foto_client_register() {

    $labels = array(
        'name'               => _x('Client', 'Client General Name', 'finance'),
        'singular_name'      => _x('Client', 'Client Singular Name', 'finance'),
        'add_new'            => _x('Add New', 'Add New Client Name', 'finance'),
        'add_new_item'       => __('Add New Client', 'finance'),
        'edit_item'          => __('Edit Client', 'finance'),
        'new_item'           => __('New Client', 'finance'),
        'view_item'          => __('View Client', 'finance'),
        'search_items'       => __('Search Client', 'finance'),
        'not_found'          => __('Nothing found', 'finance'),
        'not_found_in_trash' => __('Nothing found in Trash', 'finance'),
        'parent_item_colon'  => ''
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'query_var'          => 'client',
        'capability_type'    => 'post',
        'hierarchical'       => false,
        'rewrite'            => array( 'slug' => 'client' ),
        'supports'           => array('title','editor','thumbnail'),
        'menu_position'       => 5,

    ); 

    register_post_type( 'foto-client', $args );

}

// Hook into the 'init' action
add_action( 'init', 'foto_client_register', 0 );

}

/*-----------------------------------------------------------------------------------*/
/* The Testimonial custom post type
/*-----------------------------------------------------------------------------------*/

if ( ! function_exists('foto_testimonial_register') ) {

// Register Custom Post Type
function foto_testimonial_register() {

    $labels = array(
        'name'               => _x('Testimonial', 'Testimonial General Name', 'finance'),
        'singular_name'      => _x('Testimonial', 'Testimonial Singular Name', 'finance'),
        'add_new'            => _x('Add New', 'Add New Testimonial Name', 'finance'),
        'add_new_item'       => __('Add New Testimonial', 'finance'),
        'edit_item'          => __('Edit Testimonial', 'finance'),
        'new_item'           => __('New Testimonial', 'finance'),
        'view_item'          => __('View Testimonial', 'finance'),
        'search_items'       => __('Search Testimonial', 'finance'),
        'not_found'          => __('Nothing found', 'finance'),
        'not_found_in_trash' => __('Nothing found in Trash', 'finance'),
        'parent_item_colon'  => ''
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'query_var'          => 'testimonial',
        'capability_type'    => 'post',
        'hierarchical'       => false,
        'rewrite'            => array( 'slug' => 'testimonial' ),
        'supports'           => array('title','editor','thumbnail'),
        'menu_position'       => 5,

    ); 

    register_post_type( 'foto-testimonial', $args );

}

// Hook into the 'init' action
add_action( 'init', 'foto_testimonial_register', 0 );

}



if(!function_exists('redux_register_custom_extension_loader')) :
    function redux_register_custom_extension_loader($ReduxFramework) {
        $path    = dirname( __FILE__ ) . '/extensions/';
            $folders = scandir( $path, 1 );
            foreach ( $folders as $folder ) {
                if ( $folder === '.' or $folder === '..' or ! is_dir( $path . $folder ) ) {
                    continue;
                }
                $extension_class = 'ReduxFramework_Extension_' . $folder;
                if ( ! class_exists( $extension_class ) ) {
                    // In case you wanted override your override, hah.
                    $class_file = $path . $folder . '/extension_' . $folder . '.php';
                    $class_file = apply_filters( 'redux/extension/' . $ReduxFramework->args['opt_name'] . '/' . $folder, $class_file );
                    if ( $class_file ) {
                        require_once( $class_file );
                    }
                }
                if ( ! isset( $ReduxFramework->extensions[ $folder ] ) ) {
                    $ReduxFramework->extensions[ $folder ] = new $extension_class( $ReduxFramework );
                }
            }
    }
    // Modify {$redux_opt_name} to match your opt_name
    add_action("redux/extensions/foto_framework/before", 'redux_register_custom_extension_loader', 0);
endif;


    include_once dirname( __FILE__ ) . '/foto-importer.php';
