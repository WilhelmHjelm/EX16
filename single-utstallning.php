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
<div id="fixed-project-nav">
	<div class="container">
		<div class="six columns">
 		<?php next_post_link('%link', '<i class="fa fa-caret-left"></i> %title'); ?>
 	</div> <!-- .columns -->
		<div class="six columns alignright">
		 <?php previous_post_link('%link', '%title <i class="fa fa-caret-right"></i>'); ?>
	 </div> <!-- .columns -->
		<a href="<?php echo get_home_url(); ?>/utstallning" class="show-all">
			<div class="boxes"><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i></div>
			<span>Visa alla</span>
		</a>
	</div>
</div>

			<div id="utstallning" class="container">
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header class="entry-header ten columns offset-by-one">
						<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

						<div class="entry-meta">
							<?php // ex16_posted_on(); ?>
						</div><!-- .entry-meta -->
					</header><!-- .entry-header -->

					<div class="entry-content row">
						<?php // the_content(); ?>
						<div class="ten columns offset-by-one">
						<?php the_field('beskrivning'); ?>
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

<script>
		$(document).ready(function() {
    var s = $("#fixed-project-nav");
    var pos = s.position();
    $(window).scroll(function() {
        var windowpos = $(window).scrollTop();

        if (windowpos >= pos.top) {
            s.addClass("stick");
        } else {
            s.removeClass("stick");
        }
    });
});
</script>
