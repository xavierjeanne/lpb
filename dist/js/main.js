jQuery(document).ready(function(){(new WOW).init(),jQuery("a[href*='#']:not([href='#']):not([href='#home']):not([href='#profile']):not([href='#contact'])").click(function(){if(location.hostname==this.hostname&&this.pathname.replace(/^\//,"")==location.pathname.replace(/^\//,"")){var e=jQuery(this.hash);if(e=e.length?e:jQuery("[name="+this.hash.slice(1)+"]"),e.length)return e=e.offset().top,e-=100,jQuery("html, body").animate({scrollTop:e},1300),!1}}),jQuery(window).scroll(function(){jQuery(this).scrollTop()>50?jQuery(".navbar").addClass("sticky"):jQuery(".navbar").removeClass("sticky",2e3)}),jQuery(".navbar-toggler").click(function(){jQuery(this).toggleClass("open"),jQuery("body").toggleClass("overflow"),jQuery("#navbarSupportedContent").toggleClass("animate__animated animate__fadeInRight")}),jQuery("#plats").owlCarousel({items:1,loop:!0,pagination:!1,autoHeight:!1,responsive:{0:{dots:!0,nav:!1},575:{dots:!1,nav:!0}}}),jQuery(window).on("load",function(){jQuery("#loader-page").fadeOut("slow")})});