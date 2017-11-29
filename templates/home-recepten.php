<div class="card-columns">
	<?php
    $sticky = get_option('sticky_posts');
    $has_sticky = isset($sticky[0]);
    $recepten1 = new WP_Query(
      array(
        'post_type'      => ['recepten', 'blog'],
        'posts_per_page' => $has_sticky ? 2 : 3,
        'post__not_in' => $sticky,
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
    if ($has_sticky) {
      $stickypost = new WP_Query(
        array(
          'post_type'      => ['recepten', 'blog'],
          'posts_per_page' => 1,
          'post__in'  => $sticky,
          'ignore_sticky_posts' => 1
          ) );

      if ( $stickypost->have_posts() ) :
      // The Loop
        while ( $stickypost->have_posts() ) : $stickypost->the_post();

        get_template_part('templates/card', 'sticky');

      endwhile;
      endif;
      wp_reset_postdata();
    }
  ?>

	<?php
    $recepten2 = new WP_Query(
      array(
        'post_type'      => ['recepten', 'blog'],
        'posts_per_page' => 6,
        'post__not_in' => $sticky,
        'offset'		 => $has_sticky ? 6 : 7,
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