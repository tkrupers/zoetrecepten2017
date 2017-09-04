<div class="basisrecepten-block my-4">
  <div class="container">
    <div class="row bg-success">
      <div class="col align-items-center text-center mt-4">
        <h3 class="text-uppercase">#basisrecepten</h3>
        <p class="lead">Voor elk moment van de dag.</p>
      </div>
      <div class="container">
        <div class="row">
        <?php
          $basisrecepten = new WP_Query(
            array(
              'post_type'      => 'recepten',
              'category_name' => 'basisrecepten',
              'posts_per_page' => 4,
              'orderby'		 => 'date'
              ) );

          if ( $basisrecepten->have_posts() ) :
          // The Loop
            while ( $basisrecepten->have_posts() ) : $basisrecepten->the_post();
        ?>

        <article class="basisrecept col">
          <header>
            <img class="img-fluid" src="<?php the_post_thumbnail_url('small'); ?>" alt="<?php echo the_title(); ?>">
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
        <a class="btn btn-success" href="/recepten?category_name=basisrecepten">Meer basis recepten</a>
      </div>
    </div>
  </div>
</div>