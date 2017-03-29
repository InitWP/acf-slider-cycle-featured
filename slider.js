/**
 * File slider.js
 *
 * Handles the initialization of the Cycle2 sliders
 */
var NAMESPACESliders = (function ($) {

	/**
	 * Initialize sliders
	 */
	function initSliders() {
		$('.slider-featured').cycle({
			slides: '> .slider-featured--slide',
			pager: '.slider--pager',
			autoHeight: '1170:504',
			pagerActiveClass: 'slider--pager-is-active',
			timeout: 5000,
			speed: 1000,
			swipe: true,
			pagerTemplate: '<li><span> {{slideNum}} </span></li>'
		});
	}

	function init() {
		initSliders();
	}

	return {
		init: init
	};

})(jQuery);

// Auto init
NAMESPACESliders.init();
