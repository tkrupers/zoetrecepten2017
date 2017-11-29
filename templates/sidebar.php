<?php get_search_form(); ?>

<section class="widget">
<div class="card">
  <img class="card-img-top img-fluid" src="<?= get_template_directory_uri(); ?>/dist/images/mariette.jpg" alt="Card image cap">
  <div class="card-body">
    <p class="card-text">
      Welkom op Zoetrecepten. Hier vind je alles om zoet te zondigen & gezondigen, voor een easy óf een epic baking sessie. Met een snufje zout. Enjoy!</p>
    <footer>X Mariette</footer>
  </div>
</div>
</section>

<!-- Zoetrecepten/rectangle -->
<div id='adf-rectangle' style='text-align:center; margin:auto;'>
</div>

<?php dynamic_sidebar('sidebar-primary'); ?>
