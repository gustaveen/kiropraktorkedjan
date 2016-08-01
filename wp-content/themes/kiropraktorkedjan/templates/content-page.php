<div class="container">
  <div class="page-content">
  <?php while (have_posts()) : the_post(); ?>
    <?php the_content(); ?> 
  <?php endwhile; ?>
  </div>
</div>
