
<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div class="project-content">
			
			<div class="project-heading">
				<h2 class="medium centered"><?php the_title(); ?></h2>
			</div>
		
			<div class="project-content">
			
				<div class="project-gallery">
					<?php get_template_part( 'project-gallery' ); ?>
				</div>
							
				<div class="project-info">
					
				</div>
				
				<div class="project-zoomer" id="plan">
					<div class="zoomer-viewport">
						<?php get_template_part('svg'); ?>
					</div>
					<div class="zoomer-footer">
						<div class="container">
							<div class="row">
							
								<div class="col-sm-4">
									<h3 class="centered"></h3>
								</div>
								
								<div class="col-sm-4">
									<h3 class="centered"><a href="#" id="zoom">Floor Plan</a></h3>
								</div>
								
								<div class="col-sm-4">
									<h3 class="centered"></h3>
								</div>																
								
							</div>
						</div>				
					</div>				
				</div>			
				
			</div>		
			
		</div>
		
		<?php get_template_parts( array( 'share','post-footer' ) ); ?>	
			
	<?php endwhile; endif; ?>
	
<?php get_template_part( 'work' ); ?>
	
<?php get_template_part( 'footer-working' ); ?>

