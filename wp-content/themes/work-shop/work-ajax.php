	
	<div id="work-slideshow">
	
	<div class="row">
	
		<div class="flexslider-full" id="flexslider-work">
		
			<ul class="slides">
			
				<?php $images = get_field('work_slideshow','option');
		  		$count = 0; 			
		  		foreach( $images as $image ): ?>
			  
			  	<li><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="height"/>
			  		
			  		<?php if($image['title']): ?>
				  		<div class="flex-caption centered">
					  		<h3 class="caption-title bold"><?php echo $image['title']; ?></h3>
					  		<h4 class="caption-description bold"><?php echo $image['caption']; ?></h4>
				  		</div>
				  	<?php endif; ?>	
			  	</li>
			  					  						  
			  <?php $count++; ?>		
			  <?php endforeach; ?>
	
			</ul>	

		</div>	
		
	</div>	
		
	</div>	