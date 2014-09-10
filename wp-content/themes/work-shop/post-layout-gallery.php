<div class="layout gallery">
	
	<div class="container project-header">		
		<div class="row">
			<div class="col-sm-12 col-md-10 col-lg-8 col-sm-offset-0 col-md-offset-1 col-lg-offset-2">
				<h2 class="post-title project-title"><?php the_title();?></h2>			
				<h3 class="project-summary hidden">
					<?php			
						if(get_field('synopsis')){
							echo '<p>';
							the_field('synopsis');
							echo '</p>';
						}else{}	
					?>
				</h3>	
				<?php			
					if(get_field('misc')){
						echo '<p>';
						the_field('misc');
						echo '</p>';
					}else{}	
				?>						
			</div>
		</div>		
	</div>
	
	<div class="project-content slider">
		<div class="container">
			
			<?php
			$images = get_field('gallery');
			$count = 1;
			if( $images ): 
				//if(count($images) > 1): ?>
			
					<div class="flexslider-project col-sm-12 col-md-10 col-md-offset-1 flexslider-loading" id="theatre">
					
						<ul class="slides">
						  <?php foreach( $images as $image ): ?>
	
						  <?php 
						  if($count == 1){ ?>
							  <li class="description-slide" style="background-image: url('<?php echo $image['sizes']['gallery']; ?>'); background-size: cover;" data-thumb="<?php bloginfo('template_directory'); ?>/_/img/thumb-description.png">
								<div class="slide-description-overlay">	
								</div>
								<div class="slide-description">	
									<h2><?php the_field('synopsis'); ?></h2>
									<h4 class="description-start">Click or swipe to see images of the project <span class="icon icon-right" data-icon="&#218;"></span></h4>
								</div>
								
							  </li>
						  <? } else{} ?>					  
						  
						  		<li data-thumb="<?php echo $image['sizes']['tiny']; ?>"><img src="<?php echo $image['sizes']['gallery']; ?>" alt="<?php echo $image['alt']; ?>" /></li>
						  					  						  
						  <?php $count++; ?>		
						  <?php endforeach; ?>
				
						</ul>
						<div class="cyclebuttons">	
						
							<div id="previous" class="cyclebutton previous flex-previous"><span class="icon" data-icon="&#8216;"></span></div>			
							<div id="next" class="cyclebutton next flex-next" ><span class="icon" data-icon="&#8212;"></span></div>	
						
						</div>		
			
					</div>	
			<?php // endif; 
			endif; ?>			
			
		</div>
		
	</div>		
	

	<div class="container">		
		<div class="row">
			<div class="">
				<div class="project-info">
					<?php				
					if(get_field('client')){
						echo '<p>Client: ';
						the_field('client');
						echo '</p>';
					}else{}
				
					if(get_field('scope')){
						echo '<p>';
						the_field('scope');
						echo '</p>';
					}else{}
					
					if(get_field('media')){
						echo '<p>';
						the_field('media');
						echo '</p>';
					}else{}
					
					if(get_field('press')){
						echo '<p>';
						the_field('press');
						echo '</p>';
					}else{}	
					
					if(get_field('link')){
						echo '<p class="project-link"><a href="' . get_field('link') . '" target="_blank"><span class="icon icon-left" data-icon="&#197;"></span>';
						the_field('link_text');
						echo  '</a></p>';
					}else{}			
					
					if(get_field('info_misc')){
						echo '<p class="info_misc">';
						the_field('info_misc');
						echo  '</p>';
					}else{}					
								
					?>							
				</div>			
			</div>
		</div>
	</div>
	
</div>		
	
	