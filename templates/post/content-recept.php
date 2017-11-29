<span class="print-brand text-primary visible-print-block" href="/">Zoetrecepten</span>
<div id="recipe-wrapper" class="jumbotron jumbotron-fluid">
  <div class="container">
    <h2 class="display-4"><?php the_title(); ?></h2>
    <p class="lead">
      <span class="mx-2">Door <span itemprop="author"><?php the_author(); ?></span></span>|<span class="mx-2"><?php if( get_field('bereidingstijd')) { ?><i class="fa fa-clock-o"></i>
      <?php the_field('bereidingstijd'); ?></span>
      <?php }; if( get_field('personen')) { ?>
        |
        <span class="mx-2"><i class="fa fa-pie-chart"></i> <span itemprop="recipeYield"><?php the_field('personen'); ?> personen</span></span>
      <?php }; ?>
    </p>
    <button class="btn btn hidden-print" onclick="window.print()"><span class="fa fa-print"></span> Print</button>
  </div>
</div>

<div id="recipe">
  <div class="row">
    <div class="col-md-4 mb-2" itemprop="ingredients">
      <h3>Dit heb je nodig</h3>

      <ul>
        <?php	
        if( ! empty( $key_1_value ) ) { 
          echo $key_1_value; 
        }
        ?>
      </ul>

      <?php
      the_field('ingredientenlijst');
      ?>
    </div>
    <div class="col-md-8">
    <h3>En zo doe je het</h3>
      <div itemprop="recipeInstructions">
      <?php $bereidingswijze2 = the_field('bereidingswijze2') ?>
      
      <?php echo $bereidingswijze2; ?>
      
      </div>
    </div>
	</div>

		<?php if( ! empty( $foto ) ) { ?>
		<img src="<?php echo $foto; ?>"/>
		<?php } ?>

</div>