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
  OM
</section>

<section id="about">
  SCHEMA
</section>

<section id="about">
  FÖRELÄSARE
  <?php
  // Custom post type "Föreläsare" list

        $args = array(
          'post_type' => 'forelasare'
        );
        $lecturers = new WP_Query( $args );
        if( $lecturers->have_posts() ) {
          while( $lecturers->have_posts() ) {
            $lecturers->the_post();
            ?>

        <div class="forelasare-list">
          <a href="länkhär#<?php the_title(); ?>">
              <img src="<?php the_field('image'); ?>" alt="<?php the_title(); ?> Föreläsare på EX16">
                <div class="forelasare-list-details">
                  <h3><?php the_title() ?></h3>
                  <p><?php the_field('time', 'place'); ?></p
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
</section>

<section id="about">
  FÖRETAGSKVÄLL
</section>


<?php get_footer(); ?>
