<div class="basisrecepten-block my-4">
  <div class="container">
    <div class="row bg-warning">
      <div class="col align-items-center text-center mt-4">
        <h3 class="text-uppercase">#basisrecepten</h3>
      </div>
      <div class="container">
        <div class="row">
        <?php
          $basisrecepten = new WP_Query(
            array(
              'post_type'      => 'recepten',
              'category_name' => 'basisrecepten',
              'posts_per_page' => 4,
              'orderby'		 => 'rand'
              ) );

          if ( $basisrecepten->have_posts() ) :
          // The Loop
            while ( $basisrecepten->have_posts() ) : $basisrecepten->the_post();
        ?>

        <article class="basisrecept col-md-3">
          <header>
          <a href="<?php the_permalink(); ?>"><img class="img-fluid" src="<?php the_post_thumbnail_url('small'); ?>" alt="<?php echo the_title(); ?>"></a>
          </header>
          <div class="basisrecept-block my-2">
            <a href="<?php the_permalink(); ?>">
              <h4><?php echo the_title(); ?></h4>
            </a>
          </div>
        </article>
        
        <?php
          endwhile;
          endif;
          wp_reset_postdata();
        ?>
        </div>
      </div>
      <div class="col my-3 text-center">
        <a class="btn btn-white" href="/recepten?category_name=basisrecepten">Meer basisrecepten</a>
      </div>
    </div>
  </div>
</div>