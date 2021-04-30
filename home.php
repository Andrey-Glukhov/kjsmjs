<?php
/**
*Template Name: Home Page
*/
get_header(); ?>

<div class="home-container">
HOME PAGE
<?php if (have_posts() ) : while ( have_posts() ) : the_post(); 
	the_content();
endwhile;
endif; ?>
</div>


<?php get_footer(); ?>