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
<div class="container">
  <div class="three columns">
    <h1>Katalog</h1>
    <p>Kika i katalogen för EX16 i digital form här lol</p>
  </div>
  <div class="nine columns">
    <div data-configid="14667575/33814781" style="width:800px; height:715px;" class="issuuembed"></div><script type="text/javascript" src="//e.issuu.com/embed.js" async="true"></script>
  </div>

<?php
get_footer();
?>
