<div class="row py-2 recipe-filter  justify-content-center">
  <div class="col-md-6">
    <h3>Waar ben je naar op zoek?</h3>
    <form class="form-inline" name="s" role="search" method="get" action="<?php echo home_url( '/' ); ?>">
      <select name="category_name" id="filter_category" class="form-control" onchange="this.form.submit()">
        <option value="" selected>Kies een categorie</option>
        <option value="ontbijt-brunch-lunch" <?php selected( get_query_var( 'category_name' ), 'ontbijt-brunch-lunch' ); ?>>Ontbijt, brunch & lunch</option>
        <option value="taart" <?php selected( get_query_var( 'category_name' ), 'taart' ); ?>>Taart</option>
        <option value="cheesecake-2" <?php selected( get_query_var( 'category_name' ), 'cheesecake-2' ); ?>>Cheesecake</option>
        <option value="tapas" <?php selected( get_query_var( 'category_name' ), 'tapas' ); ?>>Tapashappen</option>
        <option value="toetjes" <?php selected( get_query_var( 'category_name' ), 'toetjes' ); ?>>Toetjes</option>
      </select>
      <select name="gezondigen" class="form-control" onchange="this.form.submit()">
        <option value="" selected>Kies een categorie</option>
        <option value="gezond-igen" <?php selected( get_query_var( 'gezondigen' ), 'gezond-igen' ); ?>>Gezond-igen</option>
        <option value="zondigen" <?php selected( get_query_var( 'gezondigen' ), 'zondigen' ); ?>>Zondigen</option>
      </select>
      <input type="hidden" name="s" value="<?php echo $_GET['email']; ?>">
      <input type="hidden" name="post_type" value="recepten" />
    </form>
  </div>
</div>