<div class="jumbotron jumbotron-fluid bg-primary">
  <div class="container">
    <h2 class="display-4"><?php the_title(); ?></h2>
    <p class="lead">
      Geschreven door <span itemprop="author"><?php the_author(); ?></span> | <?php if( get_field('bereidingstijd')) { ?><i class="fa fa-clock-o"></i>
      <?php the_field('bereidingstijd'); ?>
      <?php }; if( get_field('personen')) { ?>| 
      <i class="fa fa-cutlery"></i> <span itemprop="recipeYield"><?php the_field('personen'); ?> personen</span>
      <?php }; ?>
    </p>
  </div>
</div>

<div id="recipe">
  <div class="row">
    <div class="col-md-4" itemprop="ingredients">
      <h3>Benodigdheden</h3>

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
      <?php if( ! empty( $bereiding ) ) { ?>
      <h3>Zo maak je <?php echo the_title(); ?>:</h3>
      <div itemprop="recipeInstructions">
      <ol>
        <?php 
        echo $bereiding;
        ?>
      </ol>
      </div>
      <?php } 
      $bereidingswijze2 = the_field('bereidingswijze2') ?>
      <?php if( ! empty( $bereidingswijze2 ) ) { ?>
      <p>
        <strong>Zo maak je <?php echo the_title(); ?></strong>
      </p>
      <?php
      echo $bereidingswijze2;
      }
      ?>
    </div>
	</div>

		<?php if( ! empty( $foto ) ) { ?>
		<img src="<?php echo $foto; ?>"/>
		<?php } ?>

</div>