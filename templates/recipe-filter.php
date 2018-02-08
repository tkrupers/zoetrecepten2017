<div class="rt__wrapper container-fluid">
  <div class="recipe-filter py-2">
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
              <option value="basisrecepten" <?php selected( get_query_var( 'category_name' ), 'basisrecepten' ); ?>>Basisrecepten</option>
              <option value="cake-cupcakes-muffins" <?php selected( get_query_var( 'category_name' ), 'cake-cupcakes-muffins' ); ?>>Cake, cupcakes & muffins</option>
              <option value="drankjes-ijs" <?php selected( get_query_var( 'category_name' ), 'drankjes-ijs' ); ?>>Drankjes & ijs(jes)</option>
              <option value="koekjes-plaatkoek" <?php selected( get_query_var( 'category_name' ), 'koekjes-plaatkoek' ); ?>>Koekjes & plaatkoek</option>
              <option value="ontbijt-brunch-lunch" <?php selected( get_query_var( 'category_name' ), 'ontbijt-brunch-lunch' ); ?>>Ontbijt, brunch & lunch</option>
              <option value="overig-gebak" <?php selected( get_query_var( 'category_name' ), 'overig-gebak' ); ?>>Overig gebak</option>
              <option value="taart" <?php selected( get_query_var( 'category_name' ), 'taart' ); ?>>Taart</option>
              <option value="toetjes" <?php selected( get_query_var( 'category_name' ), 'toetjes' ); ?>>Toetjes</option>
              <option value="tussendoor" <?php selected( get_query_var( 'category_name' ), 'tussendoor' ); ?>>Tussendoor</option>
              <option value="zoete-toppings" <?php selected( get_query_var( 'category_name' ), 'zoete-toppings' ); ?>>Zoete toppings</option>
              <option value="zout" <?php selected( get_query_var( 'category_name' ), 'zout' ); ?>>Salade, soep, quiche & tapas</option>
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
              <option value="notenvrij" <?php selected( get_query_var( 'soort' ), 'notenvrij' ); ?>>Notenvrij</option>
              <option value="suikervrij" <?php selected( get_query_var( 'soort' ), 'suikervrij' ); ?>>Suikervrij</option>
            </select>
          </div>
        </div>
        <input type="hidden" name="post_type[]" value="recepten" />
        <input type="hidden" name="post_type[]" value="blog" />
      </form>
    </div>
  </div>
</div>