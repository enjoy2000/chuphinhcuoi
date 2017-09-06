<?php 

function foto_social_profile() {

$options = get_option('foto_framework');


		$foto_soc_twitter = $options['twitter_profile'];
		$foto_soc_facebook = $options['facebook_profile'];
		$foto_soc_linkedin = $options['linkedin_profile'];
		$foto_soc_google = $options['google_profile'];
		$foto_soc_pinterest = $options['pinterest_profile'];
		$foto_soc_dribble = $options['dribble_profile'];
		$foto_soc_flickr = $options['flickr_profile'];
		$foto_soc_behance = $options['behance_profile'];
		$foto_soc_youtube = $options['youtube_profile'];
		$foto_soc_soundcloud = $options['soundcloud_profile'];
		$foto_soc_codepen = $options['codepen_profile'];
		$foto_soc_deviantart = $options['deviantart_profile'];
		$foto_soc_digg = $options['digg_profile'];
		$foto_soc_dropbox = $options['dropbox_profile'];
		$foto_soc_github = $options['github_profile'];
		$foto_soc_instagram = $options['instagram_profile'];
		$foto_soc_skype = $options['skype_profile'];
		$foto_soc_spotify = $options['spotify_profile'];
		$foto_soc_steam = $options['steam_profile'];
		$foto_soc_trello = $options['trello_profile'];
		$foto_soc_tumblr = $options['tumblr_profile'];
		$foto_soc_vimeo = $options['vimeo_profile'];
		$foto_soc_wechat = $options['wechat_profile'];
		$foto_soc_weibo = $options['weibo_profile'];
		$foto_soc_wordpress = $options['wordpress_profile'];
		$foto_soc_xing = $options['xing_profile'];
		$foto_soc_yahoo = $options['yahoo_profile'];
		$foto_soc_yelp = $options['yelp_profile'];

		if (!empty($foto_soc_twitter)) { ?>
				<li class="twitter soc-icon"><a href="<?php echo esc_url( $foto_soc_twitter ); ?>" class="fa fa-twitter"></a></li>
		<?php 
		} 

		if (!empty($foto_soc_google)) { ?>
			<li class="google soc-icon"><a href="<?php echo esc_url( $foto_soc_google ); ?>" class="fa fa-google-plus"></a></li>
		<?php 
		} 

		if (!empty($foto_soc_facebook)) { ?>
			<li class="facebook soc-icon"><a href="<?php echo esc_url( $foto_soc_facebook ); ?>" class="fa fa-facebook"></a></li>
		<?php 
		} 

		if (!empty($foto_soc_linkedin)) { ?>
			<li class="linkedin soc-icon"><a href="<?php echo esc_url( $foto_soc_linkedin ); ?>" class="fa fa-linkedin"></a></li>
		<?php 
		} 

		if (!empty($foto_soc_pinterest)) { ?>
			<li class="pinterest soc-icon"><a href="<?php echo esc_url( $foto_soc_pinterest ); ?>" class="fa fa-pinterest"></a></li>
		<?php 
		} 

		if (!empty($foto_soc_dribble)) { ?>
			<li class="dribble soc-icon"><a href="<?php echo esc_url( $foto_soc_dribble ); ?>" class="fa fa-dribbble"></a></li>
		<?php 
		}

		if (!empty($foto_soc_flickr)) { ?>
			<li class="flickr soc-icon"><a href="<?php echo esc_url( $foto_soc_flickr ); ?>" class="fa fa-flickr"></a></li>
		<?php 
		}

		if (!empty($foto_soc_behance)) { ?>
			<li class="behance soc-icon"><a href="<?php echo esc_url( $foto_soc_behance ); ?>" class="fa fa-behance"></a></li>
		<?php 
		}

		if (!empty($foto_soc_youtube)) { ?>
			<li class="youtube soc-icon"><a href="<?php echo esc_url( $foto_soc_youtube ); ?>" class="fa fa-youtube"></a></li>
		<?php 
		}

		if (!empty($foto_soc_soundcloud)) { ?>
			<li class="soundcloud soc-icon"><a href="<?php echo esc_url( $foto_soc_soundcloud ); ?>" class="fa fa-soundcloud"></a></li>
		<?php 
		}

		if (!empty($foto_soc_codepen)) { ?>
			<li class="codepen soc-icon"><a href="<?php echo esc_url( $foto_soc_codepen ); ?>" class="fa fa-codepen"></a></li>
		<?php 
		}

		if (!empty($foto_soc_deviantart)) { ?>
			<li class="deviantart soc-icon"><a href="<?php echo esc_url( $foto_soc_deviantart ); ?>" class="fa fa-deviantart"></a></li>
		<?php 
		}

		if (!empty($foto_soc_digg)) { ?>
			<li class="digg soc-icon"><a href="<?php echo esc_url( $foto_soc_digg ); ?>" class="fa fa-digg"></a></li>
		<?php 
		}

		if (!empty($foto_soc_dropbox)) { ?>
			<li class="dropbox soc-icon"><a href="<?php echo esc_url( $foto_soc_dropbox ); ?>" class="fa fa-dropbox"></a></li>
		<?php 
		}

		if (!empty($foto_soc_github)) { ?>
			<li class="github soc-icon"><a href="<?php echo esc_url( $foto_soc_github ); ?>" class="fa fa-github"></a></li>
		<?php 
		}

		if (!empty($foto_soc_instagram)) { ?>
			<li class="instagram soc-icon"><a href="<?php echo esc_url( $foto_soc_instagram ); ?>" class="fa fa-instagram"></a></li>
		<?php 
		}

		if (!empty($foto_soc_skype)) { ?>
			<li class="skype soc-icon"><a href="<?php echo esc_url( $foto_soc_skype ); ?>" class="fa fa-skype"></a></li>
		<?php 
		}

		if (!empty($foto_soc_spotify)) { ?>
			<li class="spotify soc-icon"><a href="<?php echo esc_url( $foto_soc_spotify ); ?>" class="fa fa-spotify"></a></li>
		<?php 
		}

		if (!empty($foto_soc_steam)) { ?>
			<li class="steam soc-icon"><a href="<?php echo esc_url( $foto_soc_steam ); ?>" class="fa fa-steam"></a></li>
		<?php 
		}

		if (!empty($foto_soc_trello)) { ?>
			<li class="trello soc-icon"><a href="<?php echo esc_url( $foto_soc_trello ); ?>" class="fa fa-trello"></a></li>
		<?php 
		}

		if (!empty($foto_soc_tumblr)) { ?>
			<li class="tumblr soc-icon"><a href="<?php echo esc_url( $foto_soc_tumblr ); ?>" class="fa fa-tumblr"></a></li>
		<?php 
		}

		if (!empty($foto_soc_vimeo)) { ?>
			<li class="vimeo soc-icon"><a href="<?php echo esc_url( $foto_soc_vimeo ); ?>" class="fa fa-vimeo-square"></a></li>
		<?php 
		}

		if (!empty($foto_soc_wechat)) { ?>
			<li class="wechat soc-icon"><a href="<?php echo esc_url( $foto_soc_wechat ); ?>" class="fa fa-weixin"></a></li>
		<?php 
		}

		if (!empty($foto_soc_weibo)) { ?>
			<li class="weibo soc-icon"><a href="<?php echo esc_url( $foto_soc_weibo ); ?>" class="fa fa-weibo"></a></li>
		<?php 
		}

		if (!empty($foto_soc_wordpress)) { ?>
			<li class="wordpress soc-icon"><a href="<?php echo esc_url( $foto_soc_wordpress ); ?>" class="fa fa-wordpress"></a></li>
		<?php 
		}

		if (!empty($foto_soc_xing)) { ?>
			<li class="xing soc-icon"><a href="<?php echo esc_url( $foto_soc_xing ); ?>" class="fa fa-xing"></a></li>
		<?php 
		}

		if (!empty($foto_soc_yahoo)) { ?>
			<li class="yahoo soc-icon"><a href="<?php echo esc_url( $foto_soc_yahoo ); ?>" class="fa fa-yahoo"></a></li>
		<?php 
		}

		if (!empty($foto_soc_yelp)) { ?>
			<li class="yelp soc-icon"><a href="<?php echo esc_url( $foto_soc_yelp ); ?>" class="fa fa-yelp"></a></li>
		<?php 
		} 

}


