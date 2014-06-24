<?php 
/* Template name: Privacy Policy */ 
 ?>

<?php get_header() ?>

 
        <?php

$bg_color_array = array('#f0f9fc','#f4f4f4','#fff');

$row_count = 0;

 if( get_field( 'privacy_policy_blocks') ){
    $row_count = 0;	
    while( the_repeater_field( 'privacy_policy_blocks') ){ 
        echo '<div class="privacyPolicyBlockContainer" style="background-color: '.$bg_color_array[$row_count].';">';
        echo '<div class="container">';
        echo '<div class="row">';
        echo '<div class="col-md-4 text-right privacyPolicyBlockLeft">'.get_sub_field( 'title').'</div>';
        echo '<div class="col-md-7 privacyPolicyBlockRight">'.get_sub_field( 'information').'</div>';    
        echo '</div>';
        echo '</div>';
        echo '</div>';
		$row_count++;
    }

 }	

		  ?>  
        
       




<?php get_footer() ?>

<!-- add page specific js here -->
</body>

</html>