	<div class="stamp">
		
		<span> Blog </span>	
	
	</div>

	<a href="<?php the_permalink(); ?>">
	
			
		<?php the_post_thumbnail(get_field('cell_size')); ?>
		
		<div class="mediabackground"></div>
												   				
				<div class="information">
				
					<div class="taxonomy">
						
						<span> <?php the_category(); ?> </span>	
					
					</div>
								
					<div class="title">						
					
						<h2><?php the_title(); ?></h2>
					
					</div>
				
					<div class="excerpt">	
					
						<?php if(get_field('description-check')){
						
						?>					
					
						<p><?php the_field('description-home'); ?></p>
						
						<?php } else{} ?>
					
					</div>			
			
				</div>		
			
		
	</a>		
