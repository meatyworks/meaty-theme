<?php
/*
 * The main template file.
*/

get_header(); ?>

  <div class="container">  
  			
	<?php if (have_posts()) : ?>	 			
  	<?php $home = new WP_Query('tag=home&order=ASC'); ?>
	<?php while ($home->have_posts()) : $home->the_post(); ?>
			
  	<div class="col-md-12">
<!--<?php the_content(); ?>-->
	<img class="steak" src="<?php echo get_template_directory_uri(); ?>/img/meatyfinal.svg" alt="Meaty Works Digital Studio">
<!-- 
 	<h1 class="title">Meaty Works</h1>
 -->
 	</div> 

  	 <?php endwhile; ?>
	 <?php endif; ?>


  </div>

  	<!--<hr/>-->

<?php get_footer(); ?>
