<div class="first-post">
	<?php
    $hoofdartikel = get_field('hoofdartikel');

    if( $hoofdartikel ): 

      // override $post
      $post = $hoofdartikel;
      setup_postdata( $post ); 
  ?>

  <article class="container first-post m-3">
    <div class="row">
      <header class="col-md-8">
        <img class="img-fluid float-left" src="<?php the_post_thumbnail_url(); ?>" alt="<?php echo the_title(); ?>">
      </header>
      <div class="col-md-4 first-post-text align-items-center">
        <div class="col">
          <h4 class="post-meta"><small><?php the_author(); ?> / <?php the_date('d M Y'); ?></small></h4>
          <a class="title" href="<?php the_permalink(); ?>">
            <h2><?php echo the_title(); ?></h2>
          </a>
          <p><?php echo the_excerpt(); ?></p>
        </div>
      </div>
    </div>
  </article>

  <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
    <?php else: ?>

  <article class="container first-post work-in-progress m-3">
      <div class="row">
        <header class="col-md-8">
          <div class="placeholder-image">
            <span class="fa fa-cog fa-5x"></span>
          </div>
        </header>
        <div class="col-md-4 first-post-text align-items-center">
          <div class="col">
            <a class="title" href="<?php the_permalink(); ?>">
              <h2>Aan dit artikel wordt nog gewerkt.</h2>
            </a>
            <p>Binnenkort snel online!</p>
          </div>
        </div>
      </div>
    </article>
    
  <?php endif; ?>

</div>