(function($){
	var linkOn1 = $('.on1');
	var linkOff1 = $('.off1');
	var newURL1 = $('.url_input1');
	var linkWindow1 = $('.slider_link1');
	var hide1 = $('.slider_options1');

	var linkOn2 = $('.on2');
	var linkOff2 = $('.off2');
	var newURL2 = $('.url_input2');
	var linkWindow2 = $('.slider_link2');
	var hide2 = $('.slider_options2');

	var linkOn3 = $('.on3');
	var linkOff3 = $('.off3');
	var newURL3 = $('.url_input3');
	var linkWindow3 = $('.slider_link3');
	var hide3 = $('.slider_options3');

	var linkOn4 = $('.on4');
	var linkOff4 = $('.off4');
	var newURL4 = $('.url_input4');
	var linkWindow4 = $('.slider_link4');
	var hide4 = $('.slider_options4');

	var linkOn5 = $('.on5');
	var linkOff5 = $('.off5');
	var newURL5 = $('.url_input5');
	var linkWindow5 = $('.slider_link5');
	var hide5 = $('.slider_options5');

	linkOn1.on('click', function(e){
		linkWindow1.fadeIn();
	});
	
	linkOff1.on('click', function(e){
		linkWindow1.fadeOut();
	});
	
	linkOn2.on('click', function(e){
		linkWindow2.fadeIn();
	});
	
	linkOff2.on('click', function(e){
		linkWindow2.fadeOut();
	});
	
	linkOn3.on('click', function(e){
		linkWindow3.fadeIn();
	});
	
	linkOff3.on('click', function(e){
		linkWindow3.fadeOut();
	});
	
	linkOn4.on('click', function(e){
		linkWindow4.fadeIn();
	});
	
	linkOff4.on('click', function(e){
		linkWindow4.fadeOut();
	});
	
	linkOn5.on('click', function(e){
		linkWindow5.fadeIn();
	});
	
	linkOff5.on('click', function(e){
		linkWindow5.fadeOut();
	});
	
	hide1.on('change', function(e){
		var select = $('.slider_options1, .show_url').val();
		if(select == 0){
			newURL1.fadeIn();
		}else{
			newURL1.fadeOut();
		}
	});

	hide2.on('change', function(e){
		var select = $('.slider_options2, .show_url').val();
		if(select == 0){
			newURL2.fadeIn();
		}else{
			newURL2.fadeOut();
		}
	});
	
	hide3.on('change', function(e){
		var select = $('.slider_options3, .show_url').val();
		if(select == 0){
			newURL3.fadeIn();
		}else{
			newURL3.fadeOut();
		}
	});
	
	hide4.on('change', function(e){
		var select = $('.slider_options4, .show_url').val();
		if(select == 0){
			newURL4.fadeIn();
		}else{
			newURL4.fadeOut();
		}
	});
	
	hide5.on('change', function(e){
		var select = $('.slider_options5, .show_url').val();
		if(select == 0){
			newURL5.fadeIn();
		}else{
			newURL5.fadeOut();
		}
	});
})(jQuery);