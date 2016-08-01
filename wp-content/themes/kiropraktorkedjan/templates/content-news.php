<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <div class="page-header">
      <h1 class="heading h2"><?php the_title(); ?></h1>
      <hr class="hr_main">
      <?php get_template_part('templates/entry-meta'); ?>
    </div>

    <div class="container">
      <div class="page-content">
        <?php the_content(); ?>
      </div>

    </div>

    
  </article>
<?php endwhile; ?>