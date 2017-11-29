<article class="card">
	<a href="<?php the_permalink(); ?>">
		<img class="card-img-top img-fluid" src="<?php the_post_thumbnail_url('small'); ?>" alt="<?php echo the_title(); ?>">
	</a>
	<div class="card-block">
		<h4 class="post-meta"><small><?php the_author(); ?> / <?php the_date('d M Y'); ?></small></h4>
		<a href="<?php the_permalink(); ?>">
			<h3 class="card-title">	<?php echo the_title(); ?></h3>
		</a>
		<p class="card-text"><?php echo the_excerpt(); ?></p>
	</div>
</article>