<div class="first-post">
	<?php
    $query = new WP_Query(
      array(
        'post_type'      => ['recepten', 'blog'],
        'posts_per_page' => 1,
        ) );

    if ( $query->have_posts() ) :
    // The Loop
      while ( $query->have_posts() ) : $query->the_post();
  ?>
<div class="container first-post">
  <div class="bg-primary row">
    <div class="col-md-8">
      <img class="img-fluid float-left" src="<?php the_post_thumbnail_url(); ?>" alt="<?php echo the_title(); ?>">
    </div>
    <div class="col-md-4 first-post-text align-items-center">
      <div class="col">
        <a href="<?php the_permalink(); ?>">
          <h3><?php echo the_title(); ?></h3>
        </a>
        <p class="card-text"><?php echo the_excerpt(); ?></p>
      </div>
    </div>
  </div>
</div>
  <?php
    endwhile;
    endif;
    wp_reset_postdata();
  ?>

</div>