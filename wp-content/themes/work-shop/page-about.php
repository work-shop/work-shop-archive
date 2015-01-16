
<?php get_header();?>

<div id="about" class="template about">	

	<section id="about-introduction" class="about-introduction introduction block crop three-quarter padded">	
	
		<div class="block-background">
		</div>
		
		<div class="container">
			<div class="row">
			
				<div class="col-sm-6">
					questions
					
				</div>
			
				<div class="col-sm-6">
				questions
				
				</div>
		
			</div>
		</div>

	</section>	

	<?php $mission = get_field('info_page_mission_callout', 'option'); ?>

	<section id="about-what" class="about-1 about-what block padded bg-light">	

		<div class="container">
			<div class="row">
			
				<div class="col-sm-3 question">
					<h4><span class="dash mr inline"></span>What is Work-Shop?</h4>
				</div>
			
				<div class="col-sm-9 answer">
					<h3>Mollit tempor PBR, single-origin coffee messenger bag readymade crucifix quinoa incididunt gastropub chambray blog +1 keytar. Salvia officia Truffaut, bicycle rights esse aliqua post-ironic Shoreditch odio literally ethical sapiente iPhone ut kogi. Blog delectus Thundercats, flannel jean shorts biodiesel chillwave street art occupy ullamco. Bespoke Etsy fingerstache, fixie pork belly biodiesel leggings authentic plaid ullamco sartorial tempor vero. Artisan Schlitz bespoke, Etsy Portland seitan do Wes Anderson. Semiotics Truffaut mollit normcore, try-hard lo-fi delectus craft beer et. Ennui swag small batch tattooed.<?php //echo $about_what; ?></h3>
				</div>
				
			</div>
		</div>

	</section>
	
	<section id="about-do" class="about-2 about-do block padded">	

		<div class="container">
			<div class="row m90">
			
				<div class="col-sm-3 question">
					<h4><span class="dash mr inline"></span>What does Work-Shop do?</h4>
				</div>
			
				<div class="col-sm-9 answer">
					<h3> Artisan Schlitz bespoke, Etsy Portland seitan do Wes Anderson. Semiotics Truffaut mollit normcore, try-hard lo-fi delectus craft beer et. Ennui swag small batch tattooed.<?php // echo $about_do; ?></h3>
				</div>
				
			</div>
			
			<div class="row">
				<div class="col-sm-3 col-sm-offset-3">
					<ul>
						<li><a href="#"><h3>Item</h3></a></li>
						<li><a href="#"><h3>Item</h3></a></li>
						<li><a href="#"><h3>Item</h3></a></li>
						<li><a href="#"><h3>Item</h3></a></li>
						<li><a href="#"><h3>Item</h3></a></li>
						<li><a href="#"><h3>Item</h3></a></li>
					</ul>					
				</div>
				<div class="col-sm-3">
					<ul>
						<li><a href="#"><h3>Item</h3></a></li>
						<li><a href="#"><h3>Item</h3></a></li>
						<li><a href="#"><h3>Item</h3></a></li>
						<li><a href="#"><h3>Item</h3></a></li>
						<li><a href="#"><h3>Item</h3></a></li>
					</ul>				
				</div>				
			</div>
			
		</div>

	</section>	
	
	
	<section id="about-process" class="about-3 about-process block padded bg-light">	

		<div class="container">
			<div class="row m90">
			
				<div class="col-sm-2 question">
					<h4><span class="dash mr inline"></span>What's it like to work with Work-Shop?</h4>
				</div>
			
				<div class="col-sm-9 col-sm-offset-1 answer">
					<h3> Artisan Schlitz bespoke, Etsy Portland seitan do Wes Anderson. Semiotics Truffaut mollit normcore, try-hard lo-fi delectus craft beer et. Ennui swag small batch tattooed.<?php // echo $about_process; ?></h3>
				</div>
				
			</div>			
		</div>

	</section>		
	

	<?php 
	$prepeople = get_field('info_page_pre_people_blurby', 'option');
	$people = get_field('info_page_people', 'option');
	$postpeople = get_field('info_page_post_people_blurby', 'option'); ?>
	
	
	<section id="info-people" class="info-people people block bg-white padded">	

		<div class="container">
			<div class="row">
			
			<div class="blurby margined">
				<h2 class="people-blurby centered"><?php echo $prepeople; ?></h2>
			</div>

	<?php

	$current = '<ul class="current">';
	$former = '<ul class="former">';

	$current_i = 0;
	$former_i = 0;

	foreach ( $people as $i => $person ) {
		if ( $person['person_active'] ) {
			$current .= '<li class="'.ws_parity( $current_i, 'left-side', 'right-side').' col-sm-3 person">'
					 .  ws_ifdef_concat('<a href="',ws_decide_link_type($person['person_link']),'" target="_blank">')
				     .  '<img src="'.$person['person_image']['sizes']['square'].'">'
				     .  ws_ifdef_concat( '<h3>',$person['person_name'],'</h3>' )
				     .  ws_ifdef_concat( '<h4>',$person['person_role'],'</h4>' )
				     .  ws_ifdef_concat( '<h4>',$person['person_phone_number'],'</h4>' )
				     .  ws_ifdef_concat( '<h4>',$person['person_email'],'</h4>' )
				     .  ws_ifdef_concat( '<p>',$person['people_bio'],'</p>')
				     .  ws_ifdef_do($person['person_link'], '</a>')
				     .  '</li>';

			$current_i++;
		} else {
			$former .= '<li class="'.ws_parity( $former_i, 'left', 'right').'">'
					 .  ws_ifdef_concat('<a href="',ws_decide_link_type( $person['person_link'] ),'" >')
				     .  '<img src="'.$person['person_image']['sizes']['full'].'">'
				     .  ws_ifdef_concat( '<h3>',$person['person_name'],'</h3>' )
				     .  ws_ifdef_concat( '<h4>',$person['person_role'],'</h4>' )
				     .  ws_ifdef_concat( '<h4>',$person['person_phone_number'],'</h4>' )
				     .  ws_ifdef_concat( '<h4>',$person['person_email'],'</h4>' )
				     .  ws_ifdef_concat( '<p>',$person['people_bio'],'</p>')
				     .  ws_ifdef_do($person['person_link'], '</a>')
				     .  '</li>';

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

	<section id="info-introduction" class="info-introduction introduction block crop three-quarter bg-light">	
	
		<div class="block-background">
		</div>

		<?php 

			$office_image = get_field('footer_office_image', 'option');
			$office_description = get_field('footer_office_information', 'option');

			$shop_image = get_field('footer_shop_image', 'option');
			$shop_description = get_field('footer_shop_information', 'option');

		?>
	
		<div class="block-background mask-light" >	
				<?php echo '<img src="'.$office_image['sizes']['slideshow'].'" />'; ?>
		</div>
		
		<div class="container">
			<div class="row">
			
				<div class="col-sm-6 office-description">
					<?php echo ws_ifdef_do( $office_description, '<div>'.$office_description.'</div>'); ?>
				</div>
			
				<div class="col-sm-6 shop-description">
					<?php echo ws_ifdef_do( $shop_description, '<div>'.$shop_description.'</div>'); ?>
				</div>
		
			</div>
		</div>


	</section>		


	
</div>	

<?php get_footer(); ?>
