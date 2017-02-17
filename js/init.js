
	$(document).ready(function fp() {

		var windowWidth = jQuery(window).width();

		if(screen.width < 1279) { 
			$.fn.fullpage.destroy('all');
		// do any 480 width stuff here, or simply do nothing
		return;} 
		else {$.fn.fullpage();}

		enquire.register("screen and (min-width : 1279px)", fp(), false);


