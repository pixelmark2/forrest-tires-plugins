jQuery(document).ready(function($) {
	if (typeof $('.carousel-list')[0] !== 'undefined') {
		$('.carousel-list').slick({
		  dots: true,
		  infinite: true,
		  speed: 500,
		  fade: false,
		  cssEase: 'linear',
		  prevArrow: '<i class="dashicons dashicons-arrow-left-alt2 slick-arrow-left"></i>',
		  nextArrow: '<i class="dashicons dashicons-arrow-right-alt2 slick-arrow-right"></i>'
		});		
	}

})