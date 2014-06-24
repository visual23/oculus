<?php 
/* Template name: In Your */ 

?>


<?php get_header() ?>

<div class="heroImage"><img src="<?php echo get_field( 'hero_image'); ?>"></div>

<div class="introText">
    <div class="container">
        <div class="row">
        <div class="col-md-7 center-block">
            <div class="introTitle text-center"><?php echo get_field( 'intro_title'); ?></div>
            <?php echo get_field( 'intro_text'); ?>
        </div>
            </div>
    </div>
</div>

<div class="inYourBlockContainer">
    <div class="container">
 
        <?php


$row_count = 0;

 if( get_field( 'in_your_blocks') ){
    $row_count = 0;	
    while( the_repeater_field( 'in_your_blocks') ){ 

        echo '<div class="row">';
        echo '<div class="col-md-4 text-right inYourBlockLeft">'.get_sub_field( 'left_side').'</div>';
        echo '<div class="col-md-7 inYourBlockRight">'.get_sub_field( 'right_side').'</div>';        
        echo '</div>';
		$row_count++;
    }

 }	

 ?>  
    </div>
</div> 

<?php get_footer() ?>