jQuery(document).ready(function($) {
	$('.carousel-list').slick({
	  dots: true,
	  infinite: true,
	  speed: 500,
	  fade: false,
	  cssEase: 'linear',
	  prevArrow: '<span></span>',
	  nextArrow: '<span></span>'
	});
})