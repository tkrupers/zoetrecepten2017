<div class="col ingredienten-recepten p-3">
  <div class="col-md-12" style="padding:0;">

    <h3><?php echo get_the_title( $ID ); ?> en meer</h3>
    <div class="card-deck ">

      <?php
      global $post;
        // check if the repeater field has rows of data
        if( have_rows('gerelateerde_artikelen') ):

          // loop through the rows of data
            while ( have_rows('gerelateerde_artikelen') ) : the_row();

                $post_object = get_sub_field('artikel');
                
                if( $post_object ) :

                  $post = $post_object;
                  setup_postdata($post);
                ?>

                <?php get_template_part('templates/card'); ?>

                <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>

                <?php endif; ?>

            <?php endwhile; ?>
            <?php else: ?>
              Geen recepten of artikelen gevonden voor <?php echo get_the_title( $ID ); ?> :(
            <?php endif;?>
      
    </div>
  </div>
  <footer class="my-3 text-center"> 
    <a href="/recepten" class="btn btn-primary">Bekijk alle recepten</a>
  </footer>
</div>