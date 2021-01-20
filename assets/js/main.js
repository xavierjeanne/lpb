jQuery(document).ready(function () {

    new WOW().init();
    /**
     * Smooth scrolling to page anchor on click
     **/
    jQuery("a[href*='#']:not([href='#']):not([href='#home']):not([href='#profile']):not([href='#contact'])").click(function () {
        if (location.hostname == this.hostname && this.pathname.replace(/^\//, "") == location.pathname.replace(/^\//, "")) {
            var anchor = jQuery(this.hash);
            anchor = anchor.length ? anchor : jQuery("[name=" + this.hash.slice(1) + "]");
            if (anchor.length) {
                anchor = anchor.offset().top;
                anchor = anchor - 100;
                jQuery("html, body").animate({
                    scrollTop: anchor
                }, 1300);

                return false;
            }
        }
    });



    jQuery(window).scroll(function () {
        if (jQuery(this).scrollTop() > 50) {
            jQuery(".navbar").addClass("sticky");

        } else {
            jQuery(".navbar").removeClass("sticky", 2000);

        }
    });
    //Menu burger icon animation
    jQuery('.navbar-toggler').click(function () {
        jQuery(this).toggleClass('open');
        jQuery('body').toggleClass('overflow');
        jQuery('#navbarSupportedContent').toggleClass('animate__animated animate__fadeInRight');
    });

    jQuery("#plats").owlCarousel({
      items:1,
      loop:true,
      pagination:false,
      autoHeight: false,
      responsive : {
        0 : {
          dots:true,
          nav: false,
        },
        575 : {
            dots: false,
            nav: true,
        }
      }
    });

    //Loader
    jQuery(window).on('load', function () {
        jQuery("#loader-page").fadeOut("slow");
    });

});