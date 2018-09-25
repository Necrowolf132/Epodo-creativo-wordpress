jQuery( document ).ready(function () {
   console.log('yo', jQuery(window).width());

        jQuery('.page-header').css({'height': jQuery(window).height()});
        jQuery(window).on('resize', function () {
            if (jQuery(window).height() < 980) {
                jQuery('.page-header').css({'height': jQuery(window).height()});
                jQuery('.carousel .item .container').css({'padding' : '0px'});
            } else {
                jQuery('.page-header').css({'height': jQuery(window).height()});
            }
    });
    jQuery(window).on("scroll", function() {
        if(jQuery(window).scrollTop()) {
            jQuery('.icon2').fadeOut(250, function () {
                jQuery('.icon1').fadeIn(250);
            });
            jQuery('#main-nav').addClass('modifi');
        } else {
            jQuery('#main-nav').removeClass('modifi');
            jQuery('.icon1').fadeOut(250, function () {
                jQuery('.icon2').fadeIn(250);
            });
        }
    })
});