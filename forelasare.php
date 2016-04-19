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
  <img class="splash" id="splash-lecturers" src="<?php echo get_template_directory_uri(); ?>/img/splash-05.svg" alt="splash">
  <img class="splash" id="splash-lecturers2" src="<?php echo get_template_directory_uri(); ?>/img/splash-01.svg" alt="splash">
  <div class="twelve columns aligncenter headline-lecturers">
    <h1 class="turquoise-text">Föreläsare</h1>
  </div>
<?php
// Custom post type "Föreläsare" list

    $args = array(
      'post_type' => 'forelasare'
    );
    $forelasare = new WP_Query( $args );
    if( $forelasare->have_posts() ) {
      while( $forelasare->have_posts() ) {
        $forelasare->the_post();
        ?>
        <div class="container">
          <div class="six columns" id="<?php the_title(); ?>">
            <img class="lecturer-img" src="<?php the_field('image'); ?>" alt="<?php the_title(); ?>">
          </div>
          <div class="four columns">
            <h3 class="lecturer-titel"><?php the_title(); ?></h3>
            <p><?php the_content(); ?></p>
            <p><i class="fa fa-clock-o"></i><?php the_field('time'); ?><i class="fa fa-map-marker"></i><?php the_field('place'); ?></p>
          </div>
        </div>
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
