(function($) {

    'use strict'; 

    new WOW().init();

    /*-----------------------------------------------------------------------------------*/
    /*  Header Holder
    /*-----------------------------------------------------------------------------------*/

    $(document).ready(function() {
        var headerHeight = $('#header').height();
        $('.header-holder').css('height', headerHeight+20);
    });



    /*-----------------------------------------------------------------------------------*/
    /*  Layout Height
    /*-----------------------------------------------------------------------------------*/

    var windowHeight;
    var windowWidth;

    windowHeight = $(window).height();
    windowWidth = $(window).width();
    
    function fotoHeaderLeftHeight() {
        $("#header.left-side").css('height', windowHeight);
    };
    function fotoConcept3Height() {
        $("#photostack-3, .full-height").css('height', windowHeight - 67);
        $(".full-height-slide").css('height', windowHeight);
    };

    window.onload = function() {
      fotoHeaderLeftHeight();
      fotoConcept3Height();
    };

    window.onresize = function() {
      fotoHeaderLeftHeight();
      fotoConcept3Height();
    };

    /*-----------------------------------------------------------------------------------*/
    /*  Menu Mobile
    /*-----------------------------------------------------------------------------------*/

    $(document).ready(function() {
        $('#main-nav .sm.sm-clean').smartmenus({
            mainMenuSubOffsetX: -1,
            mainMenuSubOffsetY: 4,
            subMenusSubOffsetX: 6,
            subMenusSubOffsetY: -6
        });
    });

    $(".foto-menu-mobile").click(function() {
        $("#main-nav ul.sm-clean").toggleClass( "menu-active" );
    });

	
    $('.chocolat-parent').Chocolat();

    $(window).load(function(){
        $('.page-template-blog-template .blog-post').masonry({
          itemSelector: '.post-item',
        });
    });

})(jQuery); 