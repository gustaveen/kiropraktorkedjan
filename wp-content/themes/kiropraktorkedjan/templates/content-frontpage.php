<div class="content-wrapper">
<!-- Services -->
<?php get_template_part('templates/services'); ?>
<!-- END Services-->

<!-- Symptom skeleton -->
<?php get_template_part('templates/symptoms-skeleton'); //Lägg till symptomgubbe ?> 
<!-- END Syptoms skeleton-->

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

<!-- Locations -->
<div class="section" id="locations">
  <h2 class="heading">Här finns vi</h2>
  <hr class="hr_main">
  <div class="feature-gallery">
    <ul>
      <li>
        <div class="feature-gallery--item location">
          <img src="wp-content/themes/kiropraktorkedjan/assets/img/almedal.jpg" alt="">
          <div class="info">
            <img class="thumb" title="Alexander" src="wp-content/themes/kiropraktorkedjan/assets/img/alex_thumb.png" alt="">
            <h4>Almedal</h4>
            <p>Nordic Wellness</p>
            <hr class="hr_sm">
            <p class="title">Mölndalsvägen 85</p>
            <p class="title">412 85 GÖTEBORG</p>
            <a class="btn btn-more" href="http://maps.google.com/?q=M%C3%B6lndalsv%C3%A4gen%2085,%20412%2085,%20G%C3%B6teborg">Hitta hit</a>
          </div>
        </div>
      </li>
      <li>
        <div class="feature-gallery--item location">
          <img src="wp-content/themes/kiropraktorkedjan/assets/img/exclusive.jpg" alt="">
          <div class="info">
            <img class="thumb" title="Johan" src="wp-content/themes/kiropraktorkedjan/assets/img/johan_thumb.png" alt="">
            <h4>Lilla Bommen</h4>
            <p>Nordic Wellness</p>
            <hr class="hr_sm">
            <p class="title">St.Eriksgatan 6</p>
            <p class="title">411 05 GÖTEBORG</p>
            <a class="btn btn-more" href="https://www.google.com/maps/place/Sankt+Eriksgatan+6/@57.7097642,11.9654374,17z/data=!3m1!4b1!4m2!3m1!1s0x464ff3614885b179:0xb9fe5b1d34748402">Hitta hit</a>
          </div>
        </div>
      </li>
      <li>
        <div class="feature-gallery--item location">
          <img src="wp-content/themes/kiropraktorkedjan/assets/img/vasastan.jpg" alt="">
          <div class="info">
            <img class="thumb" title="Alexander" src="wp-content/themes/kiropraktorkedjan/assets/img/alex_thumb.png" alt="">
            <h4>Vasastan</h4>
            <p>Ortopedmed. Inst.</p>
            <hr class="hr_sm">
            <p class="title">Erik Dahlbergsgatan 14</p>
            <p class="title">411 26 GÖTEBORG</p>
            <a class="btn btn-more" href="https://www.google.com/maps/place/Erik+Dahlbergsgatan+14/@57.699183,11.970457,17z/data=!4m2!3m1!1s0x464ff36e41f5b61b:0x89df19f8c8c44d59">Hitta hit</a>
          </div>
        </div>
      </li>
      <li>
        <div class="feature-gallery--item location">
          <img src="wp-content/themes/kiropraktorkedjan/assets/img/sickla.jpg" alt="">
          <div class="info">
            <img class="thumb" src="wp-content/themes/kiropraktorkedjan/assets/img/sara_thumb.png" alt="">
            <h4>Nacka</h4>
            <p>Atlashuset</p>
            <hr class="hr_sm">
            <img class="thumb" src="wp-content/themes/kiropraktorkedjan/assets/img/daniel_thumb.png" alt="">
            <p class="title">Planiavägen 5</p>
            <p class="title">131 54 NACKA</p>
            <a class="btn btn-more" href="https://www.google.com/maps/place/Planiav%C3%A4gen+5/@59.306091,18.131888,17z/data=!4m2!3m1!1s0x465f787204d12fb5:0x36dd8fe29a45a241">Hitta hit</a>
          </div>
        </div>
      </li>
    </ul>
  </div>
</div>
<!-- END Locations -->

<?php get_template_part('templates/news-excerpt'); ?>


</div>
