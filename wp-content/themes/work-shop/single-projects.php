<?php get_header();?>
		
<div id="project" class="template project">	

	<section id="project-introduction" class="project-introduction introduction block three-quarter crop bg-white">
	
		<?php
		$title 					= get_the_title();
		$hero_type				= get_field('project_hero_type');
		?>		
		
		<div class="hero hero-<?php echo $hero_type; ?>">
		
			<?php switch($hero_type){
				
				case 'gallery': ?>
				
					<?php $slideshow = get_field('project_slideshow') ?>
				
						<div class="flexslider-full">
							<ul class="slides">
								<?php
									echo ws_split_array_by_key(
										$slideshow,
										"",
										function( $cb_img ) {
											return '<li><img type="'.$cb_img[ 'mime_type' ].'" src="'.$cb_img['sizes']['slideshow-project'].'" /></li>';
										}
									);
							
								?>
							</ul>	
						
							<div class="flexslider-full-controls"></div> 
							
							<div id="previous-home" class="flexslider-full-direction previous flex-previous">
								<span class="icon" data-icon="&#8216;"></span>
							</div>					
							
							<div id="next-1" class="flexslider-full-direction next flex-next">
								<span class="icon" data-icon="&#8212;"></span>
							</div>	
							
						</div>						
										
				<?php break;				
				case 'image': ?>
				
					<?php 
					$hero_image 			= get_field('project_hero_image');
					$hero_image_url 		= ($hero_image) ? $hero_image['sizes']['slideshow'] : NULL; 
					$hero_image_alt 		= ($hero_image) ? $hero_image['alt'] : NULL; ?>
					
					<img src="<?php echo $hero_image_url; ?>" alt="<?php echo $hero_image_alt; ?>" />				
				
				<?php break;				
				case 'video': ?>
				
					<?php $video = get_field('project_hero_video'); ?> 
				
					<div class="row padded">
						<div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
												
							<video autoplay="autoplay" loop>
								<source src="<?php echo $video; ?>" type="video/mp4">
							</video>				
		
						</div>
					
					</div>
					
				<?php break;				
			} ?>
			
		</div>

	</section>
	

	<section id="project-overview" class="project-overview overview block bg-light">
		
		<?php
			$client 			= get_field('project_client');
			$client_link 		= get_field('project_client_link');

			$location 			= get_field('project_location');
			$date_started 		= get_field('project_date_started');
			$date_ended 		= get_field('project_date_ended');
			$project_link 		= get_field('project_link');

			$collaborators 		= get_field('project_collaborators');
			$scope_tags 		= get_field('project_scope_tags');

			$intro 				= get_field('project_introductory_paragraph');
			$bg_image			= get_field('project_background_image');
			
			?>
			
			<div class="block-background hidden">
				<?php echo ws_ifdef_do( $bg_image, ws_decide_image_type( $bg_image ) ); ?>
			</div>
					
			<div class="container project-header">
				<div class="row">
					<div class="col-sm-12">
						<h2 class=" project-title centered"><?php echo $title; ?></h2>
						<h4 class=" project-scope centered">
							<?php echo ws_split_array_by_key( 
									$scope_tags, ", ", 
									function( $cb_elem ) {
										return $cb_elem['scope_tag']->name;
								}); ?>
						</h4>														
					</div>
				</div>			
			</div>

			
			<div class="container project-metadata">
				<div class="row">
					<div class="col-sm-6 col-md-4 metadata">
								
						<?php 
						if ( $client || $location || $date_started || $project_link || $collaborators || $scope_tags ) :
			
						echo '<ul class="">';
			
							echo ws_ifdef_do( $client, ws_ifdef_do_else( 
								$client_link, 
								'<li><a href="'.ws_decide_link_type( $client_link ).'">Client: '.$client.'</a></li>',
								'<li>'.$client.'</li>'
							) );
							// conditionally echos a linked client ( or just a client )
			
							echo ws_ifdef_concat( '<li>',$location,'</li>' );
							// conditionally echos a location
			
							echo ws_ifdef_do( $date_started, ws_ifdef_do_else( 
								$date_ended,
								'<li>'.ws_render_date( $date_started ).' - '.ws_render_date( $date_ended ).'</li>',
								'<li>'.ws_render_date( $date_started ).'</li>'
							) );
							// conditionally echo a date range, and format it from Ymd to ws_render_date();
			
							echo ws_ifdef_do( $scope_tags,
								ws_ifdef_concat( 
									'<ul class="">',
									ws_split_array_by_key( 
									$scope_tags, ", </li>", 
									function( $cb_elem ) {
										return '<li>'.$cb_elem['scope_tag']->name;
									}), 
									"</li></ul>"
							));
							// conditionally outputs a ul of comma-separated scope-tags
			
							echo ws_ifdef_do( $collaborators, 
								ws_ifdef_concat( 
									"<ul>Collaborators: ",
									ws_split_array_by_key( 
									$collaborators, ", </li>", 
									function( $cb_elem ) {
										return ws_ifdef_do_else(
											$cb_elem['collaborator_link'],
											'<li><a href="'.ws_decide_link_type($cb_elem['collaborator_link']).'" >'.$cb_elem['collaborator_name'].'</a>',
											'<li>'.$cb_elem['collaborator_name']
										); 
									}), 
									"</li></ul>"
							));
							// this outputs a comma-separated list of links. This is NOT currently an html list.
			
							//echo ws_ifdef_concat( '<a href="',ws_decide_link_type( $project_link ),'" > more </a>' );
							// this outputs an external link to more information about this project
			
						echo '</ul>';
			
						endif; ?>
						
					</div>
					<div class="col-sm-6 col-md-7 col-md-offset-1 description">

						<?php 
						echo ws_ifdef_concat(  '<p class="h3 text"><span class="bold">We designed a material and fabrication system for a set of 86 acoustic panels.</span> ', $intro,'</p>' );
						// echos the descriptive introductory paragraph beneath the ul of metadata
			
					?>
		
				</div>
			</div>
		</div>

	</section>

	
		<?php 
		$stories = get_field('project_stories');
		$sidebar_accumulator = '<ul>
		<li class="story-bar-project-title"><a href="#">Acoustic Panel System</a></li>';
		 	// this variable accumulates the names and slugs of stories, so that
	   		// we don't have to reiterate over the stories to construct the sidebar later.
			// When it is complete, the sidebar is a ul, comprised of li > a
	
			foreach ( ( $stories ) ? $stories : array() as $key => $story ) : 
	
				$story_title_slug = ws_derive_story_title( $story );
				$story_style_background_image = $story['project_story_background_image']['sizes']['slideshow'];
				$story_style_background_color = $story['project_story_background_color'];
				$story_is_container = $story['is_container'];
				$story_content = $story['project_story_content'];
	
				$sidebar_accumulator .= '<li><a href="#'.$story_title_slug.'">'.$story['project_story_name'].'</a></li>'; 
				?>
				

	<section id="<?php echo $story_title_slug; ?>" class="<?php echo $story_title_slug; ?> story block min padded bg-light">

		<?php
			if(!$story_is_container): 
				echo ws_ifdef_concat(
					'<div class="block-background" style="',
					ws_ifdef_do($story_style_background_image, 'background-image:url('.$story_style_background_image.');' )
					.ws_ifdef_do($story_style_background_color, 'background-color:'.$story_style_background_color.';' ),
					'" ></div>'
				);
				
			endif;
			// echos a background container to the frame.

			echo ws_ifdef_show( $story_content );
		?>

		</section>
			

		<?php endforeach; 

		$sidebar_accumulator .= "</ul>"; 
		
		?>


	<?php if ( $slideshow = get_field('project_slideshow') ) : ?>

	<section id="project-slideshow" class="project-slideshow block crop bg-light">

		<!--
<div class="flexslider-broken">
			<ul class="slides">
		<?php
			echo ws_split_array_by_key(
				$slideshow,
				"",
				function( $cb_img ) {
					return '<li><img type="'.$cb_img[ 'mime_type' ].'" src="'.$cb_img['sizes']['slideshow'].'" /></li>';
				}
			);
	
		?>
			</ul>	
		</div>
-->

	</section>

	<?php endif; ?>
	

	<div id="story-bar" class="hidden">

		<?php echo $sidebar_accumulator; ?>
			
	</div>

	
</div>	
	
<?php get_template_part('related'); ?>	
	

<?php get_footer(); ?>