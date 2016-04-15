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
			<button class="filter" data-filter="all">Show All</button>
			<button class="filter" data-filter=".category-3d">3d</button>
			<button class="filter" data-filter=".category-foto">foto</button>
		</div>

<div id="utstallning-grid">
		<?php if ( have_posts() ) : ?>
			<?php /* Start the Loop */ ?>
			<?php $i = 0; ?>
			<?php while ( have_posts() ) : the_post(); ?>
			<?php $i++; ?>

				<div class="grid-item mix<?php
						$term_list = wp_get_post_terms($post->ID, 'utstallning_category', array("fields" => "all"));
						if($term_list) {
							foreach($term_list as $term_single) {
								echo ' category-'.$term_single->slug; //do something here
							}
						}
				?>" data-myorder="<?php echo $i; ?>">
					<a href="<?php echo the_permalink(); ?>"><?php echo the_title(); ?></a>
				</div>
			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>
	</div> <!-- #utstallning-grid -->

</div><!-- #utstallning .container -->
<?php get_footer(); ?>

<script>
$(function(){
	// Instantiate MixItUp:
	$('#utstallning-grid').mixItUp();

});
</script>
