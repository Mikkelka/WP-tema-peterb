<?php get_header(); ?>

<!--simpel loop for post-->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<h2> <?php the_title() ;?></h2>	
    <?php the_content(); ?>
    <?php the_time(); ?>

<?php endwhile; else: ?>

	<p>Sorry, this page does not exist</p>

<?php endif; ?>
<!--Loop end-->

<?php get_footer(); ?>