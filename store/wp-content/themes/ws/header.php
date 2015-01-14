<!DOCTYPE html>

<html>

<head>

	<meta charset="<?php bloginfo('charset'); ?>">
	
	<?php if (is_search()) { ?>
		<meta name="robots" content="noindex, nofollow" /> 
	<?php } ?>

	<title> 
	   <?php
	      if (function_exists('is_tag') && is_tag()) {
	         single_tag_title(); 
	         }
	      elseif (is_search()) {
	         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
	      elseif (!(is_404()) && (is_single()) || (is_page())) {
	         wp_title(''); echo ' - '; }
	      elseif (is_404()) {
	         echo 'Not Found - '; 
	         }
	      if (is_home()) {
	         bloginfo('name'); echo ' - '; bloginfo('description'); }
	      else {
	          bloginfo('name'); }
	   ?>
	</title>
				   
	<meta name="description" content="<?php bloginfo('description'); ?>">
	<meta name="google-site-verification" content="">
	<meta name="author" content="Greg Nemes">
		
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
	<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/_/img/favicon.ico">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

			
    <!--[if lt IE 9]>
      <script src="<?php bloginfo('template_directory'); ?>/_/js/html5shiv.js"></script>
      <script src="<?php bloginfo('template_directory'); ?>/_/js/respond.js"></script>
    <![endif]-->		
        	
	<?php wp_head(); ?>
	
	<link rel="stylesheet/less" type="text/css" href="<?php bloginfo('template_directory'); ?>/_/css/style.less" />
		
	<script src="<?php bloginfo('template_directory'); ?>/_/js/less.js"></script>	
			
</head>

<body <?php body_class('before header-closed'); ?>>

<?php get_template_part('landing'); ?>

<div id="state">

<div id="isotope-filters" data-option-key="filter">
	
		<header id="header" class="closed loading bg-light">
			<div class="container">
			
					<a id="logo" class="left" href="<?php bloginfo('url'); ?>">
						<img src="<?php bloginfo('template_directory'); ?>/_/img/logo.png" alt="logo">					
					</a>	
					<a id="nav-toggle" href="#" class="right hidden">
						<img src="<?php bloginfo('template_directory'); ?>/_/img/toggle.png" alt="navigation-toggle">
					</a>		
		
					<nav class="right hidden" id="nav">
						<ul class="main-menu">
							<li id="home-link"><a href="<?php bloginfo('url'); ?>" class="on hidden" >Home</a></li>
							<li><a href="#work" id="work-link" class="jump">Work</a></li>	
							<li><a href="#contact" class="hierarchical-broken jump">Info</a>
								<ul class="sub-menu hidden" id="about-menu">
									<div class="container">
										<li ><a href="#contact" class="jump sub-link">About</a></li> 
										<li><a href="<?php bloginfo('url'); ?>/resume">Contact</a></li> 												
										<li><a href="<?php bloginfo('url'); ?>/about">Bio</a></li> 
									</div>	
								</ul>						
							</li>	
						</ul>	
					</nav>					
			</div>					
		</header>
		
		<div id="header-small" class="off">
			<div class="container">
				<div class="row">
					<div class="col-sm-6 hidden">
						<h2><a href="#filter" id="small-project-link" class="filter hierarchical small-project-link" data-sub-target="#project-menu" data-option-value=".project,.empty">Projects</a></h2>		
						<?php
						$query_projects_menu = new WP_Query( array( 'post_type' => 'projects', 'post_status' => 'publish', 'posts_per_page' => '-1' ) );
							if ( $query_projects_menu->have_posts() ) { ?>
								<ul>	
								<?php while ( $query_projects_menu->have_posts() ) {
									$query_projects_menu->the_post(); 	?>			
									<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>					
								<?php } ?>
								</ul>
							<?php } ?>		
					</div>		
										 	
					<div class="col-sm-6">	
						<h2 class="hidden">NEWS</h2>
						<h2 class="brand"><a href="<?php bloginfo('url'); ?>/innovation">Innovation Fellowship</a></h2>
						<h2 class="brand"><a href="<?php bloginfo('url'); ?>/apprenticeships">Summer Apprenticeship Program</a></h2>					
						<h2 class="hidden"><a href="#contact" class="jump hidden">Contact</a></h2>
	
						<h2 class="">Work-Shop<br/>
							204 Westminster Street, Floor 3<br/>
							Providence, RI 02903<br/>
							440.915.2393<br/>
						</h2>	
						<h2>
							<a href="mailto:info@work-shop.ws" target="_blank"><span class="icon icon-left" data-icon="m"></span>info@work-shop.ws</a>	
							<br />
							<a href="#contactModal" class="hidden" data-toggle="modal" data-target="#contactModal"><span class="icon icon-left" data-icon="&#249;"></span>Send me a message</a>		<br />
						</h2>	
						<h5 class="mt20 extra-small">Click anywhere <span class="hidden-xs-inline"> or type 'm'</span> to close menu</h5>
					</div>			
				
				</div>
			</div>
		</div>
		
		
	</div><!--/filter -->
	
	<div id="headerfix"></div>
		
	<div id="content">
