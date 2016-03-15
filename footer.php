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



	<section id="sponsorer" class="container">
		<div class="twelve columns">
			<h5>Samarbetspartners</h5>
		</div> <!-- .twelve -->
		<div class="sponsors">
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
					<div class="sponsor">
              <a href="<?php the_field('link'); ?>" target="_blank">
                <img src="<?php the_field('logotype'); ?>" alt="<?php the_title(); ?>">
          		</a>
					</div>
          <?php
        }
      }
      else {
        echo 'Inga sponsorer';
      }
    ?>
		</div> <!-- .sponsors -->
	</section>


	<footer id="colophon" class="site-footer" role="contentinfo">
	<div class="container">
			<div class="six columns site-info">
				<div class="logo"><img id="footer-logo" src="<?php echo get_template_directory_uri(); ?>/img/ex16-logo.jpg" alt="<?php bloginfo('name')?>"></div>
				<p><strong>Examensdagarna för GDK</strong><br>
					12-14 maj i Kåkenhus, Campus Norrköping</p>
			</div> <!-- .site-info -->
			<div class="six columns social-media">
				<a href="mailto:info@ex16.se"><i class="fa fa-envelope fa-fw"></i></a>
				<a href="länk till facebook här då" target="_blank"><i class="fa fa-facebook fa-fw"></i></a>
				<a href="länk till twitter här då" target="_blank"><i class="fa fa-twitter fa-fw"></i></a>
				<a href="länk till instagram här då" target="_blank"><i class="fa fa-instagram fa-fw"></i></a>
				<a href="länk till instagram här då" target="_blank"><i class="fa fa-linkedin fa-fw"></i></a>
			</div> <!-- .site-info -->
	</div> <!-- .container -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