function foto_social_share() { 
global $post;
	?>
	<div class="social-share-wrapper">
	<ul class="social-share">
		<li class="facebook"><a href="http://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>" class="product_share_facebook" onclick="javascript:window.open(this.href,
							'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=220,width=600');return false;"><i class="fa fa-facebook"></i></a></li>
		<li class="twitter"><a href="https://twitter.com/share?url=<?php the_permalink(); ?>&text=<?php echo urlencode(get_the_title()); ?>" onclick="javascript:window.open(this.href,
							'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=260,width=600');return false;" class="product_share_twitter"><i class="fa fa-twitter"></i></a></li>   
		<li class="google"><a href="https://plus.google.com/share?url=<?php the_permalink(); ?>" onclick="javascript:window.open(this.href,
							'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><i class="fa fa-google"></i></a></li>
	</ul>
<div class="border-social"></div>
</div><!-- Social Share Wrapper -->
<?php
}

function get_tag_id_by_name($tag_name) {
		global $wpdb;
		$tag_ID = $wpdb->get_var("SELECT * FROM ".$wpdb->terms." WHERE  `name` =  '".$tag_name."'");

		return $tag_ID;
}



//EXCERPT

function excerpt($limit) {
	$excerpt = explode(' ', get_the_excerpt(), $limit);
	if (count($excerpt)>=$limit) {
		array_pop($excerpt);
		$excerpt = implode(" ",$excerpt).'...';
	} else {
		$excerpt = implode(" ",$excerpt);
	} 
	$excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
	return $excerpt;
}
 
