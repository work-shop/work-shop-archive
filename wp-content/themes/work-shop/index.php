
<?php get_header();?>

<div id="home" class="template home">	

	<section id="home-introduction" class="home-introduction introduction block crop hidden">	
	
		<div id="home-sides" class="">
			<div id="left-side" class="side">
				<a href="<?php bloginfo('url'); ?>/projects" class="display-block h1">
					<h1 class="centered uppercase brand"><span class="border">Projects</span></h1>
				</a>
			</div>
			
			<div id="right-side" class="side">
				<a href="<?php bloginfo('url'); ?>/about" class="display-block h1">
					<h1 class="centered uppercase brand"><span class="border">About</span></h1>
				</a>
			</div>

		</div>
							
	</section>	
	
	<div id="home-dash" class="dash hidden">
	</div>	
	
	<section id="home-mission" class="home-mission block crop bg-white">	
	
		<div class="block-background mask-dark">

			<div class="flexslider-home">
				<ul class="slides">
					<li style="background-image: url(<?php bloginfo('template_directory'); ?>/_/img/home.jpg)">		
					</li>
					<li style="background-image: url(<?php bloginfo('template_directory'); ?>/_/img/home2.jpg)">		
					</li>	
					<li style="background-image: url(<?php bloginfo('template_directory'); ?>/_/img/home3.jpg)">		
					</li>	
					<li style="background-image: url(<?php bloginfo('template_directory'); ?>/_/img/home5.jpg)">		
					</li>		
				</ul>
			</div>
														
		</div>
		
		<div class="tagline-container">
			<h1 class="centered tagline white">Work-Shop is an <a href="#" class="bold">interdisciplinary</a><br/>
			research, design, and fabrication studio<br/>
			in Providence, Rhode Island.<br/></h1>
		</div>
						
	</section>	
	
	<section id="home-news" class="home-news block bg-light padded">	
		
		<div class="container">
			<div class="row">
		
				<div class="blurby col-sm-8 col-sm-offset-2">
					<h2 class="centered">
						<a href="#">Phone Booth Launch Party and Lecture
						</a>
					</h2>
					<h4>October 14th, 6:30pm</h4>
					<h4>The Design Office, 204 westminster street, providence RI 02903</h4>
					<h3>Maybe you want to talk about a new project, tell us about your dreams, or just shoot the proverbial breeze. We're always up for a good conversation. </h3>					
				</div>
				
			</div>
		</div>
						
	</section>
	
	<?php get_template_part('projects'); ?>	
	
</div>	

<?php get_footer(); ?>
