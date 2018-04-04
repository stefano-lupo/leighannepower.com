(function ($) {
    "use strict"; // Start of use strict

    // jQuery for page scrolling feature - requires jQuery Easing plugin
    $('a.page-scroll').bind('click', function (event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: ($($anchor.attr('href')).offset().top - 150)
        }, 1250, 'easeInOutExpo');
        event.preventDefault();
    });






    // Highlight the top nav as scrolling occurs
    $('body').scrollspy({
        target: '.navbar-fixed-top',
        offset: 180
    })

    // Closes the Responsive Menu on Menu Item Click
    $('.navbar-collapse ul li a').click(function () {
        $('.navbar-toggle:visible').click();
    });


    // Offset for Main Navigation
    $('#mainNav').affix({
        offset: {
            top: 100
        }
    })

    // Initialize WOW.js Scrolling Animations
    new WOW().init();

})(jQuery); // End of use strict
$('#myCarousel').carousel({
    interval: 4000
});

// handles the carousel thumbnails
$('[id^=carousel-selector-]').click(function () {
    var id_selector = $(this).attr("id");
    var id = id_selector.substr(id_selector.length - 1);
    id = parseInt(id);
    $('#myCarousel').carousel(id);
    $('[id^=carousel-selector-]').removeClass('selected');
    $(this).addClass('selected');
});

// when the carousel slides, auto update
$('#myCarousel').on('slid', function (e) {
    var id = $('.item.active').data('slide-number');
    id = parseInt(id);
    $('[id^=carousel-selector-]').removeClass('selected');
    $('[id=carousel-selector-' + id + ']').addClass('selected');
});


// handles the 2nd carousel thumbnails
$('[id^=carousel-selector-]').click(function () {
    var id_selector = $(this).attr("id");
    var id = id_selector.substr(id_selector.length - 1);
    id = parseInt(id);
    $('#myCarousel-2').carousel(id);
    $('[id^=carousel-selector-]').removeClass('selected');
    $(this).addClass('selected');
});

// when the carousel slides, auto update
$('#myCarousel-2').on('slid', function (e) {
    var id = $('.item.active').data('slide-number')
    id = parseInt(id);
    $('[id^=carousel-selector-]').removeClass('selected');
    $('[id=carousel-selector-' + id + ']').addClass('selected');
});

// handles the 3rd carousel thumbnails
$('[id^=carousel-selector-]').click(function () {
    var id_selector = $(this).attr("id");
    var id = id_selector.substr(id_selector.length - 1);
    id = parseInt(id);
    $('#myCarousel-3').carousel(id);
    $('[id^=carousel-selector-]').removeClass('selected');
    $(this).addClass('selected');
});

// when the carousel slides, auto update
$('#myCarousel-3').on('slid', function (e) {
    var id = $('.item.active').data('slide-number');
    id = parseInt(id);
    $('[id^=carousel-selector-]').removeClass('selected');
    $('[id=carousel-selector-' + id + ']').addClass('selected');
});

// handles the 4th carousel thumbnails
$('[id^=carousel-selector-]').click(function () {
    var id_selector = $(this).attr("id");
    var id = id_selector.substr(id_selector.length - 1);
    id = parseInt(id);
    $('#myCarousel-4').carousel(id);
    $('[id^=carousel-selector-]').removeClass('selected');
    $(this).addClass('selected');
});

// when the carousel slides, auto update
$('#myCarousel-4').on('slid', function (e) {
    var id = $('.item.active').data('slide-number');
    id = parseInt(id);
    $('[id^=carousel-selector-]').removeClass('selected');
    $('[id=carousel-selector-' + id + ']').addClass('selected');
});
