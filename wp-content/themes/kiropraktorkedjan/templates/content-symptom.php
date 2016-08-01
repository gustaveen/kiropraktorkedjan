<?php
    $page_title = get_the_title();
    global $post;
    $page_slug=$post->post_name;

  $args = array(
    'post_type' => 'symptoms',
    'posts_per_page' => -1,
    'tax_query' => array(
        array(
          'taxonomy' => 'symptoms_category',
          'field' => 'slug',
          'terms' => $page_slug
        )
      ));

  function the_slug($echo=true){
    $slug = basename(get_permalink());
    do_action('before_slug', $slug);
    $slug = apply_filters('slug_filter', $slug);
    if( $echo ) echo $slug;
    do_action('after_slug', $slug);
    return $slug;
  }

?>

<div class="container">
  
    <div class="symptoms-posts"> 
    <?php
      $symptoms = new WP_Query( $args );
      if( $symptoms->have_posts() ) {
        while ( $symptoms->have_posts() ) : $symptoms->the_post(); ?>
            <article id="<?php the_slug(); ?>">
            <h2><?php the_title(); ?></h2>
            <p><?php the_content(); ?></p>
            </article>
          
        <?php endwhile; ?>
      <?php }

      else {
        echo 'Inga besvär funna!';
      }
      wp_reset_postdata();
      ?>
    
    </div><!-- End symptoms-post -->

    <aside class="symptoms-menu sidebar" id="target_nav">
      <div id="my-affix" class="affix-wrap">
      <!-- <span>Besvär</span> -->
      
      <ul class="menu-affix nav">
        
        <li class="main active">
          <?php print $page_title ?>
          <ul class="childs">
          <?php
          $symptoms = new WP_Query( $args );
          if( $symptoms->have_posts() ) {
            while ( $symptoms->have_posts() ) : $symptoms->the_post(); ?>
                <li>
                <a href="#<?php the_slug(); ?>">- <?php the_title(); ?></a>
                
                </a>
              
            <?php endwhile; ?>
          <?php } ?>
        
          </ul>
        </li>
<!--         <li class="related-title">Andra besvär</li>
        <li class="related-cat"><a href="">Huvud & nacke</a></li>
        <li class="related-cat"><a href="">Axlar</a></li>
        <li class="related-cat"><a href="">Armbåge</a></li>
        <li class="related-cat"><a href="">Bröstrygg</a></li>
        <li class="related-cat"><a href="">Knä</a></li>
        <li class="related-cat"><a href="">Bål & ländrygg</a></li>
        <li class="related-cat"><a href="">Höft & bäcken</a></li> -->
      </ul>
    </div>
    </aside>

  
</div>

