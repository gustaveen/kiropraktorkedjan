<div class="container">
  <div class="page-content">
  <?php while (have_posts()) : the_post(); ?>
    <?php the_content(); ?> 
  <?php endwhile; ?>
  </div>
</div>

<!-- Kiropraktorer - booking -->
<div class="kiropraktorer section" id="kontakt">
  <div id="booking" class="booking-wrap">
    
    <h2 class="heading">Våra kiropraktorer</h2>
          <hr class="hr_main">
          <p class="boka-text">Onlinebokningen omfattar alla våra fyra kliniker.<br>Välj kiropraktor och önskad tid, givetvis går det även bra att ringa oss för tidsbokning. Önskas jourtid helg, vänligen ring oss.</p>
          <ul class="city-nav frontpage-city-nav">
            <li><button class="btn btn-city aktiv" data-city="#gbg">Göteborg</button></li>
            <li><button class="btn btn-city" data-city="#sthlm">Stockholm</button></li>
          </ul>
        
          <?php get_template_part('templates/booking-module'); ?>

  </div>
</div>
<!-- END Kiropraktorer - booking -->

<!-- Sports -->
<div class="container" id="idrott">
  <div class="page-content idrott">
  <?php the_field('idrott'); ?>
</div>  
</div>
<!-- END Sports -->