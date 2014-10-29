<?php 
/**
* Template Name: Services 
**/
?> 	
 	
<div class="col-md-12  content services-meaty">
<?php $home = new WP_Query('tag=services&order=ASC'); ?>
<?php while ($home->have_posts()) : $home->the_post(); ?> 	

<h3 id="services-meaty"><?php the_title(); ?></h3>

<?php the_content(); ?>

<?php endwhile; ?>  

	<h2><a href="#contact-meaty" class="contact">CONTACT +</a></h2>
 	</div> 	