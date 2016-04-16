<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package ex16
 */

get_header(); ?>
		<?php while ( have_posts() ) : the_post(); ?>
		<?php
			// Get primary image
			$attachment_id = get_field('primar_bild');
			$full_primary_img = "full"; // (thumbnail, medium, large, full or custom size)
			$primary_img = wp_get_attachment_image_src( $attachment_id, $full_primary_img );


?>


<?php the_post_navigation(); ?>

			<div class="container">
				<article id="utstallning post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header class="entry-header ten columns offset-by-one">
						<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

						<div class="entry-meta">
							<?php // ex16_posted_on(); ?>
						</div><!-- .entry-meta -->
					</header><!-- .entry-header -->

					<div class="entry-content row">
						<?php // the_content(); ?>
						<div class="ten columns offset-by-one">
						<p><?php the_field('beskrivning'); ?></p>
						</div> <!-- .columns -->
						<div class="ten columns offset-by-one">
						<img src="<?php echo $primary_img[0]; ?>">
						</div> <!-- .columns -->
					</div><!-- .entry-content .row -->

					<footer class="entry-footer">
						<?php // ex16_entry_footer(); ?>
					</footer><!-- .entry-footer -->
				</article><!-- #post-## -->
			</div> <!-- .container -->

		<?php endwhile; // End of the loop. ?>
<?php get_footer(); ?>
