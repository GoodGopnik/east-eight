(function ($, root, undefined) {

	$(function () {

		'use strict';

		$(document).ready(function () {

			$('a[href*="#"]:not([href*=http])').click(function(event) {
				event.preventDefault();
				var id  = $(this).attr('href'),
					top = $(id).offset().top;
				$('body,html').animate({scrollTop: top}, 800);
			});

			var owl1 = $(".gallety-slider");
			owl1.owlCarousel({
				items: 1,
				loop: true,
				//autoWidth:true,
				margin: 0,
				nav: false,
				navText: false,
				dots: true,
				smartSpeed: 500,
				//autoplay:true,
				autoplayTimeout: 4000,
			});

			var owl2 = $(".sol-slider");
			owl2.owlCarousel({
				items: 1,
				loop: true,
				margin: 0,
				nav: false,
				navText: false,
				dots: true,
				smartSpeed: 500,
				autoplayTimeout: 4000,
			});

			$('.accord-one h3').click(function() {
				if(!$(this).parent().hasClass('active')) {
					$('.open-accord').slideUp();
					$('.accord-one').removeClass('active');
				}
				$(this).next().slideToggle();
				$(this).parent().toggleClass('active');
			});

			$(".tab").click(function() {
				$(this).parent().find(".tab").removeClass("active2").eq($(this).index()).addClass("active2");
				var dt = $(this).attr('data-content');
				$(".tab_item").hide();
				$(".tab_item:nth-child("+dt+")").fadeIn();
			}).eq(0).addClass("active2");
			$(".tab_item").css('display','none');
			$(".tab_item:first-child").css('display', 'block');
			$(".tabs").each(function() { $(this).find('.tab:first').addClass("active2"); });

			//$('.service-one').matchHeight();

		});

		$(window).load(function () {

		});

		$(window).scroll(function () {

		});

	});



})(jQuery, this);