function content($limit) {
	$content = explode(' ', get_the_content(), $limit);
	if (count($content)>=$limit) {
		array_pop($content);
		$content = implode(" ",$content).'...';
	} else {
		$content = implode(" ",$content);
	} 
	$content = preg_replace('/\[.+\]/','', $content);
	$content = apply_filters('the_content', $content); 
	$content = str_replace(']]>', ']]&gt;', $content);
	return $content;
}


function foto_custom_excerpt_length( $length ) {
	return 40;
}
add_filter( 'excerpt_length', 'foto_custom_excerpt_length', 999 );

function foto_new_excerpt_more( $more ) {
	return '...';
}
add_filter('excerpt_more', 'foto_new_excerpt_more');

/*=====================================================*/
/*============*   PAGE TITLE BACKGROUND   *============*/
/*=====================================================*/

function foto_page_title() {

	if ( class_exists( 'acf' ) ) {

		$foto_use_concept_title			= get_field('use_concept_title');
		$foto_page_subtitle				= get_field('page_subtitle');
		$foto_title_align_choice		= get_field('title_align_choice');
		$foto_the_title_background		= get_field('the_title_background');
		$foto_the_title_color			= get_field('the_title_color');

		//padding & margin
		$foto_title_wrap_padding_top	= get_field('title_wrap_padding_top');
		$foto_title_wrap_padding_bottom	= get_field('title_wrap_padding_bottom'); ?>

		<?php if($foto_use_concept_title == true) { ?>
		<div class="page-title" style="background-image: url(<?php echo esc_url( $foto_the_title_background ); ?>); padding: <?php if(!empty($foto_title_wrap_padding_top)) { echo sanitize_text_field( $foto_title_wrap_padding_top ); ?>px <?php } else { echo "0px "; } ?>0px <?php if(!empty($foto_title_wrap_padding_bottom)) { echo sanitize_text_field( $foto_title_wrap_padding_bottom ); ?>px<?php } else { echo "0px"; } ?>;">
			<div class="container">
				<div class="title-wrap">
					<h2 class="wow fadeInUp" data-wow-delay="0.5s" style="color: <?php echo esc_html( $foto_the_title_color ); ?>;"><?php the_title(); ?></h2>
					<?php if(!empty($foto_page_subtitle)) { ?>
						<span class="subtitle-album wow fadeIn" data-wow-delay="0.7s"><?php echo sanitize_text_field( $foto_page_subtitle ); ?></span>
					<?php } ?>
				</div>
			</div>
		</div>
		<script type="text/javascript">
		jQuery(document).ready(function(){
			jQuery('.title-content p').css('color', '<?php echo esc_html( $foto_the_title_color ); ?>')
		});
		</script>
	<?php } }
}

