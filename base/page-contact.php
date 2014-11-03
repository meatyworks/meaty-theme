<?php 
/**
* Template Name: Contact 
**/
?> 	
 	
        <div class="col-md-12 content contact-meaty">
<<<<<<< HEAD

        <h3 id="contact-meaty">Drop us a line!</h3>
        <p>We'd love to discuss your meatiest ideas</p>
        <p><a href="mailto:info@meatyworks.com?Subject=Meaty%20Inquiries">info@meatyworks.com</a></p>
=======
 	<?php $home = new WP_Query('tag=contact&order=ASC'); ?>
 	<?php while ($home->have_posts()) : $home->the_post(); ?> 	

        <h3 id="contact-meaty"><?php the_title(); ?></h3>

        <?php the_content(); ?>
        
        	<?php endwhile; ?>  
>>>>>>> 992503dd861d6157e52bcad0aee51a9f685b6eea
        </div>