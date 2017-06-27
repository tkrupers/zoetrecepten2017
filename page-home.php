<?php 
  while (have_posts()) : the_post();

   get_template_part('templates/post/content', 'firstpost');
   get_template_part('templates/content', 'blockquote');
   get_template_part('templates/home', 'recepten');
   get_template_part('templates/post/content', 'basisrecepten');
   get_template_part('templates/content', 'page');

 endwhile; 
?>