/*=========*   HEADER TYPE   *=========*/

function foto_header_menu_choice() {

global $paged, $page;


if ( class_exists( 'Redux' ) ) {
	$options = get_option('foto_framework');
	$foto_header_type = $options['header_type'];

	if( $foto_header_type == 'default' ) {

		get_header();
	}
	elseif( $foto_header_type == 'leftside' ) {

		get_header('side');
	}
	elseif( $foto_header_type == 'headertwo' ) {

		get_header('two');
	}
	elseif( $foto_header_type == 'headercenter' ) {

		get_header('center');
	}
}
else {
	get_header();
}

}

/*=========*   HEADER TYPE ACF   *=========*/

function foto_header_menu_page() {

global $paged, $page;

	if ( class_exists( 'acf' ) ) {
		$foto_allow_page_header		= get_field('allow_page_header');
		$foto_header_choice			= get_field('header_choice');

		if( $foto_allow_page_header == true && $foto_header_choice == 'headerdefault' ) {
			get_header();
		}
		elseif( $foto_allow_page_header == true && $foto_header_choice == 'headerside' ) {
			get_header('side');
			wp_enqueue_script( 'foto-header-side', get_template_directory_uri(). '/js/header-side.js', array( 'jquery' ), '', true );
		}
		elseif( $foto_allow_page_header == true && $foto_header_choice == 'headertwo' ) {
			get_header('two');
		}
		elseif( $foto_allow_page_header == true && $foto_header_choice == 'headercenter' ) {
			get_header('center');
		}
		else {
			foto_header_menu_choice();
		}
	}
	else {
		foto_header_menu_choice();
	}
}


/*=========*   FOOTER CHOICE   *=========*/

function foto_footer_choice() {

global $paged, $page;

	$options = get_option('foto_framework');
	$foto_footer_type = $options['footer_type'];

	if( $foto_footer_type == 'footer-default' ) {
		get_footer();
	}
	elseif( $foto_footer_type == 'footer-desc' ) {

		get_footer('desc');
	}
	elseif( $foto_footer_type == 'footer-center' ) {

		get_footer('copy');
	}
}

/*=========*   FOOTER TYPE   *=========*/

function foto_footer_option() {

global $paged, $page;

if ( class_exists( 'Redux' ) ) {
	$options = get_option('foto_framework');
	$foto_use_footer = $options['foto_use_footer'];

	if( $foto_use_footer == 'use-footer' ) {

		foto_footer_choice();
	}
	elseif( $foto_use_footer == 'no-footer' ) {

		get_footer('null');
	}
}
else {
	get_footer();
}
}


/*=========*   FOOTER TYPE ACF   *=========*/
function foto_footer_concept1() {
if( is_page_template('template/concept-1.php') ) { ?>
	<script type="text/javascript">
	jQuery(document).ready(function() {
	 	var windowHeight;
	 	var footerHeight;
	    var windowWidth;

	    windowHeight = jQuery(window).height();
	    footerHeight = jQuery("#footer").height();
	    windowWidth = jQuery(window).width();

	    function fotoConcept1Height() {
	        jQuery(".full-height").css('height', windowHeight - 74 - footerHeight);
	    };

	    window.onload = function() {
	      fotoConcept1Height();
	    };

	    window.onresize = function() {
	      fotoConcept1Height();
	    };
	});
    </script>
<?php } }

