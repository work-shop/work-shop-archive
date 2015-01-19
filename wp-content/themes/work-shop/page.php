
<?php get_header();?>

<?php while(have_posts()): the_post() ?>

<div id="page" class="template page">	

	<section id="page-introduction" class="block crop introduction bg-light three-quarter-max <?php echo ((has_post_thumbnail()) ? 'introduction-image' : '') ?> ">
	
		<?php if(has_post_thumbnail()): the_post_thumbnail('project-slideshow'); endif; ?>	
				
	</section>	

	
	<section id="page-body" class="page-body block bg-light">
	
		<div class="container md">
		
			<div class="row">
				<div class="col-sm-8 col-sm-offset-2">				
					<h2 class="page-title centered mt m60"><?php the_title(); ?></h2>
				</div>			
			</div>	
			
			<div class="page-content padded">					
		
				<?php the_content(); ?>
			
			</div>
		
		</div>
		
		<div id="page-dash" class="dash static bottom"></div>		
		
	</section>
	
	
		
</div>	

<?php endwhile; ?>

<?php get_footer(); ?>
