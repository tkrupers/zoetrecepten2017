<?php
$orig_post = $post;
global $post;
$tags = wp_get_post_tags($post->ID);

if ($tags) { ?>
<div class="row py-2 hidden-print">
  <div class="col-md-12">
    <h3>Bekijk ook</h3>
    <p class="lead">de volgende <em>healthy & sweet</em> recepten</p>
    <div class="card-columns">
    <?php
			$tag_ids = array();
			foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;
			$args=array(
			'post_type' => array('recepten','blog'),
			'category__in' => $category_ids,
			'tag__in' => $tag_ids,
			'post__not_in' => array($post->ID),
			'posts_per_page'=>6, // Number of related posts to display.
			'caller_get_posts'=>1
			);

			$my_query = new wp_query( $args );

			while( $my_query->have_posts() ) {
        $my_query->the_post(); ?>
        <article class="card">
        <img class="card-img-top img-fluid" src="<?php the_post_thumbnail_url('small'); ?>" alt="<?php echo the_title(); ?>">
        <div class="card-block">
          <h4 class="post-meta"><small><?php the_author(); ?> / <?php the_date('d M Y'); ?></small></h4>
          <a href="<?php the_permalink(); ?>">
            <h3 class="card-title">	<?php echo the_title(); ?></h3>
          </a>
        </div>
      </article>
      <?php } ?>
    </div>
  </div>
</div>

<?php 	
	}
	$post = $orig_post;
	wp_reset_query();
?>