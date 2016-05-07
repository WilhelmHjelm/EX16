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
			<button class="filter" data-filter="all">Visa alla</button>
			<?php
			$terms = get_terms( 'utstallning_category' );
			if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){
    foreach ( $terms as $term ) {
        echo '	<button class="filter ' . $term->slug . '" data-filter=".category-' . $term->slug . '">' . $term->name . '</button>';
    	}
		}
		?>
		</div>

<div id="utstallning-grid">
		<?php if ( have_posts() ) : ?>
			<?php /* Start the Loop */ ?>
			<?php $i = 0; ?>
			<?php while ( have_posts() ) : the_post(); ?>
			<?php $i++; ?>
			<?php
			$attachment_id = get_field('primar_bild');
			$thumb = "medium"; // (thumbnail, medium, large, full or custom size)
			$thumb_image = wp_get_attachment_image_src( $attachment_id, $thumb );
			 ?>

				<div class="grid-item mix<?php
						$term_list = wp_get_post_terms($post->ID, 'utstallning_category', array("fields" => "all"));
						if($term_list) {
							foreach($term_list as $term_single) {
								echo ' category-'.$term_single->slug; //do something here
							}
						}
				?>" data-myorder="<?php echo $i; ?>">
					<a href="<?php echo the_permalink(); ?>">
						<img src="<?php echo $thumb_image[0]; ?>" alt="<?php echo the_title(); ?>">
						<div class="project-title">
							<?php if($term_list) {
								foreach($term_list as $term_single) {?>
									<span class="<?php echo $term_single->slug;?>">
										<?php echo $term_single->name; ?>
									</span><?php
								}
							} ?>
							<h6><?php echo the_title(); ?></h6>
						</div>
					</a>
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
