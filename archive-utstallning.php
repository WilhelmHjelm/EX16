<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ex16
 */

get_header(); ?>

	<div id="utstallning" class="container">
		<div class="utstallning-filter twelve columns">
			filter
		</div>

		<?php if ( have_posts() ) : ?>
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<div class="grid-item">
					<a href="<?php echo the_permalink(); ?>">
						<?php echo the_title(); ?>
					</a>
				</div>



			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

	</div><!-- #exhibition .container -->

<?php get_footer(); ?>
