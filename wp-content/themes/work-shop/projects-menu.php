<?php
			
					$q = new WP_Query(
						array(
							'post_type' => 'projects',
							'posts_per_page' => -1 			// maybe change this for some nice asynchronous pagination...
						)
					);
			
					$i = 0;
					while ( $q->have_posts() ) : $q->the_post();
						
						// requesting all of the post's relevant values
						$title = get_the_title(); // title text
						$perma = get_permalink();
						?>
						
						

						<article class="row project project-tile element <?php echo ws_derive_scope_string( get_field('project_scope_tags') ); ?>">
						
							<a href="<?php the_permalink(); ?>">
											
								<div class="project-tile-image col-sm-4 col-xs-6 ">
									<?php if(has_post_thumbnail()): the_post_thumbnail('small'); else: echo '<img src="' . get_bloginfo('template_directory') . '/_/img/default.png" alt="default image" />'; endif; ?>					
									<div class="project-tile-hook hidden">
										<h2><?php // echo ws_ifdef_show( $blurby ); ?></h2>
									</div>
									
								</div>
						
								<div class="project-tile-info col-sm-7 col-sm-offset-0 col-xs-6">
									<h3 class=""><?php echo ws_ifdef_show( $title ); ?></<h3>
									<h4><?php the_field('project_what_we_did'); ?></h4>
								</div>								
								
							</a>
											
						</article>
						

			
			<?php $i++; endwhile; ?>
			
			<?php wp_reset_query(); ?>
