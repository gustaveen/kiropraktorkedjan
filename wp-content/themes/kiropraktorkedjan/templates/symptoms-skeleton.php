<?php
    function the_slug($echo=true){
      $slug = basename(get_permalink());
      do_action('before_slug', $slug);
      $slug = apply_filters('slug_filter', $slug);
      if( $echo ) echo $slug;
      do_action('after_slug', $slug);
      return $slug;
    }
?>

<div class="skeleton-wrap row">
  <div class="symptoms-home">
  <div class="wrap">
    <h2 class="heading first">Vanliga besvär</h2>
    <hr class="hr_main">
    <p class="heading-intro">Har du ont eller känner du dig stel? <br>Vi hjälper dig med både akuta och kroniska besvär.</p>
    <div href="#" class="dos"></div>
  </div>

</div>  
  
  <!-- <div class="menu"><h3>Meny</h3></div> -->
  <div id="hint" class="clearfix all">
    <div class="crayon-wrap"><p class="crayon">Klicka på kroppsdel!</p></div>
  </div>
  <div class="skeleton clearfix" id="skeleton">
    <img src="wp-content/themes/kiropraktorkedjan/assets/img/bg.gif" alt="symptom skeleton">

    <?php
        if( have_rows('skeleton') ): ?>
 
        
       
        <?php while( have_rows('skeleton') ): the_row(); 
       
          // vars
          $bodypart = get_sub_field('bodypart');
          $front_back = get_sub_field('front_back');
          $content = get_sub_field('infotext');
          $link = get_sub_field('page_link');
          $term = get_sub_field('taxonomy');
          $cat = sanitize_title($term->name);


          $args2 = array(
            'post_type' => 'symptoms',
            'tax_query' => array(
                array(
                  'taxonomy' => 'symptoms_category',
                  'field' => 'slug',
                  'terms' => $cat
                )
              ));

            $links = "<ul>";
            
            $myposts = get_posts( $args2 );
            foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
            <?php 
            
            $links .= "<li><a href='$link" . "#" . the_slug(false) . "'>" . get_the_title() . "</a></li>"; 

            ?>
              
                
              
            <?php endforeach; 
            $links .= "</ul>";
            wp_reset_postdata();?>
            
          
          <button id="<?php print sanitize_title($cat); ?>" href="#" class="annotation <?php print $front_back; ?>" data-toggle="popover" title="<?php print $bodypart; ?>" data-content="<?php print $content . $links; ?>" rel="popover" data-original-title="<?php print bodypart; ?>"><span class="glyphicon glyphicon-plus"></span></button>

          <?php endwhile; ?>
 
  
 
<?php endif; ?>

  </div>
  
</div>
          