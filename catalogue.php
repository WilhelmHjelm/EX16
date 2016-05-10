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
    <p>Här kan du läsa och kika i katalogen för examensklassen digitalt. Katalogen går att få tag på under mässdagarna och är gratis för alla som besöker EX16.</p>
  </div>

  <div class="twelve columns aligncenter">

    <div><object style="width:100%;height:715px" ><param name="movie" value="http://static.issuu.com/webembed/viewers/style1/v2/IssuuReader.swf?mode=mini&embedBackground=%23002b4a&printButtonEnabled=false&backgroundColor=%23222222&documentId=160510090206-40bf0d756abb6cb01fcf3167beac84e5&embedId=24286588/35508264"><param name="allowfullscreen" value="true"><param name="menu" value="false"><param name="wmode" value="transparent"><embed src="http://static.issuu.com/webembed/viewers/style1/v2/IssuuReader.swf" type="application/x-shockwave-flash" allowfullscreen="true" menu="false" wmode="transparent" style="width:100%;height:715px" flashvars="mode=mini&embedBackground=%23002b4a&printButtonEnabled=false&backgroundColor=%23222222&documentId=121129150428-43664603f1a1468db1e62f907619fe83"></object></div>

  </div>

<?php
get_footer();
?>
