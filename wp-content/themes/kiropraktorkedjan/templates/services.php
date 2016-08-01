<div class="services clearfix container-fluid">
  <h2 class="heading">Vad vi erbjuder</h2>
  <hr class="hr_main">

  <?php if( have_rows('puff_frontpage') ): 
    $i = 1;
  ?>  
  <ul>
 
    <?php while( have_rows('puff_frontpage') ): the_row(); 
 
        $image = get_sub_field('img_puff');
        $content = get_sub_field('text_puff');
        $title = get_sub_field('title_puff');
        $link = get_sub_field('link');
        
        ?>

    <li class="service">
          <a class="link" href="<?php print $link; ?>">
            <div class="image-container"><img src="<?php print $image['url']; ?>" alt="<?php print $image['alt']; ?>" /></div>
            <h4><?php print $title; ?></h4>
            <p><?php print $content; ?></p>
            <span class="read-more <?php print sanitize_title($title); ?>" href="<?php print $link; ?>">Läs mer<i class="flaticon-arrow14"></i></span>
          </a>
    </li>

    <?php if ($i == 2): ?>
        <div class="clearfix visible-xs visible-sm"></div>
    <?php endif; ?>
      
     <?php $i ++;
     endwhile; ?>
 
  </ul>
  <?php endif; ?>

</div>

