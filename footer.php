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
				// Custom post type "sponsor" list

				    $args = array(
				      'post_type' => 'sponsorer'
				      /*'tax_query' => array(
				        array(
				          'taxonomy' => 'product_category',
				          'field' => 'slug',
				          'terms' => 'boardgames'
				        )
				      )*/
				    );
				    $sponsors = new WP_Query( $args );
				    if( $sponsors->have_posts() ) {
							echo '<div class="sponsors">';
				      while( $sponsors->have_posts() ) {
				        $sponsors->the_post();
				        ?>
			<a href="<?php the_field( 'link' ) ?>" target="_blank">
				<img src="<?php the_field( 'logotype' ) ?>" alt="<?php the_title() ?>">
			</a>

		<?php }
		echo '</div>';
}
else{
	echo 'Inga sponsorer.';
}
		 ?>

	<footer id="colophon" class="site-footer" role="contentinfo">
	<div class="container">
			<div class="six columns site-info">
				<div class="logo"><img id="footer-logo" src="img/ex16-logo.jpg" alt="<?php bloginfo('name')?>"></div>
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
