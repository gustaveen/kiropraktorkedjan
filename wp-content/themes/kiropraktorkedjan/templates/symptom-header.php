<?php if( get_field('bg_image_header') ): ?>
<div class="symptom-header bg-img" style="background: url(<?php the_field('bg_image_header'); ?>) no-repeat center !important;">
<?php else: ?>
<div class="symptom-header">
<?php endif; ?>

  <div class="container">
    <h1><?php the_title(); ?></h1>
    <p><?php the_field('symptom_header_text'); ?></p>
  </div>
</div>

