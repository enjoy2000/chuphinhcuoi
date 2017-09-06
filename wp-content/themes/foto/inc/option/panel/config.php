<?php


    if ( ! class_exists( 'Redux' ) ) {
        return;
    }


if (!class_exists("FOTO_Framework_Config")) {

    class FOTO_Framework_Config {

        public $args = array();
        public $sections = array();
        public $theme;
        public $ReduxFramework;

        public function __construct() {
            // This is needed. Bah WordPress bugs.  ;)
            if ( get_template_directory() && strpos( Redux_Helpers::cleanFilePath( __FILE__ ), Redux_Helpers::cleanFilePath( get_template_directory() ) ) !== false) {
                $this->initSettings();
            } else {
                add_action('plugins_loaded', array($this, 'initSettings'), 10);    
            }
        }

        public function initSettings() {

            if ( !class_exists("ReduxFramework" ) ) {
                return;
            }       
            
            $this->theme = wp_get_theme();
            $this->setArguments();
            $this->setHelpTabs();
            $this->setSections();

            if (!isset($this->args['opt_name'])) { 
                return;
            }

            $this->ReduxFramework = new ReduxFramework($this->sections, $this->args);
        }

        public function setSections() {



            ob_start();

            $ct = wp_get_theme();
            $this->theme = $ct;
            $item_name = $this->theme->get('Name');
            $tags = $this->theme->Tags;
            $screenshot = $this->theme->get_screenshot();
            $class = $screenshot ? 'has-screenshot' : '';

            $customize_title = sprintf(__('Customize &#8220;%s&#8221;', 'foto'), $this->theme->display('Name'));
            ?>
            

            <?php
            $item_info = ob_get_contents();

            ob_end_clean();


            // DECLARATION OF SECTIONS

            $this->sections[] = array(
                'icon' => ' el-icon-credit-card',
                'icon_class' => 'icon-large',
                'title' => esc_html__('Header Options', 'foto'),
                'fields' => array(
                    
                    array(
                        'id' => 'logo_upload',
                        'type' => 'media',
                        'url' => true,
                        'compiler' => 'true',
                        'title' => esc_html__('Logo Upload', 'foto'), 
                        'desc' => esc_html__('Upload your logo image here.', 'foto'),
                    ),

                    array(
                        'id'       => 'header_type',
                        'type'     => 'select',
                        'title'    => esc_html__( 'Header Type', 'foto' ),
                        'subtitle' => esc_html__( 'Select Your Header Type', 'foto' ),
                        'options'  => array(
                            'default' => esc_html__( 'Default', 'foto' ),
                            'leftside' => esc_html__( 'Left Side Bar', 'foto' ),
                            'headertwo' => esc_html__( 'Header Two', 'foto' ),
                            'headercenter' => esc_html__( 'Header Center', 'foto' ),
                        ),
                        'default'  => 'default'
                    ),

                    array(
                        'id'       => 'header_fixed',
                        'type'     => 'checkbox',
                        'title'    => esc_html__( 'Allow Header Fixed', 'foto' ),
                        'subtitle' => esc_html__( 'This option allow you to turn on or off your sticky header.', 'foto' ),
                        'desc'     => esc_html__( 'Check the box for sticky header.', 'foto' ),
                        'default'  => '0'// 1 = on | 0 = off
                    ),

                    array (
                        'id'=>'header_side_size',
                        'type' => 'text',
                        'title' => esc_html__('Header Side Size', 'foto'), 
                        'subtitle' => esc_html__('Define Size Width for Header Side.', 'foto'),
                        'desc'     => esc_html__( 'You can add a number and px or % append. eg: 30% or 30px.', 'foto' ),
                        'default'  => '',
                    ),

                    array (
                        'id'=>'wrap_side_size',
                        'type' => 'text',
                        'title' => esc_html__('Wrapper Size (by padding).', 'foto'), 
                        'subtitle' => esc_html__('Define Padding Left for Wrapper.', 'foto'),
                        'desc'     => esc_html__( 'You can add a number and px or % append if you use Header Side Size. eg: 30% or 30px.', 'foto' ),
                        'default'  => '',
                    ),
                    
                    array(
                        'id'       => 'header_2_width',
                        'type'     => 'dimensions',
                        'units'    => array('px'),
                        'title'    => esc_html__('Header Two Menus Width.', 'foto'),
                        'subtitle' => esc_html__('Define width for header with two menus (px)', 'foto'),
                        'output'   => array('#header.two-menus .width-container'),
                        'height'   => false,
                        'default'  => array(
                            'Width'   => '1170', 
                            'Height'  => false
                        ),
                    ),
                        
                )
            );

            $this->sections[] = array(
                'icon' => 'el-icon-fullscreen',
                'icon_class' => 'icon-large',
                'title' => esc_html__('Page Options', 'foto'),
                'fields' => array(
                    
                    array(
                        'id' => 'loader_gif',
                        'type' => 'background',
                        'output' => array('#status'),
                        'title' => esc_html__('Loader Image', 'foto'), 
                        'desc' => esc_html__('Upload your own loader image.', 'foto'),
                        'default' => ''
                    ),

                    array(
                        'id'       => 'content_type',
                        'type'     => 'select',
                        'title'    => esc_html__( 'Content Wrap Type', 'foto' ),
                        'subtitle' => esc_html__( 'Select Your Content Wrap Layout Type', 'foto' ),
                        'options'  => array(
                            'fullwidth' => esc_html__( 'Full Width', 'foto' ),
                            'container' => esc_html__( 'Container', 'foto' ),
                        ),
                        'default'  => 'container'
                    ),

                    array(
                        'id'       => 'blog_type',
                        'type'     => 'select',
                        'title'    => esc_html__( 'Single Post and Blog Layout Type', 'foto' ),
                        'subtitle' => esc_html__( 'Select Your Single Post and Blog Layout Type', 'foto' ),
                        'options'  => array(
                            'fullwidth' => esc_html__( 'Full Width', 'foto' ),
                            'sidebar' => esc_html__( 'Sidebar', 'foto' ),
                        ),
                        'default'  => 'sidebar'
                    ),

                    array (
                        'id'=>'blog_title',
                        'type' => 'text',
                        'title' => esc_html__('Blog Title', 'foto'), 
                        'subtitle' => esc_html__('Blog Title Text', 'foto'),
                        'default'  => '',
                    ),

                    array (
                        'id'=>'blog_subtitle',
                        'type' => 'textarea',
                        'title' => esc_html__('Blog Subtitle', 'foto'), 
                        'subtitle' => esc_html__('HTML Allowed', 'foto'),
                        'default'  => '',
                    ),
                    
                )
            );


            $this->sections[] = array(
                'icon' => 'el-icon-photo',
                'icon_class' => 'icon-large',
                'title' => esc_html__('Footer Options', 'foto'),
                'fields' => array(

                    array(
                        'id'       => 'allow_comment',
                        'type'     => 'checkbox',
                        'title'    => esc_html__( 'Allow Page Comment', 'foto' ),
                        'subtitle' => esc_html__( 'This option allow you to turn on or off your page comment.', 'foto' ),
                        'desc'     => esc_html__( 'Check the box for display comment.', 'foto' ),
                        'default'  => '1'// 1 = on | 0 = off
                    ),

                    array(
                        'id'       => 'foto_use_footer',
                        'type'     => 'select',
                        'title'    => esc_html__( 'Allow Footer To Your Site.', 'foto' ),
                        'options'  => array(
                            'use-footer' => esc_html__( 'Use Footer', 'foto' ),
                            'no-footer' => esc_html__( 'No Footer', 'foto' ),
                        ),
                        'default'  => 'use-footer',
                    ),

                    array(
                        'id'       => 'footer_type',
                        'type'     => 'select',
                        'title'    => esc_html__( 'Footer Type', 'foto' ),
                        'subtitle' => esc_html__('Select your footer type for your site.', 'foto'),
                        'options'  => array(
                            'footer-default' => esc_html__( 'Footer Default', 'foto' ),
                            'footer-desc' => esc_html__( 'Footer With Description', 'foto' ),
                            'footer-center' => esc_html__( 'Footer Copyright Center', 'foto' ),
                        ),
                        'default'  => 'footer-default',
                    ),

                    array(
                        'id'       => 'footer_side',
                        'type'     => 'checkbox',
                        'title'    => esc_html__( 'Allow Footer For Header Side', 'foto' ),
                        'subtitle' => esc_html__( 'This option add a footer copyright and social profile to bottom if header side.', 'foto' ),
                        'desc'     => esc_html__( 'Check the box for display the footer side version.', 'foto' ),
                        'default'  => '0'// 1 = on | 0 = off
                    ),

                    array(
                        'id' => 'footer_bg',
                        'type' => 'media',
                        'url' => true,
                        'compiler' => 'true',
                        'title' => esc_html__('Footer Background', 'foto'), 
                        'subtitle' => esc_html__('for Footer with Description Layout.', 'foto'),
                    ),

                    array(
                        'id'=>'footer_desc',
                        'type' => 'textarea',
                        'title' => esc_html__('Footer Description', 'foto'), 
                        'subtitle' => esc_html__('Add Your Text Here (for footer description layout, HTML allowed)', 'foto'),
                    ),

                    array (
                        'id'=>'footer_button',
                        'type' => 'text',
                        'title' => esc_html__('Footer Button', 'foto'), 
                        'subtitle' => esc_html__('Footer Button Text', 'foto'),
                        'default'  => '',
                    ),

                    array (
                        'id'=>'footer_link',
                        'type' => 'text',
                        'title' => esc_html__('Footer Link', 'foto'), 
                        'subtitle' => esc_html__('Footer Button Link', 'foto'),
                        'default'  => '',
                    ),


                    array(
                        'id'=>'footer-text',
                        'type' => 'editor',
                        'title' => esc_html__('Footer Text', 'foto'), 
                        'subtitle' => esc_html__('Add Your Copyright Here', 'foto'),
                        'default' => '',
                    )
                )
            );


            $this->sections[] = array(
                'icon' => 'el-icon-list-alt',
                'title' => esc_html__('Typography Options', 'foto'),
                'fields' => array(

                    array(
                            'id'=>'font_api',
                            'type' => 'text',
                            'title' => esc_html__('Google API', 'foto'), 
                            'subtitle' => esc_html__('Insert your google API keys for fonts', 'foto'),
                            'default' => 'AIzaSyAX_2L_UzCDPEnAHTG7zhESRVpMPS4ssII',
                        ),


                    array(
                        'id'=>'body-font',
                        'type' => 'typography', 
                        'title' => esc_html__('Body Options', 'foto'),
                        'compiler'=>true, // Use if you want to hook in your own CSS compiler
                        'google'=>true, // Disable google fonts. Won't work if you haven't defined your google api key
                        'font-backup'=>true, // Select a backup non-google font in addition to a google font
                        //'font-style'=>false, // Includes font-style and weight. Can use font-style or font-weight to declare
                        'subsets'=>false, // Only appears if google is true and subsets not set to false
                        'font-size'=>false,
                        'line-height'=>false,
                        //'word-spacing'=>true, // Defaults to false
                        //'letter-spacing'=>true, // Defaults to false
                        'color'=>false,
                        //'preview'=>false, // Disable the previewer
                        'output' => array('body'), // An array of CSS selectors to apply this font style to dynamically
                        'units'=>'px', // Defaults to px
                        'subtitle'=> esc_html__('Set website body font (leave form empty if you want to use default)', 'foto'),
                        'default'=> array(
                            'font-style' => '400',
                            'font-family' => 'Karla',
                            'google' => true,

                        )
                    ),  


                    array(
                        'id'=>'heading-font',
                        'type' => 'typography', 
                        'title' => esc_html__('Heading Typography', 'foto'),
                        //'compiler'=>true, // Use if you want to hook in your own CSS compiler
                        'google'=>true, // Disable google fonts. Won't work if you haven't defined your google api key
                        'font-backup'=>true, // Select a backup non-google font in addition to a google font
                        //'font-style'=>false, // Includes font-style and weight. Can use font-style or font-weight to declare
                        'subsets'=>false, // Only appears if google is true and subsets not set to false
                        'font-size'=>false,
                        'line-height'=>false,
                        //'word-spacing'=>true, // Defaults to false
                        //'letter-spacing'=>true, // Defaults to false
                        'color'=>false,
                        //'preview'=>false, // Disable the previewer
                        'output' => array('h1', 'h2', 'h3','h4','h5','h6'), // An array of CSS selectors to apply this font style to dynamically
                        'units'=>'px', // Defaults to px
                        'subtitle'=> esc_html__('Set website heading font (leave form empty if you want to use default)', 'foto'),
                        'default'=> array(

                            'font-style' => '400',
                            'font-family' => 'Montserrat',
                            'google' => true,

                        )
                    ),


                 array(
                        'id'=>'menu-font',
                        'type' => 'typography', 
                        'title' => esc_html__('Menu Typography', 'foto'),
                        //'compiler'=>true, // Use if you want to hook in your own CSS compiler
                        'google'=>true, // Disable google fonts. Won't work if you haven't defined your google api key
                        'font-backup'=>true, // Select a backup non-google font in addition to a google font
                        //'font-style'=>false, // Includes font-style and weight. Can use font-style or font-weight to declare
                        'subsets'=>false, // Only appears if google is true and subsets not set to false
                        'font-size'=>false,
                        'line-height'=>false,
                        //'word-spacing'=>true, // Defaults to false
                        //'letter-spacing'=>true, // Defaults to false
                        'color'=>false,
                        //'preview'=>false, // Disable the previewer
                        'output' => array('nav.menu li a, nav.menu li a:hover'), // An array of CSS selectors to apply this font style to dynamically
                        'units'=>'px', // Defaults to px
                        'subtitle'=> esc_html__('Set website menu font (leave form empty if you want to use default)', 'foto'),
                        'default'=> array(

                            'font-style' => '400',
                            'font-family' => 'Montserrat',
                            'google' => true,

                        )
                    ),
                    
                )
            );

        
            $this->sections[] = array(
                'icon' => 'el-icon-twitter',
                'title' => esc_html__('Social Profile', 'foto'),
                'fields' => array(

                    array(
                        'id'=>'facebook_profile',
                        'type' => 'text',
                        'title' => esc_html__('Facebook Profile', 'foto'),
                        'validate' => 'url',
                        'default' => ''
                        ),

                    array(
                        'id'=>'twitter_profile',
                        'type' => 'text',
                        'title' => esc_html__('twitter Profile', 'foto'),
                        'validate' => 'url',
                        'default' => ''
                        ),


                    array(
                        'id'=>'google_profile',
                        'type' => 'text',
                        'title' => esc_html__('Google+ Profile', 'foto'),
                        'validate' => 'url',
                        'default' => ''
                        ),


                    array(
                        'id'=>'linkedin_profile',
                        'type' => 'text',
                        'title' => esc_html__('linkedin Profile', 'foto'),
                        'validate' => 'url',
                        'default' => ''
                        ),


                    array(
                        'id'=>'pinterest_profile',
                        'type' => 'text',
                        'title' => esc_html__('Pinterest Profile', 'foto'),
                        'validate' => 'url',
                        'default' => ''
                        ),

                    array(
                        'id'=>'dribble_profile',
                        'type' => 'text',
                        'title' => esc_html__('Dribble Profile', 'foto'),
                        'validate' => 'url',
                        'default' => ''
                        ),

                    array(
                        'id'=>'flickr_profile',
                        'type' => 'text',
                        'title' => esc_html__('Flickr Profile', 'foto'),
                        'validate' => 'url',
                        'default' => ''
                        ),

                    array(
                        'id'=>'behance_profile',
                        'type' => 'text',
                        'title' => esc_html__('Behance Profile', 'foto'),
                        'validate' => 'url',
                        'default' => ''
                        ),

                    array(
                        'id'=>'youtube_profile',
                        'type' => 'text',
                        'title' => esc_html__('Youtube Profile', 'foto'),
                        'validate' => 'url',
                        'default' => ''
                        ),

                    array(
                        'id'=>'soundcloud_profile',
                        'type' => 'text',
                        'title' => esc_html__('Soundcloud Profile', 'foto'),
                        'validate' => 'url',
                        'default' => ''
                        ),

                    array(
                        'id'=>'codepen_profile',
                        'type' => 'text',
                        'title' => esc_html__('Codepen Profile', 'foto'),
                        'validate' => 'url',
                        'default' => ''
                        ),

                    array(
                        'id'=>'deviantart_profile',
                        'type' => 'text',
                        'title' => esc_html__('Deviantart Profile', 'foto'),
                        'validate' => 'url',
                        'default' => ''
                        ),

                    array(
                        'id'=>'digg_profile',
                        'type' => 'text',
                        'title' => esc_html__('Digg Profile', 'foto'),
                        'validate' => 'url',
                        'default' => ''
                        ),

                    array(
                        'id'=>'dropbox_profile',
                        'type' => 'text',
                        'title' => esc_html__('Dropbox Profile', 'foto'),
                        'validate' => 'url',
                        'default' => ''
                        ),

                    array(
                        'id'=>'github_profile',
                        'type' => 'text',
                        'title' => esc_html__('Github Profile', 'foto'),
                        'validate' => 'url',
                        'default' => ''
                        ),

                    array(
                        'id'=>'instagram_profile',
                        'type' => 'text',
                        'title' => esc_html__('Instagram Profile', 'foto'),
                        'validate' => 'url',
                        'default' => ''
                        ),

                    array(
                        'id'=>'skype_profile',
                        'type' => 'text',
                        'title' => esc_html__('Skype Profile', 'foto'),
                        'validate' => 'url',
                        'default' => ''
                        ),

                    array(
                        'id'=>'spotify_profile',
                        'type' => 'text',
                        'title' => esc_html__('Spotify Profile', 'foto'),
                        'validate' => 'url',
                        'default' => ''
                        ),

                    array(
                        'id'=>'steam_profile',
                        'type' => 'text',
                        'title' => esc_html__('Steam Profile', 'foto'),
                        'validate' => 'url',
                        'default' => ''
                        ),

                    array(
                        'id'=>'trello_profile',
                        'type' => 'text',
                        'title' => esc_html__('Trello Profile', 'foto'),
                        'validate' => 'url',
                        'default' => ''
                        ),

                    array(
                        'id'=>'tumblr_profile',
                        'type' => 'text',
                        'title' => esc_html__('Tumblr Profile', 'foto'),
                        'validate' => 'url',
                        'default' => ''
                        ),

                    array(
                        'id'=>'vimeo_profile',
                        'type' => 'text',
                        'title' => esc_html__('Vimeo Profile', 'foto'),
                        'validate' => 'url',
                        'default' => ''
                        ),

                    array(
                        'id'=>'wechat_profile',
                        'type' => 'text',
                        'title' => esc_html__('Wechat Profile', 'foto'),
                        'validate' => 'url',
                        'default' => ''
                        ),

                    array(
                        'id'=>'weibo_profile',
                        'type' => 'text',
                        'title' => esc_html__('Weibo Profile', 'foto'),
                        'validate' => 'url',
                        'default' => ''
                        ),

                    array(
                        'id'=>'wordpress_profile',
                        'type' => 'text',
                        'title' => esc_html__('WordPress Profile', 'foto'),
                        'validate' => 'url',
                        'default' => ''
                        ),

                    array(
                        'id'=>'xing_profile',
                        'type' => 'text',
                        'title' => esc_html__('Xing Profile', 'foto'),
                        'validate' => 'url',
                        'default' => ''
                        ),

                    array(
                        'id'=>'yahoo_profile',
                        'type' => 'text',
                        'title' => esc_html__('Yahoo Profile', 'foto'),
                        'validate' => 'url',
                        'default' => ''
                        ),

                    array(
                        'id'=>'yelp_profile',
                        'type' => 'text',
                        'title' => esc_html__('Yelp Profile', 'foto'),
                        'validate' => 'url',
                        'default' => ''
                        ),
                    
                )
            
            ); 
            






        }

        public function setHelpTabs() {

            // Custom page help tabs, displayed using the help API. Tabs are shown in order of definition.
            $this->args['help_tabs'][] = array(
                'id' => 'redux-opts-1',
                'title' => esc_html__('Theme Information 1', 'foto'),
                'content' => esc_html__('<p>Please go to themesawesome.com to get support</p>', 'foto')
            );
        }


        public function setArguments() {

            $theme = wp_get_theme(); // For use with some settings. Not necessary.
            $options = get_option('finance_framework');
            $font_api = $options['font_api'];

            $this->args = array(
                // TYPICAL -> Change these values as you need/desire
                'opt_name' => 'foto_framework', // This is where your data is stored in the database and also becomes your global variable name.
                'display_name' => $theme->get('Name'), // Name that appears at the top of your panel
                'display_version' => $theme->get('Version'), // Version that appears at the top of your panel
                'menu_type' => 'menu', //Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
                'allow_sub_menu' => true, // Show the sections below the admin menu item or not
                'menu_title' => esc_html__('Options', 'foto'),
                'page' => esc_html__('Options', 'foto'),
                // You will need to generate a Google API key to use this feature.
                // Please visit: https://developers.google.com/fonts/docs/developer_api#Auth
                'google_api_key' => 'echo sanitize_text_field( $font_api );', // Must be defined to add google fonts to the typography module
                //'admin_bar' => false, // Show the panel pages on the admin bar
                'global_variable' => '', // Set a different name for your global variable other than the opt_name
                'dev_mode' => false, // Show the time the page took to load, etc
                'customizer' => false, // Enable basic customizer support
                // OPTIONAL -> Give you extra features
                'page_priority' => null, // Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
                'page_parent' => 'themes.php', // For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
                'page_permissions' => 'manage_options', // Permissions needed to access the options panel.
                'menu_icon' => '', // Specify a custom URL to an icon
                'last_tab' => '', // Force your panel to always open to a specific tab (by id)
                'page_icon' => 'icon-themes', // Icon displayed in the admin panel next to your menu_title
                'page_slug' => '_options', // Page slug used to denote the panel
                'save_defaults' => true, // On load save the defaults to DB before user clicks save or not
                'default_show' => true, // If true, shows the default value next to each field that is not the default value.
                'default_mark' => '', // What to print by the field's title if the value shown is default. Suggested: *
                // CAREFUL -> These options are for advanced use only
                'transient_time' => 60 * MINUTE_IN_SECONDS,
                'output' => true, // Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output
                'output_tag' => true, // Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head
                //'domain'              => 'redux-framework', // Translation domain key. Don't change this unless you want to retranslate all of Redux.
                //'footer_credit'       => '', // Disable the footer credit of Redux. Please leave if you can help it.
                // FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
                'database' => '', // possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!
                'show_import_export' => true, // REMOVE
                'system_info' => false, // REMOVE
                'help_tabs' => array(),
                'help_sidebar' => '', // esc_html__( '', $this->args['domain'] );            
            );


            // SOCIAL ICONS -> Setup custom links in the footer for quick links in your panel footer icons. 

            $this->args['share_icons'][] = array(
                'url' => 'http://www.themesawesome.com/',
                'title' => 'Our Site',
                //'icon' => 'el-icon-github'
                'img' => 'http://www.themesawesome.com/img/ta-option.jpg', // You can use icon OR img. IMG needs to be a full URL.
            );

            $this->args['share_icons'][] = array(
                'url' => 'https://www.facebook.com/themesawesome',
                'title' => 'Like us on Facebook',
                'icon' => 'el-icon-facebook'
            );
            $this->args['share_icons'][] = array(
                'url' => 'http://twitter.com/themesawesome',
                'title' => 'Follow us on Twitter',
                'icon' => 'el-icon-twitter'
            );
            $this->args['share_icons'][] = array(
                'url' => 'http://www.youtube.com/themesawesome',
                'title' => 'Find us on Youtube',
                'icon' => 'el-icon-youtube'
            );



        }

    }

    new FOTO_Framework_Config();
}


function foto_footer_copyright() {


    $options = get_option('foto_framework');
    $foto_copyright_footer = $options['footer-text'];
    echo balancetags( $foto_copyright_footer );
}


function foto_removeDemoModeLink() { // Be sure to rename this function to something more unique
    if ( class_exists('ReduxFrameworkPlugin') ) {
        remove_filter( 'plugin_row_meta', array( ReduxFrameworkPlugin::get_instance(), 'plugin_metalinks'), null, 2 );
    }
    if ( class_exists('ReduxFrameworkPlugin') ) {
        remove_action('admin_notices', array( ReduxFrameworkPlugin::get_instance(), 'admin_notices' ) );    
    }
}
add_action('init', 'foto_removeDemoModeLink');