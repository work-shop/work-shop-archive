
//global variables
var cw,ch;
var loaded = false;
var state = 'intro';
var moving = false;

//initial events, and general event binding
jQuery(document).ready(function($) {

	view();
	
	$('#backtotop').click(function(event) {
	  	event.preventDefault();
		$('body,html').animate({scrollTop:0},2000);
	});
	
	$('.menu-toggle').click(function(event) {
	  	event.preventDefault();
		menuToggle();
	});
	
	$('.invitation-toggle').click(function(event) {
	  	event.preventDefault();
		invitationToggle();
	});	

	$(".jump").click(function(e){
		e.preventDefault();
		var href = $(this).attr("href");
		href = href.toLowerCase();
		scrollLink(href);	
	});
	
	$('.flexslider-full .flex-previous').click(function() {
	    $('.flexslider-full').flexslider('prev');
	    return false;		
	});		
	
	$('.flexslider-full .flex-next').click(function() {
	    $('.flexslider-full').flexslider('next');
	    return false;		
	});	
	

	$('.flex-end-previous').click(function() {
		console.log('previous');
	    $('.flexslider-end').flexslider('prev');
	    return false;		
	});		
	
	$('.flex-end-next').click(function() {
		console.log('next');
	    $('.flexslider-end').flexslider('next');
	    return false;		
	});	
	
/*
	$('.flexslider-project-end-slideshow .flex-next').click(function() {
		console.log('next');
	    $('.flexslider-project-end-slideshow').flexslider('next');
	    return false;		
	});	
			
*/
	


});//end document.ready

$(window).ready(function() {

	$('[data-toggle="tooltip"]').tooltip();

});//end window.ready


$(window).resize(function() {

	view();	
	
});//end window.resize


$(window).scroll(function() { 

	if($('#state').hasClass('spy')){
		spy();
	}	

	var after = $('body').offset().top + 200;
	       
	if($(this).scrollTop() >= after && $("body").hasClass('before')){
		$("body").removeClass('before').addClass('after');
	} 
	else if($(this).scrollTop() < after && $("body").hasClass('after')){
		$("body").removeClass('after').addClass('before');	
	} 

});//end window.scroll


//FUNCTIONS

//m or M	
$(document).keypress(function(e) {
	if(e.which == 109 || e.which == 77) {
		//navToggle();
	}	
});

//down arrow
$(document).keydown(function(e){
    if (e.keyCode == 40 && !moving) { 
    	moving = true;
    	pos = stateNext.offset().top;

	 	$('html,body').animate({
			scrollTop: pos
		},2000, function() {
			moving = false;
		});  
       return false;
    }
});

//up arrow
$(document).keydown(function(e){
    if (e.keyCode == 38 && !moving) { 
    	moving = true;
    	pos = statePrevious.offset().top;

	 	$('html,body').animate({
			scrollTop: pos
		},2000, function() {
			moving = false;
		});  
       return false;
    }
});

//left arrow
$(document).keydown(function(e){
    if (e.keyCode == 37) { 
    	
       return false;
    }
});

//right arrow
$(document).keydown(function(e){
    if (e.keyCode == 39) { 
    	
       return false;
    }
});


//initialize flexslider slideshows
function flexsliderSetup(){

	$('.flexslider-home').flexslider({	
	      animation: 'fade',
	      slideshowSpeed: 4000,           
		  animationSpeed: 1000,
	      directionNav: false,
	      controlNav: false
	 });	 

	$('.flexslider-full').flexslider({
	      animation: 'slide',
	      controlsContainer: '.flexslider-full-controls',
	      slideshowSpeed: 5000,           
		  animationSpeed: 600,
	      directionNav: false,
	      keyboard: true
	 });
	 
	$('.flexslider-end').flexslider({
	      animation: 'slide',
	      controlsContainer: '.flexslider-end-controls',
	      slideshowSpeed: 5000,           
		  animationSpeed: 600,
	      directionNav: false,
	      keyboard: true
	 });	 			 
	 	 	
}

//animate jump links
function scrollLink(destination){
	$('html,body').animate({
		scrollTop: $(destination).offset().top - 0
	},1500);
}

//open and close the menu
function menuToggle(){
	
	if($('#header').hasClass('off')){
		$('#header').removeClass('off');
		$('#header').addClass('on');
		$('html').removeClass('header-closed');
		$('html').addClass('header-open');	
		var trim = $(window).height();		
		$('html,body').css('height',trim);
	}
	
	else if($('#header').hasClass('on')){
		$('#header').removeClass('on');
		$('#header').addClass('off');
		$('html').removeClass('header-open');
		$('html').addClass('header-closed');
		$('#header').scrollTop(0);	
		$('html').css('height','100%');
		$('body').css('height','100%');						
	}
	
}

function invitationToggle(){
	
	if($('.invitation-form').hasClass('closed')){
		$('.invitation-form').removeClass('closed');
		$('.invitation-form').addClass('open');
	}
	
}

//measure, resize, and adjust the viewport
function view(){
	
	ch = $(window).height();
	cw = $(window).width();
	ph = ch - 130;
	fw = cw*.5;
	
	if($(window).width() >= 768){		
		$('.block.half').css('height',ch/2);				
		$('.block.full').css('height',ch);		
		$('.block.min-large').css('min-height',ch);	
		$('.block.three-quarter').css('height',ph);	
		$('.block.three-quarter-max').css('max-height',ph);		
		$('.flexslider-hero').css('height',fw);																									
	}
	else{
		$('.block.half').css('height',ch/2);				
		$('.block.full').css('height',ch);		
		$('.block.min-large').css('min-height','none');	
		$('.block.three-quarter').css('height',ph);			
		$('.block.three-quarter-max').css('max-height',ph);	
		$('.flexslider-hero').css('height',fw);																																	
	}
	
	if(!loaded){
		loadPage();
	}		

}

//once all elements are sized, slideshows initialized, fade in the content
function loadPage(){
	loaded = true;
	
	flexsliderSetup();

	setTimeout(function(){
		$('.loading').addClass('loaded');
		$('.landing').addClass('landed');
		view();
	},1000);		
		
}

//determine state of the users view on the page by scroll position 
function spy(){

	var targets = new Array();
	
	if($('body').hasClass('home')){	
		if( $(window).width() < 768 ){ 
			var o = 350; 
		}else{ 
			var o = ($(window).height() / 2); 
		}			
	}
	else{
		var o = 90; 
	}

	
	$('.spy .jump').each(function(i){
		targets[i] = new Array(4);
		var temp = $(this).attr('href');
		var offset = $(temp).offset();	
		targets[i][0] = $(this);		
		targets[i][1] = offset.top;
		targets[i][2] = $(temp);		
	});
	
	if($('.spy').hasClass('falloff')){
		var falloffTemp = $('.falloff-link').attr('href');	
		var falloffOffset = $(falloffTemp).offset();
		var falloffPosition = falloffOffset.top;
		}	
	
	for(var j = 0; j < targets.length; j++){
	
		if(($(window).scrollTop() + o) >= targets[j][1]){
			$('.block').removeClass('active');					
			$('.spy .jump').removeClass('active');		
			targets[j][0].addClass('active');		
			targets[j][2].addClass('active');			
			targets[j][2].addClass('activated');	
			
			if($('.spy').hasClass('falloff') && $(window).scrollTop() >= falloffPosition){
				$('.spy').addClass('hidden');
			}	
			else{
				$('.spy').removeClass('hidden');
			}	
				
		}
	}	
	
}




