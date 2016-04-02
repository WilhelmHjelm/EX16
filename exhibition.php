<?php
/**
 * Template Name: Utställning
 *
 * @package ex16
 */

get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

  <?php get_template_part( 'content', 'page' ); ?>

<?php endwhile; // end of the loop. ?>
<div class="container">
  <div class="twelve columns aligncenter">
    <h1 class="turquoise-text">utställning</h1>
  </div>
  <div class="row">
<?php
// Custom post type "Föreläsare" list

    $args = array(
      'post_type' => 'exhibition'
    );
    $alster = new WP_Query( $args );
    if( $alster->have_posts() ) {
      while( $alster->have_posts() ) {
        $alster->the_post();
        ?>
          <div class="six columns">
            <h3 class="lecturer-titel"><?php the_title(); ?></h3>
            <p><?php the_content(); ?></p>
          </div>
        <?php
      }
    }
    else {
      echo '';
    }
  ?>
  </div> <!-- .row -->
</div> <!-- .container -->
<?php
get_footer();
?>
