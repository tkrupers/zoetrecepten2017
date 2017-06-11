<div class="card-columns">
	<?php
    $query = new WP_Query(
      array(
        'post_type'      => ['recepten', 'blog'],
        'posts_per_page' => 6,
        'offset'		 => 1,
        'orderby'		 => 'date'
        ) );

    if ( $query->have_posts() ) :
    // The Loop
      while ( $query->have_posts() ) : $query->the_post();
  ?>

	<div class="card">
    <img class="card-img-top img-fluid" src="<?php the_post_thumbnail_url('small'); ?>" alt="<?php echo the_title(); ?>">
    <div class="card-block">
			<h4><small><?php the_author(); ?> / <?php the_date('d M Y'); ?></small></h4>
			<a href="<?php the_permalink(); ?>">
				<h3 class="card-title">	<?php echo the_title(); ?></h3>
			</a>
      <p class="card-text"><?php echo the_excerpt(); ?></p>
    </div>
</div>


  <?php
    endwhile;
    endif;
    wp_reset_postdata();
  ?>

</div>