<?php
/*
 * The main template file.
*/

get_header(); ?>

  <div class="container">  
  			
	<?php if (have_posts()) : ?>	 			
  	<?php $home = new WP_Query('tag=home&order=ASC'); ?>
	<?php while ($home->have_posts()) : $home->the_post(); ?>
			
  	<div class="col-md-12" >
 	 	<?php the_content(); ?>
<h1>info@meatyworks.com</h1>
 	</div> 

  	 <?php endwhile; ?>
	 <?php endif; ?>


  </div>

  	<!--<hr/>-->

<?php get_footer(); ?>
