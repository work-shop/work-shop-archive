
	
		<div class="col-sm-2">
			<?php 
				$args = array(
				'post_type' => 'project',
				'project_category' => 'art-environments',
				'posts_per_page' => '-1'
				);
				$nav_query = new WP_Query( $args );
				if ( $nav_query->have_posts() ) { ?>
				    <h3>art + environments</h3>
				    <ul>
					<?php while ( $nav_query->have_posts() ) {
						$nav_query->the_post(); ?>
						<li class="">
							<a href="<?php the_permalink(); ?>" class="small">							
							<?php the_title(); ?>				
							</a>
						</li>
					<?php } ?>
				       </ul>
				<?php } else { }
				wp_reset_postdata(); ?>				
			</div>
			
		<div class="col-sm-2">
			<?php 
				$args = array(
				'post_type' => 'project',
				'project_category' => 'plaza-garden',
				'posts_per_page' => '-1'
				);
				$nav_query = new WP_Query( $args );
				if ( $nav_query->have_posts() ) { ?>
				    <h3>plaza + garden</h3>
				    <ul>
					<?php while ( $nav_query->have_posts() ) {
						$nav_query->the_post(); ?>
						<li class="">
							<a href="<?php the_permalink(); ?>" class="small">							
							<?php the_title(); ?>				
							</a>
						</li>
					<?php } ?>
				       </ul>
				<?php } else { }
				wp_reset_postdata(); ?>				
			</div>

		<div class="col-sm-2">
		<?php 
			$args = array(
			'post_type' => 'project',
			'project_category' => 'civic-institutional',
			'posts_per_page' => '-1'
			);
			$nav_query = new WP_Query( $args );
			if ( $nav_query->have_posts() ) { ?>
			    <h3>civic + institutional</h3>
			    <ul>
				<?php while ( $nav_query->have_posts() ) {
					$nav_query->the_post(); ?>
					<li class="">
						<a href="<?php the_permalink(); ?>" class="small">							
						<?php the_title(); ?>				
						</a>
					</li>
				<?php } ?>
			       </ul>
			<?php } else { }
			wp_reset_postdata(); ?>				
		</div>
			
		<div class="col-sm-2">
		<?php 
			$args = array(
			'post_type' => 'project',
			'project_category' => 'healing-healthcare',
			'posts_per_page' => '-1'
			);
			$nav_query = new WP_Query( $args );
			if ( $nav_query->have_posts() ) { ?>
			    <h3>healing + healthcare</h3>
			    <ul>
				<?php while ( $nav_query->have_posts() ) {
					$nav_query->the_post(); ?>
					<li class="">
						<a href="<?php the_permalink(); ?>" class="small">							
						<?php the_title(); ?>				
						</a>
					</li>
				<?php } ?>
			       </ul>
			<?php } else { }
			wp_reset_postdata(); ?>				
		</div>

		<div class="col-sm-2">
			<?php 
				$args = array(
				'post_type' => 'project',
				'project_category' => 'urban-masterplan',
				'posts_per_page' => '-1'
				);
				$nav_query = new WP_Query( $args );
				if ( $nav_query->have_posts() ) { ?>
				    <h3>urban + masterplan</h3>
				    <ul>
					<?php while ( $nav_query->have_posts() ) {
						$nav_query->the_post(); ?>
						<li class="">
							<a href="<?php the_permalink(); ?>" class="small">							
							<?php the_title(); ?>				
							</a>
						</li>
					<?php } ?>
				       </ul>
				<?php } else { }
				wp_reset_postdata(); ?>				
		</div>
		
		<div class="col-sm-2">
			
		    <h3>firm + blog</h3>
		    <ul>					
				<li class="">
					<a href="<?php bloginfo('url'); ?>/work" class="small">							
					work				
					</a>
				</li>	
				<li class="">
					<a href="<?php bloginfo('url'); ?>/blog" class="small">							
					blog				
					</a>
				</li>	
				<li class="">
					<a href="<?php bloginfo('url'); ?>/about" class="small">							
					about				
					</a>
				</li>					
											
	       </ul>
			
		</div>		
