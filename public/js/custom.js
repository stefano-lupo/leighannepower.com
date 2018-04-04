$(document).ready(function () {
    'use strict';
//    var contentStart = $('#about').offset().top;
//
//    $('#menu-button').click(function () {
//        $("#menu-items").animate({
//            width: 'toggle'
//        }, 350);
//        $('#menu-button').toggleClass('clicked');
//    });
//
//    $(document).scroll(function () {
//        if ($(window).width() > 1200) {
//            var currentY = $(this).scrollTop();
//            if (currentY >= contentStart) {
//                //            $('#menu-button-wrapper-2').addClass('scrolled');
//                $('#menu').show(350);
//            } else {
//                //            $('#menu-button-wrapper-2').removeClass('scrolled');
//                $('#menu').hide(350);
//            }
//        }
//    });
//
//    $('#menu-items > ul > li > a').click(function () {
//        $("#menu-items").animate({
//            width: 'toggle'
//        }, 350);
//    });



    //Setting section heading text
    //    $(document).scroll(function () {
    //        var offset = 250;
    //        var currentY = $(this).scrollTop() + offset;
    //        var aboutY = $('#about').offset().top;
    //        var portfolioY = $('#portfolio').offset().top;
    //        var servicesY = $('#services').offset().top;
    //        var contactY = $('#contact').offset().top;
    //        if (currentY < aboutY) {
    //            $('#section-heading').text("Welcome");
    //        } else if (currentY >= aboutY && currentY < portfolioY) {
    //            $('#section-heading').text("About");
    //        } else if (currentY >= portfolioY && currentY < servicesY) {
    //            $('#section-heading').text("Portfolio");
    //        } else if (currentY >= servicesY && currentY < contactY) {
    //            $('#section-heading').text("Services");
    //        }
    //    });

    //navbar logo
//    $(document).scroll(function () {
//        var currentY = $(this).scrollTop();
//        if (currentY < 200) {
//            $('.navbar-brand').fadeOut();
//        } else {
//            $('.navbar-brand').fadeIn();
//        }
//    });




});



////Swap images based on mobile device/ desktop
//$(document).ready(function () {
//    var device = ($(window).innerWidth() / $(window).innerHeight()) > 1 ? "landscape" : "portrait";
//    $("img").each(function () {
//        $(this).attr("src", $(this).data(device));
//    });
//});





//// Equal Heights Code
//$(document).ready(function () {
//    'use strict';
//    var heights = $(".equal-height").map(function () {
//            return $(this).height();
//        }).get(),
//
//        maxHeight = Math.max.apply(null, heights);
//
//    $(".equal-height").height(maxHeight);
//});
//$(document).ready(function () {
//    'use strict';
//    var heights = $(".equal-height-testimonial").map(function () {
//            return $(this).height();
//        }).get(),
//
//        maxHeight = Math.max.apply(null, heights);
//
//    $(".equal-height-testimonial").height(maxHeight);
//});