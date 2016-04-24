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
      $i = 1;
      while( $forelasare->have_posts() ) {
        $forelasare->the_post();
        if($i == 1) {$graduateColor = "blue";}
        if($i == 2) {$graduateColor = "turquoise";}
        if($i == 3) {$graduateColor = "green";}
        if($i == 4) {$graduateColor = "orange"; $i = 0;}
        $i++;
        ?>
        <div class="container lecturer-container" id="<?php echo $post->post_name;?>">
          <?php if($i == 2 OR $i == 4) { ?>
          <div class="five columns offset-by-one">
            <img src="<?php the_field('image'); ?>" alt="<?php the_title(); ?>">
          </div>
          <div class="five columns">
            <h2 class="<?php echo $graduateColor;?>-text"><?php the_title(); ?></h2>
            <h5><?php the_field('time'); ?> i <?php the_field('place'); ?></h5>
            <p><?php the_content(); ?></p>
          </div>
          <?php } else {?>
            <div class="five columns offset-by-one">
              <h2 class="<?php echo $graduateColor;?>-text"><?php the_title(); ?></h2>
              <h5><?php the_field('time'); ?> i <?php the_field('place'); ?></h5>
              <p><?php the_content(); ?></p>

            </div>
            <div class="five columns">
              <img src="<?php the_field('image'); ?>" alt="<?php the_title(); ?>">
            </div>
          <?php } ?>
        </div>
        <?php
      }
    }
    else { ?>
      <div class="container">
        <div class="twelve columns aligncenter">
          <p>Föreläsare presenteras inom kort</p>
        </div>
      </div>
    <?php }
  ?>

<?php
get_footer();
?>
