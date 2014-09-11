<?php get_header();?>
		
<div id="projects" class="template projects">	
	
	<section id="projects-introduction" class="project-introduction introduction block crop bg-light">	
				


	</section>	


	<?php
		/*  

			Iterate over the Scope Tags:

		*/
		echo ws_render_taxonomy( 
			get_terms( 'scope_tag', array('orderby' => 'name', 'order' => 'ASC') ),
			function( $cb_term ) {
				/* this function supplies a taxonomy term object, which can be queried,
				   embedded in HTML, etc, and then returned to generate the HTML for the
				   filter bar. */

				return '<a class="filter-link scope-tag scope-tag-'.$cb_term->slug.'">'
				     . $cb_term->name
				     . '</a>';

			}
		);

	?>

	<?php
		/*  

			Iterate over the Projects :

		 */

		$q = new WP_Query(
			array(
				'post_type' => 'projects',
				//'post_status' => 'published',
				'posts_per_page' => -1, 			// maybe change this for some nice asynchronous pagination...
				'orderby' => 'menu_order date'		// fallback? 
			)
		);

		while ( $q->have_posts() ) : $q->the_post();

			// requesting all of the post's relevant values
			$hero_image = get_field('project_hero_image');
			$hero_image_url = ( $hero_image ) ? $hero_image['sizes']['full'] : NULL; // url to the full-size image of the project		
			$title = get_the_title(); // title text
			$blurby = get_field('project_hero_blurby');
			$perma = get_permalink();


			echo '<article class="project '.ws_derive_scope_string( get_field('project_scope_tags') ).'">';

				echo ws_ifdef_show( $title );
				// echos $title, conditionally

				echo ws_ifdef_concat( '<a href="', $perma, '">' );
				// echos <a href="{permalink}" >, conditionally

				echo ws_ifdef_do( $hero_image, ws_ifdef_concat( '<img src="', $hero_image_url, '" \>' ) );
				// echos <img src="{hero_image_url}" >, conditionally

				echo ws_ifdef_show( $blurby );
				// echos $blurby, conditionally

				echo ws_ifdef_do( $perma, '</a>');
			// echos a closing anchor tag, if the permalink is defined. (just in case, bro).

			echo '</article>';

		endwhile;

	?>

</div>

<?php get_footer(); ?>