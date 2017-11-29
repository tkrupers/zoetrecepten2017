<nav class="navbar fixed-top navbar-toggleable-md navbar-light hidden-print" style="background-color:white">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand text-primary" href="/">
  <img src="<?= get_template_directory_uri(); ?>/dist/images/logo-zoetrecepten.svg" onerror="this.onerror=null; this.src='<?= get_template_directory_uri(); ?>/dist/images/logo-zoetrecepten.png'" width="150px">
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

<!-- meetpixels Hero Jam 1 campagne -->
<div style="display:none;"><img src="http://pubads.g.doubleclick.net/gampad/ad?iu=/4045/Blogads/188898404&sz=1x1&t=campaign%3D188898404_429692164_1" /></div>

<!-- meetpixels Hero Jam 2 campagne -->
<div style="display:none;"><img src="http://pubads.g.doubleclick.net/gampad/ad?iu=/4045/Blogads/188898404&sz=1x1&t=campaign%3D188898404_429692164_2" /></div>