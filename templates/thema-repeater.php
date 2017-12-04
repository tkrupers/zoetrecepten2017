<?php if( have_rows('thema') ): ?>

	<?php while( have_rows('thema') ): the_row(); 

		// vars
		$naam = get_sub_field('naam');
    $beschrijving = get_sub_field('beschrijving');
    $slug = strtolower($naam);
    $kleur = get_sub_field('kleur');
		?>
	  <section class="col thema-block p-3 <?php echo ($kleur ? 'bg-' . $kleur : ''); ?>">
      <header>

        <?php if( $naam ): ?>
          <h2><?php echo $naam; ?></h2>
        <?php endif; ?>

        <?php if( $beschrijving ): ?>
          <p><?php echo $beschrijving; ?></p>
        <?php endif; ?>
      </header>

      <article>
      <?php
      $thema_recepten = new WP_Query(
        array(
          'post_type'      => 'recepten',
          'posts_per_page' => 4,
          'orderby'        => 'rand',
          // 'category_name' => $slug
          ) );

      if ( $thema_recepten->have_posts() ) : ?>
        <div class="thema-deck">
          <?php  while ( $thema_recepten->have_posts() ) : $thema_recepten->the_post(); ?>
          
          <div class="card">
            <a href="<?php the_permalink(); ?>">
              <img class="card-img-top img-fluid" src="<?php the_post_thumbnail_url('small'); ?>" alt="<?php echo the_title(); ?>">
            </a>
            <div class="card-block">
              <a href="<?php the_permalink(); ?>">
                <h4 class="card-title">	<?php echo the_title(); ?></h4>
              </a>
            </div>
          </div>

          <?php endwhile; ?>
        </div>
        
        <?php
          endif;
          wp_reset_postdata();
        ?>
      </article>

      <footer class="my-3 text-center"> 
      <a href="/recepten/categorie/<?php echo $slug;?>" class="btn <?php echo ($kleur ? 'btn-white' : 'btn-success'); ?>">Meer <?php echo $naam;?> recepten</a>
      </footer>
    </section>

	<?php endwhile; ?>
<?php endif; ?>

