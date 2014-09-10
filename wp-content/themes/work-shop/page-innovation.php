

<?php get_header();?>

<?php while ( have_posts() ) : the_post(); ?>

<div class="deck if-deck">



<section id="if-intro" class="block full bg-light padded">	
	
	<div class="container" id="intro-animate">	
		
		<div class="row section-body ">
			<div class="col-sm-8 col-sm-offset-1">
				<h1 class="medium large bold ">A Center for<br/> Contemporary<br/> Making and Working<br/> <span class="italic">in </span> Providence.</h1>
			</div>		
			<div class="col-sm-8 col-sm-offset-1">
				<h3 class="brand bold caps">Proposal for the Rhode Island Foundation Innovation Fellowship<br/>
				<span class="regular small">by</span> Greg Nemes <span class="regular small">and</span> Nic Schumann <span class="regular small">of</span> Work-Shop</h3>
			</div>					
			
		</div>	
		
		<div class="row">
			<div class="col-sm-3 col-sm-offset-1 visible-xs">
				<a href="#if-video" class="jump video">
					<h3 class="medium">Watch Our Video <span class="icon" data-icon="&#62;"></span></h3>
				</a>						
			</div>	
			<div class="col-sm-3 col-sm-offset-1 hidden-xs" id="boop">
				<a href="#if-problem" class="jump side circle bg-brand">
					<h3 class="white" id="boop-text">Begin <span class="icon white" data-icon="&rdquo;"></span></h3>
				</a>						
			</div>				
			
		</div>		

	</div>
		
</section>

<section id="if-problem" class="block full bg-light loading padded slider">	

	<div class="container">			
		<div class="row section-body">
		
			<div class="col-sm-5 col-sm-offset-0 mt40 mb40">
				<h1 class="medium bold">Thousands of students graduate from <span class="brand">Rhode Island Colleges</span><br/> each year.</h1>
			</div>		
			<div class="col-sm-5 col-sm-offset-1 fade-in-slide-right">
				<div class="flexslider flexslider-if-fade flexslider-if" id="flexslider-problem">					
					<ul class="slides">
						<li><img src="<?php bloginfo('template_directory'); ?>/_/img/if/a1.png"></li>
						<li><img src="<?php bloginfo('template_directory'); ?>/_/img/if/a2.png"></li>
						<li><img src="<?php bloginfo('template_directory'); ?>/_/img/if/a3.png"></li>
						<li><img src="<?php bloginfo('template_directory'); ?>/_/img/if/a4.png"></li>						
					</ul>
				</div>
			</div>	
			
			<div class="col-sm-3 col-sm-offset-7 hidden-xs wayfinder">
				<a href="#if-brightest" class="jump side circle bg-brand">
					<h3 class="white">Next <span class="icon white" data-icon="&rdquo;"></span></h3>
				</a>						
			</div>						
			
		</div>	
	</div>
		
</section>

<section id="if-brightest" class="block bg-light full loading padded">	

	<div id="brightest-background" class="block-background" style="background-image: url('<?php bloginfo('template_directory'); ?>/_/img/if/granoff.jpg');">
		<div class="block-background-overlay"></div>

	</div>	


	<div class="container">			
		<div class="row section-body">
		
			<div class="col-sm-7 col-sm-offset-4">
				<h1 class="white bold righted">These are some of the <br/>
				<span class="brand">brightest young minds</span><br/>
				in the world.
				</h1>
			</div>		
			<div class="col-sm-4 col-sm-offset-7 righted">
				<h3 class="white">People in creative disciplines are thinking about and solving contemporary problems. They have big ideas, want to build their careers and contribute to their communities. </h3>
			</div>					
			
		</div>	
	</div>
		
</section>

