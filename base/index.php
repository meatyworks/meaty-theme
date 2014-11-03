<?php
/*
 * The main template file.
*/

get_header(); ?>

  <div class="container">  
  						
  	<div class="col-md-12" id="steak">
	<a href="#about-meaty"><img class="steak" src="<?php echo get_template_directory_uri(); ?>/img/meatyfinal.svg" alt="Meaty Works Digital Studio"></a>
 	</div> 

<!--ABOUT-->
	<?php get_template_part( 'page', 'about' ); ?>

<!--TEAM-->
	<?php get_template_part( 'page', 'team' ); ?>
 	
<!--SERVICES-->
	<?php get_template_part( 'page', 'services' ); ?>

<!--CONTACT US-->
	<?php get_template_part( 'page', 'contact' ); ?>
        
<!--UP ARROW-->
        <div class="col-md-12 back" id="back-to-top">
        <h1><a href="#steak" id="top">
        <span class="glyphicon glyphicon-arrow-up"></span>
        </h1>
        </div>	

	<?php if (have_posts()) : ?>	 			
  	<?php $home = new WP_Query('tag=home&order=ASC'); ?>
	<?php while ($home->have_posts()) : $home->the_post(); ?>

  	<div class="col-md-12">

	<?php the_content(); ?>  	 

	</div>
	
	<?php endwhile; ?>
	 <?php endif; ?>
</div>
  	<!--<hr/>-->

<?php get_footer(); ?>
