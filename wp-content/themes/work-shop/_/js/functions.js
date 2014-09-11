
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

	$(".jump").click(function(e){
		e.preventDefault();
		var href = $(this).attr("href");
		href = href.toLowerCase();
		scrollLink(href);	
	});


});//end document.ready


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
		navToggle();
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

	$('.flexslider-shop').flexslider({	
	      animation: 'fade',
	      controlsContainer: '.flexslider-controls',
	      slideshowSpeed: 8000,           
		  animationSpeed: 1000,
	      directionNav: false,
	      controlNav: false
	 });	 

	$('.flexslider').flexslider({
	      animation: 'slide',
	      controlsContainer: '.flexslider-controls',
	      slideshowSpeed: 5000,           
		  animationSpeed: 250,
	      directionNav: true
	 });	
	 	 	
}

//animate jump links
function scrollLink(destination){
	$('html,body').animate({
		scrollTop: $(destination).offset().top - scrollOffset
	},1000);
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

//measure, resize, and adjust the viewport
function view(){
	
	ch = $(window).height();
	cw = $(window).width();
	
	if($(window).width() <= 768){		
		$('.block.crop').css('min-height',ch);		
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
	
	$('#nav-side .jump').each(function(i){
		targets[i] = new Array(5);
		var temp = $(this).attr('href');
		var offset = $(temp).offset();	
		targets[i][0] = $(this);		
		targets[i][1] = offset.top;
		targets[i][2] = temp.replace("#if-","active-");
		targets[i][3] = temp.replace("#if-","");
		targets[i][4] = $(temp);
		
	});
	
	o = $(window).height() * .33;
	
	for(var j = 0; j < targets.length; j++){
		if(( targets[j+1] && $(window).scrollTop()+o) >= targets[j][1] && $(window).scrollTop()+o <= targets[j+1][1]){
			state =  targets[j][3];
			if(j == 0){
				statePrevious = targets[j][4];			
			} else{
				statePrevious = targets[j-1][4];							
			}
			stateNext = targets[j+1][4];
			$('#state').attr("class", targets[j][2]);
			$('#nav-side .jump').removeClass('active');
			targets[j][0].addClass('active');			
		}
		else if(j == targets.length-1 && $(window).scrollTop()+o >= targets[j][1]){
			stateNext = 'thanks';
			stateNext = targets[j][4];		
			$('#state').attr("class", 'active-thanks');
			$('#nav-side .jump').removeClass('active');
			$('#if-thanks-link').addClass('active');	
		}
	}	
	
}




