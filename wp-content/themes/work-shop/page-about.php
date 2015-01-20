
<?php get_header();?>

<div id="about" class="template about">	


	<section id="about-introduction" class="about-introduction introduction block bg-brand sixty crop padded">	
	
		<div class="block-background mask-light hidden" style="background-image: url('<?php bloginfo('template_directory'); ?>/_/img/instagram.jpg'); opacity: .25;">
		</div>
		
		<div class="container">
			<div class="row">			
				<div class="col-sm-10 col-sm-offset-2">
				<h1 class=" about-tagline white">Work-Shop is an interdisciplinary <br/>design studio comprised of designers, makers, thinkers, and creative technologists. </h1>	
				</div>
			</div>
		</div>

	</section>

		
	<section id="about-mission" class="about-1 block padded bg-light three-quarter hidden">	

		<?php $mission = get_field('info_page_mission_callout', 'option'); ?>

		<div class="container">
			<div class="row">
			
				<div class="col-sm-9 col-sm-offset-2">
					<h2>As a studio, we don’t fit well into a single category or discipline — and we see that as a strength. Our group thrives in the spaces between disciplines; this allows us to approach each project with a fresh set of eyes, a lack of preconceptions, and an ability to cut to the core issues, questions, and values of a project.</h2>
				</div>
				
			</div>
		</div>

	</section>
	
	
	<section id="about-process" class="about-2 block padded crop min">	

		<div class="block-background mask-light hidden-xs" style="background-image: url('<?php bloginfo('template_directory'); ?>/_/img/sketching.jpg')">	
			<!--
<video autoplay="autoplay" loop>
			  <source src="<?php bloginfo('template_directory'); ?>/_/img/office.mp4" type="video/mp4">
			</video>	
-->		
		</div>		
		
		<div class="container">
			<div class="row">
		
				<div class="col-sm-8 col-sm-offset-2">
					<h2 class="bold m60">Our process is different on every project, but these components are at the core of our work.</h2>
				</div>
				
			</div>					
					
			<div class="row">
		
				<div class="col-sm-10 col-sm-offset-2">

					<h4 class="uppercase m0 bold">Strategy</h4>
					<h2 class="m2">We investigate the core of a problem, and collaboratively possible solutions, foundational ideas, and concepts with our clients. 
</h2>
	
					<h4 class="uppercase m0 bold">Design</h4>
					<h2 class="m2">From the research, we create holistic designs that are functional, meaningful, and solve the core problems of the project. 
</h2>
					
					<h4 class="uppercase m0">Making</h4>					
					<h2 class="m2">We design everything we make, and make everything we design. Blending Design and Making into one process creates a more integral and cohesive project. 
</h2>
					
					<h4 class="uppercase m0">Evolution</h4>
					<h2 class="m2">Projects never end. We stay involved to make sure the project blossoms and stays healthy.
