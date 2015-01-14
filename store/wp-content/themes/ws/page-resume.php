<?php get_header();?>

<?php while ( have_posts() ) : the_post(); ?>

<div class="heading bg-light hidden">
	<div class="container">
		<div class"row">
			<div class="col-sm-12">
				<h3><?php the_title(); ?></h3>
			</div>	
		</div>	
	</div>
</div>

<div class="page-body page-resume container loading">

	<div class="row">
	
		<div class="col-sm-2 page-nav hidden-xs fixed-nav" id="resume-nav">
			<?php if( get_field('sections') ): ?>
				<ul>
					<?php while( has_sub_field('sections') ): ?>	
						<li><a href="#<?php the_sub_field('section_slug'); ?>"class="jump-resume"><?php the_sub_field('section_title'); ?></a></li>
					<?php endwhile;?>
				</ul>
			<?php endif; ?>					
		</div>	
		
		<div class="col-sm-8 col-sm-offset-2" id="resume-content">
			<div class="page-title hidden">
				<h2 ><?php the_title(); ?></h2>
				<p class="page-introduction"><?php the_field('page_introduction'); ?></p>					
			</div>
			<div class="page-content resume">

				<?php if( get_field('sections') ): ?>
					<?php while( has_sub_field('sections') ): ?>	
						
						<?php if( get_sub_field('section_items') ): ?>
							<section class="resume-section" id="<?php the_sub_field('section_slug'); ?>">
								<h2 class="section-heading brand serif"><?php the_sub_field('section_title'); ?></h2>						
								
								<?php while( has_sub_field('section_items') ): ?>
									<div class="item">
									
									<?php if(get_sub_field('link')): ?>
										<a href="<?php the_sub_field('link'); ?>" target="_blank"><span class="icon icon-left project-link-icon" data-icon="&#197;"></span>
	
									<?php endif; ?>
									
											<h3>
												<?php 
												if(get_sub_field('title')): 
													the_sub_field('title'); 
												endif; ?>	 
												<?php if(get_sub_field('title_description')): ?>
													<span class="brand dot"> • </span><?php the_sub_field('title_description'); ?> 
												<?php endif; ?>
												<?php if(get_sub_field('timeline')): ?>
													<span class="brand dot"> • </span><?php the_sub_field('timeline'); ?> 
												<?php endif; ?>
											</h3>
											<?php if(get_sub_field('description')): ?>
												<p><?php the_sub_field('description'); ?></p>
											<?php endif; ?>									
									<?php if(get_sub_field('link')): ?>
										</a>
									<?php endif; ?>																
									
									</div>									
								<?php endwhile; ?>
								
							</section>					
						<?php endif; ?>	
														
					<?php endwhile; ?>
				<?php endif; ?>
			
			</div>
		</div>
		
	</div>
	
</div>	

<?php endwhile; ?>

<?php get_template_part( 'page-footer' ); ?>

<?php get_template_part('grid'); ?>


<?php get_footer();?>
