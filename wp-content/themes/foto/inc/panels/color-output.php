<?php
function foto_customizer_header_output() {	

	//header styling
	$menu_list						=	get_option('menu_list', '#000000');
	$submenu_list					=	get_option('submenu_list', '#000000');
	$submenu_hover					=	get_option('submenu_hover', '#000000');
	$submenu_bg						=	get_option('submenu_bg', '#ffffff');
	$submenu_bg_hover				=	get_option('submenu_bg_hover', '#f3f3f3');
	$slide_button					=	get_option('slide_button', '#000000');
	$menu_close						=	get_option('menu_close', '#ffffff');
	$menu_mobile					=	get_option('menu_mobile', '#ffffff');
	$menu_mobile_border				=	get_option('menu_mobile_border', '#424242');
	$menu_mobile_bg					=	get_option('menu_mobile_bg', '#000000');

	//header left sidebar styling
	$bg_left						=	get_option('bg_left', '#000000');
	$text_left						=	get_option('text_left', '#ffffff');
	$border_left					=	get_option('border_left', '#363636');

	//header two styling
	$two_list_menu					=	get_option('two_list_menu', '#ffffff');
	$two_sticky_menu				=	get_option('two_sticky_menu', '#000000');
	$two_sticky_bg					=	get_option('two_sticky_bg', '#ffffff');

	//Demo-1 styling
	$toggle_bg						=	get_option('toggle_bg', '#000000');
	$toggle_arrow					=	get_option('toggle_arrow', '#ffffff');
	$title_album					=	get_option('title_album', '#000000');
	$border_title					=	get_option('border_title', '#000000');
	$author_name					=	get_option('author_name', '#999999');
	$detail_photo					=	get_option('detail_photo', '#9d9d9d');
	$detail_icon_photo				=	get_option('detail_icon_photo', '#9d9d9d');
	$title_img						=	get_option('title_img', '#000000');

	//Demo-2 styling
	$border_btn						=	get_option('border_btn', '#ffffff');
	$bbg_btn_hov					=	get_option('bbg_btn_hov', '#ffffff');
	$text_btn						=	get_option('text_btn', '#ffffff');
	$text_btn_hov					=	get_option('text_btn_hov', '#000000');
	$title_album2					=	get_option('title_album2', '#ffffff');
	$desc_album						=	get_option('desc_album', '#ffffff');
	$author_name2					=	get_option('author_name2', '#ffffff');
	$arrow_btn						=	get_option('arrow_btn', '#ffffff');

	//Demo-3 styling
	$photo_figure					=	get_option('photo_figure', '#ffffff');
	$title_album3					=	get_option('title_album3', '#000000');
	$paginations_1					=	get_option('paginations_1', '#000000');
	$icon_flip						=	get_option('icon_flip', '#ffffff');

	//Demo-4 styling
	$photo_figure2					=	get_option('photo_figure2', '#f5f5f5');
	$title_album4					=	get_option('title_album4', '#000000');

	//Demo-5 styling
	$title_album5					=	get_option('title_album5', '#000000');
	$desc_album5					=	get_option('desc_album5', '#000000');
	$border_btn5					=	get_option('border_btn5', '#ffffff');
	$title_btn5						=	get_option('title_btn5	', '#ffffff');
	$bg_btn5						=	get_option('bg_btn5', '#ffffff');
	$text_btn5_hover				=	get_option('text_btn5_hover	', '#000000');

	//Demo-6&7 styling
	$title_album6					=	get_option('title_album6', '#ffffff');

	//Demo-8 styling
	$title_album8					=	get_option('title_album8', '#ffffff');
	$title_hov8						=	get_option('title_hov8', '#ffffff');
	$title_bg8						=	get_option('title_bg8', '#000000');
	$title_bg8_hov					=	get_option('title_bg8_hov', '#000000');

	//Demo-9 styling
	$title_album9					=	get_option('title_album9', '#000000');
	$arrow_btn9						=	get_option('arrow_btn9', '#000000');

	//Demo-10 styling
	$title_album10					=	get_option('title_album10', '#ffffff');
	$desc_album10					=	get_option('desc_album10', '#ffffff');
	$border_title10					=	get_option('border_title10', '#ffffff');
	$border_btn10_hov				=	get_option('border_btn10_hov', '#ffffff');
	$bbg_btn10						=	get_option('bbg_btn10', '#ffffff');
	$text_btn10						=	get_option('text_btn10', '#000000');
	$text_btn_hov10					=	get_option('text_btn_hov10', '#ffffff');
	$paginations_scroll				=	get_option('paginations_scroll', '#ffffff');

	//Demo-11 styling
	$title_album11					=	get_option('title_album11', '#ffffff');

	//Demo-12/18 styling
	$title_album28					=	get_option('title_album28', '#000000');
	$subtitle_album28				=	get_option('subtitle_album28', '#000000');
	$border_btn28					=	get_option('border_btn28', '#000000');
	$bg_btn28_hov					=	get_option('bg_btn28_hov', '#000000');
	$text_btn28						=	get_option('text_btn28', '#000000');
	$text_btn28_hov					=	get_option('text_btn28_hov', '#ffffff');
	$arrow_btn28					=	get_option('arrow_btn28', '#000000');
	$arrow_icon						=	get_option('arrow_icon', '#000000');
	$arrow_icon_hov					=	get_option('arrow_icon_hov', '#ffffff');
	$arrow_btn28_hov				=	get_option('arrow_btn28_hov', '#000000');
	$figure_stack					=	get_option('figure_stack', '#e2e2e2');
	$caption_stack					=	get_option('caption_stack', '#000000');

	//Demo-19 styling
	$title_album19					=	get_option('title_album19', '#000000');
	$subtitle_19					=	get_option('subtitle_19', '#000000');
	$bgdemo_19						=	get_option('bgdemo_19', '#ffffff');

	//Gallery-1 styling
	$title_image					=	get_option('title_image', '#ffffff');
	$caption_gallery				=	get_option('caption_gallery', '#ffffff');
	$detail_icon					=	get_option('detail_icon', '#ffffff');
	$detail_icon_text				=	get_option('detail_icon_text', '#909090');

	//Gallery-2 styling
	$title_gallery					=	get_option('title_gallery', '#ffffff');

	//Gallery-3 styling
	$image_title					=	get_option('image_title', '#ffffff');
	$image_desc						=	get_option('image_desc', '#ffffff');
	$image_author					=	get_option('image_author', '#ffffff');
	$type_camera					=	get_option('type_camera', '#000000');

	//about me styling
	$about_title					=	get_option('about_title', '#ffffff');
	$name_author					=	get_option('name_author', '#ffffff');
	$author_desc					=	get_option('author_desc', '#999999');
	$partner_title					=	get_option('partner_title', '#999999');
	$partner_desc					=	get_option('partner_desc', '#999999');
	$testi_text						=	get_option('testi_text', '#ffffff');
	$testi_author					=	get_option('testi_author', '#ffffff');

	//about us styling
	$title_about					=	get_option('title_about', '#ffffff');
	$desc_about						=	get_option('desc_about', '#ffffff');
	$team_name						=	get_option('team_name', '#ffffff');
	$team_job						=	get_option('team_job', '#999999');
	$team_sosmed					=	get_option('team_sosmed', '#ffffff');
	$bord_deco						=	get_option('bord_deco', '#363636');

	//Blog styling
	$border_blog					=	get_option('border_blog', '#f0f0f0');
	$border_top						=	get_option('border_top', '#e3e3e3');
	$bg_blog						=	get_option('bg_blog', '#ffffff');
	$category_border				=	get_option('category_border', '#999999');
	$category_border_hov			=	get_option('category_border_hov', '#000000');
	$category_text					=	get_option('category_text', '#999999');
	$category_text_hov				=	get_option('category_text_hov', '#000000');
	$title_blog						=	get_option('title_blog', '#000000');
	$post_meta						=	get_option('post_meta', '#737479');
	$title_border					=	get_option('title_border', '#000000');
	$post_desc						=	get_option('post_desc', '#555555');
	$read_btn						=	get_option('read_btn', '#000000');
	$icon_share						=	get_option('icon_share', '#000000');
	$block_quote					=	get_option('block_quote', '#cccccc');
	$tags_post						=	get_option('tags_post', '#000000');
	$title_sidebar					=	get_option('title_sidebar', '#000000');
	$title_border_sidebar			=	get_option('title_border_sidebar', '#e4e4e4');
	$sidebar_widget_border			=	get_option('sidebar_widget_border', '#eaeaea');
	$btn_post_comment_bg			=	get_option('btn_post_comment_bg', '#000000');
	$btn_comment_bordhov			=	get_option('btn_comment_bordhov', '#000000');
	$btn_comment_text				=	get_option('btn_comment_text', '#ffffff');
	$btn_comment_text_hover			=	get_option('btn_comment_text_hover', '#000000');

	//contact styling
	$title_contact					=	get_option('title_contact', '#ffffff');
	$contact_info					=	get_option('contact_info', '#ffffff');
	$contact_desc					=	get_option('contact_desc', '#ffffff');
	$form_text						=	get_option('form_text', '#ffffff');
	$btn_contact					=	get_option('btn_contact', '#000000');
	$btn_contact_hov				=	get_option('btn_contact_hov', '#ffffff');
	$btn_contact_text				=	get_option('btn_contact_text', '#ffffff');
	$btn_contact_text_hov			=	get_option('btn_contact_text_hov', '#000000');
	$form_bg						=	get_option('form_bg', '#e7e7e7');

	//contact2 styling
	$bg_info						=	get_option('bg_info', '#000000');
	$title_info						=	get_option('title_info', '#ffffff');
	$detail_info					=	get_option('detail_info', '#ffffff');
	$desc_contact					=	get_option('desc_contact', '#000000');
	$contact_form_text				=	get_option('contact_form_text', '#000000');

	//Page styling
	$subtitle_page					=	get_option('subtitle_page', '#999999');

	//footer-1 styling
	$footer_default_bg				=	get_option('footer_default_bg', '');
	$copyright_text1				=	get_option('copyright_text1', '#000000');
	$footer_sosmed					=	get_option('footer_sosmed', '#000000');
	$footer_icon_sosmed				=	get_option('footer_icon_sosmed', '#ffffff');

	//footer-2 styling
	$footer_bg						=	get_option('footer_bg', '#000000');
	$footer_desc					=	get_option('footer_desc', '#a2a2a2');
	$footer_cr						=	get_option('footer_cr', '#ffffff');
	$footer_sosmed2					=	get_option('footer_sosmed2', '#a2a2a2');
	$footer_icon_sosmed2			=	get_option('footer_icon_sosmed2', '#000000');
	$btn_buy_bord					=	get_option('btn_buy_bord', '#ffffff');
	$btn_buy_hov					=	get_option('btn_buy_hov', '#ffffff');
	$btn_buy_text					=	get_option('btn_buy_text', '#ffffff');
	$btn_buy_texthov				=	get_option('btn_buy_texthov', '#000000');

	$header_bg						=	get_option('header_bg', '');
	$header_2_bg					=	get_option('header_2_bg', '');
	$header_center_bg				=	get_option('header_center_bg', '');

	


	echo '<style type="text/css">';

	//=========HEADER STYLING======//

	

	echo 'nav.menu .sm-clean a .header-social li a{color:'.$menu_list.'}' ;
	echo 'nav.menu ul ul li a{color:'.$submenu_list.'}' ;
	echo 'nav.menu ul ul li a:hover{color:'.$submenu_hover.'}' ;
	echo 'nav.menu ul ul li a{background-color:'.$submenu_bg.'}' ;
	echo 'nav.menu ul ul li a:hover{background-color:'.$submenu_bg_hover.'}' ;
	echo '#slide-buttons{color:'.$slide_button.'}' ;
	echo '.c-menu__close{color:'.$menu_close.'}' ;
	echo 'ul.menus-mobile li a, .c-menu--slide-right > ul li.menu-item-has-children:after{color:'.$menu_mobile.'}' ;
	echo 'ul.menus-mobile li{border-bottom-color:'.$menu_mobile_border.'}' ;
	echo 'ul.menus-mobile li{background-colorr:'.$menu_mobile_bg.'}' ;

	//=========HEADER LEFT SIDEBAR STYLING======//

	echo '#header.left-side{background-color:'.$bg_left.'}' ;
	echo '#header.left-side nav.menu > ul > li > a{color:'.$text_left.'}' ;
	echo '#header.left-side nav.menu > ul > li{border-bottom-color:'.$border_left.'}' ;

	//=========HEADER TWO STYLING======//

	//echo '.bg-colored nav.menu > ul > li > a, .bg-colored .header-social a, .bg-colored #slide-buttons{color:'.$two_list_menu.'}' ;
	//echo '.bg-colored.sticky-header #header nav.menu > ul > li > a, .bg-colored.sticky-header .header-social a, .bg-colored.sticky-header #slide-buttons{color:'.$two_sticky_menu.'}' ;
	echo '.sticky-header #header{background-color:'.$two_sticky_bg.'}' ;

	//=========DEMO-1 STYLING======//

	echo '.stack.is-selected .stack-title::before{background-color:'.$toggle_bg.'}' ;
	echo '.stack.is-selected .stack-title::before{color:'.$toggle_arrow.'}' ;
	echo '.is-selected .stack-title a span{color:'.$title_album.'}' ;
	echo '.stack-title a:before{background-color:'.$border_title.'}' ;
	echo '.stack-title a::after{color:'.$author_name.'}' ;
	echo '.item__details ul li{color:'.$detail_photo.'}' ;
	echo '.icon-focal_length:before, .icon-aperture:before, .icon-exposure_time:before, .icon-iso:before, .icon-camera:before{color:'.$detail_icon_photo.'}' ;
	echo '.item__title{color:'.$title_img.'}' ;

	//=========DEMO-2 STYLING======//

	echo '.slit-demo-1 .view-album a{border-color:'.$border_btn.'}' ;
	echo '.slit-demo-1 .view-album a:hover{border-color:'.$bbg_btn_hov.'}' ;
	echo '.slit-demo-1 .view-album a:hover{background-color:'.$bbg_btn_hov.'}' ;
	echo '.slit-demo-1 .view-album a{color:'.$text_btn.'}' ;
	echo '.slit-demo-1 .view-album a:hover{color:'.$text_btn_hov.'}' ;
	echo '.slit-demo-1 .sl-slide h2{color:'.$title_album2.'}' ;
	echo '.slit-demo-1 .sl-slide blockquote p{color:'.$desc_album.'}' ;
	echo '.slit-demo-1 .sl-slide blockquote{color:'.$author_name2.'}' ;
	echo '.nav-arrows span{border-color:'.$arrow_btn.'}' ;

	//=========DEMO-3 STYLING======//

	echo '.photostack figure{background-color:'.$photo_figure.'}' ;
	echo '.photostack figcaption h2{color:'.$title_album3.'}' ;
	echo '.photostack nav span{background-color:'.$paginations_1.'}' ;
	echo '.photostack nav span::after{color:'.$icon_flip.'}' ;

	//=========DEMO-4 STYLING======//

	echo '.elasticstack li{border-color:'.$photo_figure2.'}' ;
	echo '.elasticstack li h5 a{color:'.$title_album4.'}' ;

	//=========DEMO-5 STYLING======//

	echo '.grid-svg figcaption h2{color:'.$title_album5.'}' ;
	echo '.grid-svg figcaption p{color:'.$desc_album5.'}' ;
	echo '.demo-1 .grid-svg figure button{border-color:'.$border_btn5.'}' ;
	echo '.demo-1 .grid-svg figure button{color:'.$title_btn5.'}' ;
	echo '.concept-5.demo-1 .grid-svg figure button:hover{background-color:'.$bg_btn5.'}' ;
	echo '.concept-5.demo-1 .grid-svg figure button:hover{border-color:'.$bg_btn5.'}' ;
	echo '.concept-5.demo-1 .grid-svg figure button:hover{color:'.$text_btn5_hover.'}' ;

	//=========DEMO-6&7 STYLING======//

	echo '.gallery-overlay .gallery-info h4{color:'.$title_album6.'}' ;

	//=========DEMO-8 STYLING======//

	echo '.grid-concept8 li h3, .title-box h2{color:'.$title_album8.'}' ;
	echo '.grid-concept8 li.shown:hover h3{color:'.$title_hov8.'}' ;
	echo '.grid-concept8 li h3, .title-box h2{background-color:'.$title_bg8.'}' ;
	echo '.grid-concept8 li.shown:hover > a::before{border-color:'.$title_bg8_hov.'}' ;

	//=========DEMO-9 STYLING======//

	echo '.concept-9-item a .gallery-overlay h3{color:'.$title_album9.'}' ;
	echo '.owl-carousel-layout .owl-prev i, .owl-carousel-layout .owl-next i{color:'.$arrow_btn9.'}' ;

	//=========DEMO-10 STYLING======//

	echo '.concept-10 .ms-tableCell .gallery-caption h2{color:'.$title_album10.'}' ;
	echo '.concept-10 .ms-tableCell .gallery-caption p{color:'.$desc_album10.'}' ;
	echo '.concept-10 .ms-tableCell .gallery-caption h2:after{background-color:'.$border_title10.'}' ;
	echo 'button.button-normal.white:hover, .button-normal.white a:hover{border-color:'.$border_btn10_hov.'}' ;
	echo 'button.button-normal.white, .button-normal.white a{border-color:'.$bbg_btn10.'}' ;
	echo 'button.button-normal.white, .button-normal.white a{background-color:'.$bbg_btn10.'}' ;
	echo 'button.button-normal.white, .button-normal.white a{color:'.$text_btn10.'}' ;
	echo 'button.button-normal.white:hover, .button-normal.white a:hover{color:'.$text_btn_hov10.'}' ;
	echo '#multiscroll-nav li .active span{background-color:'.$paginations_scroll.'}' ;

	//=========DEMO-11 STYLING======//

	echo '.grid__title{color:'.$title_album11.'}' ;

	//=========DEMO-12/18 STYLING======//

	echo 'h3.slide__title-main{color:'.$title_album28.'}' ;
	echo 'p.slide__title-sub{color:'.$subtitle_album28.'}' ;
	echo '.slide__title .view-album a{border-color:'.$border_btn28.'}' ;
	echo '.slide__title .view-album a:hover{background-color:'.$bg_btn28_hov.'}' ;
	echo '.slide__title .view-album a:hover{border-color:'.$bg_btn28_hov.'}' ;
	echo '.slide__title .view-album a{color:'.$text_btn28.'}' ;
	echo '.slide__title .view-album a:hover{color:'.$text_btn28_hov.'}' ;
	echo '.btn{border-color:'.$arrow_btn28.'}' ;
	echo '.btn{color:'.$arrow_icon.'}' ;
	echo '.btn:hover{color:'.$arrow_icon_hov.'}' ;
	echo '.btn:hover{border-color:'.$arrow_btn28_hov.'}' ;
	echo '.btn:hover{background-color:'.$arrow_btn28_hov.'}' ;
	echo '.slide--layout-2 .slide__img:last-child .slide__img-inner, .slide--layout-2 .slide__img:not(:last-child) .slide__img-inner{border-color:'.$figure_stack.'}' ;	
	echo '.slide__img-caption{color:'.$caption_stack.'}' ;

	//=========DEMO-19 STYLING======//

	echo '.polaroid-grid .gallery-item .gallery-info h4{color:'.$title_album19.'}' ;
	echo '.polaroid-grid .gallery-item .gallery-info p.caption{color:'.$subtitle_19.'}' ;
	echo '.polaroid-grid .gallery-item .border-wrap{background-color:'.$bgdemo_19.'}' ;
	echo '.polaroid-grid .gallery-item .border-wrap{border-color:'.$bgdemo_19.'}' ;

	//=========GALLERY-1 STYLING======//

	echo '.description--preview h3{color:'.$title_image.'}' ;
	echo '.caption-gallery{color:'.$caption_gallery.'}' ;
	echo '.details .icon{color:'.$detail_icon.'}' ;
	echo '.details ul li:first-child, .details ul li{color:'.$detail_icon_text.'}' ;

	//=========GALLERY-2 STYLING======//

	echo '#gall-sec .gallery-overlay .gallery-info h4{color:'.$title_gallery.'}' ;

	//=========GALLERY-3 STYLING======//

	echo '.gallery-slider-info .info-content .album-title{color:'.$image_title.'}' ;
	echo '.gallery-slider-info .info-content p{color:'.$image_desc.'}' ;
	echo '.gallery-slider-info .info-content .gallery-author{color:'.$image_author.'}' ;
	echo '.gallery-slider-info .icon + span, .gallery-slider-info .icon-focal_length:before, .gallery-slider-info .icon-aperture:before, .gallery-slider-info .icon-exposure_time:before, .gallery-slider-info .icon-iso:before, .gallery-slider-info .icon-camera:before{color:'.$type_camera.'}' ;

	//=========ABOUT STYLING======//

	echo '.author-detail h5{color:'.$about_title.'}' ;
	echo '.author-detail h2{color:'.$name_author.'}' ;
	echo '.author-detail p{color:'.$author_desc.'}' ;
	echo '.client-detail h2{color:'.$partner_title.'}' ;
	echo '.client-detail p{color:'.$partner_desc.'}' ;
	echo '.testi-content p{color:'.$testi_text.'}' ;
	echo '.testi-content h5.testi-author{color:'.$testi_author.'}' ;

	//=========ABOUT US STYLING======//

	echo '.about-wrap h2.section-title{color:'.$title_about.'}' ;
	echo '.about-content p, .team-studio .body-detail p{color:'.$desc_about.'}' ;
	echo '.team-detail h3{color:'.$team_name.'}' ;
	echo '.team-detail .position{color:'.$team_job.'}' ;
	echo '.team-detail ul li a{color:'.$team_sosmed.'}' ;
	echo '.about-detail .inner-detail .bord, .team-description .title-section .bord{border-color:'.$bord_deco.'}' ;

	//=========BLOG STYLING======//

	echo '.post-item .wrapper{border-color:'.$border_blog.'}' ;
	echo '.content-bottom{border-top-color:'.$border_top.'}' ;
	echo '.single-post-wrap .content-bottom{border-bottom-color:'.$border_top.'}' ;
	echo '.post-item .wrapper, .post-item .wrapper{background-color:'.$bg_blog.'}' ;
	echo '.meta-top a{border-color:'.$category_border.'}' ;
	echo '.meta-top a:hover{border-color:'.$category_border_hov.'}' ;
	echo '.meta-top a{color:'.$category_text.'}' ;
	echo '.meta-top a:hover{color:'.$category_text_hov.'}' ;
	echo '.heading-block a h4, h2.comment-reply-title, .comments-area .comment-respond form p label{color:'.$title_blog.'}' ;
	echo '.post-meta a, .post-meta span, .comments-area .comment-respond form p.logged-in-as a, p.logged-in-as, .latest-post-content .meta{color:'.$post_meta.'}' ;
	echo '.bord{background-color:'.$title_border.'}' ;
	echo '.inner-content .excerpt p, .single-post .content p, .widget-author-detail{color:'.$post_desc.'}' ;
	echo '.content-bottom .button a{color:'.$read_btn.'}' ;
	echo '.share li a{background-color:'.$icon_share.'}' ;
	echo 'blockquote{border-left-color:'.$block_quote.'}' ;
	echo '.single-post-wrap .content-bottom .meta-bottom, .single-post-wrap .content-bottom .meta-bottom a{color:'.$tags_post.'}' ;
	echo '.heading-block h4, .widget-author-name h4, .latest-post-content h4, .widget_archive ul li a, .widget_categories ul li a{color:'.$title_sidebar.'}' ;
	echo '.sidebar-widget .heading-block{border-color:'.$title_border_sidebar.'}' ;
	echo '.widget_archive ul li, .widget_categories ul li, .sidebar-recent-post .post-item, .widget_pages ul li, .widget_meta ul li, .widget_recent_comments ul li, .widget_recent_entries ul li, .widget_rss ul li, .widget_nav_menu ul li{border-bottom-color:'.$sidebar_widget_border.'}' ;
	echo '.comments-area .comment-respond form p.form-submit input{border-color:'.$btn_post_comment_bg.'}' ;
	echo '.comments-area .comment-respond form p.form-submit input{background-color:'.$btn_post_comment_bg.'}' ;
	echo '.comments-area .comment-respond form p.form-submit input:hover{border-color:'.$btn_comment_bordhov.'}' ;
	echo '.comments-area .comment-respond form p.form-submit input{color:'.$btn_comment_text.'}' ;
	echo '.comments-area .comment-respond form p.form-submit input:hover{color:'.$btn_comment_text_hover.'}' ;

	//=========CONTACT STYLING======//

	echo '.contact-desc .title h2{color:'.$title_contact.'}' ;
	echo '.contact-desc .contact-text p{color:'.$contact_info.'}' ;
	echo '.contact-desc p{color:'.$contact_desc.'}' ;
	echo '.contact-form p{color:'.$form_text.'}' ;
	echo '.contact-form input[type="submit"]{border-color:'.$btn_contact.'}' ;
	echo '.contact-form input[type="submit"]{background-color:'.$btn_contact.'}' ;
	echo '.contact-form input[type="submit"]:hover{border-color:'.$btn_contact_hov.'}' ;
	echo '.contact-form input[type="submit"]:hover{background-color:'.$btn_contact_hov.'}' ;
	echo '.contact-form input[type="submit"]{color:'.$btn_contact_text.'}' ;
	echo '.contact-form input[type="submit"]:hover{color:'.$btn_contact_text_hov.'}' ;
	echo '.contact-form input[type="submit"]:hover{border-color:'.$btn_contact_text_hov.'}' ;
	echo 'form input, form textarea{background-color:'.$form_bg.'}' ;

	//=========CONTACT2 STYLING======//

	echo '.contact-page.white .contact-desc{background-color:'.$bg_info.'}' ;
	echo '.contact-desc .title h2{color:'.$title_info.'}' ;
	echo '.contact-desc .contact-text p{color:'.$detail_info.'}' ;
	echo '.contact-inner p{color:'.$desc_contact.'}' ;
	echo '.contact-page.white .contact-form p{color:'.$contact_form_text.'}' ;

	//=========PAGE STYLING======//

	echo '.page-title .title-wrap .subtitle-album{color:'.$subtitle_page.'}' ;

	//=========FOOTER-1 STYLING======//

	echo '#footer{background-color:'.$footer_default_bg.'}' ;

	echo '#footer .style-1 .copyright-text, #footer .style-1 .copyright-text a, .style-3 .copyright, .style-3 .copyright a{color:'.$copyright_text1.'}' ;
	echo '#footer .social-link ul li a{background-color:'.$footer_sosmed.'}' ;
	echo '#footer .social-link ul li a{color:'.$footer_icon_sosmed.'}' ;

	//=========FOOTER-2 STYLING======//

	echo '#footer .style-2{background-color:'.$footer_bg.'}' ;
	echo '.footer-wrap.style-2 .footer-desc p{color:'.$footer_desc.'}' ;
	echo '.footer-wrap.style-2 .copyright-text, .footer-wrap.style-2 .copyright-text a{color:'.$footer_cr.'}' ;
	echo '#footer .style-2 .social-link ul li a{background-color:'.$footer_sosmed2.'}' ;
	echo '#footer .style-2 .social-link ul li a{color:'.$footer_icon_sosmed2.'}' ;
	echo '.button-title span{border-color:'.$btn_buy_bord.'}' ;
	echo '.button-title span:hover{border-color:'.$btn_buy_hov.'}' ;
	echo '.button-title span:hover{background-color:'.$btn_buy_hov.'}' ;
	echo '.button-title span{color:'.$btn_buy_text.'}' ;
	echo '.button-title span:hover{color:'.$btn_buy_texthov.'}' ;


	//header bg
	echo '#header.default{background-color:'.$header_bg.'}' ;
	echo '#header.two-menus{background-color:'.$header_2_bg.'}' ;
	echo '#header.center{background-color:'.$header_center_bg.'}' ;

	
	echo '</style> ';

	}

	add_action( 'wp_head', 'foto_customizer_header_output');