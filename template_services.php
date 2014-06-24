<?php 
/* Template name: Services */ 

?>


<?php get_header() ?>


<div class="heroImage"><img src="<?php echo get_field( 'hero_image'); ?>"></div>

<div class="introText">
    <div class="container">
        <div class="row">
        <div class="col-md-7 center-block">
            <div class="introTitle"><?php echo get_field( 'intro_title'); ?></div>
            <?php echo get_field( 'intro_text'); ?>
        </div>
    </div>
        </div>
</div>


   
    <div class="container">

       <div class="row colorBoxes">
           <a href="cosmetic/">
        <div class="col-md-6 col-sm-6 nopadding colorBox colorBoxSymbol">
            <div class="colorBoxText colorBoxColor" id="cosmeticBox">
                <h2>cosmetic</h2>
                <?php echo get_field( 'cosmetic_description'); ?>
            </div>
        </div>
               </a>
        <div class="col-md-6 col-sm-6 nopadding colorBox">
            <div class="colorBoxText colorBoxWhite">
                <ul>
  <?php
wp_list_pages("title_li=&child_of=49&show_date=modified
  &date_format=$date_format"); ?>
</ul>
            </div>
        </div>
    </div>
        
        <div class="row colorBoxes">
            <div class="col-md-6 col-sm-6 nopadding colorBox">
            <div class="colorBoxText colorBoxWhite">
                <ul>
  <?php
  wp_list_pages("title_li=&child_of=51&show_date=modified
  &date_format=$date_format"); ?>
</ul>
            </div>
        </div>
            <a href="reconstructive/">
        <div class="col-md-6 col-sm-6 nopadding colorBox colorBoxSymbol">
            <div class="colorBoxText colorBoxColor" id="reconstructiveBox">
                <h2>reconstructive</h2>
                <?php echo get_field( 'reconstructive_description'); ?>
            </div>
        </div> 
                </a>
    </div>
        
        <div class="row colorBoxes">
            <a href="non-surgical/">
        <div class="col-md-6 col-sm-6 nopadding colorBox colorBoxSymbol">
            <div class="colorBoxText colorBoxColor" id="non-surgicalBox">
                <h2>non-surgical</h2>
                <?php echo get_field( 'non-surgical_description'); ?>
            </div>
        </div>
                </a>
        <div class="col-md-6 col-sm-6 nopadding colorBox">
            <div class="colorBoxText colorBoxWhite">
                <ul>
  <?php
  wp_list_pages("title_li=&child_of=53&show_date=modified
  &date_format=$date_format"); ?>
</ul>
            </div>
        </div>
    </div>
        
        <div class="row colorBoxes">
            <div class="col-md-6 col-sm-6 nopadding colorBox">
            <div class="colorBoxText colorBoxWhite">
                <ul>
  <?php
  wp_list_pages("title_li=&child_of=55&show_date=modified
  &date_format=$date_format"); ?>
</ul>
            </div>
        </div>
            <a href="skin-care/">
        <div class="col-md-6 col-sm-6 nopadding colorBox colorBoxSymbol">
            <div class="colorBoxText colorBoxColor" id="skinCareBox">
                <h2>skin care</h2>
                <?php echo get_field( 'skin_care_description'); ?>
            </div>
        </div> 
                </a>
    </div>
        
        
    </div>



<?php get_footer() ?>