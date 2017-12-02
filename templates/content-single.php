<?php 
	while ( have_posts() ) : the_post();
?>
  <article <?php post_class(); ?> itemscope itemtype="http://schema.org/Recipe">
    <header class="hidden-print">
      <h1 class="entry-title" itemprop="name"><?php the_title(); ?></h1>
      <?php get_template_part('templates/entry-meta'); ?>

      <?php the_post_thumbnail('large', array( 'itemprop' => 'image')); ?>
    </header>
    <div class="entry-content my-3 hidden-print"  itemprop="description">
      <?php the_content(); ?>
    </div>
    <footer>
    <div class="social-buttons my-3">
      <div class="fb-like" data-href="<?php the_permalink(); ?>" data-layout="button_count" data-action="like" data-size="large" data-show-faces="false" data-share="true"></div>
      
      <a class="btn btn-success btn-sm" href="mailto:?subject=<?php the_title();?>&amp;body=<?php the_permalink(); ?>'" title="Deel dit artikel via email"><i class="fa fa-envelope"></i> Email</a>

      <a data-pin-do="buttonPin" data-pin-tall="true" data-pin-lang="nl" href="https://nl.pinterest.com/pin/create/button/?url=<?php the_permalink();?>&media=<? the_post_thumbnail();?>"></a>

      <a class="twitter-share-button"
      href="https://twitter.com/intent/tweet?text=Share+sweet+love"
      data-size="large">
    Tweet</a>
    </div>
    <div class="page-navigation hidden-print">
    <?php
      if($link = get_previous_post_link('%link', '%title')) {
        echo '<div class="alignleft">
                <div class="post-button previous">
                  <span class="fa fa-chevron-left"></span>
                  ' . $link . '
                </div>
              </div>';
      }

      if($link = get_next_post_link('%link', '%title')) {
        echo '<div class="alignright">
                <div class="post-button next">
                  ' . $link . '
                  <span class="fa fa-chevron-right"></span>
                </div>
              </div>';
      }
      ?>
      </div>

    <?php if(is_singular('recepten')) :
    get_template_part('templates/post/content', 'recept'); 
    endif;
    ?>
    
    <?php if (is_singular( 'recepten' )): ?>
    <div class="my-3">
        <em>
          <strong>ENJOY ZOETJES!</strong> Heb jij deze "<?php the_title(); ?>" gemaakt? Laat even weten wat je ervan vond of show het resultaat via <a href="https://www.instagram.com/zoetrecepten">Instagram</a> (tag me @zoetrecepten) of mijn <a href="ht tps://www.facebook.com/zoetrecepten">Facebookpagina</a>. Vind ik leuk! Elke week deel ik het mooiste kiekje via Instagram. XOXO Mariette
        </em>
      </div>
    <?php endif;?>
  </footer>
  
  <!-- Zoetrecepten/autonative -->
  <div id='adf-autonative' style='text-align:center; margin:auto;'>
  </div>

    <?php
      get_template_part('templates/more', 'recipes');
      comments_template('/templates/comments.php');
    ?>
  </article>
<?php endwhile; ?>
