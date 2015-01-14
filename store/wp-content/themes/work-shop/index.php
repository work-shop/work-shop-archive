<?php get_header();?>

<div id="background"></div>

<div id="background2" class="hidden"></div>

<div id="nav-side" class="loading">
	<ul>
		<li class="jump active side" href="#top" data-toggle="tooltip-broken" data-placement="left" title data-original-title="Home"></li>
		<li class="jump side" href="#work" data-toggle="tooltip-broken" data-placement="left" title data-original-title="Work"></li>
		<li class="jump side" href="#intro" data-toggle="tooltip-broken" data-placement="left" title data-original-title="Intro"></li>		
		<li class="jump side" href="#shop"  data-toggle="tooltip-broken" data-placement="left" title data-original-title="Shop"></li>
		<li class="jump side" href="#us"  data-toggle="tooltip-broken" data-placement="left" title data-original-title="Community"></li>		
		<li class="jump side" href="#people"  data-toggle="tooltip-broken" data-placement="left" title data-original-title="People"></li>			
		<li class="jump side" href="#contact" data-toggle="tooltip-broken" data-placement="left" title data-original-title="Contact"></li>
		<li class="jump side side-icon" href="#email" data-toggle="tooltip-broken" data-placement="left" title data-original-title="Contact"><span class="icon" data-icon="m"></span></li>	
	</ul>
</div>

<section id="home" class="block loading">
	<div class="row">
		<div class="col-sm-10 col-sm-offset-1 centered">
			<h2 class="tagline large white">Work-Shop is a research, design, and digital fabrication studio in Providence, Rhode Island.</h2>
		</div>		
	</div>
	<div id="scrolly" class="jump before" href="#work">
		<span class="icon" data-icon="&#64257;"></span>
	</div>
</section>

<section id="work" class="block loading">

	<div id="work-carousel" class="carousel slide">
		 <ol class="carousel-indicators">
		  <?php $images = get_field('work_slideshow','option');
	  		$count = 0; 			
	  		foreach( $images as $image ): ?>
	  		
		  		<li data-target="#work-carousel" data-slide-to="<?php echo $count; ?>" class="<?php if($count == 0): echo 'active'; endif; ?>"></li>
		  		
		    <?php $count++; endforeach; ?>  
		</ol>	  			
		<div class="carousel-inner">
		  		
				<?php $count = 0;
				foreach( $images as $image ): ?>
				<div class="item <?php if($count == 0): echo 'active'; endif; ?>">
			        <img src="<?php echo $image['sizes']['work-slideshow']; ?>" alt="<?php echo $image['alt']; ?>"  />	
			        <div class="carousel-caption">
				        <h4><?php echo $image['description']; ?></h4>
				        <p><?php echo $image['caption']; ?></p>
			        </div>	
				</div>
			    <?php $count++; endforeach; ?>  
		
		  </div>
		  <a class="carousel-control left" href="#work-carousel" data-slide="prev" id="previous"><span class="icon" data-icon="&#8250;"></span></a>
		  <a class="carousel-control right" href="#work-carousel" data-slide="next" id="next"><span class="icon" data-icon="&#8249;"></span></a>
	</div>	

</section>

<section id="intro" class="block">
	<div class="row">
		<div class="col-sm-12">
			<h2 class="large white">We've just found a home in Providence, Rhode Island, and are opening our doors to the world. </h2> 
			<a href="<?php bloginfo('url'); ?>/about" class="btn btn-primary btn-sm hidden">About Us <span class="icon icon-right" data-icon="&#183;"></span></a>
		</div>			
	</div>	
</section>

<section id="shop" class="block bg-brand white">
<div class="row">
		<div class="col-sm-12">
			<h2 class="large white">Our new shop is both a home for our 3-Axis CNC Router and a catalyst for investigating its implications - for production, design, and pedagogy.
</h2> 
			<a href="<?php bloginfo('url'); ?>/about" class="btn btn-primary btn-sm hidden">About Us <span class="icon icon-right" data-icon="&#183;"></span></a>
		</div>			
	</div>	
</section>

