

<a href="<?php the_field('news_link'); ?>" target="_blank">

	<?php the_post_thumbnail(get_field('cell_size')); ?>			
					   
	<div class="background">
	
		<div class="information">
		
			<div class="taxonomy">				
				<span><?php $the_date = get_the_date("M j, Y"); echo $the_date; ?></span>	
			</div>
			
			<div class="title news-title">
			
				<h2><?php the_field('home_page_text'); ?></h2>
			
			</div>
		
		</div>
	
	</div>
	
</a>	

