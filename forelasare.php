<?php
/**
 * Template Name: Föreläsare
 *
 * @package ex16
 */

get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

  <?php get_template_part( 'content', 'page' ); ?>

<?php endwhile; // end of the loop. ?>

<?php
// Custom post type "Föreläsare" list

      $args = array(
        'post_type' => 'Lecturers'
      );
      $lecturers = new WP_Query( $args );
      if( $lecturers->have_posts() ) {
        while( $lecturers->have_posts() ) {
          $lecturers->the_post();
          ?>

        <a href="#<?php the_title(); ?>">
          <div class="one-forelasare">
            <img src="<?php the_field('image'); ?>" alt="<?php the_title(); ?> Föreläsare på EX16">
              <div class="forelasare-details">
                <h3><?php the_title() ?></h3>
                <p><?php the_post('text'); ?></p>
                <p><?php the_post('time', 'place'); ?></p>
              </div>
          </div>
        </a>


        <?php
      }
    }
    else {
      echo 'Inga föreläsare?';
    }
  ?>

<?php
get_footer();
 ?>
