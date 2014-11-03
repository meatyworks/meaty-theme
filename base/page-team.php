<?php 
/**
* Template Name: Team 
**/
?> 	
 	
 	<div class="col-md-12  content team-meaty">
 	<?php $home = new WP_Query('tag=team&order=ASC'); ?>
 	<?php while ($home->have_posts()) : $home->the_post(); ?> 	
 	
 	<h3 id="team-meaty"><?php the_title(); ?></h3>
 	
 	<?php the_content(); ?>
 			
	<?php endwhile; ?>  

	<h2><a href="#services-meaty" class="services" >SERVICES +</a></h2>
	
	</div> 	