
<?php get_header();?>

<div id="about" class="template about">	


	<section id="about-introduction" class="about-introduction introduction block crop three-quarter padded">	
	
		<div class="block-background mask-dark-light" style="background-image: url('<?php bloginfo('template_directory'); ?>/_/img/sketching.jpg')">
		</div>
		
		<div class="container vertical-center">
			<div class="row">			
				<div class="col-sm-10 col-sm-offset-2">
				<h1 class="bold white large about-tagline">We are an interdisciplinary group of designers, makers, thinkers, and questioners. </h1>	
				</div>
			</div>
		</div>

	</section>

		
	<section id="about-mission" class="about-1 block padded bg-light three-quarter">	

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

		<div class="block-background mask-light hidden-xs">	
			<video autoplay="autoplay" loop>
			  <source src="<?php bloginfo('template_directory'); ?>/_/img/process2.mp4" type="video/mp4">
			</video>			
		</div>		
		
		<div class="container">
			<div class="row">
			
				<div class="col-sm-10 col-sm-offset-2">
					<h2 class="m2">Mollit tempor PBR, single-origin coffee messenger bag readymade crucifix quinoa incididunt gastropub chambray blog +1 keytar.</h2>
					
					<h2 class="m2">Mollit tempor PBR, single-origin coffee messenger bag readymade crucifix quinoa incididunt.</h2>
					
					<h2 class="m2">Mollit tempor PBR, single-origin coffee messenger bag readymade crucifix quinoa incididunt gastropub chambray blog +1 keytar Mollit tempor PBR, single-origin coffee messenger.</h2>
					
					<h2 class="m2">Mollit tempor PBR, single-origin coffee messenger bag readymade.</h2>															
				</div>
				
			</div>
		</div>

	</section>	
	

	<section id="about-services" class="about-5 block padded min bg-light">	

		<div class="container">
			<div class="row m60">
			
				<div class="col-sm-10 col-sm-offset-2">
					<h2>What we do is almost completely determined by the project’s we’re working on. In service of a given project, we’ve done: </h2>
				</div>
				
			</div>
			
			<div class="row">
				<div class="col-sm-5 col-sm-offset-2">
					<ul>
						<li><a href="#"><h3>Creative Direction</h3></a></li>
						<li><a href="#"><h3>Strategic Consulting</h3></a></li>
						<li><a href="#"><h3>Conceptual Design</h3></a></li>
						<li><a href="#"><h3>Identity/Brand Design</h3></a></li>
						<li><a href="#"><h3>Web Design</h3></a></li>
						<li><a href="#"><h3>User Interface/User Experience Design</h3></a></li>
						<li><a href="#"><h3>Software Design</h3></a></li>
						<li><a href="#"><h3>Web Development</h3></a></li>						
						<li><a href="#"><h3>Software Engineering</h3></a></li>								
					</ul>					
				</div>
				<div class="col-sm-5">
					<ul>
						<li><a href="#"><h3>Interior Architectural Design</h3></a></li>
						<li><a href="#"><h3>Installations/Environments</h3></a></li>
						<li><a href="#"><h3>Furniture Design</h3></a></li>
						<li><a href="#"><h3>Furniture Making</h3></a></li>						
						<li><a href="#"><h3>Digital Fabrication</h3></a></li>
						<li><a href="#"><h3></h3></a></li>
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
				
				<div class="col-sm-10 col-sm-offset-2">
					<h2 class="m90">We are an interdisciplinary group of creative thinkers.</h2>
				</div>
			
			</div>
			
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
			
				<div class="col-sm-10 col-sm-offset-2">
					<h1>We do meaningful, responsible, and critical work for clients who we believe in.</h1>
				</div>
				
			</div>
				
			<div class="row">
				<div class="col-sm-10 col-sm-offset-2">
					<ul>
						<li><h2>Our Core Values:</h2></li>
						<li><a href="#"><h3>Do good work for clients you believe in</h3></a></li>
						<li><a href="#"><h3>Make the world a better place</h3></a></li>
						<li><a href="#"><h3>Be responsible</h3></a></li>
						<li><a href="#"><h3>Be thorough</h3></a></li>							
					</ul>					
				</div>			
			</div>				
				
		</div>

	</section>		
	
	
	<div class="container" id="about-nav-container">
		<div class="row">
			<div class="col-sm-3">	

				<div id="about-nav" class="spy falloff">
					<ul>
						<li><a href="#about-introduction" class="jump hidden">Work-Shop</a></li>					
						<li><a href="#about-mission" class="jump">About</a></li>
						<li><a href="#about-process" class="jump">Process</a></li>
						<li><a href="#about-services" class="jump">Services</a></li>						
						<li><a href="#about-people" class="jump">People</a></li>
						<li><a href="#about-place" class="jump hidden">Place</a></li>
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
