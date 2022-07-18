<?php get_header(); ?> 
<h1>Wordpress au collège de Maisonneuve</h1>
<?php
if (have_posts()):
    while(have_posts()) : the_post(); ?>
        <h2><?php the_title(); ?></h2>
    <?php endwhile; ?>
<?php endif; ?>    
<?php get_footer(); ?>