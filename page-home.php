<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content', 'firstpost'); ?>
  <?php get_template_part('templates/page', 'recepten'); ?>
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>
