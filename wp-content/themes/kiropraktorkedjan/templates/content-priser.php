<section id="priser" class="payment-info container-fluid">
  
  <div class="col-sm-8 col-md-6 col-md-offset-1 col-lg-6 col-lg-offset-1">
  <h2 class="heading"><?php the_field('main_title'); ?></h2>

<?php if (have_posts()) : while (have_posts()) : the_post();?>
<?php the_content(); ?>
<?php endwhile; endif; ?>

  </div>

  <div class="col-sm-4 col-md-5 pay-methods">

  <ul class="pay_partner">

    <li class="pay-method">
      <a href="https://www.flexpay.se/se/sv/">
        <img src="/wp-content/themes/kiropraktorkedjan/assets/img/flexpay.jpg" alt="benify">
      </a>
    </li>

    <li class="pay-method">
      <a href="http://www.actiway.se/">
        <img src="/wp-content/themes/kiropraktorkedjan/assets/img/actiway.jpg" alt="actiway">
      </a>
    </li>

    <li class="pay-method">
      <a href="http://www.friskvardskuponger.se/">
        <img src="/wp-content/themes/kiropraktorkedjan/assets/img/fv_kuponger.png" alt="">
      </a>
    </li>

  </ul>

  </div>

</section>


  <?php get_template_part('templates/price-module'); ?>  

<!-- Sports -->
<div class="container-fluid corporate" id="foretagshalsovard">
  <div class="wrap">
  <?php the_field('foretagshalsovard'); ?>
</div>  
<div class="col-sm-5 col-xs-4 ">
  <?php 

$image = get_field('image');

if( !empty($image) ): ?>

  <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

<?php endif; ?>
</div>
</div>
<!-- END Sports -->
