<?php get_template_part('templates/page', 'header'); ?>

<?php if (!have_posts()) : ?>
  <div class="alert alert-warning">
    <?php _e('Sorry, niets gevonden.', 'sage'); ?>
  </div>
  <?php get_search_form(); ?>
<?php endif; ?>

<div class="card-columns">
  <?php while (have_posts()) : the_post(); ?>
    <?php get_template_part('templates/card'); ?>
  <?php endwhile; ?>
</div>

<?php the_posts_pagination( array(
				'prev_text' => 'Vorige',
				'next_text' => ' Volgende'
			) );
?>
