/*
*
*	Live Customiser Script
*	------------------------------------------------
	*	Akmanda Framework
	* 	Copyright Themes Awesome 2013 - http://www.themesawesome.com
*
*/
( function( $ ){		
	
	// HEADER STYLING

	wp.customize('menu_list',function( value ) {
		value.bind(function(to) {
			$('nav.menu > ul > li > a, .header-social li a').css('color', to ? to : '' );
		});
	});

	wp.customize('submenu_list',function( value ) {
		value.bind(function(to) {
			$('nav.menu ul ul li a').css('color', to ? to : '' );
		});
	});

	wp.customize('submenu_hover',function( value ) {
		value.bind(function(to) {
			$('nav.menu ul ul li a:hover').css('color', to ? to : '' );
		});
	});

	wp.customize('submenu_bg',function( value ) {
		value.bind(function(to) {
			$('nav.menu ul ul li a').css('background-color', to ? to : '' );
		});
	});

	wp.customize('submenu_bg_hover',function( value ) {
		value.bind(function(to) {
			$('nav.menu ul ul li a:hover').css('background-color', to ? to : '' );
		});
	});

	wp.customize('slide_button',function( value ) {
		value.bind(function(to) {
			$('#slide-buttons').css('color', to ? to : '' );
		});
	});

	wp.customize('menu_close',function( value ) {
		value.bind(function(to) {
			$('.c-menu__close').css('color', to ? to : '' );
		});
	});

	wp.customize('menu_mobile',function( value ) {
		value.bind(function(to) {
			$('ul.menus-mobile li a, .c-menu--slide-right > ul li.menu-item-has-children:after').css('color', to ? to : '' );
		});
	});

	wp.customize('menu_mobile_border',function( value ) {
		value.bind(function(to) {
			$('ul.menus-mobile li').css('border-bottom-color', to ? to : '' );
		});
	});

	wp.customize('menu_mobile_bg',function( value ) {
		value.bind(function(to) {
			$('.c-menu').css('background-color', to ? to : '' );
		});
	});


	// HEADER LEFT SIDEBAR STYLING

	wp.customize('bg_left',function( value ) {
		value.bind(function(to) {
			$('#header.left-side').css('background-color', to ? to : '' );
		});
	});

	wp.customize('text_left',function( value ) {
		value.bind(function(to) {
			$('#header.left-side nav.menu > ul > li > a').css('color', to ? to : '' );
		});
	});

	wp.customize('border_left',function( value ) {
		value.bind(function(to) {
			$('#header.left-side nav.menu > ul > li').css('border-bottom-color', to ? to : '' );
		});
	});


	// HEADER TWO STYLING

	wp.customize('two_list_menu',function( value ) {
		value.bind(function(to) {
			$('.bg-colored nav.menu > ul > li > a, .bg-colored .header-social a, .bg-colored #slide-buttons').css('color', to ? to : '' );
		});
	});

	wp.customize('two_sticky_menu',function( value ) {
		value.bind(function(to) {
			$('.bg-colored.sticky-header #header nav.menu > ul > li > a, .bg-colored.sticky-header .header-social a, .bg-colored.sticky-header #slide-buttons').css('color', to ? to : '' );
		});
	});

	wp.customize('two_sticky_bg',function( value ) {
		value.bind(function(to) {
			$('.sticky-header #header').css('background-color', to ? to : '' );
		});
	});


	// DEMO-1 STYLING

	wp.customize('toggle_bg',function( value ) {
		value.bind(function(to) {
			$('.stack.is-selected .stack-title::before').css('background-color', to ? to : '' );
		});
	});

	wp.customize('toggle_arrow',function( value ) {
		value.bind(function(to) {
			$('.stack.is-selected .stack-title::before').css('color', to ? to : '' );
		});
	});

	wp.customize('title_album',function( value ) {
		value.bind(function(to) {
			$('.is-selected .stack-title a span').css('color', to ? to : '' );
		});
	});

	wp.customize('border_title',function( value ) {
		value.bind(function(to) {
			$('.stack-title a:before').css('background-color', to ? to : '' );
		});
	});

	wp.customize('author_name',function( value ) {
		value.bind(function(to) {
			$('.stack-title a::after').css('color', to ? to : '' );
		});
	});

	wp.customize('detail_photo',function( value ) {
		value.bind(function(to) {
			$('.item__details ul li').css('color', to ? to : '' );
		});
	});

	wp.customize('detail_icon_photo',function( value ) {
		value.bind(function(to) {
			$('.icon-focal_length:before, .icon-aperture:before, .icon-exposure_time:before, .icon-iso:before, .icon-camera:before').css('color', to ? to : '' );
		});
	});

	wp.customize('title_img',function( value ) {
		value.bind(function(to) {
			$('.item__title').css('color', to ? to : '' );
		});
	});


	// DEMO-2 STYLING

	wp.customize('border_btn',function( value ) {
		value.bind(function(to) {
			$('.slit-demo-1 .view-album a').css('border-color', to ? to : '' );
		});
	});

	wp.customize('bbg_btn_hov',function( value ) {
		value.bind(function(to) {
			$('.slit-demo-1 .view-album a:hover').css('border-color', to ? to : '' );
			$('.slit-demo-1 .view-album a:hover').css('background-color', to ? to : '' );
		});
	});

	wp.customize('text_btn',function( value ) {
		value.bind(function(to) {
			$('.slit-demo-1 .view-album a').css('color', to ? to : '' );
		});
	});

	wp.customize('text_btn_hov',function( value ) {
		value.bind(function(to) {
			$('.slit-demo-1 .view-album a:hover').css('color', to ? to : '' );
		});
	});

	wp.customize('title_album2',function( value ) {
		value.bind(function(to) {
			$('.slit-demo-1 .sl-slide h2').css('color', to ? to : '' );
		});
	});

	wp.customize('desc_album',function( value ) {
		value.bind(function(to) {
			$('.slit-demo-1 .sl-slide blockquote p').css('color', to ? to : '' );
		});
	});

	wp.customize('author_name2',function( value ) {
		value.bind(function(to) {
			$('.slit-demo-1 .sl-slide blockquote').css('color', to ? to : '' );
		});
	});

	wp.customize('arrow_btn',function( value ) {
		value.bind(function(to) {
			$('.nav-arrows span').css('border-color', to ? to : '' );
		});
	});


	// DEMO-3 STYLING

	wp.customize('photo_figure',function( value ) {
		value.bind(function(to) {
			$('.photostack figure').css('background-color', to ? to : '' );
		});
	});

	wp.customize('title_album3',function( value ) {
		value.bind(function(to) {
			$('.photostack figcaption h2').css('color', to ? to : '' );
		});
	});

	wp.customize('paginations_1',function( value ) {
		value.bind(function(to) {
			$('.photostack nav span').css('background-color', to ? to : '' );
		});
	});

	wp.customize('icon_flip',function( value ) {
		value.bind(function(to) {
			$('.photostack nav span::after').css('color', to ? to : '' );
		});
	});


	// DEMO-4 STYLING

	wp.customize('photo_figure2',function( value ) {
		value.bind(function(to) {
			$('.elasticstack li').css('border-color', to ? to : '' );
		});
	});

	wp.customize('title_album4',function( value ) {
		value.bind(function(to) {
			$('.elasticstack li h5 a').css('color', to ? to : '' );
		});
	});


	// DEMO-5 STYLING

	wp.customize('title_album5',function( value ) {
		value.bind(function(to) {
			$('.grid-svg figcaption h2').css('color', to ? to : '' );
		});
	});

	wp.customize('desc_album5',function( value ) {
		value.bind(function(to) {
			$('.grid-svg figcaption p').css('color', to ? to : '' );
		});
	});

	wp.customize('border_btn5',function( value ) {
		value.bind(function(to) {
			$('.demo-1 .grid-svg figure button').css('border-color', to ? to : '' );
		});
	});

	wp.customize('title_btn5',function( value ) {
		value.bind(function(to) {
			$('.demo-1 .grid-svg figure button').css('color', to ? to : '' );
		});
	});

	wp.customize('bg_btn5',function( value ) {
		value.bind(function(to) {
			$('.concept-5.demo-1 .grid-svg figure button:hover').css('background-color', to ? to : '' );
			$('.concept-5.demo-1 .grid-svg figure button:hover').css('border-color', to ? to : '' );
		});
	});

	wp.customize('text_btn5_hover',function( value ) {
		value.bind(function(to) {
			$('.concept-5.demo-1 .grid-svg figure button:hover').css('color', to ? to : '' );
		});
	});


	// DEMO-6&7 STYLING

	wp.customize('title_album6',function( value ) {
		value.bind(function(to) {
			$('.gallery-overlay .gallery-info h4').css('color', to ? to : '' );
		});
	});


	// DEMO-8 STYLING

	wp.customize('title_album8',function( value ) {
		value.bind(function(to) {
			$('.grid-concept8 li h3, .title-box h2').css('color', to ? to : '' );
		});
	});

	wp.customize('title_hov8',function( value ) {
		value.bind(function(to) {
			$('.grid-concept8 li.shown:hover h3').css('color', to ? to : '' );
		});
	});

	wp.customize('title_bg8',function( value ) {
		value.bind(function(to) {
			$('.grid-concept8 li h3, .title-box h2').css('background-color', to ? to : '' );
		});
	});

	wp.customize('title_bg8_hov',function( value ) {
		value.bind(function(to) {
			$('.grid-concept8 li.shown:hover > a::before').css('border-color', to ? to : '' );
		});
	});

	// DEMO-9 STYLING

	wp.customize('title_album9',function( value ) {
		value.bind(function(to) {
			$('.concept-9-item a .gallery-overlay h3').css('color', to ? to : '' );
		});
	});

	wp.customize('arrow_btn9',function( value ) {
		value.bind(function(to) {
			$('.owl-carousel-layout .owl-prev i, .owl-carousel-layout .owl-next i').css('color', to ? to : '' );
		});
	});

	// DEMO-10 STYLING

	wp.customize('title_album10',function( value ) {
		value.bind(function(to) {
			$('.concept-10 .ms-tableCell .gallery-caption h2').css('color', to ? to : '' );
		});
	});

	wp.customize('desc_album10',function( value ) {
		value.bind(function(to) {
			$('.concept-10 .ms-tableCell .gallery-caption p').css('color', to ? to : '' );
		});
	});

	wp.customize('border_title10',function( value ) {
		value.bind(function(to) {
			$('.concept-10 .ms-tableCell .gallery-caption h2:after').css('background-color', to ? to : '' );
		});
	});

	wp.customize('border_btn10_hov',function( value ) {
		value.bind(function(to) {
			$('button.button-normal.white:hover, .button-normal.white a:hover').css('border-color', to ? to : '' );
		});
	});

	wp.customize('bbg_btn10',function( value ) {
		value.bind(function(to) {
			$('button.button-normal.white, .button-normal.white a').css('border-color', to ? to : '' );
			$('button.button-normal.white, .button-normal.white a').css('background-color', to ? to : '' );
		});
	});

	wp.customize('text_btn10',function( value ) {
		value.bind(function(to) {
			$('button.button-normal.white, .button-normal.white a').css('color', to ? to : '' );
		});
	});

	wp.customize('text_btn_hov10',function( value ) {
		value.bind(function(to) {
			$('button.button-normal.white:hover, .button-normal.white a:hover').css('color', to ? to : '' );
		});
	});

	wp.customize('paginations_scroll',function( value ) {
		value.bind(function(to) {
			$('#multiscroll-nav li .active span').css('background-color', to ? to : '' );
		});
	});


	// DEMO-11 STYLING

	wp.customize('title_album11',function( value ) {
		value.bind(function(to) {
			$('.grid__title').css('color', to ? to : '' );
		});
	});


	// DEMO-12/18 STYLING

	wp.customize('title_album28',function( value ) {
		value.bind(function(to) {
			$('h3.slide__title-main').css('color', to ? to : '' );
		});
	});

	wp.customize('subtitle_album28',function( value ) {
		value.bind(function(to) {
			$('p.slide__title-sub').css('color', to ? to : '' );
		});
	});

	wp.customize('border_btn28',function( value ) {
		value.bind(function(to) {
			$('.slide__title .view-album a').css('border-color', to ? to : '' );
		});
	});

	wp.customize('bg_btn28_hov',function( value ) {
		value.bind(function(to) {
			$('.slide__title .view-album a:hover').css('background-color', to ? to : '' );
			$('.slide__title .view-album a:hover').css('border-color', to ? to : '' );
		});
	});

	wp.customize('text_btn28',function( value ) {
		value.bind(function(to) {
			$('.slide__title .view-album a').css('color', to ? to : '' );
		});
	});

	wp.customize('text_btn28_hov',function( value ) {
		value.bind(function(to) {
			$('.slide__title .view-album a:hover').css('color', to ? to : '' );
		});
	});

	wp.customize('arrow_btn28',function( value ) {
		value.bind(function(to) {
			$('.btn').css('border-color', to ? to : '' );
		});
	});

	wp.customize('arrow_icon',function( value ) {
		value.bind(function(to) {
			$('.btn').css('color', to ? to : '' );
		});
	});

	wp.customize('arrow_icon_hov',function( value ) {
		value.bind(function(to) {
			$('.btn:hover').css('color', to ? to : '' );
		});
	});

	wp.customize('arrow_btn28_hov',function( value ) {
		value.bind(function(to) {
			$('.btn:hover').css('background-color', to ? to : '' );
			$('.btn:hover').css('border-color', to ? to : '' );
		});
	});

	wp.customize('figure_stack',function( value ) {
		value.bind(function(to) {
			$('.slide--layout-2 .slide__img:last-child .slide__img-inner, .slide--layout-2 .slide__img:not(:last-child) .slide__img-inner').css('border-color', to ? to : '' );
		});
	});

	wp.customize('caption_stack',function( value ) {
		value.bind(function(to) {
			$('.slide__img-caption').css('color', to ? to : '' );
		});
	});

	// DEMO-19 STYLING

	wp.customize('title_album19',function( value ) {
		value.bind(function(to) {
			$('.polaroid-grid .gallery-item .gallery-info h4').css('color', to ? to : '' );
		});
	});

	wp.customize('bgdemo_19',function( value ) {
		value.bind(function(to) {
			$('.polaroid-grid .gallery-item .border-wrap').css('background-color', to ? to : '' );
			$('.polaroid-grid .gallery-item .border-wrap').css('border-color', to ? to : '' );
		});
	});

	wp.customize('subtitle_19',function( value ) {
		value.bind(function(to) {
			$('.polaroid-grid .gallery-item .gallery-info p.caption').css('color', to ? to : '' );
		});
	});


	// GALLERY-1 STYLING

	wp.customize('title_image',function( value ) {
		value.bind(function(to) {
			$('.description--preview h3').css('color', to ? to : '' );
		});
	});

	wp.customize('caption_gallery',function( value ) {
		value.bind(function(to) {
			$('.caption-gallery').css('color', to ? to : '' );
		});
	});

	wp.customize('detail_icon',function( value ) {
		value.bind(function(to) {
			$('.details .icon').css('color', to ? to : '' );
		});
	});

	wp.customize('detail_icon_text',function( value ) {
		value.bind(function(to) {
			$('.details ul li:first-child, .details ul li').css('color', to ? to : '' );
		});
	});


	// GALLERY-2 STYLING

	wp.customize('title_gallery',function( value ) {
		value.bind(function(to) {
			$('#gall-sec .gallery-overlay .gallery-info h4').css('color', to ? to : '' );
		});
	});


	// GALLERY-3 STYLING

	wp.customize('image_title',function( value ) {
		value.bind(function(to) {
			$('.gallery-slider-info .info-content .album-title').css('color', to ? to : '' );
		});
	});

	wp.customize('image_desc',function( value ) {
		value.bind(function(to) {
			$('.gallery-slider-info .info-content p').css('color', to ? to : '' );
		});
	});

	wp.customize('image_author',function( value ) {
		value.bind(function(to) {
			$('.gallery-slider-info .info-content .gallery-author').css('color', to ? to : '' );
		});
	});

	wp.customize('type_camera',function( value ) {
		value.bind(function(to) {
			$('.gallery-slider-info .icon + span, .gallery-slider-info .icon-focal_length:before, .gallery-slider-info .icon-aperture:before, .gallery-slider-info .icon-exposure_time:before, .gallery-slider-info .icon-iso:before, .gallery-slider-info .icon-camera:before').css('color', to ? to : '' );
		});
	});


	// ABOUT ME STYLING

	wp.customize('about_title',function( value ) {
		value.bind(function(to) {
			$('.author-detail h5').css('color', to ? to : '' );
		});
	});

	wp.customize('name_author',function( value ) {
		value.bind(function(to) {
			$('.author-detail h2').css('color', to ? to : '' );
		});
	});

	wp.customize('author_desc',function( value ) {
		value.bind(function(to) {
			$('.author-detail p').css('color', to ? to : '' );
		});
	});

	wp.customize('partner_title',function( value ) {
		value.bind(function(to) {
			$('.client-detail h2').css('color', to ? to : '' );
		});
	});

	wp.customize('partner_desc',function( value ) {
		value.bind(function(to) {
			$('.client-detail p').css('color', to ? to : '' );
		});
	});

	wp.customize('testi_text',function( value ) {
		value.bind(function(to) {
			$('.testi-content p').css('color', to ? to : '' );
		});
	});

	wp.customize('testi_author',function( value ) {
		value.bind(function(to) {
			$('.testi-content h5.testi-author').css('color', to ? to : '' );
		});
	});


	// ABOUT US STYLING

	wp.customize('title_about',function( value ) {
		value.bind(function(to) {
			$('.about-wrap h2.section-title').css('color', to ? to : '' );
		});
	});

	wp.customize('desc_about',function( value ) {
		value.bind(function(to) {
			$('.about-content p, .team-studio .body-detail p').css('color', to ? to : '' );
		});
	});

	wp.customize('team_name',function( value ) {
		value.bind(function(to) {
			$('.team-detail h3').css('color', to ? to : '' );
		});
	});

	wp.customize('team_job',function( value ) {
		value.bind(function(to) {
			$('.team-detail .position').css('color', to ? to : '' );
		});
	});

	wp.customize('team_sosmed',function( value ) {
		value.bind(function(to) {
			$('.team-detail ul li a').css('color', to ? to : '' );
		});
	});

	wp.customize('bord_deco',function( value ) {
		value.bind(function(to) {
			$('.about-detail .inner-detail .bord, .team-description .title-section .bord').css('border-color', to ? to : '' );
		});
	});


	// BLOG STYLING

	wp.customize('border_blog',function( value ) {
		value.bind(function(to) {
			$('.post-item .wrapper').css('border-color', to ? to : '' );
		});
	});

	wp.customize('border_top',function( value ) {
		value.bind(function(to) {
			$('.content-bottom').css('border-top-color', to ? to : '' );
			$('.single-post-wrap .content-bottom').css('border-bottom-color', to ? to : '' );
		});
	});

	wp.customize('bg_blog',function( value ) {
		value.bind(function(to) {
			$('.content-bottom, .post-item .wrapper').css('background-color', to ? to : '' );
		});
	});

	wp.customize('category_border',function( value ) {
		value.bind(function(to) {
			$('.meta-top a').css('border-color', to ? to : '' );
		});
	});

	wp.customize('category_border_hov',function( value ) {
		value.bind(function(to) {
			$('.meta-top a:hover').css('border-color', to ? to : '' );
		});
	});

	wp.customize('category_text',function( value ) {
		value.bind(function(to) {
			$('.meta-top a').css('color', to ? to : '' );
		});
	});

	wp.customize('category_text_hov',function( value ) {
		value.bind(function(to) {
			$('.meta-top a:hover').css('color', to ? to : '' );
		});
	});

	wp.customize('title_blog',function( value ) {
		value.bind(function(to) {
			$('.heading-block a h4, h2.comment-reply-title, .comments-area .comment-respond form p label').css('color', to ? to : '' );
		});
	});

	wp.customize('post_meta',function( value ) {
		value.bind(function(to) {
			$('.post-meta a, .post-meta span, .comments-area .comment-respond form p.logged-in-as a, p.logged-in-as, .latest-post-content .meta').css('color', to ? to : '' );
		});
	});

	wp.customize('title_border',function( value ) {
		value.bind(function(to) {
			$('.bord').css('background-color', to ? to : '' );
		});
	});

	wp.customize('post_desc',function( value ) {
		value.bind(function(to) {
			$('.inner-content .excerpt p, .single-post .content p, .widget-author-detail').css('color', to ? to : '' );
		});
	});

	wp.customize('read_btn',function( value ) {
		value.bind(function(to) {
			$('.content-bottom .button a').css('color', to ? to : '' );
		});
	});

	wp.customize('icon_share',function( value ) {
		value.bind(function(to) {
			$('.share li a').css('background-color', to ? to : '' );
		});
	});

	wp.customize('block_quote',function( value ) {
		value.bind(function(to) {
			$('blockquote').css('border-left-color', to ? to : '' );
		});
	});

	wp.customize('tags_post',function( value ) {
		value.bind(function(to) {
			$('.single-post-wrap .content-bottom .meta-bottom, .single-post-wrap .content-bottom .meta-bottom a').css('color', to ? to : '' );
		});
	});

	wp.customize('title_sidebar',function( value ) {
		value.bind(function(to) {
			$('.heading-block h4, .widget-author-name h4, .latest-post-content h4, .widget_archive ul li a, .widget_categories ul li a').css('color', to ? to : '' );
		});
	});

	wp.customize('title_border_sidebar',function( value ) {
		value.bind(function(to) {
			$('.sidebar-widget .heading-block').css('border-color', to ? to : '' );
		});
	});

	wp.customize('sidebar_widget_border',function( value ) {
		value.bind(function(to) {
			$('.widget_archive ul li, .widget_categories ul li, .sidebar-recent-post .post-item, .widget_pages ul li, .widget_meta ul li, .widget_recent_comments ul li, .widget_recent_entries ul li, .widget_rss ul li, .widget_nav_menu ul li').css('border-color', to ? to : '' );
		});
	});

	wp.customize('btn_post_comment_bg',function( value ) {
		value.bind(function(to) {
			$('.comments-area .comment-respond form p.form-submit input').css('border-color', to ? to : '' );
			$('.comments-area .comment-respond form p.form-submit input').css('background-color', to ? to : '' );
		});
	});

	wp.customize('btn_comment_bordhov',function( value ) {
		value.bind(function(to) {
			$('.comments-area .comment-respond form p.form-submit input:hover').css('border-color', to ? to : '' );
		});
	});

	wp.customize('btn_comment_text',function( value ) {
		value.bind(function(to) {
			$('.comments-area .comment-respond form p.form-submit input').css('color', to ? to : '' );
		});
	});

	wp.customize('btn_comment_text_hover',function( value ) {
		value.bind(function(to) {
			$('.comments-area .comment-respond form p.form-submit input:hover').css('color', to ? to : '' );
		});
	});


	// CONTACT STYLING

	wp.customize('title_contact',function( value ) {
		value.bind(function(to) {
			$('.contact-desc .title h2').css('color', to ? to : '' );
		});
	});

	wp.customize('contact_info',function( value ) {
		value.bind(function(to) {
			$('.contact-desc .contact-text p').css('color', to ? to : '' );
		});
	});

	wp.customize('contact_desc',function( value ) {
		value.bind(function(to) {
			$('.contact-desc p').css('color', to ? to : '' );
		});
	});

	wp.customize('form_text',function( value ) {
		value.bind(function(to) {
			$('.contact-form p').css('color', to ? to : '' );
		});
	});

	wp.customize('btn_contact',function( value ) {
		value.bind(function(to) {
			$('.contact-form input[type="submit"]').css('border-color', to ? to : '' );
			$('.contact-form input[type="submit"]').css('background-color', to ? to : '' );
		});
	});

	wp.customize('btn_contact_hov',function( value ) {
		value.bind(function(to) {
			$('.contact-form input[type="submit"]:hover').css('border-color', to ? to : '' );
			$('.contact-form input[type="submit"]:hover').css('background-color', to ? to : '' );
		});
	});

	wp.customize('btn_contact_text',function( value ) {
		value.bind(function(to) {
			$('.contact-form input[type="submit"]').css('color', to ? to : '' );
		});
	});

	wp.customize('btn_contact_text_hov',function( value ) {
		value.bind(function(to) {
			$('.contact-form input[type="submit"]:hover').css('color', to ? to : '' );
			$('.contact-form input[type="submit"]:hover').css('border-color', to ? to : '' );
		});
	});

	wp.customize('form_bg',function( value ) {
		value.bind(function(to) {
			$('form input, form textarea').css('background-color', to ? to : '' );
		});
	});


	// CONTACT2 STYLING

	wp.customize('bg_info',function( value ) {
		value.bind(function(to) {
			$('.contact-page.white .contact-desc').css('background-color', to ? to : '' );
		});
	});

	wp.customize('title_info',function( value ) {
		value.bind(function(to) {
			$('.contact-desc .title h2').css('color', to ? to : '' );
		});
	});

	wp.customize('detail_info',function( value ) {
		value.bind(function(to) {
			$('.contact-desc .contact-text p').css('color', to ? to : '' );
		});
	});

	wp.customize('desc_contact',function( value ) {
		value.bind(function(to) {
			$('.contact-inner p').css('color', to ? to : '' );
		});
	});

	wp.customize('contact_form_text',function( value ) {
		value.bind(function(to) {
			$('.contact-page.white .contact-form p').css('color', to ? to : '' );
		});
	});


	// PAGE STYLING

	wp.customize('subtitle_page',function( value ) {
		value.bind(function(to) {
			$('.page-title .title-wrap .subtitle-album').css('color', to ? to : '' );
		});
	});


	// FOOTER-1 STYLING

	wp.customize('footer_default_bg',function( value ) {
		value.bind(function(to) {
			$('#footer').css('background-color', to ? to : '' );
		});
	});

	wp.customize('copyright_text1',function( value ) {
		value.bind(function(to) {
			$('#footer .style-1 .copyright-text, #footer .style-1 .copyright-text a, .style-3 .copyright, .style-3 .copyright a').css('color', to ? to : '' );
		});
	});

	wp.customize('footer_sosmed',function( value ) {
		value.bind(function(to) {
			$('#footer .social-link ul li a').css('background-color', to ? to : '' );
		});
	});

	wp.customize('footer_icon_sosmed',function( value ) {
		value.bind(function(to) {
			$('#footer .social-link ul li a').css('color', to ? to : '' );
		});
	});


	// FOOTER-2 STYLING

	wp.customize('footer_bg',function( value ) {
		value.bind(function(to) {
			$('#footer .style-2').css('background-color', to ? to : '' );
		});
	});

	wp.customize('footer_desc',function( value ) {
		value.bind(function(to) {
			$('.footer-wrap.style-2 .footer-desc p').css('color', to ? to : '' );
		});
	});

	wp.customize('footer_cr',function( value ) {
		value.bind(function(to) {
			$('.footer-wrap.style-2 .copyright-text, .footer-wrap.style-2 .copyright-text a').css('color', to ? to : '' );
		});
	});

	wp.customize('footer_sosmed2',function( value ) {
		value.bind(function(to) {
			$('#footer .style-2 .social-link ul li a').css('background-color', to ? to : '' );
		});
	});

	wp.customize('footer_icon_sosmed2',function( value ) {
		value.bind(function(to) {
			$('#footer .style-2 .social-link ul li a').css('color', to ? to : '' );
		});
	});

	wp.customize('btn_buy_bord',function( value ) {
		value.bind(function(to) {
			$('.button-title span').css('border-color', to ? to : '' );
		});
	});

	wp.customize('btn_buy_hov',function( value ) {
		value.bind(function(to) {
			$('.button-title span:hover').css('border-color', to ? to : '' );
			$('.button-title span:hover').css('background-color', to ? to : '' );
		});
	});

	wp.customize('btn_buy_text',function( value ) {
		value.bind(function(to) {
			$('.button-title span').css('color', to ? to : '' );
		});
	});

	wp.customize('btn_buy_texthov',function( value ) {
		value.bind(function(to) {
			$('.button-title span:hover').css('color', to ? to : '' );
		});
	});


	//JS BARU

	wp.customize( 'foto_default_logo_height', function( value ) {
		value.bind( function( newval ) {
			$( '#header.default .site-header img' ).css( 'height', newval );
		} );
	} );
	wp.customize( 'foto_default_menu_top', function( value ) {
		value.bind( function( newval ) {
			$( '#header.default nav.menu' ).css( 'margin-top', newval +'px' );
		} );
	} );
	wp.customize('header_bg',function( value ) {
		value.bind(function(to) {
			$('#header.default').css('background-color', to ? to : '' );
		});
	});

	//two menus
	wp.customize( 'foto_two_logo_height', function( value ) {
		value.bind( function( newval ) {
			$( '#header.two-menus .site-header img' ).css( 'height', newval );
		} );
	} );
	wp.customize( 'foto_two_menu_top', function( value ) {
		value.bind( function( newval ) {
			$( '.primary-left-nav, .primary-right-nav' ).css( 'margin-top', newval +'px' );
		} );
	} );
	wp.customize( 'foto_two_menu_bot', function( value ) {
		value.bind( function( newval ) {
			$( '.primary-left-nav, .primary-right-nav' ).css( 'margin-bottom', newval +'px' );
		} );
	} );
	wp.customize('header_2_bg',function( value ) {
		value.bind(function(to) {
			$('#header.two-menus').css('background-color', to ? to : '' );
		});
	});

	//header side
	wp.customize( 'foto_side_logo_height', function( value ) {
		value.bind( function( newval ) {
			$( '#header.left-side .site-header img' ).css( 'height', newval );
		} );
	} );
	wp.customize( 'foto_side_menu_top', function( value ) {
		value.bind( function( newval ) {
			$( '#header.left-side nav.menu' ).css( 'margin-top', newval +'px' );
		} );
	} );

	//two center
	wp.customize( 'foto_center_logo_height', function( value ) {
		value.bind( function( newval ) {
			$( '#header.center .site-header img' ).css( 'height', newval );
		} );
	} );
	wp.customize( 'foto_center_menu_top', function( value ) {
		value.bind( function( newval ) {
			$( '#header.center nav.menu' ).css( 'margin-top', newval +'px' );
		} );
	} );
	wp.customize( 'foto_center_menu_bot', function( value ) {
		value.bind( function( newval ) {
			$( '#header.center nav.menu' ).css( 'padding-bottom', newval +'px' );
		} );
	} );
	wp.customize('header_center_bg',function( value ) {
		value.bind(function(to) {
			$('#header.center').css('background-color', to ? to : '' );
		});
	});

} )( jQuery );