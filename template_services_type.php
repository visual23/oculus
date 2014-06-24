<?php 
/* Template name: Services Type */ 

$template_url= get_bloginfo( 'template_url' ); 
$site_url= get_bloginfo( 'url' ); ?>


<?php get_header() ?>

<?php
    require_once 'Mobile_Detect.php'; 
   $detect=new Mobile_Detect; 
?>

<div class="whiteIntro">
    <div class="container">
        <div class="row">
        <div class="col-md-12 center-block text-center">
            <div class="introTitle"><?php echo get_field( 'intro_title'); ?></div>
        </div>
            </div>
    </div>
</div>

<div class="introText withBorder">
    <div class="container">
        <div class="row">
        <div class="col-md-7 center-block">
            <?php echo get_field( 'intro_text'); ?>
        </div>
            </div>
    </div>
</div>



<!--Child Page Thumbnails Start-->
<?php 
global $post;

$bg_color_array = array('#e2f3f8','#d4edf5','#c6e7f1','#b7e0ee','#a9daeb','#a2d7e8','#9bd4e7','#7ec8e0','#70c2dd');
$bg_color_count = 0;

$subs = new WP_Query( array( 'post_parent' => $post->ID, 'post_type' => 'page' ));
$total_testimonials = $subs->found_posts;

    if( $subs->have_posts() ) : while( $subs->have_posts() ) : $subs->the_post();
    
    if ( $bg_color_count == $total_testimonials)
    {
        $bg_color_count = 0;
    }

    echo '<a href="'.$post->post_name.'" class="servicesSubListLink">';
    echo '<div class="servicesSubList" style="background-color: '.$bg_color_array[$bg_color_count].';">  ';  
    echo '<div class="container">';
        echo '<div class="row">';
            echo '<div class="col-md-5 col-md-offset-1">';
            echo '<div class="servicesSubListTitleWrapper">';
            echo '<div class="servicesSubListTitle  text-right">'.get_field( 'services_title').'</div>';
            echo '</div>';
            echo '</div>';
            echo '<div class="col-md-5 ">';
            echo '<div class="servicesSubListCopyWrapper">';
            echo '<div class="servicesSubListCopy">'.get_field( 'services_description').'</div>';   
            echo '</div>';
           echo '</div>';
        echo '</div>';
    echo '</div>';  
echo '</div>';
echo '</a>';
$bg_color_count++;
    endwhile; endif; wp_reset_postdata(); ?>
<!--Child Page Thumbnails End-->

<?php get_footer() ?>

<!-- add page specific js here -->
</body>

</html>