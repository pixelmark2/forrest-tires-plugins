jQuery(document).ready(function($) {
	if (typeof $('.d2l-gallery')[0] !== 'undefined') {
		$('.d2l-gallery').slick({
		  dots: false,
		  infinite: false,
		  autoplay: true,
		  autoplaySpeed: 3000,
		  speed: 750,
		  fade: true,
		  cssEase: 'linear',
		  prevArrow: '<i class="dashicons dashicons-arrow-left-alt2 slick-arrow-left"></i>',
		  nextArrow: '<i class="dashicons dashicons-arrow-right-alt2 slick-arrow-right"></i>'
		});		
	}
})