
<?php get_header();?>

<?php while(have_posts()): the_post() ?>

<div id="page" class="template page">	

	<?php if(has_post_thumbnail()): ?>	

		<section id="page-introduction" class="block crop introduction golden-max <?php echo ((has_post_thumbnail()) ? 'introduction-image' : '') ?> ">
		
			<?php the_post_thumbnail('project-slideshow'); 	?>
					
		</section>	
	
	<?php endif; ?>

	
	<section id="page-body" class="page-body block bg-light <?php if(!has_post_thumbnail()): echo 'padded'; endif; ?>">
	
		<div class="container md">
		
			<div class="row">
				<div class="col-sm-8 col-sm-offset-2">				
					<h2 class="page-title centered mt <?php if(!has_post_thumbnail()): echo 'm30'; else: echo 'm60'; endif; ?>"><?php the_title(); ?></h2>
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