<section id="if-stats" class="block full bg-white loading padded slider">	

	<div class="container">			
		<div class="row section-body">
			
			<div class="col-sm-12 col-sm-offset-0">
				<div class="flexslider flexslider-if-fade flexslider-if" id="flexslider-stats">					
					<ul class="slides">
						
						<li>
							<div class="col-sm-5 col-sm-offset-1">
								<h1 class="medium">But without<br/> proper resources, community, and opportunities, <br/><span class="bold">most leave the state for good.</span></h1>
							</div>	
							<div class="col-sm-5 col-sm-offset-1 hidden-xs">							
								<img src="<?php bloginfo('template_directory'); ?>/_/img/if/b1.png">
							</div>
						</li>	
						
						<li>
							<div class="col-sm-5 col-sm-offset-1">
								<h1 class="medium bold">Nationally<br/>
									<span class="stat brand">7</span> in <span class="stat">10</span>
									graduates stay in the state<br/>
									where they went to college
								</h1>
							</div>	
							<div class="col-sm-5 col-sm-offset-1 hidden-xs">							
								<img src="<?php bloginfo('template_directory'); ?>/_/img/if/b2.png">
							</div>
						</li>
						
						<li>
							<div class="col-sm-5 col-sm-offset-1">
								<h1 class="medium bold">In Rhode Island<br/>
									<span class="stat brand">3</span> in <span class="stat">10</span>
									graduates stay in the state<br/>
								</h1>
							</div>	
							<div class="col-sm-5 col-sm-offset-1 hidden-xs">							
								<img src="<?php bloginfo('template_directory'); ?>/_/img/if/b3.png">
							</div>
						</li>	
						
						<li>
							<div class="col-sm-5 col-sm-offset-1">
								<h1 class="medium bold">And only<br/>
									<span class="stat brand">1</span> in <span class="stat">10</span>
									graduates from
									creative disciplines<br/>
									stay in the state<br/>
								</h1>
							</div>	
							<div class="col-sm-5 col-sm-offset-1 hidden-xs">							
								<img src="<?php bloginfo('template_directory'); ?>/_/img/if/b4.png">
							</div>
						</li>																																			
								
					</ul>			
				</div>
			</div>		
			
			<div class="col-sm-3 col-sm-offset-1 wayfinder">
				<a href="#if-network" class="jump side circle bg-brand centered">
					<h3 class="white">Next <span class="icon white" data-icon="&rdquo;"></span></h3>
				</a>						
			</div>						
			
		</div>	
	</div>
		
</section>

<section id="if-network" class="block bg-white full loading padded ">	

	<div class="block-background fade-in-slide-left hidden-xs">

		<div class="container">			
			<div class="row section-body">	
				
				<div class="col-sm-7 col-sm-offset-0 ">
					<div class="flexslider flexslider-if-fade-auto flexslider-if" id="flexslider-network">					
						<ul class="slides">
							<li><img src="<?php bloginfo('template_directory'); ?>/_/img/if/d1.png"></li>
							<li><img src="<?php bloginfo('template_directory'); ?>/_/img/if/d2.png"></li>
							<li><img src="<?php bloginfo('template_directory'); ?>/_/img/if/d3.png"></li>
							<li><img src="<?php bloginfo('template_directory'); ?>/_/img/if/d4.png"></li>		
							<li><img src="<?php bloginfo('template_directory'); ?>/_/img/if/d5.png"></li>
							<li><img src="<?php bloginfo('template_directory'); ?>/_/img/if/d6.png"></li>												
						</ul>
					</div>			
				</div>	
						
			</div>
		</div>
		
	</div>		

	<div class="container">			
		<div class="row section-body">
	
			<div class="col-sm-7 col-sm-offset-5">
				<h2 class=" righted">
				We know that if students get out of the classroom and 
				<span class="bold brand">make a connection with people or companies </span>
				in the state before graduating, 
				they are much more
				likely to <span class="bold">stay in state</span>
				after graduation
				</h2>				
			</div>		
		
			
		</div>	
	</div>
		
</section>


<section id="if-question" class="block loading padded bar">	

	<div id="question-background" class="block-background ken" style="background-image: url('<?php bloginfo('template_directory'); ?>/_/img/if/pan.jpg');">
		<div class="block-background-overlay"></div>
	</div>	

	<div class="container">			
		<div class="row section-body">
		
			<div class="col-sm-12 col-sm-offset-0 col-md-12 col-md-offset-0">
				<h1 class="white large centered">So how do we <br/>
				empower young creative professionals<br/>
				<span class="bold">in Rhode Island?</span>
				</h1>

			</div>		
		</div>	
	</div>
		
</section>

