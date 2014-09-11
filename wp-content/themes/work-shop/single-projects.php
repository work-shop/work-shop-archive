<?php get_header();?>
		
<div id="project" class="template project">	

	<section id="project-introduction" class="project-introduction introduction block crop bg-light">
	
	<?php
		$title 					= get_the_title();
		$hero_image 			= get_field('project_hero_image');
		$hero_blurby 			= get_field('project_hero_blurby');
		$hero_image_url 		= ($hero_image) ? $hero_image['sizes']['full'] : NULL;
		
		echo ws_ifdef_do( $hero_image, ws_ifdef_concat('<img src="',$hero_image_url,'" />'));

		echo '<hgroup>';	// or whatever kind of encapsulation you want here...

			echo ws_ifdef_concat( '<h1>',$title,'</h1>' );	// or whatever kind of semantics you want here...
			echo ws_ifdef_concat( '<h4>',$hero_blurby,'</h4>' ); 	// or whatever kind of semantics you want here...

		echo '</hgroup>';
	?>
		
	</section>

	<section id="project-overview" class="project-overview overview block crop bg-light">
		
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

			if ( $client || $location || $date_started || $project_link || $collaborators || $scope_tags ) :

			echo '<ul>';

				echo ws_ifdef_do( $client, ws_ifdef_do_else( 
					$client_link, 
					'<li><a href="'.ws_decide_link_type( $client_link ).'"><h6>'.$client.'</h6></a></li>',
					'<li><h6>'.$client.'</h6></li>'
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
						"<ul>",
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
						"<ul>",
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

				echo ws_ifdef_concat( '<a href="',ws_decide_link_type( $project_link ),'" > more </a>' );
				// this outputs an external link to more information about this project

			echo '</ul>';

			endif;

			echo ws_ifdef_concat(  '<p>', $intro,'</p>' );
			// echos the descriptive introductory paragraph beneath the ul of metadata

			echo ws_ifdef_do( $bg_image, ws_decide_image_type( $bg_image ) );
			// echos a background image line drawing.

		?>

	</section>

	<?php

	$stories = get_field('project_stories');
	$sidebar_accumulator = "<ul>"; 	// this variable accumulates the names and slugs of stories, so that
							   		// we don't have to reiterate over the stories to construct the sidebar later.
									// When it is complete, the sidebar is a ul, comprised of li > a

		foreach ( ( $stories ) ? $stories : array() as $key => $story ) : 

			$story_title_slug = ws_derive_story_title( $story );
			$story_style_background_image = $story['project_story_background_image'];
			$story_style_background_color = $story['project_story_background_color'];
			$story_is_container = $story['is_container'];
			$story_content = $story['project_story_content'];

			$sidebar_accumulator .= '<li><a href="#'.$story_title_slug.'">'.$story['project_story_name'].'</a></li>'; 

		?>

		<section id="<?php echo $story_title_slug; ?>" class="<?php echo $story_title_slug; ?> story block crop bg-light">

		<?php
			echo ws_ifdef_do( $story_is_container, 
				ws_ifdef_concat(
					'<div class="block-background" style="',
					ws_ifdef_do($story_style_background_image, 'background-image:url('.$story_style_background_image.');' )
					.ws_ifdef_do($story_style_background_color, 'background-color:'.$story_style_background_color.';' ),
					'" ></div>'
				)
				
			);
			// echos a background container to the frame.

			echo ws_ifdef_show( $story_content );
		?>

		</section>

	<?php 

		endforeach; 

		$sidebar_accumulator .= "</ul>"; // end the sidebar, and
		echo $sidebar_accumulator;

	?>

	<?php

		if ( $slideshow = get_field('project_slideshow') ) :

	?>

	<section id="project-slideshow" class="project-slideshow block crop bg-light">

	<?php
		echo ws_split_array_by_key(
			$slideshow,
			"",
			function( $cb_img ) {
				return '<img type="'.$cb_img[ 'mime_type' ].'" src="'.$cb_img['sizes']['full'].'" />';
			}
		);

	?>

	</section>

	<?php endif; ?>

	
</div>	

<?php get_footer(); ?>