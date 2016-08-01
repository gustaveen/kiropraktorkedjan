

<?php 
    // The Query
    $args = array( 'posts_per_page' => 4);
    $the_query = new WP_Query( $args );

    ?>

<div class="section" id="newsfeed">
  <h2 class="heading">Nyheter</h2>
  <hr class="hr_main">
</div>
    
    
    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
      
        <h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
          <div class="meta">
            <small><?php the_time('F j, Y'); ?></small>
          </div>
          <p><?php the_excerpt(); ?></p>
      </div>
    </section>
    <?php endwhile; ?>
  

  <?php
    /* Restore original Post Data 
     * NB: Because we are using new WP_Query we aren't stomping on the 
     * original $wp_query and it does not need to be reset.
    */
    wp_reset_postdata();
?>