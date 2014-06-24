<?php 
/* Template name: Staff */ 

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

<div class="staffRows" id="oculusTeam">    
    <div class="container">
        <h2 class="borderTitle borderTitleWide">Oculus Team</h2>
        <?php

 if( get_field( 'oculus_team_member') ){
    $row_count = 0;	
    while( the_repeater_field( 'oculus_team_member') ){
       
        echo '<div class="row">';   
        echo '<div class="col-md-3 text-right"><span class="teamName">'.get_sub_field('name').'</span><span class="teamTitle">'.get_sub_field('job_title').'</span></div>';
        echo '<div class="col-md-8 col-md-offset-1"><span class="teamDescription">'.get_sub_field('description').'</span></div>';
        echo '</div>';
			
		$row_count++;
    }

 }	

		  ?>        
    </div>
</div>

<div class="staffRows" id="plasticSurgeryTeam">    
    <div class="container">
        <h2 class="borderTitle borderTitleWide">Plastic Surgery Team</h2>
        <?php

 if( get_field( 'plastic_surgery_team_member') ){
    $row_count = 0;	
    while( the_repeater_field( 'plastic_surgery_team_member') ){
       
        echo '<div class="row">';   
        echo '<div class="col-md-3 text-right"><span class="teamName">'.get_sub_field('name').'</span><span class="teamTitle">'.get_sub_field('job_title').'</span></div>';
        echo '<div class="col-md-8 col-md-offset-1"><span class="teamDescription">'.get_sub_field('description').'</span></div>';
        echo '</div>';
			
		$row_count++;
    }

 }	

		  ?>        
    </div>
</div>

<div class="staffRows" id="skinCenterTeam">    
    <div class="container">
        <h2 class="borderTitle borderTitleWide">Skin Center Team</h2>
        <?php

 if( get_field( 'skin_center_team_member') ){
    $row_count = 0;	
    while( the_repeater_field( 'skin_center_team_member') ){
       
        echo '<div class="row">';   
        echo '<div class="col-md-3 text-right"><span class="teamName">'.get_sub_field('name').'</span><span class="teamTitle">'.get_sub_field('job_title').'</span></div>';
        echo '<div class="col-md-8 col-md-offset-1"><span class="teamDescription">'.get_sub_field('description').'</span></div>';
        echo '</div>';
			
		$row_count++;
    }

 }	

		  ?>        
    </div>
</div>




<?php get_footer() ?>

<!-- add page specific js here -->
</body>

</html>