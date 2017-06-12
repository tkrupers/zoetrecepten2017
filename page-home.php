<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content', 'firstpost'); ?>
  <?php get_template_part('templates/content', 'blockquote'); ?>
  <?php get_template_part('templates/home', 'recepten'); ?>
  <?php get_template_part('templates/content', 'basisrecepten'); ?>
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>
