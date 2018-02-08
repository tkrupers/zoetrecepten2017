<div class="card-columns">
	<?php
    $sticky = get_option('sticky_posts');
    $recepten1 = new WP_Query(
      array(
        'post_type'      => ['recepten', 'blog'],
        'posts_per_page' => 3,
        'offset'		 => 1,
        'orderby'		 => 'date'
        ) );

    if ( $recepten1->have_posts() ) :
    // The Loop
      while ( $recepten1->have_posts() ) : $recepten1->the_post();
  ?>

  <?php get_template_part('templates/card'); ?>

  <?php
    endwhile;
    endif;
    wp_reset_postdata();
  ?>

  <?php
      $stickypost = new WP_Query(
        array(
          'post_type'      => ['recepten', 'blog'],
          'posts_per_page' => 1,
          'meta_key'       => 'starred_post',
          'meta_value'     => '1'
          ) );

      if ( $stickypost->have_posts() ) :
      // The Loop
        while ( $stickypost->have_posts() ) : $stickypost->the_post();

        get_template_part('templates/card', 'sticky');

      endwhile;
      endif;
      wp_reset_postdata();
  ?>

	<?php
    $recepten2 = new WP_Query(
      array(
        'post_type'      => ['recepten', 'blog'],
        'posts_per_page' => 5,
        'offset'		 => 4,
        'orderby'		 => 'date'
        ) );

    if ( $recepten2->have_posts() ) :
    // The Loop
      while ( $recepten2->have_posts() ) : $recepten2->the_post();
  ?>
  
  <?php get_template_part('templates/card'); ?>

  <?php
    endwhile;
    endif;
    wp_reset_postdata();
  ?>
</div>

<div class="my-2">
  <div class="container">
    <div class="row">
      <div class="col my-3 text-center">
        <a class="btn btn-primary" href="/recepten">Meer recepten</a>
      </div>
    </div>
  </div>
</div>