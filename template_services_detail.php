<?php 
/* Template name: Services Detail */ 

?>


<?php get_header() ?>

<div class="whiteIntro">
    <div class="container">
        <div class="row">
        <div class="col-md-12 center-block text-center">
            <div class="introTitle small"><?php echo get_field( 'intro_title'); ?></div>
            <div class="subTitle"><?php echo get_field( 'sub_title'); ?></div>
        </div>
            </div>
    </div>
</div>

<div class="introText withBorder verylightBlueBG">
    <div class="container">
        <div class="row">
        <div class="col-md-10 center-block">
            <?php echo get_field( 'intro_text'); ?>
        </div>
            </div>
    </div>
</div>

<div class="serviceDetailContent">
    <div class="container">
        <?php

 if( get_field( 'service_detail_block') ){
    $row_count = 0;	
    while( the_repeater_field( 'service_detail_block') ){
       
        echo '<div class="row">';
        echo '<div class="col-md-4 col-sm-4 text-right"><div class="seviceDetailBlockTitle">'.get_sub_field('title').'</div></div>';
        echo '<div class="col-md-6 col-md-offset-1 col-sm-6 col-sm-offset-1"><div class="seviceDetailBlockText">'.get_sub_field('text').'</div></div>';
        echo '</div> ';         
			
		$row_count++;
    }

 }	

		  ?> 
        
    </div>
</div>


<?php get_footer() ?>