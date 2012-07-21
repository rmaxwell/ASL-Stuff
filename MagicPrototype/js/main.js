// JavaScript Document

$(document).ready(function(){
	
	//initially hides all images and only shows first image when page loads
	$('#stuffBigImg').children().hide();
	$('#img1').show();

})

//variables for image slider - functionality follows
var slidenum = 2;
var slide = function(){

	for(i=1;i<6;i++){
		console.log(i);
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
	
	
		

