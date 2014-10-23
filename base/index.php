<?php
/*
 * The main template file.
*/

get_header(); ?>

  <div class="container">  
  						
  	<div class="col-md-12">
	<a href="#about-meaty"><img class="steak" src="<?php echo get_template_directory_uri(); ?>/img/meatyfinal.svg" alt="Meaty Works Digital Studio"></a>
 	</div> 
 	
 	<div class="col-md-12 about-meaty">
 	<h2 id="about-meaty">ABOUT</h2>
	<p>Meaty Works is a boutique digital studio based out of Roncesvalles Village, Toronto, striving to partner with local businesses, artists, organizations, and individuals who excite and inspire us.  Our aim is to offer our clients unique, personalized, and affordable web-based digital solutions to promote and support their brand, products, and/or projects.</p>
	<p>As an agency/studio, we are also passionate about collaborating with artists, photographers, videographers, designers, and other creatives to produce high-quality web content for our clients.</p>

	<h2><a href="#team-meaty" class="team" >TEAM +</a></h2>
 	</div>
 	
 	<div class="col-md-12 team-meaty">
 	
 	<h2 id="team-meaty">Three meaties walk into a studio…</h2>

	<h3>Eleni</h3>
	<p><em>Project Manager</em></p>
	<p>This Roncesvalle-based meaty spends her time...</p>

	<h3>Mel</h3>
	<p><em>Developer/Creative Lead</em></p>
	<p>Originally hailing from Chicago, our front-end meaty...</p>

	<h3>Sokratis</h3>
	<p><em>Back-End Developer</em></p>
	<p>As our resident meaty back-end philosopher, Sokratis enjoys...</p>
	<h2><a href="#services-meaty" class="services" >Services +</a></h2>
 	</div> 	

	<div class="col-md-12 services-meaty">
 	
 	<h2 id="services-meaty">Meaty Works is a full-service web studio offering:</h2>

	<ul>
	<li>+ Website design and development</li>
	<li>+ Templated design (e.g. wordpress, tumblr, etc.)</li>
	<li>+ Customized design</li>
	<li>+ Back-End development and maintenance (e.g. databases)</li>
	<li>+ Web services and application development</li>
	<li>+ Content Management System (CMS) Services</li>
	<li>+ Branding</li>
	<li>+ Web services (data-driven)</li>
	<li>+ Website Optimization</li>
	<li>+ Responsive Design</li>
	<li>+ Accessible Design</li>
	<li>+ Search Engine Optimization (SEO)</li>
	<li>+ Website Analytics</li>
	<li>+ eCommerce Solutions</li>
	<li>+ Social-Media Services<li>
	<li>+ HTML Coded Content (e.g. emails, newsletters, etc.)</li>
	<li>+ Mobile application development</li>
	</ul>
	
	<p>Meaty Works provides web-based solution compliant with W3C coding standards for Open Web Platforms as well as Ontario’s Integrated Accessibility Standards Regulation (O.Reg. 191/11) and ISO/IEC 40500:2012.</p> 
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
