<?php 
/* Template name: Contact Visit Us */ 

 ?>


<?php get_header() ?>

    <?php

$bg_color_array = array('#f0f9fc','#e3f1ed','#fff');

$row_count = 0;

 if( get_field( 'contact_visit_us_blocks') ){
    $row_count = 0;	
    while( the_repeater_field( 'contact_visit_us_blocks') ){ 
        echo '<div class="visitUsBlockContainer" style="background-color: '.$bg_color_array[$row_count].';">';
        echo '<div class="container">';
        echo '<div class="row">';
        echo '<div class="col-md-4 col-sm-4 text-right visitUsBlockLeft">'.get_sub_field( 'title').'</div>';
        if($row_count == 0 || $row_count == 1)
        {
            echo '<div class="col-md-8 col-sm-8 visitUsBlockRight visitUsAddress">'.get_sub_field( 'information').'</div>';
        }
        else
        {
            echo '<div class="col-md-7 col-sm-7 visitUsBlockRight">'.get_sub_field( 'information').'</div>';
        }
        
        echo '</div>';
        echo '</div>';
        echo '</div>';
		$row_count++;
    }

 }	

		  ?> 

<?php get_footer() ?>