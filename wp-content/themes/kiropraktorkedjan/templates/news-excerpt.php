<!-- News feed -->
<?php 
// the query
$args = array(
        'post_type'       => 'post',
        'posts_per_page'  => 2,
        'orderby'         => 'date',
        'order'           => 'DESC'
);
$the_query = new WP_Query( $args ); ?>


<div class="section" id="newsfeed">
  <h2 class="heading">Nyheter</h2>
  <hr class="hr_main">
  <div class="news col-sm-12">
    <?php if ( $the_query->have_posts() ) : ?>

    <!-- the loop -->
    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
    <div class="news-item col-md-6">
      <div class="hentry">
        <a  href="<?php echo get_permalink(); ?>"><h4 class="title"><?php the_title(); ?></h4></a>
        <?php get_template_part('templates/entry-meta'); ?>
        <p><?php echo owc_excerpt(25, $post->ID); ?></p>
        <a class="btn btn-more" href="<?php echo the_permalink(); ?>">Läs mer</a>
  
      </div>
    </div>
    <?php endwhile; ?>
    <!-- end of the loop -->

    <!-- pagination here -->

    <?php wp_reset_postdata(); ?>

  <?php else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
  <?php endif; ?>
  </div>
</div>
</div>
  
<!-- 
    <div class="news-item">
      <h4>Titel på nyhet</h4>
    </div>
  </div>
</div> -->
<!-- End News feed