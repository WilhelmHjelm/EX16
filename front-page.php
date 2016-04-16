<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package ex16
 */

get_header(); ?>

<section id="about">
  <div class="container">
    <div class="twelve columns aligncenter">
      <h1 class="blue-text">Examensdagarna för Grafisk design och kommunikation</h1>
      <h2 class="turquoise-text">12-14 maj i Kåkenhus, Campus Norrköping</h2>
      <div><a href="<?php echo get_bloginfo ('url'); ?>/om-ex16/" class="button read-more-home">Läs mer om EX16</a></div>
    </div><!-- .twelve -->
  </div> <!-- .container -->
</section>

<section id="schedule">
  <div id="splash-schedule"></div>
  <div class="container">
  <!--  <div class="ten columns offset-by-one">
      <h2 class="green-text">Schema och föreläsare presenteras inom kort</h2>
    </div> -->
    <div class="row">
    <div class="twelve columns">
      <h2 class="green-text">Schema</h2>
    </div> <!-- .twelve .columns -->
  </div> <!-- .row -->
  <div class="row">
    <div class="three columns thursday">
        <h4 class="turquoise-text">Torsdag</h4>
        <ul class="tab-content">
            <li>09:00<br><strong>Invigning av EX16</strong><br><span>Äger rum i Färgeriet, Kåkenhus.</span></li>
            <li>09:00<br><strong>Utställningen öppnar</strong></li>
            <li>10:15-12:00<br><strong>Föreläsning i K4</strong><br><span>Bo Bergström talar om saker man kan göra med en katt.</span></li>
            <li>18:00<br><strong>Företagskvällen börjar</strong><br><span>Läs mer om vad som händer.</span></li>
            <li>21:00<br><strong>Utställningen och företagskvällen stänger</strong></li>
        </ul>
    </div> <!-- .columns -->
    <div class="three columns friday">
        <h4 class="green-text">Fredag</h4>
        <ul class="tab-content">
            <li>09:00<br><strong>Utställningen öppnar</strong></li>
            <li>12:15-13:00<br><strong>Föreläsning i K4</strong><br><span>Crazy Pictures talar om för dig vad du vill veta.</span></li>
            <li>13:15-15:00<br><strong>Föreläsning i K4</strong><br><span>Lars Winnerbäck kommer och gästspelar.</span></li>
            <li>18:00<br><strong>Utställningen stänger</strong></li>
        </ul>
    </div> <!-- .columns -->
    <div class="three columns saturday">
        <h4 class="orange-text">Lördag</h4>
        <ul class="tab-content" id="content3">
          <li>10:00<br><strong>Utställningen öppnar</strong></li>
          <li>14:00<br><strong>Utställningen stänger</strong></li>
          <li>19:00<br><strong>Examenssittning <a href="https://www.facebook.com/events/592502144240766/" target="_blank"><i class="fa fa-facebook"></i></a></strong><br><span>Hålls på Laxholmen och är examensklassens avslutande sittning.</span></li>
        </ul>
    </div> <!-- .columns -->
    </div> <!-- .row -->
  </div> <!-- .container -->

</section>

<section id="lecturers">
  <div class="container">
    <div class="twelve columns aligncenter">
    <h2 class="turquoise-text">Föreläsare</h2>
    </div> <!-- .columns -->
  </div>
  <div class="container">
  <?php
  // Custom post type "forelasare" list

      $args = array(
        'post_type' => 'forelasare'
      );
      $lecturers = new WP_Query( $args );
      if( $lecturers->have_posts() ) {
        echo '<div class="lecturers-grid">';
        while( $lecturers->have_posts() ) {
          $lecturers->the_post();
          ?>
          <figure class="lecturer">
            <img src="<?php the_field('image'); ?>" alt="<?php the_title();?>">
              <figcaption>
                <div>
                  <h2><?php the_title(); ?></h2>
                  <p><i class="fa fa-clock-o"></i><?php the_field('time'); ?><i class="fa fa-map-marker"></i><?php the_field('place'); ?></p>
                </div>
                <a href="<?php echo get_page_link(45); ?>#<?php the_title(); ?>"></a>
              </figcaption>
            </figure>
          <?php
        }
      }

      else {
        echo 'Det finns inga föreläsare att visa';
      }

    ?>
</div>
</div>
</section>
<section id="company-evening">
          <img class="splash" id="splash-company-evening" src="<?php echo get_template_directory_uri(); ?>/img/splash-03.svg" alt="splash">
  <div class="container">
      <div class="row">
      <div class="twelve columns aligncenter">
      <h2 class="orange-text">EX by night</h2>
    </div> <!-- .columns -->
      </div> <!-- .row -->
      <div class="row">
      <div class="five columns offset-by-one">
        <img src="<?php echo get_template_directory_uri(); ?>/img/foretagskvall.jpg" alt="EX16 Företagskväll">
      </div> <!-- .columns -->
      <div class="five columns">
        <p>Den 12 maj annordnar EX16 en företagskväll då bandet mellan universitet och näringsliv ska växa sig starkare.
          Här formas möjligheter till att knyta värdefulla kontakter inför framtiden och det är även examenklassens
          tillfälle att visa upp sina allra starkaste projekt. Kvällen kommer ta plats i Kåkenhus på Campus Norrköping
          och inledas med en förläsning följt av mingel, tilltugg och uppvisning av alster.<br><br>
          Är du eller ditt företag intresserade av att träffa branschens framtida talanger? Maila
          <a href="mailto:foretagskvall@ex16.se">foretagskvall@ex16.se</a> för mer information.
        </p>
      </div> <!-- .columns -->
      </div> <!-- .row -->
  </div> <!-- .container -->
</section>


<?php get_footer(); ?>
