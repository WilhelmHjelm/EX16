<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ex16
 */

?>

	</main><!-- #content -->



	<section class="container sponsorer">
		<h2>Sponsorer</h2>
		<div class="four-columns">
  <?php
  // Custom post type "sponsorer" list

      $args = array(
        'post_type' => 'sponsorer'
      );
      $sponsorer = new WP_Query( $args );
      if( $sponsorer->have_posts() ) {
        while( $sponsorer->have_posts() ) {
          $sponsorer->the_post();
          ?>
              <a href="<?php the_field('link'); ?>" target="_blank">
                <img class="one-sponsor" src="<?php the_field('logotype'); ?>" alt="<?php the_title(); ?>">
          		</a>

          <?php
        }
      }
      else {
        echo 'Inga sponsorer?';
      }
    ?>
		</div>
</section>


	<footer id="colophon" class="site-footer" role="contentinfo">
	<div class="container">
			<div class="six columns site-info">
				<div class="logo"><img id="footer-logo" src="<?php echo get_template_directory_uri(); ?>/img/ex16-logo.jpg" alt="<?php bloginfo('name')?>"></div>
				<p><strong><?php bloginfo( 'name' ); ?></strong><br>
					<?php bloginfo( 'description' ); ?></p>
			</div> <!-- .site-info -->
			<div class="six columns social-media">
				<a href="länk till facebook här då" target="_blank"><i id="facebook" class="fa fa-facebook"></i></a>
				<a href="länk till twitter här då" target="_blank"><i class="fa fa-twitter"></i></a>
				<a href="länk till instagram här då" target="_blank"><i class="fa fa-instagram"></i></a>
				<a href="länk till instagram här då" target="_blank"><i class="fa fa-linkedin"></i></a>
			</div> <!-- .site-info -->
	</div> <!-- .container -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
