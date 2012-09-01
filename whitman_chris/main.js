// JavaScript Document
// Stuff webiste main JS

$(document).ready(function(){
	
	//initially hides all images and only shows first image when page loads
	$('#stuffBigImg').children().hide();
	$('#img1').show();
	
	//scroll effect - 13by13 page
	$('.arrow a').click(function(){
		var div = $(this).html();
		$.scrollTo('.'+div, 1000);
		
		return false;	
	});
	
	 //13by13 source change code
	//creates a variable for all thumbnail images
	var thumb = $('.thumbNail');
		
	$(thumb).click(function(event){
		//declare variables for thumbnail html markup && main image html markup
		var thumbHtml = $(this).find('img').attr('content');
		var mainHtml = $(this).parent().parent().find('.blogPhoto').html(thumbHtml);
		
		  // On thumbnail click, the main image html is emptied and the thumbnail html is loaded in place
		 // NOTE:: for this to work markup code (HTML) must be inside of a ~content~ attribute using single quotes
		// to start the tag thus allowing double quotes to go around markup as normal inside attribute.
/* 		$(this).parent().parent().find('.blogPhoto').empty().append().html(thumbHtml); */
		
		//prevents default action - i.e. screen jump
		event.preventDefault();
	});
})

//variables for image slider - functionality follows
var slidenum = 2;
var slide = function(){

	for(i=1;i<6;i++){
		$("#img"+i).fadeOut(500);
	}
	
	$("#img"+slidenum).delay(500).fadeIn(500);
	
	slidenum++;	
	
	if(slidenum == 6){	
		slidenum=1;	
	}
}

//sets repeat interval for image slides
setInterval(function(){
		slide();
	},5000);
	
	
		

