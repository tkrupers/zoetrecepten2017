<nav class="navbar fixed-top navbar-toggleable-md navbar-light hidden-print" style="background-color:white">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand text-primary" href="/">Zoetrecepten</a>

  <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
     <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'walker' => new wp_bootstrap_navwalker(), 'menu_class' => 'navbar-nav mr-auto']);
      endif;
      ?>
      <?php get_template_part('templates/content', 'social'); ?>
  </div>
</nav>