<section id="if-proposal" class="block bg-light loading padded slider">	

	<div class="container">			
		<div class="row section-body">
			
			<div class="col-sm-12 col-sm-offset-0">
				<div class="flexslider flexslider-if-fade flexslider-if" id="flexslider-proposal">					
					<ul class="slides">
						
						<li>
							<div class="col-sm-7 col-sm-offset-1">
								<h1 class="medium bold">We propose a<br/>
									<span class="bold brand">Center for Contemporary</span><br/>
									Making & Working
								</h1>							
							</div>	

						</li>	
						
						<li>
							<div class="col-sm-4 col-sm-offset-1">
								<h1 class=" bold brand">Digital Fabrication Shop</h1>
								<h3 class="medium bold">Laser Cutters<br/>
								CNC Routers<br/>
								3D Printers<br/></h3>
								
							</div>	
							<div class="col-sm-5 col-sm-offset-1">							
								<img src="<?php bloginfo('template_directory'); ?>/_/img/if/c1.png">
							</div>
						</li>					
						
						<li>
							<div class="col-sm-4 col-sm-offset-1">
								<h1 class=" bold brand">Wood and Metalworking Shop</h1>
								<h3 class="medium bold">Traditional fabrication tools<br/>
								Production space<br/>
								Material recycling and sharing<br/></h3>
								
							</div>	
							<div class="col-sm-5 col-sm-offset-1">							
								<img src="<?php bloginfo('template_directory'); ?>/_/img/if/c2.png">
							</div>
						</li>																																
						
						<li>
							<div class="col-sm-4 col-sm-offset-1">
								<h1 class=" bold brand">Studio Space</h1>
								<h3 class="medium bold">Co-working office<br/>
								Conference rooms<br/>	
								</h3>															
							</div>	
							<div class="col-sm-5 col-sm-offset-1">							
								<img src="<?php bloginfo('template_directory'); ?>/_/img/if/c3.png">
							</div>
						</li>																																

						<li>
							<div class="col-sm-4 col-sm-offset-1">
								<h1 class=" bold brand">Gathering Space</h1>
								<h3 class="medium bold">Classroom<br/>
								Lecture hall<br/>																
								Event space<br/>
								</h3>																
							</div>	
							<div class="col-sm-5 col-sm-offset-1">							
								<img src="<?php bloginfo('template_directory'); ?>/_/img/if/c4.png">
							</div>
						</li>										
							
						<li>
							<div class="col-sm-4 col-sm-offset-1">
								<h1 class=" bold brand">Gallery</h1>
								<h3 class="medium bold">Exhibition<br/>
								Store<br/>
								Rotating installations
								</h3>								
							</div>	
							<div class="col-sm-5 col-sm-offset-1">							
								<img src="<?php bloginfo('template_directory'); ?>/_/img/if/c5.png">
							</div>
						</li>								
							
					</ul>			
				</div>
			</div>		
			
			<div class="col-sm-3 col-sm-offset-1 hidden-xs wayfinder">
				<a href="#if-network" class="jump side circle bg-brand">
					<h3 class="white">Next <span class="icon white" data-icon="&rdquo;"></span></h3>
				</a>						
			</div>							

		</div><!--section-body-->	
	</div>
		
</section>

<section id="if-schedule" class="block bg-light full loading padded">	

	<div class="container">			
		<div class="row section-body">
		
			
				<div class="col-sm-10 col-sm-offset-1">
					<h1 class="brand">Here's a brief overview of our timeline with the support of the Innovation Fellowship.</h1>
				</div>	
	
			<div class="fade-in-slide-right">
				
			
				<div class="col-sm-4 col-sm-offset-0 mt40">
					<h2 class="medium bold">Year 1</h2>
					<ul class="list">
						<li> Hire a Project Manager</li>
						<li> Find a Space in Providence</li>
						<li> Build out the Space</li>
						<li> Purchase some Tools and Equipment</li>
					</ul>				
				</div>	
				
				<div class="col-sm-4 col-sm-offset-0 mt40">
					<h2 class="medium bold">Year 2</h2>
					<ul class="list">
						<li> First round of 3 Fellowships</li>
						<li> First round of 10 Apprenticeships</li>
						<li> Workshops and Courses</li>
						<li> A Series of Gathering Events</li>
					</ul>				
				</div>	
				
				<div class="col-sm-4 col-sm-offset-0 mt40">
					<h2 class="medium bold">Year 3</h2>
					<ul class="list">
						<li> Purchase Digital Fabrication Tools</li>
						<li> Hire Shop Technician</li>			
						<li> Hire Staff</li>							
						<li> Grow Fellowships and Apprenticeships</li>
						<li> Institute Membership</li>
					</ul>				
				</div>	
				
			</div>	
			
		</div>	
	</div>
		
</section>




<section id="if-opportunities" class="block loading bg-brand padded">	

	<div id="opportunities-background" class="block-background" >
	</div>	

	<div class="container">			
		<div class="row section-body">

			<div class="col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1 mt120">
				<h1 class="white centered ">We want young, creative professionals in the state to have the resources, opportunities, and network to launch and grow sustainable careers. </h1>
			</div>		
			
		</div>	
	</div>
		
