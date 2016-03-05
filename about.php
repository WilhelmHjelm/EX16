<?php
/**
 * Template Name: Om EX16
 *
 * @package ex16
 */

get_header(); ?>

<div class="container">
  <div class="twelve columns">
    <header class="entry-header">
  		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
  	</header><!-- .entry-header -->
  </div>
  <div class="twelve columns">
      	<div class="entry-content">
      		<?php the_content(); ?>
      		<?php
      			wp_link_pages( array(
      				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'ex16' ),
      				'after'  => '</div>',
      			) );
      		?>
      	</div><!-- .entry-content -->
  </div>
</div>

<?php
get_footer();
?>
