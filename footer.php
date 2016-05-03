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


	<?php
	if ( !is_post_type_archive('utstallning') && !is_singular('utstallning')) : ?>
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

			<div class="sponsor">
				<a href="mailto:spons@ex16.se" class="mailspons">
					Ta chansen att synas på GDK:s examensdagar!
					Hör av dig till Amanda på spons@ex16.se
				</a>
			</div>
		</div> <!-- .sponsors -->
		</div> <!-- .sponsors -->
	</section>
<?php endif; ?>

	<footer id="colophon" class="site-footer">
	<div class="container">
			<div class="six columns site-info">
				<div class="logo"><img id="footer-logo" src="<?php echo get_template_directory_uri(); ?>/img/logotypex16.png" alt="<?php bloginfo('name')?>"></div>
				<p><strong>Examensdagarna för GDK</strong><br>
					12-14 maj i Kåkenhus, Campus Norrköping</p>
			</div> <!-- .site-info -->
			<div class="six columns social-media">
				<a href="mailto:info@ex16.se"><i class="fa fa-envelope fa-fw"></i></a>
				<a href="https://www.facebook.com/gdkex16" target="_blank"><i class="fa fa-facebook fa-fw"></i></a>
				<a href="https://twitter.com/gdkEX16" target="_blank"><i class="fa fa-twitter fa-fw"></i></a>
				<?php
				/* <a href="länk till instagram här då" target="_blank"><i class="fa fa-instagram fa-fw"></i></a>*/
				?>
				<a href="https://www.linkedin.com/company/ex16" target="_blank"><i class="fa fa-linkedin fa-fw"></i></a>
			</div> <!-- .site-info -->
	</div> <!-- .container -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
