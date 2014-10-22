
<?php get_header();?>

<div id="info" class="template info">	

	<section id="info-introduction" class="info-introduction introduction block crop bg-light">	

		<?php 

			$office_image = get_field('footer_office_image', 'option');
			$office_description = get_field('footer_office_information', 'option');

			$shop_image = get_field('footer_shop_image', 'option');
			$shop_description = get_field('footer_shop_information', 'option');

		?>
	
		<div class="block-background mask-light" >	
				<?php echo '<img src="'.$office_image['sizes']['full'].'" />'; ?>
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

	<?php 

	$mission = get_field('info_page_mission_callout', 'option');

	if ( $mission ) :

	?>

	<section id="info-mission" class="info-mission mission block padded bg-light">	

		<div class="container">
			<div class="row">
			
				<div class="col-sm-8 col-sm-offset-2 mission">
						<h3><?php echo $mission; ?></h3>
				</div>
				
			</div>
		</div>
			

	</section>

	<?php 

	endif; 

	$prepeople = get_field('info_page_pre_people_blurby', 'option');
	$people = get_field('info_page_people', 'option');
	$postpeople = get_field('info_page_post_people_blurby', 'option');

	if ( $people ) :

	?>

	
	<section id="info-people" class="info-people people block bg-white padded">	

		<div class="container">
			<div class="row">
			
			<div class="blurby margined">
				<h2 class="people-blurby centered"><?php	echo $prepeople; ?></h2>
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

	<?php

	endif;



	?>


	
</div>	

<?php get_footer(); ?>
