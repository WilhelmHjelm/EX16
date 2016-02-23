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

	<footer id="colophon" class="site-footer" role="contentinfo">

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
				      while( $sponsors->have_posts() ) {
				        $sponsors->the_post();
				        ?>

		<div class="sponors">
			<a href="<?php the_field( 'link' ) ?>" target="_blank">
				<img src="<?php the_field( 'logotype' ) ?>" alt="<?php the_title() ?>">
			</a>
		</div>

		<?php
}
}
else{
	echo 'Inga sponsorer.';
}
		 ?>

		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'ex16' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'ex16' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'ex16' ), 'ex16', '<a href="http://underscores.me/" rel="designer">Underscores.me</a>' ); ?>
		</div> <!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
