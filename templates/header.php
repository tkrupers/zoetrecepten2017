<a href="https://partnerprogramma.bol.com/click/click?p=1&t=url&s=27739&f=TXL&url=https%3A%2F%2Fwww.bol.com%2Fnl%2Fp%2Fpuur-zoet%2F9200000085089948%2F&name=PUUR%20ZOET" class="boek-alert d-block p-3 text-center text-white" role="alert">
Bestel PUUR ZOET nu via deze link voor €24,99!
</a>
<nav class="navbar fixed-top navbar-toggleable-md navbar-light hidden-print py-2" style="background-color:white">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand text-primary" href="/">
  <img src="<?= get_template_directory_uri(); ?>/dist/images/logo-zoetrecepten.svg" onerror="this.onerror=null; this.src='<?= get_template_directory_uri(); ?>/dist/images/logo-zoetrecepten.png'" width="175px">
  <span class="sr-only">Zoetrecepten</span>
  </a>

  <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
    <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'walker' => new wp_bootstrap_navwalker(), 'menu_class' => 'navbar-nav mr-auto']);
      endif;
      ?>
      <?php get_template_part('templates/content', 'social'); ?>
  </div>
</nav>