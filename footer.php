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

	<h2>Sponsorer</h2>

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

				<?php $big = get_field('highlight'); ?>
					<?php if (in_array('yes', $big)) { ?>
						<div class="container">
							<div class="big-sponsors six columns">
								<a href="<?php the_field('link'); ?>">
									<img src="<?php the_field( 'logotype' ); ?>">
								</a>
							</div>
						</div>
					<?php } else { ?>
						<div class="container">
							<div class="small-sponsors four columns">
								<a href="<?php the_field('link'); ?>">
									<img src="<?php the_field( 'logotype' ); ?>">
								</a>
							</div>
						</div>
					<?php } ?>

					<?php
				}
			}
			else {
				echo 'Inga sponsorer?';
			}
		?>
	</div>

	<footer id="colophon" class="site-footer" role="contentinfo">
	<div class="container">
			<div class="six columns site-info">
				<div class="logo"><img id="footer-logo" src="<?php echo get_template_directory_uri(); ?>/img/ex16-logo.jpg" alt="<?php bloginfo('name')?>"></div>
				<p><strong><?php bloginfo( 'name' ); ?></strong><br>
					<?php bloginfo( 'description' ); ?></p>
			</div> <!-- .site-info -->
			<div class="six columns social-media">
				sociala medier wow
				<p></p>
			</div> <!-- .site-info -->
	</div> <!-- .container -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
