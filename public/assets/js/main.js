(function($) {
    "use strict";

    jQuery(document).ready(function($) {
        /*-------------------------------
        MOBILE MENU 
        ---------------------------------*/
        $('.mobile-menu nav').meanmenu({
            meanScreenWidth: "767"
        });
        /*-------------------------------
        PRICE CART 
        ---------------------------------*/
        $('.price-cart').on("mouseenter", function() {
            $(this).find(".cart-details").stop(true).slideDown();
        });
        $('.price-cart').on("mouseleave", function() {
            $(this).find(".cart-details").stop(true).slideUp();
        });

        /*-------------------------------
        STELLAR ACTIVATION 
        ---------------------------------*/
        if ($.fn.stellar) {
            $(window).stellar({
                responsive: true,
                positionProperty: 'position',
                horizontalScrolling: false
            });
        }
        /*-------------------------------
        TAB ACTIVATION 
        ---------------------------------*/
        $('#myTabs a').on("click", function(e) {
            e.preventDefault()
            $(this).tab('show')
        });
        /*-------------------------------
        OWL CLIENT AREA
        ---------------------------------*/
        $(".client-wrap").owlCarousel({
            autoPlay: true, //Set AutoPlay to 3 seconds
            singleItem: true,
            pagination: false,
            navigation: true,
            navigationText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>']
        });
        /*-------------------------------
        OWL FEATURE AREA
        ---------------------------------*/
        $(".ab-feature-wrap").owlCarousel({
            autoPlay: true, //Set AutoPlay to 3 seconds
            items: 5,
            pagination: false,
            navigation: false,
        });
        /*-------------------------------
        OWL RELATED AREA
        ---------------------------------*/
        $(".related-wrap").owlCarousel({
            autoPlay: false, //Set AutoPlay to 3 seconds
            pagination: false,
            navigation: true,
            items: 3,
            navigationText: ['<i class="fa fa-long-arrow-left"></i>', '<i class="fa fa-long-arrow-right"></i>']
        });
    });

    jQuery(window).on("load", function(e) {
        /*-------------------------------
        COMMING SOON
        ---------------------------------*/
        $('.comming-countown').syotimer({
            year: 2018,
            month: 5,
            day: 9,
            hour: 20,
            minute: 30,
            effectType: 'opacity'
        });
    });

}(jQuery));