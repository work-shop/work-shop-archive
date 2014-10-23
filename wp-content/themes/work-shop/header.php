<!DOCTYPE html>

<html class="header-closed">

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
	<meta name="author" content="Greg Nemes and Nic Schumann of Work-Shop">
		
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
	<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/_/img/favicon.ico">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
			
    <!--[if lt IE 9]>
      <script src="<?php bloginfo('template_directory'); ?>/_/js/html5shiv.js"></script>
      <script src="<?php bloginfo('template_directory'); ?>/_/js/respond.js"></script>
    <![endif]-->		
        	
	<?php wp_head(); ?>
				
</head>

<body <?php body_class('before'); ?>>

<?php get_template_part('landing'); ?>

<?php get_template_part('ie'); ?>

<div id="state" class="loading spy">
	
		<header id="header" class="closed">
			<div class="container">		
			
				<a id="logo" class="logo" href="<?php bloginfo('url'); ?>">
					<img src="<?php bloginfo('template_directory'); ?>/_/img/logo.png" alt="logo">					
				</a>		

				<nav class="right hidden-xs" id="nav">
					<ul class="main-menu">
						<li id="home-link"><a href="<?php bloginfo('url'); ?>" class="hidden" >Home</a></li>
						<li><a href="<?php bloginfo('url'); ?>/projects" id="work-link" class="">Projects</a></li>	
						<li><a href="<?php bloginfo('url'); ?>/process" class="">Process</a></li>							
						<li><a href="<?php bloginfo('url'); ?>/about" class="">About</a></li>
					</ul>	
				</nav>	
				
				<a id="carrot" href="#" class="nav-toggle closed">
					<img src="<?php bloginfo('template_directory'); ?>/_/img/toggle.png" alt="navigation-toggle">
				</a>
				
				<nav id="menu" class="closed hidden">
					<div class="row">
						<div class="col-sm-6">
						
						</div>
						<div class="col-sm-6">
						
						</div>
					</div>
				</nav>
														
			</div>					
		</header>

	<div id="headerfix"></div>

	<div id="nav-side" class="dark">
		<ul>
			<li><a class="jump active side" href="#home-introduction"></a></li>
			<li><a class="jump side" href="#home-about" ></a></li>
			<li><a class="jump side" href="#home-spaces" ></a></li>		
			<li><a class="jump side" href="#home-interfaces"></a></li>
			<li><a class="jump side" href="#home-furniture"></a></li>		
			<li><a class="jump side" href="#home-fabrication"></a></li>
			<li><a class="jump side" href="#home-info"></a></li>	
			<li><a class="jump side" href="#home-news"></a></li>				
			<li><a class="jump side" href="#invitation"></a></li
		</ul>
		
	</div>	
		
	<div id="content" class="">
