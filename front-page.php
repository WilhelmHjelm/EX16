<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package ex16
 */

get_header(); ?>

<section id="about">
  <div class="row">
    <div class="two columns">
      OM EX16
    </div>
  </div>
</section>

<section id="about">
  SCHEMA
</section>

<section id="about">
  <h2>FÖRELÄSARE</h2>
  <div class="container">
  <?php
  // Custom post type "forelasare" list

      $args = array(
        'post_type' => 'forelasare'
      );
      $lecturers = new WP_Query( $args );
      if( $lecturers->have_posts() ) {
        while( $lecturers->have_posts() ) {
          $lecturers->the_post();
          ?>
          <div class="grid-forelasare">
            <figure class="hover-lecturer">
        <a href="<?php the_permalink(); ?>">
          <?php the_post_thumbnail(); ?>
          <figcaption>
            <h3><?php the_title(); ?></h3>
            <p><i class="fa fa-clock-o"></i><?php the_field('time'); ?><i class="fa fa-map-marker"></i><?php the_field('place'); ?></p>
          </figcaption>
        </figrure>
        </a>
            </div>

          <?php
        }
      }
      else {
        echo 'Inga föreläsare? Kontakta Andy.';
      }
    ?>
</div>
</section>

<section id="about">
  FÖRETAGSKVÄLL
</section>


<?php get_footer(); ?>
