<a href="<?php the_permalink(); ?>">
	
	<div class="background">
					
		<?php 
		if(get_field('gif_check')){
			the_post_thumbnail(get_field('full'));
		}
		else{
			the_post_thumbnail(get_field('cell_size')); 
		} ?>
			
	</div>
			
	<div class="project-description">

		<p><?php the_field('synopsis'); ?></p>
		<h4 class="small more">Click here to see the project <span class="icon icon-right" data-icon="&#218;"></span></h4>
				
	</div>
													   				
	<div class="information">
					
		<div class="title">						
		
			<h2><?php the_title(); ?></h2>
			<h3 class="hidden"><?php the_field('scope'); ?></h3>
		
		</div>
	
	</div>				
	
</a>		
