
<?php if( get_field('bg_img_header') ): ?>
<div class="page-header master-header" style="background: url(<?php the_field('bg_img_header'); ?>) no-repeat;">
<?php else: ?>
  <div class="page-header master-header">
<?php endif; ?>
  <div class="container">
    <div class="pufftext clearfix">
            <h1 class="front-heading"><?php the_field("main_title"); ?></h1>
            <p class="intro">Vi erbjuder professionell undersökning, behandling, rådgivning och rehabilitering för att vägleda dig till ett smärtfritt och aktivt liv. </p>
            <!-- <a href="/om-oss/" class="read-more">Läs mer om Kiropraktorkedjan <i class="flaticon-arrow14"></i></a> -->
            <a class="btn" href="#booking">Boka tid för behandling</a>
          </div>
  </div>
</div>






