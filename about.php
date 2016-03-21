<?php
/**
 * Template Name: Om EX16
 *
 * @package ex16
 */

get_header(); ?>

<img class="splash" id="splash-about" src="<?php echo get_template_directory_uri(); ?>/img/splash-02.svg" alt="splash">
<div class="container">
  <div class="ten columns offset-by-one">
    <header class="entry-header">
  		<?php the_title( '<h1 class="entry-title orange-text">', '</h1>' ); ?>
      <h5>Examensdagarna för Grafisk design och kommunikation, 12-14 maj i Kåkenhus på Campus Norrköping</h5><br><br>
  	</header><!-- .entry-header -->
  </div>
  <?php while ( have_posts() ) : the_post(); ?>
    <div class="row">
      <div class="ten columns offset-by-one">
        	<div class="entry-content about-text">
        		<?php the_content(); ?>
        	</div><!-- .entry-content -->
        </div> <!-- .ten .columns -->
      </div> <!-- .row -->
    <div class="row">
    <div class="ten columns offset-by-one map section-padding">
      <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
        <div style="overflow:hidden;height:300px;width:100%;">
          <div id="gmap_canvas" style="height:300px;width:100%;">
            <a class="google-map-code" href="http://www.map-embed.com" id="get-map-data"></a>
            <style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
            <a class="google-map-code" href="http://www.themecircle.net" id="get-map-data">wordpress themes</a>
          </div>
        </div>
          <script type="text/javascript"> function init_map(){var myOptions = {zoom:15,scrollwheel:false,center:new google.maps.LatLng(58.58997548356858,16.177714915667707),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(58.58997548356858, 16.177714915667707)});infowindow = new google.maps.InfoWindow({content:"<b>EX16</b><br/>F&auml;rgeriet<br/> K&aring;kenhus" });google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map); </script>
    </div> <!-- .ten .columns -->
  </div> <!-- .row -->
  <?php endwhile; // End of the loop. ?>
</div> <!-- .container -->

<div class="container">
  <div class="ten columns offset-by-one">

    <?php
        $args = array(
            'type'      => 'projektgruppen',
            'taxonomy'  => 'category',
            'orderby'   => 'ID',
            'order'     => 'ASC',
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
 </div> <!-- .columns -->
</div> <!-- .container -->

<?php
get_footer();
?>