<section id="us" class="block">
	<div class="row">
		<div class="col-sm-12">
			<h2 class="large white">Work-Shop is a place for blending the amateur’s sense of wonder with the professional’s rigor. We make space for a manner of building informed by love. </h2> 
			<a href="<?php bloginfo('url'); ?>/about" class="btn btn-primary btn-sm hidden">About Us <span class="icon icon-right" data-icon="&#183;"></span></a>
		</div>			
	</div>	
</section>

<section id="people" class="block bg-brand white">
	<div class="row hidden">
		<div class="col-sm-12">
		</div>
	</div>
	<div class="row members">
		<div class="col-sm-5 col-sm-offset-1 col-md-4 col-md-offset-0 member">
			<img src="<?php bloginfo('template_directory'); ?>/_/img/greg.jpg" alt="Greg Nemes">
			<h4>Greg Nemes</h4>
			<h5>Co-Founder</h5>
			<p class="source">Greg specializes in user interface/user experience design in the realms of architecture, installations, furniture, physical computing, and web design. Greg has a Masters of Architecture from RISD and currently teaches at the Boston Architectural College.</p>
		</div>		
		<div class="col-sm-5 col-md-4 member">
			<img src="<?php bloginfo('template_directory'); ?>/_/img/nic.jpg" alt="Greg Nemes">
			<h4>Nic Schumann</h4>
			<h5>Co-Founder</h5>
			<p class="source">Nic is a systems designer and computer scientist who uses language to build meaningful structures from an undifferentiated context. Nic is currently pursuing his bachelors in a hybrid concentration of computer science and industrial design at Brown.</p>			
		</div>		
		<div class="col-sm-10 col-sm-offset-1 col-md-4 col-md-offset-0 member centered">
			<h1 class="">A shop is only as good as the people in it - we’re always looking to make ours better.
			</h3>
			<a href="#contact" class="jump btn btn-default btn-sm ">Contact Us <span class="icon icon-right" data-icon="&#64257;"></span></a>
		</div>										
	</div>	
</section>

<section id="contact" class="block">
	<div class="row">
		<div class="col-sm-12">
			<h2 class="large white centered">We want to work with you. 
</h2> 
			<div class="col-sm-5 col-sm-offset-1 col-md-3 col-md-offset-3 email-us" id="email">
				<a href="#emailModal" class="btn btn-primary btn-sm btn-full" data-toggle="modal" data-target="#emailModal ">Email Us <span class="icon icon-right hidden" data-icon="&#183;"></span></a> 	
			</div>
			<div class="col-sm-5 col-md-3 subscribe">
				<a href="#subscribeModal" class="btn btn-primary btn-sm btn-full" data-toggle="modal" data-target="#subscribeModal">Subscribe to Our Newsletter <span class="icon icon-right hidden" data-icon="&#183;"></span></a> 	
			</div>
			
			<div class="col-sm-6 col-sm-offset-3 col-xs-12 share">
			<h5 class="white">Share</h3>
		<a class="addthis_button_facebook" addthis:url="<?php the_permalink(); ?>"  addthis:title="Work-Shop – a research, design, and digital fabrication studio in Providence, RI."><span class="icon social" data-icon="F"></span></a>
									
		<a class="addthis_button_twitter" addthis:url="<?php the_permalink(); ?>" addthis:title="Work-Shop – a research, design, and digital fabrication studio in Providence, RI."><span class="icon social" data-icon="t"></span></a>
			</div>					
		</div>
	</div>		
</section>



 <div class="modal fade" id="emailModal" tabindex="" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Contact Us</h4>
        </div>
        <div class="modal-body">
			<?php gravity_form( 1, $display_title=false, $display_description=false, $display_inactive=false, $field_values=null, $ajax=true); ?>	        
		</div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->	 

 <div class="modal fade" id="subscribeModal" tabindex="" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Subscribe to our newsletter</h4>
        </div>
        <div class="modal-body">
			<?php gravity_form( 2, $display_title=false, $display_description=false, $display_inactive=false, $field_values=null, $ajax=true); ?>
		</div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->	 
  




<?php get_footer(); ?>
