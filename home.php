<?php
/**
*Template Name: Home Page
*/
get_header(); ?>

<div class="home-container">
<?php if (have_posts() ) : while ( have_posts() ) : the_post();?>
<div class="container">
<?php the_content();?>
</div>

<?php endwhile;
endif; ?>
</div>


<?php get_footer(); ?>