
<?php get_template_parts( array( 'html-header', 'header' ) ); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<div class="post-content loading <?php the_field('post-layout');?>">
	
		
		<?php 
		$layout = get_field('post-layout');
		
		
		if($layout == 'scroll'){
		
			get_template_parts( array( 'post-layout-scroll' ) );
		
		}
		
		else{
		
			get_template_parts( array( 'post-layout-gallery' ) );
		
		}
		
		?>
		
		<?php get_template_parts( array( 'share','post-footer' ) ); ?>
	
		
	</div><!--post-content-->		
			
	<?php endwhile; endif; ?>
	
<?php get_template_part( 'grid' ); ?>
	
<?php get_template_parts( array('footer','html-footer') ); ?>

