(function($) {

    'use strict'; 

	$(window).scrollTop();
        $(window).scroll(function() {
            if ($(this).scrollTop() > 20) {
                $('body').addClass("sticky-header");
            } else {
                $('body').removeClass("sticky-header");
            }
    });

})(jQuery); 