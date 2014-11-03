<?php 
/**
* Template Name: Team 
**/
?> 	
 	
 	<div class="col-md-12  content team-meaty">
<<<<<<< HEAD
 	 	
 	<h3 id="team-meaty">Three meaties walk into a studio?</h3>
 	
	<h4>Eleni</h4>
	<p><em>Project Manager</em></p>
	
	<p>This Roncesvalles-based meaty spends her time...</p>
	
	<h4>Mel</h4>
	<p><em>Developer/Creative Lead</em></p>
	<p>Originally hailing from Chicago, our front-end meaty...</p>
	
	<h4>Sokratis</h4>
	<p><em>Back-End Developer</em></p>
	<p>As our resident meaty back-end philosopher, Sokratis enjoys...</p>
	
	<h2><a href="#services-meaty" class="services" >SERVICES +</a></h2>
=======
 	<?php $home = new WP_Query('tag=team&order=ASC'); ?>
 	<?php while ($home->have_posts()) : $home->the_post(); ?> 	
 	
 	<h3 id="team-meaty"><?php the_title(); ?></h3>
 	
 	<?php the_content(); ?>
 		
	<h2><a href="#services-meaty" class="services" >SERVICES +</a></h2>
	
	<?php endwhile; ?>  

	
>>>>>>> 992503dd861d6157e52bcad0aee51a9f685b6eea
	</div> 	