</section>

<section id="if-closing" class="block full loading padded">	

	<div id="closing-background" class="block-background" >
		<div class="block-background-overlay"></div>
			<video autoplay="autoplay" loop class="hidden-xs">
				<source src="<?php bloginfo('template_directory'); ?>/_/img/if/dc206lapse4B.mp4" type="video/mp4" />
			</video>
	</div>	
	
	<div class="container">			
		<div class="row section-body">
			<div class="col-sm-12">
				<h1 class="white centered large">With Rhode Island's rich history in manufacturing, art and design, it is uniquely poised to be at the forefront of the creative economy.</h1>
			</div>		
			
		</div>	
	</div>
		
</section>


<section id="if-people" class="block full bg-white loading padded">	

	<div id="people-background" class="block-background" style="background-image: url('<?php bloginfo('template_directory'); ?>/_/img/if/people.jpg');" >
	</div>	

	<div class="container">			
		<div class="row section-body fade-in-slide-left">

			<div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 mt150">
				<h1 class="large brand centered">So who are we?</h1>
			</div>		
			
			<div class="col-sm-5 col-sm-offset-1 col-md-4 col-md-offset-2">
				<h2 class="">Nic Schumann</h2>
				<h3>Nic is a systems designer and computer scientist who uses language to build meaningful structures from an undifferentiated context. Nic is currently pursuing his bachelors in a hybrid concentration of computer science and industrial design at Brown.</h3>
			</div>	
			
			<div class="col-sm-5 col-sm-offset-0 col-md-4 ">
				<h2 class="">Greg Nemes</h2>
				<h3>Greg specializes in user interface/user experience design in the realms of architecture, installations, furniture, physical computing, and web design. Greg holds a Masters of Architecture from RISD and currently teaches at the Boston Architectural College.</h3>
			</div>							
			
		</div>	
	</div>
		
</section>

<section id="if-video" class="block full loading padded">	

	<div id="video-background" class="block-background fade-in-slow" style="background-image: url('<?php bloginfo('template_directory'); ?>/_/img/if/video.jpg');" >
		<div class="block-background-overlay"></div>
	</div>	
	
	<div class="container">			
		<div class="row section-body">
			<div class="col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1">
				<a href="#" id="video-play">
				<h1 class="white centered large">Watch our video <br/>to learn more</h1>
				<h1 class="centered"><span class="icon large white" data-icon="&#62;"></span></h1>
				</a>
			</div>		
		</div>	
	</div>
	
	<div class="video-container">
		<iframe id="vimeo1" src="//player.vimeo.com/video/87828569?title=0&amp;byline=0&amp;portrait=0&amp;color=ff9933" width="100%" height="100%" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>	
	</div>	
		
</section>


<section id="if-thanks" class="block full bg-brand loading padded">	

	<div class="container">			
		<div class="row section-body">

			<div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 mt120">
				<h1 class="white huge centered grow-shrink">Thank You.</h1>
			</div>		
			
		</div>	
	</div>
		
</section>

<div class="loading hidden-xs">

	<div id="nav-side" class="">
		<ul>
			<li><a class="jump active side" href="#if-intro"></a></li>
			<li><a class="jump side" href="#if-problem" ></a></li>
			<li><a class="jump side" href="#if-brightest" ></a></li>		
			<li><a class="jump side" href="#if-stats"></a></li>
			<li><a class="jump side" href="#if-network"></a></li>		
			<li><a class="jump side" href="#if-question"></a></li>
			<li><a class="jump side" href="#if-proposal"></a></li>	
			<li><a class="jump side" href="#if-schedule"></a></li>
			<li><a class="jump side" href="#if-opportunities"></a></li>
			<li><a class="jump side" href="#if-closing"></a></li>
			<li><a class="jump side" href="#if-people"></a></li>
			<li><a class="jump side" href="#if-video"></a></li>				
			<li><a class="jump side" href="#if-thanks" id="if-thanks-link"></a></li>
			
		</ul>
		
	</div>
		
	<div id="arrows">
		<h4 id="note" class="note-animate">Use your keyboard to navigate</h4>
		<a href="#" id="arrow-up"><span class="icon" data-icon="-"></span></a>
		<a href="#" id="arrow-down"><span class="icon" data-icon="/"></span></a>
	</div>

</div>


</div>

<?php endwhile; ?>

<script src="<?php bloginfo('template_directory'); ?>/_/js/vimeo.js"></script>	


<?php get_footer();?>
