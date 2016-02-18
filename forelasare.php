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
        'post_type' => 'forelasare'
        /*'tax_query' => array(
          array(
            'taxonomy' => 'product_category',
            'field' => 'slug',
            'terms' => 'boardgames'
          )
        )*/
      );
      $forelasare = new WP_Query( $args );
      if( $forelasare->have_posts() ) {
        while( $forelasare->have_posts() ) {
          $forelasare->the_post();
?>

        <div class="forelasare-list">
            <img src="<?php the_field('image'); ?>" alt="<?php the_title(); ?> Föreläsare på EX16">
          <div class="details">
            <h3><?php the_title() ?></h3>
            <p><?php the_post('text'); ?></p>
            <p><?php the_post('tid', 'plats'); ?></p>
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
