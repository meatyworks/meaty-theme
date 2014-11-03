<?php 
/**
* Template Name: About 
**/
?> 	
 	
<div class="col-md-12 content about-meaty">
	 	
<?php $home = new WP_Query('tag=about&order=ASC'); ?>
<?php while ($home->have_posts()) : $home->the_post(); ?> 	

	<h2 id="about-meaty">
 	<?php the_title(); ?>
 	</h2>
	<?php the_content(); ?>
	
<?php endwhile; ?>  

<h2><a href="#team-meaty" class="team" >TEAM +</a></h2>
 	
</div>