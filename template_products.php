<?php 
/* Template name: Products */ 

?>


<?php get_header() ?>

<div class="heroImage"><img src="<?php echo get_field( 'hero_image'); ?>"></div>

<div class="introText">
    <div class="container">
        <div class="row">
        <div class="col-md-7 center-block">
            <?php echo get_field( 'intro_text'); ?>
        </div>
    </div>
        </div>
</div>


   
    <div class="container">

       <div class="row colorBoxes">
           <a href="oculus/">
        <div class="col-md-6 col-sm-6 nopadding colorBox colorBoxSymbol">
            <div class="colorBoxText colorBoxColor">
                <img src="<?php echo get_field( 'oculus_image'); ?>">
                <h2>oculus</h2>
                <?php echo get_field( 'oculus_description'); ?>
            </div>
        </div>
               </a>
        <div class="col-md-6 col-sm-6 nopadding colorBox" id="oculusBox">
            <div class="colorBoxText colorBoxWhite">
                <ul>
<?php

 if( get_field( 'products', 270) ){
    $row_count = 0;	
    while( the_repeater_field( 'products', 270) ){
       
        echo '<li>';
        echo get_sub_field('title');
        echo '</li>';
		$row_count++;
    }

 }	

		  ?>
</ul>
            </div>
        </div>
    </div>
        
        <div class="row colorBoxes">
            <div class="col-md-6 col-sm-6 nopadding colorBox" id="epionceBox">
            <div class="colorBoxText colorBoxWhite">
                <ul>
 <?php

 if( get_field( 'products', 272) ){
    $row_count = 0;	
    while( the_repeater_field( 'products', 272) ){
       
        echo '<li>';
        echo get_sub_field('title');
        echo '</li>';
		$row_count++;
    }

 }	

		  ?>
</ul>
            </div>
        </div>
            <a href="epionce/">
        <div class="col-md-6 col-sm-6 nopadding colorBox colorBoxSymbol">
            <div class="colorBoxText colorBoxColor">
                <img src="<?php echo get_field( 'epionce_image'); ?>">
                <h2>epionce</h2>
                <?php echo get_field( 'epionce_description'); ?>
            </div>
        </div> 
                </a>
    </div>
        
        <div class="row colorBoxes">
            <a href="jan-marini/">
        <div class="col-md-6 col-sm-6 nopadding colorBox colorBoxSymbol">
            <div class="colorBoxText colorBoxColor">
                <img src="<?php echo get_field( 'jan_marini_image'); ?>">
                <h2>jan marini</h2>
                <?php echo get_field( 'jan_marini_description'); ?>
            </div>
        </div>
                </a>
        <div class="col-md-6 col-sm-6 nopadding colorBox" id="janMariniBox">
            <div class="colorBoxText colorBoxWhite">
                <ul>
  <?php

 if( get_field( 'products', 274) ){
    $row_count = 0;	
    while( the_repeater_field( 'products', 274) ){
       
        echo '<li>';
        echo get_sub_field('title');
        echo '</li>';
		$row_count++;
    }

 }	

		  ?>
</ul>
            </div>
        </div>
    </div>
        
        <div class="row colorBoxes">
            <div class="col-md-6 col-sm-6 nopadding colorBox" id="janeIredaleBox">
            <div class="colorBoxText colorBoxWhite">
                <ul>
  <?php

 if( get_field( 'products', 276) ){
    $row_count = 0;	
    while( the_repeater_field( 'products', 276) ){
       
        echo '<li>';
        echo get_sub_field('title');
        echo '</li>';
		$row_count++;
    }

 }	

		  ?>
</ul>
            </div>
        </div>
            <a href="jane-iredale/">
        <div class="col-md-6 col-sm-6 nopadding colorBox colorBoxSymbol">
            <div class="colorBoxText colorBoxColor">
                <img src="<?php echo get_field( 'jane_iredale_image'); ?>">
                <h2>jane iredale</h2>
                <?php echo get_field( 'jane_iredale_description'); ?>
            </div>
        </div> 
                </a>
    </div>
        
        <div class="row colorBoxes">
            <a href="revision/">
        <div class="col-md-6 col-sm-6 nopadding colorBox colorBoxSymbol">
            <div class="colorBoxText colorBoxColor">
                <img src="<?php echo get_field( 'revision_image'); ?>">
                <h2>revision</h2>
                <?php echo get_field( 'revision_description'); ?>
            </div>
        </div>
                </a>
        <div class="col-md-6 col-sm-6 nopadding colorBox" id="revisionBox">
            <div class="colorBoxText colorBoxWhite">
                <ul>
<?php

 if( get_field( 'products', 278) ){
    $row_count = 0;	
    while( the_repeater_field( 'products', 278) ){
       
        echo '<li>';
        echo get_sub_field('title');
        echo '</li>';
		$row_count++;
    }

 }	

		  ?>
</ul>
            </div>
        </div>
    </div>
        
        <div class="row colorBoxes">
            <div class="col-md-6 col-sm-6 nopadding colorBox" id="skinMedicaBox">
            <div class="colorBoxText colorBoxWhite">
                <ul>
  <?php

 if( get_field( 'products', 301) ){
    $row_count = 0;	
    while( the_repeater_field( 'products', 301) ){
       
        echo '<li>';
        echo get_sub_field('title');
        echo '</li>';
		$row_count++;
    }

 }	

		  ?>
</ul>
            </div>
        </div>
            <a href="skin medica/">
        <div class="col-md-6 col-sm-6 nopadding colorBox colorBoxSymbol">
            <div class="colorBoxText colorBoxColor">
                <img src="<?php echo get_field( 'skin_medica_image'); ?>">
                <h2>skin medica</h2>
                <?php echo get_field( 'skin_medica_description'); ?>
            </div>
        </div> 
                </a>
    </div>
        
        
    </div>



<?php get_footer() ?>