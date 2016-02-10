<?php
/*
Template for displaying all single posts with the CTP "Examensklassen"

@package EX16
*/

 //get_header();?>
<?php while ( have_posts() ) : the_posts(); ?>
  <h1><?php the_title(); ?></h1>
  
