<?php
/**
 * Template Name: Examensklassen
 *
 * @package ex16
 */

get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

  <?php get_template_part( 'content', 'page' ); ?>

<?php endwhile; // end of the loop. ?>

<?php
// Custom post type "Examensklassen" list

      $args = array(
        'post_type' => 'examensklassen'
      );
      $examensklassen = new WP_Query( $args );
      if( $examensklassen->have_posts() ) {
        while( $examensklassen->have_posts() ) {
          $examensklassen->the_post();
          ?>

            <h3><?php the_title() ?></h3>
            loooooop


        <?php
      }
    }
    else {
      echo 'Det finns inga elever från examensklassen att visa!';
    }
  ?>

<?php
get_footer();
 ?>
