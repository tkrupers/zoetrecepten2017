<?php 
/* Template Name: Ingredienten detail pagina */ 
?>

<h1 class="m-3"><?php the_title(); ?> overzichtspagina</h1>
<?php the_content(); ?>

<?php get_template_part('templates/ingredienten', 'artikel'); ?>
<?php get_template_part('templates/ingredienten', 'recepten'); ?>
<?php get_template_part('templates/ingredienten', 'alfabet'); ?>