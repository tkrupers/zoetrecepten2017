<nav class="navbar sticky-top navbar-toggleable-md navbar-light" style="background-color:white">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand text-primary" href="/">Zoetrecepten</a>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
     <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'walker' => new wp_bootstrap_navwalker(), 'menu_class' => 'navbar-nav mr-auto']);
      endif;
      ?>
<form class="form-inline">
    <div class="input-group">
      <input type="text" class="form-control" placeholder="Zoeken" aria-describedby="basic-addon1">
      <span class="input-group-addon" id="basic-addon1">@</span>
    </div>
  </form>
  </div>
</nav>
