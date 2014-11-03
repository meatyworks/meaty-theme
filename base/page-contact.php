<?php 
/**
* Template Name: Contact 
**/
?> 	
 	
        <div class="col-md-12 content contact-meaty">
 	<?php $home = new WP_Query('tag=contact&order=ASC'); ?>
 	<?php while ($home->have_posts()) : $home->the_post(); ?> 	

        <h3 id="contact-meaty"><?php the_title(); ?></h3>

        <?php the_content(); ?>
        
        	<?php endwhile; ?>  
        </div>