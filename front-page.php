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
  <div class="container">
    <div class="seven columns">
      <iframe src="https://player.vimeo.com/video/152694696?color=64a508" width="738" height="415" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
    </div>
    <div class="five columns">
      <h2><?php bloginfo( 'name' ); ?></h2>
      <p> Info om Ex16 Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
  </div>
</section>

<section class="schema" id="about">
  <div class="container">
    <div class="seven columns">
    <input id="tab1" type="radio" name="tabs" checked>
    <label for="tab1">Torsdag</label>

    <input id="tab2" type="radio" name="tabs">
    <label for="tab2">Fredag</label>

    <input id="tab3" type="radio" name="tabs">
    <label for="tab3">Lördag</label>

    <div class="tab-content" id="content1">
      <p>
        HÄR KOMMER KUL SAKER HÄNDA! 1
      </p>
    </div>

    <div class="tab-content" id="content2">
      <p>
        HÄR KOMMER KUL SAKER HÄNDA! 2
      </p>
    </div>

    <div class="tab-content" id="content3">
      <p>
        HÄR KOMMER KUL SAKER HÄNDA! 3
      </p>
    </div>
  </div>
  <div class="five columns fast-schema">
    HÄR KOMMER JÄTTESTORA SAKER HÄNDA!
  </div>

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
  <div class="container">
    <div class="seven columns">
      <iframe src="https://player.vimeo.com/video/152694696?color=64a508" width="738" height="415" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
    </div>
    <div class="five columns">
      <h2>FÖRETAGSKVÄLL</h2>
      <p>Info om företagskvällen Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      <a href="mailto:foretagskvall@ex16.se">
        <div class="button">
          <p>Vill du vara med på företagskvällen?</p>
        </div>
      </a>
    </div>
</section>


<?php get_footer(); ?>
