<?php get_header();?>
		
<div id="projects" class="template projects">	
	
	<section id="projects-introduction" class="project-introduction introduction block padded bg-white">	
		<div class="blurby">
			<div class="container">
				<div class="row">
				<div class="col-sm-10 col-sm-offset-1">
					<h2 class="centered">
						We design things, and we build things. At the same time. 
					</h2>
				</div>
			</div>
		</div>
		
	<div id="projects-dash" class="dash static"></div>	
		
	</section>	
	
	<section id="projects-filters" class="filters hidden">
		<div class="container">
			<ul>
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
		
						return '<li><a href="#" class=" filter-link scope-tag scope-tag-'.$cb_term->slug.'">'
						     . $cb_term->name
						     . '</a></li>';
		
					}
				);
		
			?>
			</ul>
		</div>
	</section>
	
	<section id="projects-grid" class="block">
		<div class="container">
			<div class="row">

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
			
					$i = 0;
					while ( $q->have_posts() ) : $q->the_post();
						
						// requesting all of the post's relevant values
						$hero_image = get_field('project_hero_image');
						$hero_image_url = ( $hero_image ) ? $hero_image['sizes']['full'] : NULL; // url to the full-size image of the project		
						$title = get_the_title(); // title text
						$blurby = get_field('project_hero_blurby');
						$perma = get_permalink();
						?>

						<article class="<?php echo ws_parity( $i,'left','right' ); ?> col-sm-4 project project-tile element <?php echo ws_derive_scope_string( get_field('project_scope_tags') ); ?>">
						
							<a href="<?php the_permalink(); ?>">
			
								<div class="project-tile-image">
									<?php echo ws_ifdef_do( $hero_image, ws_ifdef_concat( '<img src="', $hero_image_url, '" \>' ) ); ?>					
									<div class="project-tile-hook">
										<h2><?php echo ws_ifdef_show( $blurby ); ?></h2>
									</div>
									
								</div>
								
								<div class="project-tile-info">

									<h3 class="centered"><?php echo ws_ifdef_show( $title ); ?></h3>
									<h4 class="centered"><?php 

										echo ws_split_array_by_key( 
											get_field('project_scope_tags'), ', ',
											function( $cb_tag ) {
												return $cb_tag['scope_tag']->name;
											}
										);

									 ?></h4>
								</div>
								
							</a>
											
						</article>
			
			<?php $i++; endwhile; ?>
			
			</div>
		</div>
		
	<div id="projects-dash" class="dash static"></div>		
		
	</section>
	

</div>

<?php get_footer(); ?>