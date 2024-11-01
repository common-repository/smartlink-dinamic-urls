jQuery(document).ready(function($){
	'use strict';let s = jQuery.noConflict();

	// open info popups
	s('.def-icon').click(function() {
		s('.def-popup').addClass('open');	
		s(':not(.def-popup)').removeClass('open');
	})
	s('.defgt-icon').click(function() {
		s('.defgt-popup').addClass('open');	
		s(':not(.defgt-popup)').removeClass('open');
	})
	s('.init-icon').click(function() {
		s('.init-popup').addClass('open');	
		s(':not(.init-popup)').removeClass('open');
	})
	s('.clean-icon').click(function() {
		s('.clean-popup').addClass('open');	
		s(':not(.clean-popup)').removeClass('open');
	})
	
	


	// Close info popup
	s('.x-close').click(function(){
		s('.def-popup').removeClass('open');
		s('.clean-popup').removeClass('open');	
		s('.defgt-popup').removeClass('open');
		s('.init-popup').removeClass('open');
		
	})
});