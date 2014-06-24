<?php 
/* Template name: Testimonials */ 

?>


<?php get_header() ?>

<div class="heroImage"><img src="<?php echo get_field( 'hero_image'); ?>"></div>

<div class="introText">
    <div class="container">
        <div class="col-md-7 center-block">
            <?php echo get_field( 'intro_text'); ?>            
        </div>
    </div>
</div>

<div class="container">
    
    <div class="row testimonialGrid">
        <?php
		
		global $post;
		$loop_count = 0;  
        $bg_color_array = array('#e2f3f8','#d4edf5','#c6e7f1','#b7e0ee','#a9daeb','#a2d7e8','#9bd4e7','#7ec8e0','#70c2dd');
        $bg_color_count = 0;
        $video_count = 0;

	  

wp_reset_query();
$args=array(
  'post_type' => 'testimonials',
  'post_status' => 'publish',
    'orderby'   => 'menu_order',
    'order'     => 'ASC',
  'posts_per_page'=> -1
);
$my_query = null;
$my_query = new WP_Query($args);
$total_testimonials = $my_query->found_posts;

if( $my_query->have_posts() ) {
         
  while ($my_query->have_posts()) : $my_query->the_post(); 
    $my_custom_fields = get_fields(get_the_ID());
    if ( $bg_color_count == $total_testimonials)
    {
        $bg_color_count = 0;
    }
    
    // check if the testimonial has a video
    if(get_field( 'mp4_video'))
    {
        // alternate position of videos
        if($video_count == 0)
        {
            //
            echo '<div class="col-md-6 col-sm-6 nopadding testimonialBox" style="background-color: '.$bg_color_array[$bg_color_count].';">';
            echo '<div class="testimonialVideo">';
            echo '<video id="example_video_1" class="video-js vjs-default-skin" controls preload="auto" width="auto" height="auto" poster="'.get_field( 'video_poster_image').'" data-setup=\'{"example_option":true}\'>';
            echo '<source src="'.get_field( 'mp4_video').'" type="video/mp4" />';
            echo '<source src="'.get_field( 'webm_video').'" type="video/webm" />';
            echo '</video>';      
            echo '</div>';
            echo '</div>';
            
            echo '<div class="col-md-6 col-sm-6 nopadding testimonialBox" style="background-color: '.$bg_color_array[$bg_color_count].';">';
            echo '<div class="testimonialBoxText">';
            echo get_field( 'testimonial_text');
            echo '<hr class="testimonalHR"/>';
            echo '<span class="testimonialPagePerson">watch '.get_the_title($post->ID).'</span>';            
            echo '</div>';
            echo '</div>';
            
            $video_count++;
        }
        else
        {
            echo '<div class="col-md-6 col-sm-6 nopadding testimonialBox" style="background-color: '.$bg_color_array[$bg_color_count].';">';
            echo '<div class="testimonialBoxText">';
            echo get_field( 'testimonial_text');
            echo '<hr class="testimonalHR"/>';
            echo '<span class="testimonialPagePerson">watch '.get_the_title($post->ID).'</span>';            
            echo '</div>';
            echo '</div>';
            
            echo '<div class="col-md-6 col-sm-6 nopadding testimonialBox" style="background-color: '.$bg_color_array[$bg_color_count].';">';
            echo '<div class="testimonialVideo">';
            echo '<video id="example_video_1" class="video-js vjs-default-skin" controls preload="auto" width="auto" height="auto" poster="'.get_field( 'video_poster_image').'"   data-setup=\'{"example_option":true}\'>';
            echo '<source src="'.get_field( 'mp4_video').'" type="video/mp4" />';
            echo '<source src="'.get_field( 'webm_video').'" type="video/webm" />';
            echo '</video>';      
            echo '</div>';
            echo '</div>';
            
            $video_count = 0;
        }
    }
    else
    {
        // normal testimonial
        echo '<div class="col-md-6 col-sm-6 nopadding testimonialBox" style="background-color: '.$bg_color_array[$bg_color_count].';">';
        echo '<div class="testimonialBoxText">';
        echo get_field( 'testimonial_text');
        echo '<hr class="testimonalHR"/>';
        echo '<span class="testimonialPagePerson">'.get_the_title($post->ID).'</span>';            
        echo '</div>';
        echo '</div>';
    }
    
   
   
    $loop_count++;
    $bg_color_count++;
			

endwhile;

        }
wp_reset_query();


		
?>
        
    </div>


</div>




<?php get_footer() ?>