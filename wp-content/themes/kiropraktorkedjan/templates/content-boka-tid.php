<!-- <div class="test"></div> -->

<div class="booking-info">
  <h2 class="heading h2"><?php the_field('main_title'); ?></h2>
  <hr class="hr_main">
  <p class="heading-intro"><?php the_field('general_bookinginfo'); ?></p>


<!--     <ul class="city-nav">
      <li><a href="#gbg" class="btn btn-city aktiv">Göteborg</a></li>
      <li><a href="#sthlm" class="btn btn-city">Stockholm</a></li>
    </ul> -->
<!--     <ul class="city-nav boka-tid-nav">
      <li><a class="active" href="#gbg">Göteborg</a></li>
      <li><a href="#sthlm">Stockholm</a></li>
    </ul> -->
<!--     <h2>Göteborg</h2>
    <h2>Stockholm</h2> -->
   <!--  <hr class="hr_main"> -->


      

    <div class="arrow-down"></div>
</div>

<?php get_template_part('templates/booking-module2'); ?>

<div class="booking_rules container">
  <h2 class="heading">Bokningsregler</h2>
  <hr class="hr_main">
  <div class="rules"><?php the_field('booking_rules'); ?></div>
</div>

