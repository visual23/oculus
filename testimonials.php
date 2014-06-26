<div id="homeQuotes">
        <h2 class="borderTitle extraWideTitle"><i>W</i>hat <i>O</i>ur <i>P</i>atients <i>S</i>ay</h2>
       <div class="flexslider-container">
        <div class="flexslider">
            <ul class="slides">
                <?php
		
		global $post;
		$loop_count = 0;  
        $bg_color_array = array('#e2f3f8','#d4edf5','#c6e7f1','#b7e0ee','#a9daeb','#a2d7e8','#9bd4e7','#7ec8e0','#70c2dd');
        $bg_color_count = 0;

	  

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

    echo '<li>';
    echo '<div class="homeQuoteHolder" style="background-color: '.$bg_color_array[$bg_color_count].';">';
    echo '<blockquote class="homeQuote">';
    echo get_field( 'testimonial_text');
    echo '<p>&mdash; '.get_the_title($post->ID).'</p>';
    echo '</blockquote>';
    echo '</div>';
    echo '</li>';
   
    $loop_count++;
    $bg_color_count++;
			

endwhile;

        }
wp_reset_query();


		
?>
                
            </ul>
         </div>
        </div>
    </div>