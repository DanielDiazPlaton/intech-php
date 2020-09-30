$(document).ready(function() {
    new WOW().init();
});

/*=================================================================================
                                    PROMOS PARALLAX
===================================================================================*/

// object-fit polyfill run
objectFitImages();

/* init Jarallax */
jarallax(document.querySelectorAll('.jarallax'));

jarallax(document.querySelectorAll('.jarallax-keep-img'), {
    keepImg: true,
});