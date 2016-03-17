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
    <div class="twelve columns">
      <h1 class="blue-text">Examensdagarna för Grafisk design och kommunikation</h1>
      <h2 class="turquoise-text">12-14 maj i Kåkenhus, Campus Norrköping</h2>
      <div><a href="#schema" class="button read-more-home">Läs mer om EX16</a></div>
    </div><!-- .twelve -->
  </div> <!-- .container -->
</section>

<section id="schedule">
  <div class="container">
    <div class="ten columns offset-by-one">
      <h2 class="green-text">Schema och föreläsare presenteras inom kort</h2>
    </div>
    <?php
    /*
    <div class="row">
    <div class="twelve columns">
      <h2>Schema</h2>
    </div> <!-- .twelve .columns -->
  </div> <!-- .row -->
  <div class="row">
    <ul class="four columns big-events">
      <li>
        <h4>Utställning</h4>
        <span class="date">12-14 maj (tors-lör)</span>
        <span class="time">09.00-18.00</span>
        <p>Utställning av olika grafiska alster som examensklassen producerat under åren på GDK.
          Hålls i Färgeriet i Kåkenhus. Gå in via entrén mot Skvallertorget.</p>
      </li>
      <li>
        <h4>Företagskväll</h4>
        <span class="date">12 maj (tors)</span>
        <span class="time">18.00-21.00</span>
        <p>En kväll med företag. Hålls i Färgeriet i Kåkenhus. Gå in via entrén mot Skvallertorget.</p>
      </li>
    </ul>

    <div class="eight columns">
    <input id="tab1" type="radio" name="tabs" checked>
    <label for="tab1">Torsdag</label>

    <input id="tab2" type="radio" name="tabs">
    <label for="tab2">Fredag</label>

    <input id="tab3" type="radio" name="tabs">
    <label for="tab3">Lördag</label>

      <ul class="tab-content" id="content1">
          <li>09:00 <strong>Invigning av EX16</strong></li>
          <li>09:00 <strong>Utställningen öppnar</strong></li>
          <li>10:15-12:00 <strong>Föreläsning i K4</strong><span>Bo Bergström talar om saker man kan göra med en katt.</span></li>
          <li>18:00 <strong>Företagskvällen börjar</strong><span>Läs mer om vad som händer.</span></li>
          <li>21:00 <strong>Utställningen och företagskvällen stänger</strong></li>
      </ul>

      <ul class="tab-content" id="content2">
          <li>09:00 <strong>Utställningen öppnar</strong></li>
          <li>12:15-13:00 <strong>Föreläsning i K4</strong><span>Crazy Pictures talar om för dig vad du vill veta.</span></li>
          <li>13:15-15:00 <strong>Föreläsning i K4</strong><span>Lars Winnerbäck kommer och gästspelar.</span></li>
          <li>18:00 <strong>Utställningen stänger</strong></li>
      </ul>

      <ul class="tab-content" id="content3">
        <li>10:00 <strong>Utställningen öppnar</strong></li>
        <li>14:00 <strong>Utställningen stänger</strong></li>
        <li>19:00 <strong>Examenssittning</strong><span>Hålls på Laxholmen och är examensklassens avslutande sittning.</span></li>
      </ul>
    </div> <!-- .columns -->
    </div> <!-- .row -->
    */ ?>
  </div> <!-- .container -->

</section>

<section id="lecturers">
  <div class="container">
    <!--- <h1 class="turquoise-text">Föreläsare</h1> -->
  <?php
  // Custom post type "forelasare" list

      $args = array(
        'post_type' => 'forelasare'
      );
      $lecturers = new WP_Query( $args );
      if( $lecturers->have_posts() ) {
        while( $lecturers->have_posts() ) {
          $lecturers->the_post();
          ?>
          <div class="grid-forelasare">
            <figure class="hover-lecturer">
              <a href="<?php echo get_page_link(45); ?>#<?php the_title(); ?>">
                <?php the_post_thumbnail(); ?>
                <figcaption>
                  <h3><?php the_title(); ?></h3>
                  <p><i class="fa fa-clock-o"></i><?php the_field('time'); ?><i class="fa fa-map-marker"></i><?php the_field('place'); ?></p>
                </figcaption>
            </figrure>
          </a>
        </div>

          <?php
        }
      }
      else {
        
      }
    ?>
</div>
</section>

<section id="company-evening">
  <div class="container">
    <div class="seven columns">
      <iframe src="https://player.vimeo.com/video/152694696?color=64a508" width="738" height="415" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
    </div>
    <div class="five columns">
      <h2>FÖRETAGSKVÄLL</h2>
      <p>Info om företagskvällen Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      <a href="mailto:foretagskvall@ex16.se" class="button">Vill du vara med på företagskvällen?</a>
    </div>
</section>


<?php get_footer(); ?>
