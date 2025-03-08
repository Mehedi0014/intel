/* 
$(document).ready(function() {
	$(window).scroll(function () {

    	console.log($(window).scrollTop());

    	if ($(window).scrollTop() > 100) {
        	$('#masthead').addClass('fixedElementAfterScroll');
    	}

    	if ($(window).scrollTop() < 101) {
        	$('#masthead').removeClass('fixedElementAfterScroll');
    	}
	});
});
*/




/* 
$(window).scroll(function(e){
	var $el = $('.fixedElement');
	var $el1 = $('.masthead');
	var $el2 = $('#masthead');
	var isPositionFixed = ($el.css('position') == 'fixed');

	if ($(this).scrollTop() < 100 && isPositionFixed){
    	$el1.removeClass("mastheadAfterScroll");
    	$el.removeClass("fixedElementAfterScroll")
	}

	if ($(this).scrollTop() > 100 && !isPositionFixed){
    	$el1.addClass("mastheadAfterScroll");
    	$el.addClass("fixedElementAfterScroll");
	}
})
*/
