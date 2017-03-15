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
	};

	return {
		init: init
	};

})();

$(function() {
	main.init();
});

