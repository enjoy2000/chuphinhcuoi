<?php

//define('FOTO_FRAMEWORK_DIR', get_template_directory() . '/inc/option/core' );

//Set the content width based on the theme's design and stylesheet.
if ( ! isset( $content_width ) )
	$content_width = 1170; /* pixels */

/*-----------------------------------------------------------------------------------*/
/*  SETUP THEME
/*-----------------------------------------------------------------------------------*/
if ( ! function_exists( 'foto_setup' ) ) :

	function foto_setup() {
		// several theme support
		add_theme_support( 'automatic-feed-links' );
        add_theme_support( 'custom-background' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form' ) );	
		add_theme_support( 'html5', array( 'gallery', 'caption' ) );
		load_theme_textdomain( 'foto', get_template_directory() .'/languages' );
		add_theme_support( "title-tag" );

}
endif;
add_action( 'after_setup_theme', 'foto_setup' );

function foto_thumbnail_setup() {
add_image_size( 'foto-elastistack-concept', 340, 300, true );
add_image_size( 'foto-gridsvg-concept', 460, 800, true );
add_image_size( 'foto-concept-1', 594, 396, true );
add_image_size( 'foto-concept-3', 320, 340, true );
add_image_size( 'foto-concept-6', 940, 705, false );
add_image_size( 'foto-concept-11', 270, 203, true );
}

add_action('after_setup_theme', 'foto_thumbnail_setup');

/*-----------------------------------------------------------------------------------*/
/*  ACF
/*-----------------------------------------------------------------------------------*/

add_filter('acf/settings/show_admin', '__return_false');

function foto_remove_update_nag($value) {
	unset($value->response[ 'advanced-custom-fields-pro/acf.php' ]);
	return $value;
}
add_filter('site_transient_update_plugins', 'foto_remove_update_nag');

/*-----------------------------------------------------------------------------------*/
/*  SCRIPTS & STYLES
/*-----------------------------------------------------------------------------------*/

function foto_scripts() {

//All necessary CSS

wp_enqueue_style( 'foto-sm-menu-css', get_template_directory_uri() .'/css/sm-menu.css', array(), null );
wp_enqueue_style( 'foto-plugin-css', get_template_directory_uri() .'/css/plugin.css', array(), null );
wp_enqueue_style( 'foto-font-css', get_template_directory_uri() .'/css/font.css', array(), null );
wp_enqueue_style( 'foto-column-css', get_template_directory_uri() .'/css/column.css', array(), null );
wp_enqueue_style( 'foto-responsive-css', get_template_directory_uri() .'/css/responsive.css', array(), null );
wp_enqueue_style( 'foto-style', get_stylesheet_uri(), array( 'foto-plugin-css' ) );


//All Necessary Script

wp_enqueue_script( 'foto-modernizr', get_template_directory_uri(). '/js/modernizr.js', array( 'jquery' ), '', true );

	if( is_page_template('template/concept-8.php') ) {
		wp_dequeue_script( 'foto-modernizr' );
		wp_enqueue_script( 'foto-modernizr-samsung', get_template_directory_uri(). '/js/modernizr-samsung.js', array( 'jquery' ), '', true );
	}
	elseif( is_page_template('template/concept-11.php') ) {
		wp_dequeue_script( 'foto-modernizr' );
		wp_enqueue_script( 'foto-modernizr-isometric', get_template_directory_uri(). '/js/modernizr-isometric.js', array( 'jquery' ), '', true );
	}

	global $post_type;
	if( 'foto-gallery' == $post_type ){
	$gallery_type	=	get_field('gallery_type');

		if($gallery_type == 'samsunggridGallery') {
			wp_dequeue_script( 'foto-modernizr' );
			wp_enqueue_script( 'foto-modernizr-samsung', get_template_directory_uri(). '/js/modernizr-samsung.js', array( 'jquery' ), '', true );
		}
	}

wp_enqueue_script( 'foto-plugins', get_template_directory_uri(). '/js/plugin.js', array( 'jquery' ), '', true );
wp_enqueue_script( 'foto-pathLoader', get_template_directory_uri(). '/js/pathLoader.js', array( 'jquery' ), '', true );
wp_enqueue_script( 'foto-loader', get_template_directory_uri(). '/js/page-loader.js', array( 'jquery' ), '', true );

if ( class_exists( 'Redux' ) ) {
$options = get_option('foto_framework');

if (isset($options['loader_gif']['background-image'])) {
$foto_loader_gif = $options['loader_gif']['background-image'];
}

if (!empty( $foto_loader_gif ) ) {
wp_dequeue_script( 'foto-pathLoader' );
wp_dequeue_script( 'foto-loader' );
}
}

wp_enqueue_script( 'foto-main-js', get_template_directory_uri(). '/js/main.js', array( 'jquery', 'masonry' ), '', true );
	
	// page template
	if( is_page_template('template/concept-1.php') ) {
		wp_enqueue_script( 'foto-concept-1-js', get_template_directory_uri(). '/js/concept-1.js', array( 'jquery' ), '', true );
	}
	elseif( is_page_template('template/concept-2.php') ) {
		wp_enqueue_script( 'backgroundcheck-js', get_template_directory_uri(). '/js/backgroundcheck.js', array( 'jquery' ), '', true );
		wp_enqueue_script( 'slitslider-js', get_template_directory_uri(). '/js/slitslider.js', array( 'jquery' ), '', true );
		wp_enqueue_script( 'foto-concept-2-js', get_template_directory_uri(). '/js/concept-2.js', array( 'jquery' ), '', true );
	}
	elseif( is_page_template('template/concept-3.php') ) {
		wp_enqueue_script( 'foto-paraloid', get_template_directory_uri(). '/js/photostack.js', array( 'jquery' ), '', true );
	}
	elseif( is_page_template('template/concept-4.php') ) {
		wp_enqueue_script( 'elastiStack', get_template_directory_uri(). '/js/elastiStack.js', array( 'jquery' ), '', true );
	}
	elseif( is_page_template('template/concept-5.php') ) {
		wp_enqueue_script( 'gridsvg', get_template_directory_uri(). '/js/gridsvg.js', array( 'jquery' ), '', true );
	}
	elseif( is_page_template('template/concept-8.php') ) {
		wp_enqueue_style( 'grid-samsung-css', get_template_directory_uri() .'/css/grid-samsung.css', array(), null );
		wp_dequeue_script( 'foto-pathLoader' );
		wp_dequeue_script( 'foto-loader' );
		wp_enqueue_script( 'colorfinder', get_template_directory_uri(). '/js/colorfinder.js', array( 'jquery' ), '', true );
		wp_enqueue_script( 'gridScrollFx', get_template_directory_uri(). '/js/gridScrollFx.js', array( 'jquery' ), '', true );
	}
	elseif( is_page_template('template/concept-10.php') ) {
		wp_enqueue_style( 'multiscroll-css', get_template_directory_uri() .'/css/multiscroll.css', array(), null );
		wp_enqueue_script( 'backgroundcheck-js', get_template_directory_uri(). '/js/backgroundcheck.js', array( 'jquery' ), '', true );
	}
	elseif( is_page_template('template/concept-11.php') ) {
		wp_enqueue_style( 'isometricgrid-css', get_template_directory_uri() .'/css/isometricgrid.css', array(), null );
		wp_dequeue_script( 'foto-pathLoader' );
		wp_dequeue_script( 'foto-loader' );
		wp_enqueue_script( 'isometric-grid', get_template_directory_uri(). '/js/isometric-grid.js', array( 'jquery' ), '', true );
		wp_enqueue_script( 'animOnScroll', get_template_directory_uri(). '/js/animOnScroll.js', array( 'jquery' ), '', true );
		wp_enqueue_script( 'dynamics', get_template_directory_uri(). '/js/dynamics.js', array( 'jquery' ), '', true );
	}
	elseif( is_page_template('template/concept-12.php') ) {
		wp_enqueue_script( 'foto-anime', get_template_directory_uri(). '/js/anime.min.js', array( 'jquery' ), '', true );
		wp_enqueue_script( 'foto-imagesloaded.pkgd', get_template_directory_uri(). '/js/imagesloaded.pkgd.min.js', array( 'jquery' ), '', true );
		wp_enqueue_script( 'foto-concept-slide-codrops', get_template_directory_uri(). '/js/concept-slide-codrops.js', array( 'jquery' ), '', true );
	}
	elseif( is_page_template('template/concept-13.php') ) {
		wp_enqueue_script( 'foto-anime', get_template_directory_uri(). '/js/anime.min.js', array( 'jquery' ), '', true );
		wp_enqueue_script( 'foto-imagesloaded.pkgd', get_template_directory_uri(). '/js/imagesloaded.pkgd.min.js', array( 'jquery' ), '', true );
		wp_enqueue_script( 'foto-concept-slide-codrops', get_template_directory_uri(). '/js/concept-slide-codrops.js', array( 'jquery' ), '', true );
	}
	elseif( is_page_template('template/concept-14.php') ) {
		wp_enqueue_script( 'foto-anime', get_template_directory_uri(). '/js/anime.min.js', array( 'jquery' ), '', true );
		wp_enqueue_script( 'foto-imagesloaded.pkgd', get_template_directory_uri(). '/js/imagesloaded.pkgd.min.js', array( 'jquery' ), '', true );
		wp_enqueue_script( 'foto-concept-slide-codrops', get_template_directory_uri(). '/js/concept-slide-codrops.js', array( 'jquery' ), '', true );
	}
	elseif( is_page_template('template/concept-15.php') ) {
		wp_enqueue_script( 'foto-anime', get_template_directory_uri(). '/js/anime.min.js', array( 'jquery' ), '', true );
		wp_enqueue_script( 'foto-imagesloaded.pkgd', get_template_directory_uri(). '/js/imagesloaded.pkgd.min.js', array( 'jquery' ), '', true );
		wp_enqueue_script( 'foto-concept-slide-codrops', get_template_directory_uri(). '/js/concept-slide-codrops.js', array( 'jquery' ), '', true );
	}
	elseif( is_page_template('template/concept-16.php') ) {
		wp_enqueue_script( 'foto-anime', get_template_directory_uri(). '/js/anime.min.js', array( 'jquery' ), '', true );
		wp_enqueue_script( 'foto-imagesloaded.pkgd', get_template_directory_uri(). '/js/imagesloaded.pkgd.min.js', array( 'jquery' ), '', true );
		wp_enqueue_script( 'foto-concept-slide-codrops', get_template_directory_uri(). '/js/concept-slide-codrops.js', array( 'jquery' ), '', true );
	}
	elseif( is_page_template('template/concept-17.php') ) {
		wp_enqueue_script( 'foto-anime', get_template_directory_uri(). '/js/anime.min.js', array( 'jquery' ), '', true );
		wp_enqueue_script( 'foto-imagesloaded.pkgd', get_template_directory_uri(). '/js/imagesloaded.pkgd.min.js', array( 'jquery' ), '', true );
		wp_enqueue_script( 'foto-concept-slide-codrops', get_template_directory_uri(). '/js/concept-slide-codrops.js', array( 'jquery' ), '', true );
	}
	elseif( is_page_template('template/concept-18.php') ) {
		wp_enqueue_script( 'foto-anime', get_template_directory_uri(). '/js/anime.min.js', array( 'jquery' ), '', true );
		wp_enqueue_script( 'foto-imagesloaded.pkgd', get_template_directory_uri(). '/js/imagesloaded.pkgd.min.js', array( 'jquery' ), '', true );
		wp_enqueue_script( 'foto-concept-slide-codrops', get_template_directory_uri(). '/js/concept-slide-codrops.js', array( 'jquery' ), '', true );
	}

	// post type script
	global $post_type;
    if( 'foto-gallery' == $post_type ){
    	$gallery_type	=	get_field('gallery_type');

    	if($gallery_type == 'defaultGallery') {
    		wp_enqueue_script( 'foto-gallery', get_template_directory_uri(). '/js/main-gallery1.js', array( 'jquery' ), '', true );
			wp_enqueue_script( 'foto-mansonry', get_template_directory_uri(). '/js/single-gallery1.js', array( 'jquery' ), '', true );
		}
		elseif($gallery_type == 'polaroidGallery') {
			wp_enqueue_script( 'foto-paraloid', get_template_directory_uri(). '/js/photostack.js', array( 'jquery' ), '', true );
		}
		elseif($gallery_type == 'isogridGallery') {
			//wp_enqueue_style( 'chocolate-css', get_template_directory_uri() .'/css/chocolate.css', array(), null );
			wp_enqueue_script( 'chocolate', get_template_directory_uri(). '/js/chocolate.js', array( 'jquery' ), '', true );
		}
		elseif($gallery_type == 'isomasonryGallery') {
			//wp_enqueue_style( 'chocolate-css', get_template_directory_uri() .'/css/chocolate.css', array(), null );
			wp_enqueue_script( 'chocolate', get_template_directory_uri(). '/js/chocolate.js', array( 'jquery' ), '', true ); 
		}
		elseif($gallery_type == 'samsunggridGallery') {
			wp_enqueue_style( 'fgrid-samsung-css', get_template_directory_uri() .'/css/grid-samsung.css', array(), null );
			wp_dequeue_script( 'foto-pathLoader' );
			wp_dequeue_script( 'foto-loader' );
			wp_enqueue_script( 'colorfinder', get_template_directory_uri(). '/js/colorfinder.js', array( 'jquery' ), '', true );
			wp_enqueue_script( 'gridScrollFx', get_template_directory_uri(). '/js/gridScrollFx.js', array( 'jquery' ), '', true );
		}
		elseif($gallery_type == 'carouselGallery') {
			//wp_enqueue_style( 'chocolate-css', get_template_directory_uri() .'/css/chocolate.css', array(), null );
			wp_enqueue_script( 'chocolate', get_template_directory_uri(). '/js/chocolate.js', array( 'jquery' ), '', true );
		}
		elseif($gallery_type == 'gridexpandGallery') {
			//wp_enqueue_style( 'chocolate-css', get_template_directory_uri() .'/css/chocolate.css', array(), null );
			wp_enqueue_script( 'chocolate', get_template_directory_uri(). '/js/chocolate.js', array( 'jquery' ), '', true );
			wp_enqueue_style( 'grid-expand-css', get_template_directory_uri() .'/css/grid-expand.css', array(), null );
			wp_enqueue_script( 'grid-expand', get_template_directory_uri(). '/js/grid-expand.js', array( 'jquery' ), '', true );
		}
		elseif($gallery_type == 'fullsliderGallery') {
			wp_enqueue_script( 'backgroundcheck-js', get_template_directory_uri(). '/js/backgroundcheck.js', array( 'jquery' ), '', true );
			wp_enqueue_script( 'slitslider-js', get_template_directory_uri(). '/js/slitslider.js', array( 'jquery' ), '', true );
			wp_enqueue_script( 'foto-concept-2-js', get_template_directory_uri(). '/js/concept-2.js', array( 'jquery' ), '', true );
		}
		elseif($gallery_type == 'svggridgallery') {
			wp_enqueue_script( 'gridsvg', get_template_directory_uri(). '/js/gridsvg.js', array( 'jquery' ), '', true );
		}
		elseif($gallery_type == 'listgallery') {
			wp_enqueue_script( 'adptivebg-js', get_template_directory_uri(). '/js/adptivebg.js', array( 'jquery' ), '', true );
			//wp_enqueue_style( 'chocolate-css', get_template_directory_uri() .'/css/chocolate.css', array(), null );
			wp_enqueue_script( 'chocolate', get_template_directory_uri(). '/js/chocolate.js', array( 'jquery' ), '', true );
		}
		elseif($gallery_type == 'polargridgallery') {
			//wp_enqueue_style( 'chocolate-css', get_template_directory_uri() .'/css/chocolate.css', array(), null );
			wp_enqueue_script( 'chocolate', get_template_directory_uri(). '/js/chocolate.js', array( 'jquery' ), '', true );
		}
		elseif($gallery_type == 'sliderinfogallery') {
			wp_enqueue_script( 'backgroundcheck-js', get_template_directory_uri(). '/js/backgroundcheck.js', array( 'jquery' ), '', true );
		}
    } // post type script end

    if ( class_exists( 'Redux' ) ) {
		$options = get_option('foto_framework');
		$foto_header_fixed = $options['header_fixed'];
		$foto_header_type = $options['header_type'];
		if (isset($options['loader_gif']['background-image'])) {
		$foto_loader_gif = $options['loader_gif']['background-image'];

		if ( ! empty( $foto_loader_gif ) ) {
				wp_enqueue_script( 'foto-loader-gif', get_template_directory_uri(). '/js/loader-gif.js', array( 'jquery' ), '', true );
			}
		} //if isset loader image

		if( $foto_header_fixed == true ) {
			wp_enqueue_script( 'foto-header-fixed', get_template_directory_uri(). '/js/header-fixed.js', array( 'jquery' ), '', true );
		} //if redux active and foto header fixed true

		if( $foto_header_type == 'leftside' ) {
			wp_enqueue_script( 'foto-header-side', get_template_directory_uri(). '/js/header-side.js', array( 'jquery' ), '', true );
		} //if redux active and foto header side true

	} //if redux active
}

add_action( 'wp_enqueue_scripts', 'foto_scripts' );

/* live customizer preview */
function foto_customizer_live_preview() {
	wp_enqueue_script( 'akmanda-customizer', get_template_directory_uri().'/js/akmanda-customizer.js', array( 'jquery','customize-preview' ), NULL, true);
}
add_action( 'customize_preview_init', 'foto_customizer_live_preview' );

/* admin script widgets */
function foto_admin_enqueue()
{
	wp_register_script( 'adminscript', get_template_directory_uri(). '/js/admin-script.js' );
	wp_enqueue_media();
	wp_enqueue_script('adminscript');
}
add_action('admin_enqueue_scripts', 'foto_admin_enqueue');

/*comment script*/
function foto_comment_reply(){
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
        
}
add_action( 'wp_enqueue_scripts', 'foto_comment_reply' );

/*-----------------------------------------------------------------------------------*/
/*  CALL FRAMEWORK
/*-----------------------------------------------------------------------------------*/

require_once( get_template_directory() . '/inc/option/panel/config.php' );

/*-----------------------------------------------------------------------------------*/
/*  MENU
/*-----------------------------------------------------------------------------------*/

//Register Menus
add_action( 'after_setup_theme', 'foto_register_my_menu' );
function foto_register_my_menu() {
	register_nav_menu( 'header-menu', esc_html__( 'Header Menu', 'foto' ) );
	register_nav_menu( 'menu-right', esc_html__( 'Menu Right (if Header Two)', 'foto' ) );
}

//TOP MENU
function foto_top_nav_menu(){
  wp_nav_menu( array(
	'theme_location' => 'header-menu',
	'container'       => 'ul',
   'menu_class'      => 'sm sm-clean',
	'fallback_cb'  => 'foto_header_menu_cb'
  ));
}

function foto_right_nav_menu(){
  wp_nav_menu( array(
	'theme_location' => 'menu-right',
	'container'       => 'ul',
   'menu_class'      => 'sm sm-clean menu-right',
	'fallback_cb'  => 'foto_right_menu_cb'
  ));
}

// FALLBACK IF PRIMARY MENU HAVEN'T SET YET
function foto_header_menu_cb() {
  echo '<ul id="main-menu" class="menus sm sm-clean">';
  wp_list_pages('title_li=');
  echo '</ul>';
}

function foto_right_menu_cb() {
  echo '<ul id="menu-right-menu" class="menus sm sm-clean menu-right">';
  wp_list_pages('title_li=');
  echo '</ul>';
}

/*-----------------------------------------------------------------------------------*/
/*  HEADER
/*-----------------------------------------------------------------------------------*/



// logo text or image huh?
function foto_logo_type(){

$options = get_option('foto_framework');
$logo = '';
if (isset($options['logo_upload'])) {
$logo = $options['logo_upload'];
$foto_upload_logo = $logo['url'];
}



if ( ! empty( $foto_upload_logo ) ) { ?>

	<div class="logo-image">
	<a href="<?php echo esc_url( home_url() ); ?>/"><img src="<?php echo esc_url( $foto_upload_logo ); ?>" class="image-logo" alt="logo" /></a>
	</div>
	
	<?php } else { ?> 
	
	<div class="logo-title">
		<h2 class="site-title">
			<a href="<?php echo esc_url( home_url() ); ?>/" rel="home"><?php bloginfo( 'name' ); ?></a>
		</h2>
	</div>

<?php }

} 

function foto_logo_svg(){
$options = get_option('foto_framework');
$logo2 = '';
if (isset($options['logo_upload2'])) {
$logo2 = $options['logo_upload2'];
$foto_upload_logo2 = $logo2['url'];
}

if ( ! empty( $foto_upload_logo2 ) ) { ?>

	<div class="logo-image">
	<a href="<?php echo esc_url( home_url() ); ?>/">
		<img src="<?php echo esc_url( $foto_upload_logo2 ); ?>" class="image-logo svg" alt="<?php esc_html_e( 'logo', 'foto' ); ?>" />
	</a>
	</div>

<?php } else { ?> 
	
	<div class="logo-title">
		<h2 class="site-title">
			<a href="<?php echo esc_url( home_url() ); ?>/" rel="home"><?php bloginfo( 'name' ); ?></a>
		</h2>
	</div>

<?php }
}

/*-----------------------------------------------------------------------------------*/
/*  WIDGET
/*-----------------------------------------------------------------------------------*/


// SETUP DEFAULT SIDEBAR
function foto_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Primary Sidebar', 'foto' ),
		'id'            => 'primary-sidebar',
		'before_widget' => '<div id="%1$s" class="sidebar-widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="heading-block"><h4>',
		'after_title'   => '</h4></div>',
	) );
}
add_action( 'widgets_init', 'foto_widgets_init' );

require_once( get_template_directory() . '/inc/widget/foto-latestpost-widget.php' );
require_once( get_template_directory() . '/inc/widget/foto-about-widget.php' );

/*-----------------------------------------------------------------------------------*/
/*  CUSTOM FUNCTIONS
/*-----------------------------------------------------------------------------------*/
require_once( get_template_directory() . '/inc/function/custom.php' );
require_once( get_template_directory() . '/inc/function/navigation.php' );
require_once( get_template_directory() . '/inc/function/aq_resizer.php' );
require_once( get_template_directory() . '/inc/function/comment.php' );
require_once( get_template_directory() . '/inc/function/meta-box.php' );
require_once( get_template_directory() . '/inc/function/akmanda-customizer.php' );

// INSTALL NECESSARY PLUGINS
require_once( get_template_directory() . '/class-tgm.php' ); /*activate plugin function*/
