

<?php get_header();?>

<?php while ( have_posts() ) : the_post(); ?>

<div class="page-heading bg-light loading">
	<div class="container">
		<div class"row">
			<div class="col-sm-12">
				<h3><?php the_title(); ?></h3>
			</div>	
		</div>	
	</div>
</div>

<div class="page-body page-default container loading">

	<div class="row">
		
		<div class="col-sm-8 col-md-9">
			<div class="page-content">		
				<?php the_content(); ?>		
			</div>
		</div>
		
		<div class="col-sm-3 col-md-2 page-nav hidden">
			<div class="page-menu">
				<?php wp_nav_menu(array('menu' => 'Page Menu' )); ?>
			</div>
		</div>			
		
	</div>
	
</div>	

<?php endwhile; ?>

<?php get_template_part('page-footer'); ?>

<?php get_template_part('work'); ?>

<?php get_footer();?>
