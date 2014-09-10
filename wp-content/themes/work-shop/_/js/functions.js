var hh = 44;
var scrollOffset = 0;
var minSmallOffset = 240;
var cw,ch,bh,dh;
var loaded = false;
var state = 'intro';
var stateElement = 0;
var moving = false;

$(window).load(function() {

	view(); 
	
	flexsliders();

}); 

jQuery(document).ready(function($) {
	

	$('.flexslider-project .flex-previous').click(function(event) {
	  	event.preventDefault();	
	    $('.flexslider-project').flexslider('prev')
	});		
	
	$('.flexslider-project .description-start').click(function(event) {
	  	event.preventDefault();	
	    $('.flexslider-project').flexslider('next');
	});			
	
	$('.flexslider-project .flex-next').click(function(event) {
	  	event.preventDefault();	
	    $('.flexslider-project').flexslider('next');
	});	

	
	$('.flexslider-full .flex-previous').click(function(event) {
	  	event.preventDefault();	
	    $('.flexslider-full').flexslider('prev');
	    console.log('prev');
	    
	    
	});		
	
	$('.flexslider-full .flex-next').click(function(event) {
		  event.preventDefault();
	    $('.flexslider-full').flexslider('next');
	    console.log('next');
	    
	});		
	
	$('#backtotop').click(function(event) {
	  	event.preventDefault();
		$('body,html').animate({scrollTop:0},2000);
	});
	
	$('#nav-toggle').click(function(event) {
	  	event.preventDefault();
		navToggle();
	});
	

	$('#header-small').click(function() {
	  	navToggle();
	});
	
	$('.big-menu').click(function(event) {
	  	event.preventDefault();	
	  	navToggle();
	});	
	
	
	$('.header-open #header').click(function() {
	  	navToggle();
	});		
	
	
	$(document).keypress(function(e) {
		if(e.which == 109 || e.which == 77) {
			navToggle();
		}	
	});
			
	  $('.jump').click(function() {
	    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
	      var target = $(this.hash);
	      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
	      if (target.length) {
	        $('html,body').animate({
	          scrollTop: target.offset().top - scrollOffset
	        }, 2000);
	        return false;
	      }
	    }
	  });

	  $('.jump.side').click(function() {
	    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
	      var target = $(this.hash);
	      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
	      if (target.length) {
	        $('html,body').animate({
	          scrollTop: target.offset().top
	        }, 2000);
	        return false;
	      }
	    }
	  });
	  
	  $('.jump.video').click(function() {
	    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
	      var target = $(this.hash);
	      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
	      if (target.length) {
	        $('html,body').animate({
	          scrollTop: target.offset().top
	        }, 6000);
	        return false;
	      }
	    }
	  });	
		  
	 $('#arrow-down').click(function(){
	    if (!moving) { 
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

	 $('#arrow-up').click(function(){
	    if (!moving) { 
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
	
	$('#video-play').click(function(event) {
	  	event.preventDefault();	
	    $('#if-video').addClass('toggled');	      	
	});		

});//end document.ready


$(window).resize(function() {

	view();	
	
});//end window.resize


$(window).scroll(function() { 


	var after = $('body').offset().top + 200;
	var afterPage = $('body').offset().top - $(window).height() + 300;
	var between = $('body').offset().top - ($(window).height()/2);
	

	view(); 
        
	if($(this).scrollTop() >= after && $("body").hasClass('before')){
		$("body").removeClass('before').addClass('after');
		$("#nav .off").removeClass('off').addClass('on');
		$("#footer").removeClass('hidden');
	} 
	else if($(this).scrollTop() < after && $("body").hasClass('after')){
		$("body").removeClass('after').addClass('before');
		$("#nav .on").removeClass('on').addClass('off');
		$("#footer").addClass('hidden');		
	} 
	
	if($(this).scrollTop() >= afterPage && !$(".fixed-nav").hasClass('hidden')){
		$(".fixed-nav").addClass('hidden');	
		
		}
	else if($(this).scrollTop() < afterPage && $(".fixed-nav").hasClass('hidden')){
		$(".fixed-nav").removeClass('hidden');		
	}


});//end window.scroll




function flexsliders(){

	
	$('.flexslider-if-slide').flexslider({
	  animation: 'slide',
	  slideshow: false
	});
	
		
	$('#flexslider-problem').flexslider({
	  animation: 'fade',
	  slideshow: false,
	  end: function(slider){
		  $('#if-problem').addClass('end');
	  }	  	  
	  
	});
	
	$('#flexslider-stats').flexslider({
	  animation: 'fade',
	  slideshow: false,
	  end: function(slider){
		  $('#if-stats').addClass('end');
	  }	  	   
	});
	
	$('#flexslider-proposal').flexslider({
	  animation: 'fade',
	  slideshow: false,
	  end: function(slider){
		  $('#if-proposal').addClass('end');
	  }	  	   
	});	
	
	$('.flexslider-if-fade-auto').flexslider({
	  animation: 'fade',
	  controlNav: false,
	  directionNav: false,
	  easing: false,
	  slideshowSpeed: 1000,           
	  animationSpeed: 1000     	  
	});	
	
	$('.flexslider-intro-work').flexslider({
	  animation: 'slide',
	  controlNav: false,
	  directionNav: false,
	  easing: false,
	  slideshowSpeed: 2000,           
	  animationSpeed: 1000     	  
	});		
	
}



function goToByScroll(locale){
	$('html,body').animate({
		scrollTop: $(locale).offset().top - scrollOffset
	},1000);
}

function goToByScrollSide(locale){
	tempA = $(locale).offset();
	temp = tempA.top; 
	
	$('html,body').animate({
		scrollTop: temp
	},2000);
}

function goToByScrollVideo(locale){
	$('html,body').animate({
		scrollTop: $(locale).offset().top
	},3000);
}


function navToggle(){
	trim = $(window).height();
	
	if($('#header-small').hasClass('off')){
		$('#header-small').removeClass('off');
		$('#header-small').addClass('on');
		$('html').removeClass('header-closed');
		$('html').addClass('header-open');	
		$('html').css('height',trim);
		$('body').css('height',trim);
		
	}
	else if($('#header-small').hasClass('on')){
		$('#header-small').removeClass('on');
		$('#header-small').addClass('off');
		$('html').removeClass('header-open');
		$('html').addClass('header-closed');
		$('#header').scrollTop(0);	
		$('html').css('height','100%');
		$('body').css('height','100%');
									
	}
	
}

function view(){

	if($('#nav-side .jump')){
		spy();
	}
	
	ch = $(window).height();
	cw = $(window).width();
	
	bh = ch-hh;
	bmsh = ch-hh-minSmallOffset;
	ffh = bh-60;
	barh = ch*.7;
	barp = barh/2;
	fpw = $('.flexslider-project').width();
	fph = fpw/ 1.7777777778;

	fifh = $('.flexslider-if-fade img#height').height();
	fifh2 = $('#flexslider-stats img.height').height();
	fww = $('#flexslider-work').width();
	fwh = fww/1.755555556;
	
	
	if($(window).width() <= 768){	
		
		$('.block.min').css('min-height',ch);
		$('.block.min-small').css('min-height',ch);			
		$('.block.crop').css('min-height',ch);		
		$('.block.full').css('min-height',ch);	
			
	} else if($(window).width() > 768){
	
		$('.block.min').css('min-height',bh);
		$('.block.min-small').css('min-height',bmsh);			
		$('.block.crop').css('height',bh);		
		$('.block.full').css('min-height',ch);	
	
	}
		$('#homefix').css('height',ch);		
		
		$('.flexslider-project .flex-viewport').css('height',fph);
		$('.flexslider-project.flexslider-loading').css('height',fph);	
		$('.flexslider-project.flexslider-loaded').css('height','auto');	
		$('.flexslider-project .description-slide').css('height',fph);
		$('.flexslider-project ul.slides').css('height',fph);		
		
		$('.flexslider-if-fade ul.slides').css('height',fifh);	
		$('#flexslider-work').css('height',fwh);	
	
	
	if(!loaded){
		loadElements();
	}		

}

function loadElements(){
	loaded = true;
	setTimeout(function(){
		$('.loading').addClass('loaded');
		$('.landing').addClass('landed');
		$('#intro-animate').addClass('fade-in-slide-up');
		doAjaxRequest();		
		view();	
	},500);	
}


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


function doAjaxRequest(){
	$.ajax({
	    type: "GET",
	    url: "http://localhost:8888/ws/wp-admin/admin-ajax.php",
	    dataType: 'html',
	    data: ({ action: 'loadMore'}),
	    success: function(data){
	    	//console.log('success');
	        $('#work').html(data);

			$('.flexslider-full').flexslider({
			  animation: 'slide',
			  slideshowSpeed: 8000,           
			  animationSpeed: 1500
			});	        
			//isotopeSetup();	 
			doAjaxRequestContact();       
	    }
	});
}

function doAjaxRequestContact(){
	$.ajax({
	    type: "GET",
	    url: "http://localhost:8888/ws/wp-admin/admin-ajax.php",
	    dataType: 'html',
	    data: ({ action: 'loadContact'}),
	    success: function(data){
	    	//console.log('success');
	        $('#contact').html(data);
	    }
	});
}

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

$(document).keydown(function(e){
    if (e.keyCode == 37) { 
    	
    	switch (state){
    	
    		case 'problem':
    			$('#flexslider-problem').flexslider('prev');	
    		break;
    		
    		case 'stats':
     			$('#flexslider-stats').flexslider('prev');	
       		break;
       		
    		case 'proposal':
    			$('#flexslider-proposal').flexslider('prev');	
    		break;
       		    	
    	}
    	
       return false;
    }
});

$(document).keydown(function(e){
    if (e.keyCode == 39) { 
    	
    	switch (state){
    	
    		case 'problem':
    			$('#flexslider-problem').flexslider('next');	
    		break;
    		
    		case 'stats':
     			$('#flexslider-stats').flexslider('next');	
       		break;
       		
    		case 'proposal':
    			$('#flexslider-proposal').flexslider('next');	
    		break;
       		    	
    	}
    	
       return false;
    }
});




