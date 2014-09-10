<?php
$projects_limit = -1;
$teaching_limit = 4;
$blog_limit = 0;
$info_limit  = -1;
$pages_limit = -1;
$news_limit = 6;

$content_size = 5;

$query_projects = new WP_Query( array( 'post_type' => 'projects', 'post_status' => 'publish', 'posts_per_page' => $projects_limit ) ); 	
$query_teaching = new WP_Query( array( 'post_type' => 'teaching', 'post_status' => 'publish','posts_per_page' => $teaching_limit ) ); 				
$query_blog = new WP_Query( array( 'post_type' => 'post','post_status' => 'publish', 'posts_per_page' => $blog_limit) ); 
$query_info = new WP_Query(  array('post_type' => 'info','post_status' => 'publish', 'posts_per_page' => $info_limit) ); 
$query_pages = new WP_Query(  array('post_type' => 'page','post_status' => 'publish', 'posts_per_page' => $pages_limit )  ); 	
$query_news = new WP_Query(  array('post_type' => 'news','post_status' => 'publish', 'posts_per_page' => $news_limit  )  ); 

$classes_min=0; $classes_max=5; //leaving out social for now

$counts = array(
						"current_class" => 0,
						"projects_length" => count($query_projects->posts),
						"blog_length" => count($query_blog->posts),
						"teaching_length" => count($query_teaching->posts),						
						"info_length" => count($query_info->posts),
						"pages_length" => count($query_pages->posts),
						"news_length" => count($query_news->posts),		
						"total_posts" => 0,
						"projects_count" => 0,
						"blog_count" => 0,
						"teaching_count" => 0,						
						"info_count" => 0,
						"pages_count" => 0,
						"news_count" => 0,									
						"size_count" => 0
);

$counts["total_posts"] = $counts["projects_length"]+$counts["blog_length"]+$counts["teaching_length"]+$counts["info_length"]+$counts["pages_length"]+$counts["news_length"];
							 							 
//begin looping
while ( ($counts["projects_count"]+$counts["blog_count"]+$counts["teaching_count"]+
         $counts["info_count"]+$counts["pages_count"]+$counts["news_count"])<
         $counts["total_posts"] )
		:
		
		
		for($i = 0; $i <= $content_size; $i++){

		switch( $i ) {
		
		
			//projects		
			case 0:
			
			if ( $counts["projects_count"]>=$counts["projects_length"] ) { 
					// reroll and break
					$counts["current_class"] = rand( $classes_min,$classes_max ); 
					break; 
					
				} else {

					$post = $query_projects->next_post();
					
					$custom_terms = get_the_terms($post->ID, 'project_categories');
					
					$custom_classes = '';
					
					foreach ($custom_terms as $custom_term) {
						$custom_classes .=  $custom_term->slug . ' ';
						}
					

				
					?>
					
					<div class="cell project media <?php the_field('cell_size'); ?> <?php echo $custom_classes; ?>">
						
						<?php get_template_parts( array( 'interior-project') );?>
							
					</div>	
					
					<!-- <div class="cell one empty"></div> -->

				<?php

					// reroll and increment counters 
					$counts["current_class"] = rand( $classes_min,$classes_max );
					$counts["size_count"]++; $counts["projects_count"]++;
					break;
				
				}	

			//blog	
			case 1:

			if ( $counts["blog_count"]>=$counts["blog_length"] ) { 
					// reroll and break
					$counts["current_class"] = rand( $classes_min,$classes_max ); 
					break; 
					
				} else {
				
				$post = $query_blog->next_post();

				?>
				
				<!--
					<div class="cell post media <?php the_field('cell_size'); ?>">
						
						<?php get_template_parts( array( 'interior-blog') );?>
								
					</div>	
-->

				<?php
				
					// reroll and increment counters 
					$counts["current_class"] = rand( $classes_min,$classes_max );
					$counts["size_count"]++; $counts["blog_count"]++;							
					break;
					
					}
					
			//teaching	
			case 5:

			if ( $counts["teaching_count"]>=$counts["teaching_length"] ) { 
					// reroll and break
					$counts["current_class"] = rand( $classes_min,$classes_max ); 
					break; 
					
				} else {
				
				$post = $query_teaching->next_post();

				?>
				
					<div class="cell teaching media <?php the_field('cell_size'); ?>">
						
						<?php get_template_parts( array( 'interior-project') );?>
								
					</div>	

				<?php
				
					// reroll and increment counters 
					$counts["current_class"] = rand( $classes_min,$classes_max );
					$counts["size_count"]++; $counts["teaching_count"]++;							
					break;
					
					}					
			
			//info		
			case 2:

			if ( $counts["info_count"]>=$counts["info_length"] ) { 
					// reroll and break
					$counts["current_class"] = rand( $classes_min,$classes_max ); 
					break; 
					
				} else {

				$post = $query_info->next_post();

				?>
				
					<div class="cell info one text">

						<?php get_template_parts( array( 'interior-info') );?>						
												
					</div>	

				<?php

					// reroll and increment counters 
					$counts["current_class"] = rand( $classes_min,$classes_max );
					$counts["size_count"]++; $counts["info_count"]++;
					break;
					
					}
			
			//pages		
			case 4:
			
		if ( $counts["pages_count"]>=$counts["pages_length"] ) { 
					// reroll and break
					$counts["current_class"] = rand( $classes_min,$classes_max ); 
					break; 
					
				} else {
				
				$post = $query_pages->next_post();					
			
				?>
				
					<div class="cell pages half text">
						
						<?php get_template_parts( array( 'interior-pages') );?>
					
					</div>	

				<?php

					
					// reroll and increment counters 
					$counts["current_class"] = rand( $classes_min,$classes_max );
					$counts["size_count"]++; $counts["pages_count"]++;
					break;	
					
					}
			
			//news	
			case 3:
			
		if ( $counts["news_count"]>=$counts["news_length"] ) { 
					// reroll and break
					$counts["current_class"] = rand( $classes_min,$classes_max ); 
					break; 
					
				} else {	

				$post = $query_news->next_post();									

					?>
				
					<div class="cell news half text">
						
						<?php get_template_parts( array( 'interior-news') );?>
						
					
					</div>	

				<?php
					
					// reroll and increment counters 
					$counts["current_class"] = rand( $classes_min,$classes_max );
					$counts["size_count"]++; $counts["news_count"]++;
					break;	
					
					}

					default:
					
					echo 'an error occured in the algorithm. :/';
						
		} // endswitch;
		
	} // endfor;
endwhile;
?>