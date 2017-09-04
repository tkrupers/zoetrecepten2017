<div class="container-fluid">
  <div class="row">
    <div class="col py-2 recipe-filter">
      <div class="col-md-8">
        <h3>Waar ben je naar op zoek?</h3>

        <form name="s" role="search" method="get" action="<?php echo home_url( '/' ); ?>">
          <div class="form-group row">
            <div class="col-sm-12">
              <div class="input-group">
                <input type="search" class="form-control" placeholder="Zoeken" aria-describedby="search-button" value="<?php echo get_search_query(); ?>" name="s" >
                <span class="input-group-btn" id="search-button">
                  <button type="submit"  class="btn btn-secondary btn-search"><i class="fa fa-search"></i> <span class="sr-only">Search</span>
                </button>
                </span>
              </div>
            </div>
          </div>
          <div class="form-group row">
            <div class="col-sm-12 filters">
              <select name="category_name" id="filter_category" class="form-control" onchange="this.form.submit()">
                <option value="" selected>Kies een categorie</option>
                <option value="ontbijt-brunch-lunch" <?php selected( get_query_var( 'category_name' ), 'ontbijt-brunch-lunch' ); ?>>Ontbijt, brunch & lunch</option>
                <option value="taart" <?php selected( get_query_var( 'category_name' ), 'taart' ); ?>>Taart</option>
                <option value="cheesecake-2" <?php selected( get_query_var( 'category_name' ), 'cheesecake-2' ); ?>>Cheesecake</option>
                <option value="tapas" <?php selected( get_query_var( 'category_name' ), 'tapas' ); ?>>Tapashappen</option>
                <option value="toetjes" <?php selected( get_query_var( 'category_name' ), 'toetjes' ); ?>>Toetjes</option>
              </select>
              <select name="gezondigen" class="form-control" onchange="this.form.submit()">
                <option value="" selected>(On)Gezond?</option>
                <option value="gezond-igen" <?php selected( get_query_var( 'gezondigen' ), 'gezond-igen' ); ?>>Gezond-igen</option>
                <option value="zondigen" <?php selected( get_query_var( 'gezondigen' ), 'zondigen' ); ?>>Zondigen</option>
              </select>
              <select name="soort" class="form-control" onchange="this.form.submit()">
                <option value="" selected>Soort</option>
                <option value="vegan" <?php selected( get_query_var( 'soort' ), 'vegan' ); ?>>Vegan</option>
                <option value="glutenvrij" <?php selected( get_query_var( 'soort' ), 'glutenvrij' ); ?>>Glutenvrij</option>
                <option value="lactosevrij" <?php selected( get_query_var( 'soort' ), 'lactosevrij' ); ?>>Lactosevrij</option>
              </select>
            </div>
          </div>
          <input type="hidden" name="post_type" value="recepten" />
        </form>
      </div>
    </div>
  </div>
</div>