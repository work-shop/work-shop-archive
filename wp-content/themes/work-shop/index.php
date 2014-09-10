
<?php get_header();?>
		
	<section id="home" class="block full crop bg-light loading">	
		<div class="container">	
			<div class="row section-body">
				<div class="col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1">
					<h1 class="large bold white">Work-Shop is a research, design,<br/> and fabrication studio in Providence.</h1>
				</div>	
			</div>	
			
			<div class="row choices">
				<div class="col-sm-6 col-md-4 col-md-offset-2 mb40">
					<a href="<?php bloginfo('url'); ?>/innovation" class="block-link bg-brand"><h4 class="white centered">Rhode Island Foundation Innovation Fellowship Application</h4></a>
				</div>		
				<div class="col-sm-6 col-md-4 col-md-offset-0 mb40 ">
					<a href="<?php bloginfo('url'); ?>/apprenticeships" class="block-link bg-brand"><h4 class=" white centered">Work-Shop Summer Apprenticeship Program</h4></a>
				</div>										
					
				<div class="col-sm-10 col-sm-offset-1 hidden" id="scrolly">
					<a href="#work" class="jump">
						<h4 class="centered"><span class="icon" data-icon="&rdquo;"></span></h4>
					</a>						
				</div>	
			
			</div>
		</div>
		
		
	</section>
	
	<div id="homefix" class="homefix hidden"></div>

	<?php get_template_part('work'); ?>
	

<?php get_footer(); ?>
