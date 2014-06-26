<?php 
/* Template name: Doctors Child */ 
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


   
    <div class="container">
        <?php

$bg_color_array = array('#e2f3f8','#d4edf5','#c6e7f1','#b7e0ee','#a9daeb','#a2d7e8','#9bd4e7','#7ec8e0','#70c2dd');
$bg_color_count = 0;
$box_count = 0;
$row_count = 0;

 if( get_field( 'content_block') ){
    $row_count = 0;	
    while( the_repeater_field( 'content_block') ){        

        
        // for alternating left and right boxes.
        if($box_count == 0)
        {
            // check if the row has a video
            if(get_sub_field( 'mp4_video'))
            {
                echo '<div class="row colorBoxes">';   
                echo '<div class="col-md-6 col-sm-6 nopadding colorBox" style="background-color: '.$bg_color_array[$bg_color_count].';"><div class="colorBoxText colorBoxColor">'.get_sub_field('color_block').'</div></div>';
                echo '<div class="col-md-6 col-sm-6 nopadding colorBox">';
                echo '<div class="colorBoxVideo">';
                echo '<video id="example_video_'.$row_count.'" class="video-js vjs-default-skin" controls preload="auto" width="auto" height="auto" poster="'.get_sub_field( 'video_poster_image').'" data-setup=\'{"example_option":true}\'>';
                echo '<source src="'.get_sub_field( 'mp4_video').'" type="video/mp4" />';
                echo '<source src="'.get_sub_field( 'webm_video').'" type="video/webm" />';
                echo '</video>';      
                echo '</div>';
                echo '</div>';
            }
            else
            {
                echo '<div class="row colorBoxes">';   
                echo '<div class="col-md-6 col-sm-6 nopadding colorBox" style="background-color: '.$bg_color_array[$bg_color_count].';"><div class="colorBoxText colorBoxColor">'.get_sub_field('color_block').'</div></div>';
                echo '<div class="col-md-6 col-sm-6 nopadding colorBox"><div class="colorBoxText colorBoxWhite">'.get_sub_field('white_block').'</div></div>';
                echo '</div>';
            }
            
            
            
            $box_count++;
        }
        else
        {
            if(get_sub_field( 'mp4_video'))
            {
                echo '<div class="row colorBoxes">';   
                
                echo '<div class="col-md-6 col-sm-6 col-sm-push-6 nopadding colorBox">';
                echo '<div class="colorBoxVideo">';
                echo '<video id="example_video_'.$row_count.'" class="video-js vjs-default-skin" controls preload="auto" width="auto" height="auto" poster="'.get_sub_field( 'video_poster_image').'" data-setup=\'{"example_option":true}\'>';
                echo '<source src="'.get_sub_field( 'mp4_video').'" type="video/mp4" />';
                echo '<source src="'.get_sub_field( 'webm_video').'" type="video/webm" />';
                echo '</video>';      
                echo '</div>';
                echo '</div>';
                echo '<div class="col-md-6 col-sm-6 col-sm-pull-6 nopadding colorBox" style="background-color: '.$bg_color_array[$bg_color_count].';"><div class="colorBoxText colorBoxColor">'.get_sub_field('color_block').'</div></div>';
                echo '</div>';
            }
            else
            {
                echo '<div class="row colorBoxes">';  
                echo '<div class="col-md-6 col-sm-6 col-sm-push-6 nopadding colorBox" style="background-color: '.$bg_color_array[$bg_color_count].';"><div class="colorBoxText colorBoxColor">'.get_sub_field('color_block').'</div></div>';
                echo '<div class="col-md-6 col-sm-6 col-sm-pull-6 nopadding colorBox"><div class="colorBoxText colorBoxWhite">'.get_sub_field('white_block').'</div></div>';
                 
                echo '</div>';
            }
            
            
            
            $box_count = 0;
        }
       
        
		$row_count++;	
		$bg_color_count++;
    }

 }	

		  ?>  
        
        <?php

            if (is_page( 26 )):
        ?>
        
        <div class="row picGrid">

        <div class="col-md-6 col-sm-6 nopadding picBox">
            <div class="picBoxText lightBlueBG picBoxTextExtraPadding">
                <?php echo get_field( 'face_change_text'); ?>
            </div>
            <div class="picBoxTitle fadedPinkishBG"><a href="<?php echo get_field( 'face_change_link'); ?>" class="readMore">read more</a>
            </div>
        </div>
        <div class="col-md-6 col-sm-6 nopadding picBox ">
            <img src="<?php echo get_field( 'face_change_image'); ?>">
        </div>
    </div>
       <?php

            endif;
        ?> 
        
    </div>



<?php get_footer() ?>