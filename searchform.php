<form class="form-inline search-form" role="search" method="get" action="<?php echo home_url( '/' ); ?>">
  <div class="input-group">
    <input type="search" class="form-control" placeholder="Zoeken" aria-describedby="search-button" value="<?php echo get_search_query(); ?>" name="s" >
    <span class="input-group-btn" id="search-button">
      <button type="submit"  class="btn btn-secondary btn-search"><i class="fa fa-search"></i> <span class="sr-only">Search</span>
    </button>
    </span>
  </div>
  <?php if (is_single()): ?>
  <div class"extended-search mb-1">
    <small><a href="/">Uitgebreid zoeken</a></small></div>
  <?php endif; ?>
</form>