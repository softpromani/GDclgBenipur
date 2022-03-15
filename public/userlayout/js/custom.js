$(function() {
    'use strict'; // Start of use strict
/*------------------------------------------------------------------
    Scrool Top
------------------------------------------------------------------*/
    if ($('#scrool-top').length) {
        var scrollTrigger = 100, // px
            backToTop = function() {
                var scrollTop = $(window).scrollTop();
                if (scrollTop > scrollTrigger) {
                    $('#scrool-top').addClass('show');
                } else {
                    $('#scrool-top').removeClass('show');
                }
            };
        backToTop();
        $(window).on('scroll', function() {
            backToTop();
        });
        $('#scrool-top').on('click', function(e) {
            e.preventDefault();
            $('html,body').animate({
                scrollTop: 0
            }, 700);
        });
    }
/*------------------------------------------------------------------
     Main Navigation 
------------------------------------------------------------------*/
	//jQuery for page scrolling feature - requires jQuery Easing plugin
	$('.page-scroll a').on('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: ($($anchor.attr('href')).offset().top - 60)
        }, 1250, 'easeInOutExpo');
        event.preventDefault();
    });
/*------------------------------------------------------------------
	Highlight the top nav as scrolling occurs
------------------------------------------------------------------*/
    $('body').scrollspy({
        target: '.navbar-default',
        offset: 70
    });
/*------------------------------------------------------------------
	Closes the Responsive Menu on Menu Item Click
------------------------------------------------------------------*/
    $('.navbar-collapse ul li a:not(.dropdown-toggle)').on('click', function() {
        $('.navbar-toggle:visible').click();
    });
});
/*------------------------------------------------------------------
	Wow animations
------------------------------------------------------------------*/
wow = new WOW({
    animateClass: 'animated',
    offset: 100,
});
wow.init();
/*------------------------------------------------------------------
 	Loader + Google map
------------------------------------------------------------------*/
jQuery(window).on("load scroll", function() {
    'use strict'; // Start of use strict
    // Loader 
    $("#dvLoading").fadeOut("fast");
    // map zooming 	 
    $('.google-map').on('click', function() {
        $('.google-map iframe').css("pointer-events", "auto");
    });
});
/*------------------------------------------------------------------
    Owl Carousel for Courses
------------------------------------------------------------------*/
var owl = $("#owl-demo");
owl.owlCarousel({
    itemsCustom: [
        [0, 1],
        [450, 2],
        [600, 2],
        [700, 2],
        [1000, 4],
        [1200, 4],
        [1400, 4],
        [1600, 4]
    ],
    navigation: true

});
/*------------------------------------------------------------------
    Owl Carousel for Team
------------------------------------------------------------------*/
var owl = $("#team");
owl.owlCarousel({
    itemsCustom: [
        [0, 1],
        [450, 2],
        [600, 2],
        [700, 2],
        [1000, 4],
        [1200, 4],
        [1400, 4],
        [1600, 4]
    ],
    navigation: true

});
/*------------------------------------------------------------------
    Owl Carousel for Testimonial
------------------------------------------------------------------*/
var owl = $(".testimonials-list");
owl.owlCarousel({
    itemsCustom: [
        [0, 1],
        [450, 1],
        [600, 1],
        [700, 1],
        [1000, 1],
        [1200, 1],
        [1400, 1],
        [1600, 1]
    ],
    navigation: true

});
/*------------------------------------------------------------------
    Owl Carousel for Partner Logos
------------------------------------------------------------------*/
var owl = $("#partner-logos");
owl.owlCarousel({
    itemsCustom: [
        [0, 1],
        [450, 2],
        [600, 2],
        [700, 2],
        [1000, 3],
        [1200, 4],
        [1400, 4],
        [1600, 4]
    ],
    navigation: true

});
/*------------------------------------------------------------------
	Accordion
------------------------------------------------------------------*/
(function($) {
    "use strict"

    // Accordion Toggle Items
    var iconOpen = 'fa fa-minus',
        iconClose = 'fa fa-plus';

    $(document).on('show.bs.collapse hide.bs.collapse', '.accordion', function(e) {
        var $target = $(e.target)
        $target.siblings('.accordion-heading')
            .find('em').toggleClass(iconOpen + ' ' + iconClose);
        if (e.type == 'show')
            $target.prev('.accordion-heading').find('.accordion-toggle').addClass('active');
        if (e.type == 'hide')
            $(this).find('.accordion-toggle').not($target).removeClass('active');
    });

})(jQuery);