
<?php get_header();?>
		
	<section id="home" class="block full crop bg-light loading">	
		<div class="container">	
			<div class="row section-body">
				<div class="col-sm-10 col-sm-offset-1 col-md-12 col-md-offset-0">
					<h1 class="large white bold">Work-Shop is a research, design,<br/> and fabrication studio in Providence.</h1>
				</div>	
			</div>	
			
			<div class="row choices hidden">
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
	
	<section id="news" class="block bg-light padded loading">
	
		<div class="container">	
			<div class="row section-body">
				<div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
					<h1 class=" bold">We're hosting a roundtable at Better World by Design next week, called <em>7 Bites and 7 Thoughts.</em></h1>
				</div>	
			</div>	
			
			<div class="row section-link">
				<div class="col-sm-4 col-sm-offset-4">
					<div class="button"><a class="centered" href="#">Learn More</a></div>
				</div>	
			</div>				
		</div>		
	
	</section>	
	
	<section id="intro-work" class="block white padded loading">
	
		<div class="container">	
			<div class="row section-body">
				<div class="col-sm-5" id="intro-work-text">
					<h2 class="">We build in wood, metal, plastic, language, circuits, and experience. </h2>
					<h2>Our work strives to define an intersection of the tangible, virtual, and cultural.</h2>
				</div>	
				
				<div class="col-sm-5 col-sm-offset-2" id="intro-work-image">
				
					<div class="flexslider-intro-work">	
						<ul class="slides">
								<?php $images = get_field('work_slideshow','option');
						  		$count = 0; 			
						  		foreach( $images as $image ): ?>
							  
							  	<li><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="height"/>
							  		
							  		<?php if($image['title']): ?>
								  		<div class="flex-caption centered hidden">
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
			
			<div class="row section-link">
				<div class="col-sm-4 col-sm-offset-4">
					<div class="button"><a class="centered" href="#">See our work</a></div>
				</div>	
			</div>				
		</div>		
	
	</section>		
	
	
	<div id="homefix" class="homefix hidden"></div>	
	
	<div id="dash"></div>

<?php get_footer(); ?>
