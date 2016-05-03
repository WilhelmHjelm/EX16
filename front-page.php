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
      <h2 class="green-text">Schemat</h2>
    </div> <!-- .twelve .columns -->
  </div> <!-- .row -->
  <div class="row">

    <div class="three columns thursday">
        <h4 class="turquoise-text">Torsdag</h4>
        <ul class="tab-content">
            <li>13:15<br><strong>Invigning av EX16</strong><br><span>Färgeriet, Kåkenhus</span></li>
            <li>13:15-17:00<br><strong>Utställningen är öppen</strong></li>
            <li>18:00<br><strong>EX BY NIGHT - Företagskvällen öppnar</strong><br><span>Färgeriet, Kåkenhus</span></li>
            <li>18:00<br><strong>Föreläsning med Mia Lindstam, Gerillabyrån</strong><br><span>K4, Kåkenhus</span></li>
            <li>19:15<br><strong>Lär dig mingla med Demola</strong><br><span>Färgeriet, Kåkenhus</span></li>
            <li>19:30-21.00<br><strong>Utställning och mingel</strong></li>
        </ul>
    </div> <!-- .columns -->
    <div class="three columns friday">
        <h4 class="green-text">Fredag</h4>
        <ul class="tab-content">
            <li>09:00<br><strong>Frukostföreläsning med DIK</strong><br><span>Färgeriet, Kåkenhus</span></li>
            <li>10:00-17:00<br><strong>Utställningen är öppen</strong></li>
            <li>10:40<br><strong>Föreläsning med Futurniture</strong><br><span>K4, Kåkenhus</span></li>
            <li>13:15<br><strong>Föreläsning med Crazy Pictures</strong><br><span>K4, Kåkenhus</span></li>
        </ul>
    </div> <!-- .columns -->
    <div class="three columns saturday">
        <h4 class="orange-text">Lördag</h4>
        <ul class="tab-content" id="content3">
          <li>10:00-15.00<br><strong>Utställningen är öppen</strong></li>
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
  <div class="container lecturers-grid">
  <?php
  // Custom post type "forelasare" list

      $args = array(
        'post_type' => 'forelasare'
      );
      $lecturers = new WP_Query( $args );
      if( $lecturers->have_posts() ) {
        $i = 1;
        while( $lecturers->have_posts() ) {
          $lecturers->the_post();

          if($i == 1) {$graduateColor = "blue";}
          if($i == 2) {$graduateColor = "turquoise";}
          if($i == 3) {$graduateColor = "green";}
          if($i == 4) {$graduateColor = "orange"; $i = 0;}
          $i++;
          ?>
          <a class="lecturer" href="/forelasare/#<?php echo $post->post_name;?>">
            <img src="<?php the_field('image'); ?>" alt="<?php the_title();?>">
                <div>
                  <h5 class="<?php echo $graduateColor; ?>-bg"><?php the_title(); ?></h5><br>
                  <span><?php the_field('time'); ?> i <?php the_field('place'); ?></span>
                </div>
            </a>
          <?php
        }
      }

      else {
        echo 'Det finns inga föreläsare att visa';
      }

    ?>
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
        <p>Den 12 maj annordnas företagskvällen EX by night som har som syfte att skapa ett starkare band mellan universitetet
          och näringslivet. Under kvällen kommer examensklassen att visa upp sina starkaste projekt i en fantastisk utställning
          samt få en chans att mingla med olika inbjudna företag från branschen.<br><br>
          Kvällen kommer inledas med en föreläsning med Mia Lindstam från Gerillabyrån som ger tips och beskriver faktorerna
          bakom en lyckad gerillakampanj. Sedan kommer Demola East Sweden att dela med sig av sina bästa mingeltips innan
          minglet mellan företag och studenter drar igång på riktigt. Här formas möjligheter till att knyta värdefulla
          kontakter inför framtiden!<br><br>

          Är du eller ditt företag intresserade av att träffa branschens framtida talanger? Maila
          <a href="mailto:foretagskvall@ex16.se">foretagskvall@ex16.se</a> för mer information.
        </p>
      </div> <!-- .columns -->
      </div> <!-- .row -->
  </div> <!-- .container -->
</section>


<?php get_footer(); ?>
