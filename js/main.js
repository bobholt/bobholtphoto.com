/* Author: Bob Holt

*/


;(function(win, $){
	"use strict";

	var BHPHOTO = window.BHPHOTO = (typeof window.BHPHOTO !== "undefined") ? win.BHPHOTO : {};

	var init = BHPHOTO.init = function() {
		attachEventHandlers();
	};

	var attachEventHandlers = function() {
		$('.main-menu').on('click', collapseNav);
		$('.main-menu a').on('click', goToPage);
	};

	var goToPage = function(e) {
		e.stopPropagation();
	};

	var collapseNav = function() {
		var navWidth = $(this).outerWidth();

		if (parseInt($(this).css('left'), 10) === 0) {
			$(this).animate({
				'left': 30 - navWidth + "px"
			});
		} else {
			$(this).animate({
				'left': 0
			});
		}
	};

	// var shuffleArray = BHPHOTO.shuffleArray = function (array) {
	// 	var tmp, current, top = array.length;

	// 	if (top) {
	// 		while(--top) {
	// 			current = Math.floor(Math.random() * (top + 1));
	// 			tmp = array[current];
	// 			array[current] = array[top];
	// 			array[top] = tmp;
	// 		}
	// 	}

	// 	return array;
	// };

}(window, jQuery));

$(function(){
	BHPHOTO.init();
});