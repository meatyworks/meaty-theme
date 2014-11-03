<?php 
/**
* Template Name: About 
**/
?> 	
 	
<<<<<<< HEAD
 	<div class="col-md-12 content about-meaty">
 	<h2 id="about-meaty">ABOUT</h2>
	<p>Meaty Works is a boutique digital studio based out of Roncesvalles, Toronto, striving to partner with local businesses, artists, organizations, and individuals who excite and inspire us.  Our aim is to offer our clients unique, personalized, and affordable web-based digital solutions to promote and support their brand, products, and/or projects.</p>
	<p>As a studio, we are also passionate about collaborating with artists, photographers, videographers, designers, and other creatives to produce high-quality web content and functionality.</p>

	<h2><a href="#team-meaty" class="team" >TEAM +</a></h2>
 	</div>
=======
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
>>>>>>> 992503dd861d6157e52bcad0aee51a9f685b6eea
