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
  </footer>
    <?php
      get_template_part('templates/more', 'recipes');
      comments_template('/templates/comments.php');
    ?>
  </article>
<?php endwhile; ?>
