<div class="first-post">
	<?php
    $sticky = get_option( 'sticky_posts' );
    $firstpost = new WP_Query(
      array(
        'post_type'      => ['recepten', 'blog'],
        'posts_per_page' => 1,
        'post__not_in' => $sticky,
        ) );

    if ( $firstpost->have_posts() ) :
    // The Loop
      while ( $firstpost->have_posts() ) : $firstpost->the_post();
  ?>

  <article class="container first-post">
    <div class="row">
      <header class="col-md-8">
        <img class="img-fluid float-left" src="<?php the_post_thumbnail_url(); ?>" alt="<?php echo the_title(); ?>">
      </header>
      <div class="col-md-4 first-post-text align-items-center">
        <div class="col">
          <h4 class="post-meta"><small><?php the_author(); ?> / <?php the_date('d M Y'); ?></small></h4>
          <a class="title" href="<?php the_permalink(); ?>">
            <h1><?php echo the_title(); ?></h1>
          </a>
          <p><?php echo the_excerpt(); ?></p>
        </div>
      </div>
    </div>
  </article>

  <?php
    endwhile;
    endif;
    wp_reset_postdata();
  ?>

</div>