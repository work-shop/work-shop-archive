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
				   
	<meta name="description" content="<?php bloginfo('description'); ?> Work-Shop RI, providence, design-build, architecture, graphic design, furniture, CNC router, laser cutter, digital fabrication, greg nemes, nic schumann">
	<meta name="google-site-verification" content="jbAZkmt3BtjIquwdQSOuJK3ZJ0qxTnXo8-XHXC6U3OY" />
	<meta name="author" content="Greg Nemes">
		
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
	<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/_/img/favicon.ico">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />	

	<meta property="og:url" content="http://work-shop.ws" />	
	<!-- <meta property="og:image" content="<?php bloginfo('template_directory'); ?>/_/img/logo-cm-small.png"/>	 -->	
			
    <!--[if lt IE 9]>
      <script src="<?php bloginfo('template_directory'); ?>/_/js/html5shiv.js"></script>
      <script src="<?php bloginfo('template_directory'); ?>/_/js/respond.js"></script>
    <![endif]-->	
  		
	<script type="text/javascript">
		WebFontConfig = { fontdeck: { id: '37770' } };
		
		(function() {
		  var wf = document.createElement('script');
		  wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
		  '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
		  wf.type = 'text/javascript';
		  wf.async = 'true';
		  var s = document.getElementsByTagName('script')[0];
		  s.parentNode.insertBefore(wf, s);
		})();
	</script>			
		
	<?php wp_head(); ?>
		
</head>


<body <?php body_class(); ?>>

	<div id="top"></div>
	
	<header id="logo" class="before col-logo loading">
		<h1><a class="jump" href="#work"> Work </a>- <a class="jump" href="#shop">Shop
		</a></h1>
	</header>
	
	
	<div id="content" class="">

		
		