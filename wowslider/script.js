
(function($) {

// jQuery(document).ready - conflicted with some scripts
// Transition time = 2.4s = 44/10
// SlideShow delay = 6.5s = 19/10
jQuery('#wowslider-container1').wowSlider({
	effect:"cube_over", 
	prev:"", 
	next:"", 
	duration: 19*100, 
	delay:44*100, 
	width:700,
	height:700,
	autoPlay:true,
	autoPlayVideo:false,
	playPause:false,
	stopOnHover:false,
	loop:false,
	bullets:1,
	caption: false,
});

})(jQuery);