<?php
/**
 * Template Name: Om EX16
 *
 * @package ex16
 */

get_header(); ?>

<div class="container">
  <div class="ten columns offset-by-one">
    <header class="entry-header">
  		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
  	</header><!-- .entry-header -->
  </div>
  <?php while ( have_posts() ) : the_post(); ?>

    <div class="ten columns offset-by-one">
        	<div class="entry-content about-text">
        		<?php the_content(); ?>
        	</div><!-- .entry-content -->
    </div>
  <?php endwhile; // End of the loop. ?>
</div> <!-- .container -->

<div class="container">
  <div class="ten columns offset-by-one">

    <?php
        $args = array(
            'type'      => 'projektgruppen',
            'taxonomy'  => 'category',
            'orderby'   => 'ID',
            'order'     => 'DESC',
         );

      $categories = get_categories( $args );

      foreach($categories as $cat){ ?>
          <div class="twelve columns"><h3><?php echo $cat->name; ?></h3></div>

<?php
      $catslug = $cat->slug;
      $category_query_args = array(
        'post_type' => 'projektgruppen',
        'tax_query' => array(
            array(
                'taxonomy' => 'category',
                'field' => 'slug',
                'terms' => $catslug,
            ),
        ),
      );
      $category_query = new WP_Query( $category_query_args );

      if ( $category_query->have_posts() ) {
        echo '<ul class="og-grid project-groups twelve columns">';
        $i = 1;
        while ($category_query->have_posts()) {
          $category_query->the_post();

          if($i == 1) {$graduateColor = "blue";}
            if($i == 2) {$graduateColor = "turquoise";}
            if($i == 3) {$graduateColor = "green";}
            if($i == 4) {$graduateColor = "orange"; $i = 0;}
            $i++;

          $attachment_id = get_field('bild');
            $thumb = "medium"; // (thumbnail, medium, large, full or custom size)
            $thumb_image = wp_get_attachment_image_src( $attachment_id, $thumb );
            $fullsize = "full"; // (thumbnail, medium, large, full or custom size)
            $full_image = wp_get_attachment_image_src( $attachment_id, $fullsize );

            $hover_attachment_id = get_field('hoverbild');
            $hover_thumb = "medium";
            $hover_thumb_image = wp_get_attachment_image_src( $hover_attachment_id, $hover_thumb );
          ?>

          <li>
            <div class="wrap">
              <img src="<?php echo $thumb_image[0]; ?>" class="static" alt="<?php the_title() ?>">
              <img src="<?php echo $hover_thumb_image[0]; ?>" class="hover" alt="<?php the_title() ?>">
              <div class="graduate-name <?php echo $graduateColor; ?>-bg"><span><?php the_title() ?></span></div>
            </div>
          </li>

        <?php }
        echo '</ul> <!-- .og-grid .twelve -->';
      }

      ?>
 <?php } /* End categories */ ?>

</div> <!-- .container -->

<?php
get_footer();
?>
