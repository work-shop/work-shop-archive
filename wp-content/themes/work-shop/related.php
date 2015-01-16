	
<section class="block padded related">
	<div class="container">
		<div class="row">
		
			<div class="col-sm-3 col-xs-12">
				<h3>Related Projects</h3>
			</div>
				
				<?php

                // related posts logic.
                $tags = array_map(function( $x ) {
                    return $x->term_id;
                }, wp_get_post_tags( get_the_ID() ));

                $posted = array( get_the_ID() );
                $posts = 0;
                if ( !empty($tags) ) {
                    $RPQ = new WP_Query( array(
                        "post_type" => 'projects',
                        "posts_per_page" => 3,
                        "nopaging" => true,
                        "tag__in" => $tags,
                        "post__not_in" => $posted
                    ) );
                    while ( $RPQ->have_posts()&&$posts<4 ) {
                        $post = $RPQ->next_post(); ?>
                        
						<div class="tile project-tile project-tile-small col-sm-3 col-xs-6">
							<a href="<?php the_permalink(); ?>">
								<div class="overlay"></div>
							
								<?php if(has_post_thumbnail()): the_post_thumbnail('project'); else: echo '<img src="' . get_bloginfo('template_directory') . '/_/img/default.png" alt="default image" />'; endif; ?>
								<p class="project-title centered">
									<?php the_title(); ?>
								</p>						
							</a>
						</div>
						
						<?php array_push( $posted, $post->ID );
                        $posts += 1;
                    }
                    wp_reset_query();
                }

                if ( $posts<3 ) {
                    $AddQ = new WP_Query( array(
                        "post_type" => 'projects',
                        "posts_per_page" => (3-$posts),
                        "nopaging" => true,
                        "post__not_in" => $posted
                    )); 
                                        
                   while ( $AddQ->have_posts()&&$posts<3 ) {
                        $post = $AddQ->next_post(); ?>
					
						<div class="tile project-tile project-tile-small col-sm-3 col-xs-6">
							<a href="<?php the_permalink(); ?>">
								<div class="overlay"></div>
								<?php if(has_post_thumbnail()): the_post_thumbnail('project'); else: echo '<img src="' . get_bloginfo('template_directory') . '/_/img/default.png" alt="default image" />'; endif; ?>
								<p class="project-title centered">
									<?php the_title(); ?>
								</p>						
							</a>
						</div>                    
                                         
                     <?php $posts += 1;
                    }
                    wp_reset_query();
                }
            ?>
			</div>
		</div>
		
		</div>	
	</section>