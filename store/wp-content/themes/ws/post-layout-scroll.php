<div class="layout scroll">
	
	<div class="container project-header">		
		<div class="row">
			<div class="col-sm-12 col-md-10 col-lg-8 col-sm-offset-0 col-md-offset-1 col-lg-offset-2">
				<h2 class="post-title project-title"><?php the_title();?></h2>		
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
				<h3 class="project-summary">
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
	
	<div class="project-content rows">
	
		<?php if( get_field('rows') ): ?>
				<?php while( has_sub_field('rows') ): ?>	
					<?php if( get_sub_field('row_container_check') ): ?>
						<div class="container">
					<?php endif; ?>	
						<div class="row" style="background-color: <?php the_sub_field('row_background_color'); ?>;">		
							<div class="row-content container">
								<?php $content = get_sub_field('row_content'); ?>							
								<?php echo $content; ?>				
							</div>					 
						</div>
				<?php if( get_sub_field('row_container_check') ): ?>
					</div>
				<?php endif; ?>							
			<?php endwhile; ?>
		<?php endif; ?>

	</div>

</div>
