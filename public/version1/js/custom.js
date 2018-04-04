$(document).ready(function() {
	'use strict';
	var contentStart = $('#about').offset().top;

	$('#menu-button').click(function() {
		$("#menu-items").animate({
			width : 'toggle'
		}, 350);
		$('#menu-button').toggleClass('clicked');
	});

	/*
	 $(document).scroll(function() {
	 if ($(window).width() > 1200) {
	 var currentY = $(this).scrollTop();
	 if (currentY >= contentStart) {
	 //            $('#menu-button-wrapper-2').addClass('scrolled');
	 $('#menu').show(350);
	 } else {
	 //            $('#menu-button-wrapper-2').removeClass('scrolled');
	 $('#menu').hide(350);
	 }
	 }
	 });*/

	$('#menu-items > ul > li > a').click(function() {
		$("#menu-items").animate({
			width : 'toggle'
		}, 350);
	});

});

//Swap images based on mobile device/ desktop
$(document).ready(function() {
	var device = ($(window).innerWidth() / $(window).innerHeight()) > 1 ? "landscape" : "portrait";
	$("img").each(function() {
		$(this).attr("src", $(this).data(device));
	});
});

// Equal Heights Code
$(document).ready(function() {
	'use strict';
	var heights = $(".equal-height").map(function() {
		return $(this).height();
	}).get(),

	    maxHeight = Math.max.apply(null, heights);

	$(".equal-height").height(maxHeight);
});
$(document).ready(function() {
	'use strict';
	var heights = $(".equal-height-testimonial").map(function() {
		return $(this).height();
	}).get(),

	    maxHeight = Math.max.apply(null, heights);

	$(".equal-height-testimonial").height(maxHeight);
});

//Portfolio Modals
$(document).ready(function() {
	var loaded = [];
	for (var i = 0; i < $('.portfolio-item').length; i++) {
		loaded.push(false);
	}

	$('.portfolio-item').click(function() {

		var target = $(this).children("a").attr("href");
		//gets last character and converts to int
		var clickedID = parseInt($(this).children("a").attr("href").slice(-1));
		if (!(loaded[clickedID - 1])) {
			$.ajax({
				type : "POST",
				url : "/processing/load-portfolio.php",
				data : {
					portfolioID : clickedID
				},
				success : function(data) {
					$(target).find(".portfolio-carousel").html(data);
					loaded[clickedID - 1] = true;
				}
			});
		}
	});

	$('.testimonial-to-portfolio').click(function() {
		var target = $(this).attr("data-target");
		//gets last character and converts to int
		var clickedID = parseInt(target.slice(-1));
		if (!(loaded[clickedID - 1])) {
			$.ajax({
				type : "POST",
				url : "/processing/load-portfolio.php",
				data : {
					portfolioID : clickedID
				},
				success : function(data) {
					$(target).find(".portfolio-carousel").html(data);
					loaded[clickedID - 1] = true;
				}
			});
		}
	});
});

