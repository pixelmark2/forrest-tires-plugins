jQuery(document).ready(function($) {
	if (typeof $('.carousel-list')[0] !== 'undefined') {
		$('.carousel-list').slick({
		  dots: false,
		  infinite: true,
		  autoplay: true,
		  autoplaySpeed: 5000,
		  speed: 750,
		  fade: false,
		  cssEase: 'linear',
		  prevArrow: '<i class="dashicons dashicons-arrow-left-alt2 slick-arrow-left"></i>',
		  nextArrow: '<i class="dashicons dashicons-arrow-right-alt2 slick-arrow-right"></i>'
		});		
	}

})