</h2>															
				</div>
				
			</div>
		</div>

	</section>	
	

	<section id="about-services" class="about-5 block padded min bg-light">	

		<div class="container">
			<div class="row m30">
			
				<div class="col-sm-10 col-sm-offset-2">
					<h2 class="m1">What we do is determined by the projects we’re working on.</h2>
					<h2 class="m30"> We’ve done: </h2>
				</div>
				
			</div>
			

			<div class="row m60">
				<div class="col-sm-1 col-sm-offset-2"><h4 class="uppercase bold">Strategy</h4></div>

				<div class="col-sm-3 col-sm-offset-1">
					<ul>
						<li><a href="#"><h3>Creative Direction</h3></a></li>
						<li><a href="#"><h3>Strategic Consulting</h3></a></li>
						<li><a href="#"><h3>Content Strategy</h3></a></li>
					</ul>
				</div>

				<div class="col-sm-3 col-sm-offset-0">
					<ul>
						<li><a href="#"><h3>Conceptual Design</h3></a></li>
						<li><a href="#"><h3>Design Engineering</h3></a></li>						
					</ul>
				</div>
			</div>

			<div class="row m60">
				<div class="col-sm-1 col-sm-offset-2"><h4 class="uppercase bold">Design</h4></div>

				<div class="col-sm-3 col-sm-offset-1">
					<ul>
						<li><a href="#"><h3>Identity/Brand Design</h3></a></li>
						<li><a href="#"><h3>Web Design</h3></a></li>
						<li><a href="#"><h3>User Experience Design</h3></a></li>
						<li><a href="#"><h3>Software Architecture</h3></a></li>
					</ul>
				</div>

				<div class="col-sm-3">
					<ul>
						<li><a href="#"><h3>Product Design</h3></a></li>
						<li><a href="#"><h3>Interior Architectural Design</h3></a></li>
						<li><a href="#"><h3>Furniture Design</h3></a></li>	
						<li><a href="#"><h3>Installation Design</h3></a></li>					
					</ul>
				</div>
			</div>

			<div class="row">
				<div class="col-sm-1 col-sm-offset-2"><h4 class="uppercase bold">Making</h4></div>

				<div class="col-sm-3 col-sm-offset-1">
					<ul>
						<li><a href="#"><h3>Web Development</h3></a></li>	
						<li><a href="#"><h3>iOS Development</h3></a></li>						
						<li><a href="#"><h3>Software Engineering</h3></a></li>	
					</ul>
				</div>

				<div class="col-sm-3">
					<ul>
						<li><a href="#"><h3>Furniture Fabrication</h3></a></li>					
						<li><a href="#"><h3>Digital Fabrication</h3></a></li>
						<li><a href="#"><h3>Installation Construction</h3></a></li>
					</ul>
				</div>
			</div>
		</div>

	</section>		
	

	<section id="about-people" class="about-4 people block bg-white padded">	
	
		<?php 
		$prepeople = get_field('info_page_pre_people_blurby', 'option');
		$people = get_field('info_page_people', 'option');
		$postpeople = get_field('info_page_post_people_blurby', 'option'); ?>


		<div class="container">
			
			<div class="row">

			<?php
		
			$current = '<div class="current">';
			$former = '<div class="former">';
		
			$current_i = 0;
			$former_i = 0;
		
			foreach ( $people as $i => $person ) {
				if ( $person['person_active'] ) {
					$current .= '<div class="'.ws_parity( $current_i, 'left-side', 'right-side')
							 .  (($current_i==0) ? " col-sm-offset-2 " : " col-sm-offset-1")
							 .  ' col-sm-4 person">'
							 .  ws_ifdef_concat('<a href="',ws_decide_link_type($person['person_link']),'" target="_blank">')
						     .  '<img src="'.$person['person_image']['sizes']['square'].'">'
						     .  ws_ifdef_concat( '<h3>',$person['person_name'],'</h3>' )
						     .  ws_ifdef_concat( '<h4>',$person['person_role'],'</h4>' )
						     .  ws_ifdef_concat( '<h4>',$person['person_phone_number'],'</h4>' )
						     .  ws_ifdef_concat( '<h4>',$person['person_email'],'</h4>' )
						     .  ws_ifdef_concat( '<p>',$person['people_bio'],'</p>')
						     .  ws_ifdef_do($person['person_link'], '</a>')
						     .  '</div>';
		
					$current_i++;
				} else {
				
				
					$former .= '<div class="'.ws_parity( $former_i, 'left', 'right').'">'
							 .  ws_ifdef_concat('<a href="',ws_decide_link_type( $person['person_link'] ),'" >')
						     .  '<img src="'.$person['person_image']['sizes']['full'].'">'
						     .  ws_ifdef_concat( '<h3>',$person['person_name'],'</h3>' )
						     .  ws_ifdef_concat( '<h4>',$person['person_role'],'</h4>' )
						     .  ws_ifdef_concat( '<h4>',$person['person_phone_number'],'</h4>' )
						     .  ws_ifdef_concat( '<h4>',$person['person_email'],'</h4>' )
						     .  ws_ifdef_concat( '<p>',$person['people_bio'],'</p>')
						     .  ws_ifdef_do($person['person_link'], '</a>')
						     .  '</div>';
		
					$former_i++;
		
				}
			}
		
			echo $current . '</div>';
			echo $former . '</div>';
		
			echo ws_ifdef_concat('<div>',$postpeople,'</div>');
		
			?>

			</div>
		</div>
			

	</section>


	<section id="about-place" class="about-6 block min padded hidden">	
	
		<div class="block-background">
		</div>

		<?php 

			$office_image = get_field('footer_office_image', 'option');
			$office_description = get_field('footer_office_information', 'option');

			$shop_image = get_field('footer_shop_image', 'option');
			$shop_description = get_field('footer_shop_information', 'option');

		?>
	
		<div class="block-background mask-light-light" style="background-image: url('<?php echo $office_image['sizes']['slideshow']; ?>')">	
		</div>
		
		<div class="container">
			<div class="row">
			
				<div class="col-sm-4 col-sm-offset-2 office-description">
					<?php echo ws_ifdef_do( $office_description, '<div>'.$office_description.'</div>'); ?>
				</div>
			
				<div class="col-sm-4 shop-description">
					<?php echo ws_ifdef_do( $shop_description, '<div>'.$shop_description.'</div>'); ?>
				</div>
		
			</div>
		</div>


	</section>	


	<section id="about-values" class="about-3 about-process block padded bg-light">	

		<div class="container">
			<div class="row m90">
		
				<div class="col-sm-4 col-sm-offset-2">
					<h1 class="">Make the world a better place.</h1>
				</div>

				<div class="col-sm-5 col-sm-offset-1">
					<ul>
						<!-- <li><h2>Our Core Values:</h2></li> -->
						<li class="m2"><a href="#"><h3>Good design answers the right questions.</h3></a></li>
						<li class="m2"><a href="#"><h3>Valuable questions drive good design.</h3></a></li>
						<li class="m2"><a href="#"><h3>Value is defined on a project-by-project basis.</h3></a></li>
						<li class="m2"><a href="#"><h3>Questions are asked on a project-by-project basis.</h3></a></li>	
						<li class="m2"><a href="#"><h3>Answers are remembered from project to project.</h3></a></li>	
						<li class="m2"><a href="#"><h3>Work at the intersection - of disciplines, of design and making, of old and new, of simple and complex.</h3></a></li>	
						<li><a href="#"><h3>Do work that is rooted in the culture it is made for.</h3></a></li>							
					</ul>					
				</div>
				
			</div>
				
			<div class="row">
							
			</div>				
				
		</div>

	</section>		
	
	
	<div class="container" id="about-nav-container">
		<div class="row">
			<div class="col-sm-3">	

				<div id="about-nav" class="spy falloff">
					<ul>
						<li><a href="#about-introduction" class="jump">About</a></li>					
						<li><a href="#about-process" class="jump">Process</a></li>
						<li><a href="#about-services" class="jump">Services</a></li>						
						<li><a href="#about-people" class="jump">People</a></li>
						<li><a href="#about-values" class="jump">Values</a></li>	
						<li><a href="#contact" class="jump">Contact</a></li>				
						<li><a href="#invitation" class="jump hidden falloff-link"></a></li>
										
					</ul>
				</div>
				
			</div>
		</div>
	</div>
	
	
</div>	

<?php get_footer(); ?>
