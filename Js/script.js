$(document).ready(function(){
	/* This code is executed after the DOM has been completely loaded */

	$('#fancyClock').tzineClock();

});

function animationHover(element, animation){
    element = $(element);
    element.hover(
        function() {
            element.addClass('animated ' + animation);        
        },
        function(){
            //wait for animation to finish before removing classes
            window.setTimeout( function(){
                element.removeClass('animated ' + animation);
            }, 2000);         
        });
}