/*! Main */
var main = (function() {
	'use strict';

/*------------------------------------*\
	INIT
\*------------------------------------*/
	var init = function() {
		cookieControl();
		accessibleDropDown();
		smoothScroll();
		console.log('heeeeeeeeeee');
	};

	return {
		init: init
	};

})();

$(function() {
	main.init();
});

