<?php
/**
 * Template Name: Katalog
 *
 * @package ex16
 */

get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

  <?php get_template_part( 'content', 'page' ); ?>

<?php endwhile; // end of the loop. ?>
<img class="splash" id="splash-catalogue" src="<?php echo get_template_directory_uri(); ?>/img/splash-06.svg" alt="splash">
<div class="container">
  <div class="twelve columns aligncenter">
    <h1 class="green-text">Katalog</h1>
    <p>En text om hur lite Tryckbar är med i katalogen här</p>
  </div>

  <div class="twelve columns aligncenter">
    <div data-configid="14667575/33814781" style="width:100%; height:715px;" class="issuuembed"></div><script type="text/javascript" src="//e.issuu.com/embed.js" async="true"></script>
  </div>

<?php
get_footer();
?>
