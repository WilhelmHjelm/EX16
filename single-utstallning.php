<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package ex16
 */

get_header(); ?>

	<div class="container">

		<?php while ( have_posts() ) : the_post(); ?>
<?php the_post_navigation(); ?>
			<?php get_template_part( 'template-parts/content', 'single' ); ?>


		<?php endwhile; // End of the loop. ?>

	</div><!-- .container -->

<?php get_footer(); ?>