function foto_footer_page() {

global $paged, $page;

	if ( class_exists( 'acf' ) ) {
		$foto_allow_page_footer		= get_field('allow_page_footer');
		$foto_footer_choice			= get_field('footer_choice');

		if( $foto_allow_page_footer == true && $foto_footer_choice == 'nofooter' ) {
			get_footer('null');
		}
		elseif( $foto_allow_page_footer == true && $foto_footer_choice == 'footerstandard' ) {
			get_footer();
		}
		elseif( $foto_allow_page_footer == true && $foto_footer_choice == 'footerdesc' ) {
			get_footer('desc');
		}
		elseif( $foto_allow_page_footer == true && $foto_footer_choice == 'footercopy' ) {
			get_footer('copy');
		}
		else {
			foto_footer_option();
		}
	}
	else {
		foto_footer_option();
	}
}

/*=========*   PAGE LAYOUT OPTION TOP   *=========*/
function foto_page_layout_option_top() {
	$options = get_option('foto_framework');
		$foto_content_type = $options['content_type'];
	?>
	<?php if($foto_content_type == 'container') { ?>
		<div class="container">
	<?php }
}

/*=========*   PAGE LAYOUT ACF TOP   *=========*/
function foto_page_layout_acf_top() {
	$options = get_option('foto_framework');
	$foto_content_type = $options['content_type'];
	
	if ( class_exists( 'acf' ) ) {
		$foto_gallery_layout		= get_field('gallery_layout');

		if( $foto_gallery_layout == 'gallerycontainer' ) {
			echo '<div class="container">';
		}
		elseif( $foto_gallery_layout == 'galleryfull' ) {
			echo '';
		}
		else {
			foto_page_layout_option_top();
		}
	}
	else {
		foto_page_layout_option_top();
	}
}

/*=========*   CONCEPT LAYOUT ACF TOP   *=========*/
function foto_concept_layout_acf_top() {
	$options = get_option('foto_framework');
	$foto_content_type = $options['content_type'];
	
	if ( class_exists( 'acf' ) ) {
		$foto_concept_layout		= get_field('concept_layout');

		if( $foto_concept_layout == 'gallerycontainer' ) {
			echo '<div class="container">';
		}
		elseif( $foto_concept_layout == 'galleryfull' ) {
			echo '';
		}
		else {
			foto_page_layout_option_top();
		}
	}
	else {
		foto_page_layout_option_top();
	}
}

/*=========*   PAGE LAYOUT OPTION BOTTOM   *=========*/
function foto_page_layout_option_bottom() {
	$options = get_option('foto_framework');
		$foto_content_type = $options['content_type'];
	?>
	<?php if($foto_content_type == 'container') { ?>
		</div>
	<?php }
}

/*=========*   PAGE LAYOUT ACF BOTTOM   *=========*/
function foto_page_layout_acf_bottom() {
	$options = get_option('foto_framework');
	$foto_content_type = $options['content_type'];

	if ( class_exists( 'acf' ) ) {
		$foto_gallery_layout		= get_field('gallery_layout');

		if( $foto_gallery_layout == 'gallerycontainer' ) {
			echo '</div>';
		}
		elseif( $foto_gallery_layout == 'galleryfull' ) {
			echo '';
		}
		elseif( $foto_gallery_layout == 'galleryoption' ) {
			foto_page_layout_option_bottom();
		}
	}
	else {
		foto_page_layout_option_bottom();
	}
}

/*=========*   CONCEPT LAYOUT ACF BOTTOM   *=========*/
function foto_concept_layout_acf_bottom() {
	$options = get_option('foto_framework');
	$foto_content_type = $options['content_type'];
	
	if ( class_exists( 'acf' ) ) {
		$foto_concept_layout		= get_field('concept_layout');

		if( $foto_concept_layout == 'gallerycontainer' ) {
			echo '</div>';
		}
		elseif( $foto_concept_layout == 'galleryfull' ) {
			echo '';
		}
		elseif( $foto_concept_layout == 'galleryoption' ) {
			foto_page_layout_option_bottom();
		}
	}
	else {
		foto_page_layout_option_bottom();
	}
}