<div class="card-columns">
	<?php
    $sticky = get_option( 'sticky_posts' );
    $recepten1 = new WP_Query(
      array(
        'post_type'      => ['recepten', 'blog'],
        'posts_per_page' => 2,
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
    $stickypost = new WP_Query(
      array(
        'post_type'      => ['recepten', 'blog'],
      	'posts_per_page' => 1,
        'post__in'  => $sticky
        ) );

    if ( $stickypost->have_posts() ) :
    // The Loop
      while ( $stickypost->have_posts() ) : $stickypost->the_post();
  ?>

  <?php get_template_part('templates/card', 'sticky'); ?>

  <?php
    endwhile;
    endif;
    wp_reset_postdata();
  ?>

	<?php
    $recepten2 = new WP_Query(
      array(
        'post_type'      => ['recepten', 'blog'],
        'posts_per_page' => 3,
        'post__not_in' => $sticky,
        'offset'		 => 3,
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