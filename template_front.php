<?php 
/* Template name: Front */ 

?>


<?php get_header() ?>


<div class="heroImage"><img src="<?php echo get_field( 'hero_image'); ?>"></div>

<div class="introText">
    <div class="container">
        <div class="row">
        <h2 class="borderTitle borderTitleWide"><?php echo get_field( 'services_title'); ?></h2>
        <div class="col-md-9 center-block">
            <?php echo get_field( 'services_text'); ?>            
            <div class="text-center"><a href="<?php echo esc_url( home_url( '/' ) ); ?>services/" class="centerLink">view our services</a>
            </div>
        </div>
            </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-6 col-sm-6 nopadding picBox firstPic">
            <a href="<?php echo get_field( 'in_your_box_1_link'); ?>">
            <img src="<?php echo get_field( 'in_your_box_1_image'); ?>">
            <div class="picBoxTitle"><?php echo get_field( 'in_your_box_1_title'); ?></div>
            </a>
        </div>
        <div class="col-md-6 col-sm-6 nopadding picBox">
            <a href="<?php echo get_field( 'in_your_box_2_link'); ?>">
            <img src="<?php echo get_field( 'in_your_box_2_image'); ?>">
            <div class="picBoxTitle"><?php echo get_field( 'in_your_box_2_title'); ?></div>
            </a>
        </div>
        <div class="col-md-6 col-sm-6 nopadding picBox firstPic">
            <a href="<?php echo get_field( 'in_your_box_3_link'); ?>">
            <img src="<?php echo get_field( 'in_your_box_3_image'); ?>">
            <div class="picBoxTitle"><?php echo get_field( 'in_your_box_3_title'); ?></div>
            </a>
        </div>
        <div class="col-md-6 col-sm-6 nopadding picBox">
            <a href="<?php echo get_field( 'in_your_box_4_link'); ?>">
            <img src="<?php echo get_field( 'in_your_box_4_image'); ?>">
            <div class="picBoxTitle"><?php echo get_field( 'in_your_box_4_title'); ?></div>
            </a>
        </div>
    </div>

    <div class="row picGrid">
        <h2 class="borderTitle centerTitle"><i>O</i>ur <i>D</i>octors</h2>
        <div class="col-md-6 col-sm-6 nopadding picBox ">
            <img src="<?php echo get_field( 'dr._cole_photo'); ?>">
            <div class="picBoxTitle darkGreyBG">dr. cole</div>
        </div>
        <div class="col-md-6 col-sm-6 nopadding picBox">
            <div class="picBoxText lightBlueBG picBoxPadding">
                <?php echo get_field( 'dr._cole_text'); ?>
            </div>
            <div class="picBoxTitle darkGreyBG"><a href="<?php echo get_field( 'dr._cole_link'); ?>" class="readMore">read more</a>
            </div>
        </div>
    </div>

    <div class="row picGrid">
        <div class="col-md-6 col-sm-6 col-sm-push-6 nopadding picBox">
            <img src="<?php echo get_field( 'dr._cox_photo'); ?>">
            <div class="picBoxTitle fadedPinkishBG">dr. cox</div>
        </div>
        <div class="col-md-6 col-sm-6 col-sm-pull-6 nopadding picBox">
            <div class="picBoxText lightBlueBG">
                <?php echo get_field( 'dr._cox_text'); ?>
            </div>
            <div class="picBoxTitle pinkishBG"><a href="<?php echo get_field( 'dr._cox_link'); ?>" class="readMore">read more</a>
            </div>
        </div>
        
    </div>

    <div class="row picGrid">
        <div class="col-md-6 col-sm-6 nopadding picBox ">
            <img src="<?php echo get_field( 'dr._murphy_photo'); ?>">
            <div class="picBoxTitle fadedPinkishBG">dr. murphy</div>
        </div>
        <div class="col-md-6 col-sm-6 nopadding picBox">
            <div class="picBoxText lightBlueBG">
                <?php echo get_field( 'dr._murphy_text'); ?>
            </div>
            <div class="picBoxTitle pinkishBG"><a href="<?php echo get_field( 'dr._murphy_link'); ?>" class="readMore">read more</a>
            </div>
        </div>
    </div>

    <div class="row picGrid">
        <h2 class="borderTitle centerTitle"><i>R</i>ead <i>D</i>r. cole</h2>
        <div class="col-md-6 col-sm-6 col-sm-push-6 nopadding picBox ">
            <img src="<?php echo get_field( 'read_dr._cole_photo'); ?>">
        </div>
        <div class="col-md-6 col-sm-6 col-sm-pull-6 nopadding picBox">
            <div class="picBoxText lightBlueBG picBoxPadding">
                <?php echo get_field( 'read_dr._cole_text'); ?>
            </div>
            <div class="picBoxTitle fadedPinkishBG"><a href="<?php echo get_field( 'read_dr._cole_link'); ?>" class="readMore">read more</a>
            </div>
        </div>        
    </div>

    <div class="row picGrid">
        <h2 class="borderTitle centerTitle"><i>O</i>ur <i>S</i>taff</h2> 
        <div class="col-md-6 col-sm-6 nopadding picBox ">
            <img src="<?php echo get_field( 'home_our_staff_photo'); ?>">
        </div>
        <div class="col-md-6 col-sm-6 nopadding picBox">
            <div class="picBoxText lightBlueBG picBoxPadding">
                <?php echo get_field( 'home_our_staff_text'); ?>
            </div>
            <div class="picBoxTitle fadedPinkishBG"><a href="<?php echo get_field( 'home_our_staff_link'); ?>" class="readMore">read more</a>
            </div>
        </div>
    </div>

    <div class="row picGrid">
        <h2 class="borderTitle centerTitle"><i>O</i>ur <i>F</i>acilities</h2>
        <div class="col-md-6 col-sm-6 col-sm-push-6 nopadding picBox ">
            <img src="<?php echo get_field( 'home_surgery_center_photo'); ?>">
            <div class="picBoxTitle fadedPinkishBG">surgery center</div>
        </div>
        <div class="col-md-6 col-sm-6 col-sm-pull-6 nopadding picBox">
            <div class="picBoxText lightBlueBG picBoxPadding">
                <?php echo get_field( 'home_surgery_center_text'); ?>
            </div>
            <div class="picBoxTitle fadedPinkishBG"><a href="<?php echo get_field( 'home_surgery_center_link'); ?>" class="readMore">read more</a>
            </div>
        </div>        
    </div>

    <div class="row picGrid">
        <div class="col-md-6 col-sm-6 nopadding picBox ">
            <img src="<?php echo get_field( 'home_skin_care_center_photo'); ?>">
            <div class="picBoxTitle fadedPinkishBG">skin care center</div>
        </div>
        <div class="col-md-6 col-sm-6 nopadding picBox">
            <div class="picBoxText lightBlueBG">
                <?php echo get_field( 'home_skin_care_center_text'); ?>
            </div>
            <div class="picBoxTitle fadedPinkishBG"><a href="<?php echo get_field( 'home_skin_care_center_link'); ?>" class="readMore">read more</a>
            </div>
        </div>
    </div>

    <div class="row picGrid">
        <h2 class="borderTitle centerTitle"><i>O</i>ur <i>P</i>roducts</h2> 
        <div class="col-md-6 col-sm-6 col-sm-push-6 nopadding picBox ">
            <img src="<?php echo get_field( 'home_our_products_photo'); ?>">
        </div>
        <div class="col-md-6 col-sm-6 col-sm-pull-6 nopadding picBox">
            <div class="picBoxText lightBlueBG picBoxPadding">
                <?php echo get_field( 'home_our_products_text'); ?>
            </div>
            <div class="picBoxTitle fadedPinkishBG"><a href="<?php echo get_field( 'home_our_products_link'); ?>" class="readMore">read more</a>
            </div>
        </div>        
    </div>   

</div>

<?php get_template_part( 'testimonials' ); ?>


<div class="postBlocks">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-center postBlockContainer">
                <h2 class="postBlockTitle"><i>F</i>rom <i>O</i>ur <i>J</i>ournal</h2>
                <?php
	/*$args = array( 'numberposts' => '1', 'supports' => array('title','editor','author','excerpt') );
	$recent_posts = wp_get_recent_posts( $args );
	foreach( $recent_posts as $recent ){
        $excerpt = get_the_excerpt( 60 );
        echo '<div class="postBox">';
        echo '<div class="postBoxText"><span><div class="postBoxTitle"><a href="' . get_permalink($recent["ID"]) . '">'.$recent["post_title"].'</a></div>';
        echo '. . . . .';
        echo '<div class="postBoxExcerpt">'.$excerpt.'</div></span></div>';
        echo '<div class="postBoxLink"><a href="' . get_permalink($recent["ID"]) . '">read more</a></div>';
        echo '</div>';
	}*/

global $post;


function the_excerpt_max_charlength($charlength) {
	$excerpt = get_the_excerpt();
	$charlength++;
    $new = '';
	if ( mb_strlen( $excerpt ) > $charlength ) {
		$subex = mb_substr( $excerpt, 0, $charlength - 5 );
		$exwords = explode( ' ', $subex );
		$excut = - ( mb_strlen( $exwords[ count( $exwords ) - 1 ] ) );
		if ( $excut < 0 ) {
			$new .= mb_substr( $subex, 0, $excut );
		} else {
			$new .= $subex;
		}
		$new .= '[...]';
	} else {
		$new .= $excerpt;
	}
    return $new;
}

	  

wp_reset_query();
$args=array(
  'post_type' => 'post',
  'post_status' => 'publish',
    'order'     => 'DESC',
  'posts_per_page'=> 1
);
$my_query = null;
$my_query = new WP_Query($args);

if( $my_query->have_posts() ) {
         
  while ($my_query->have_posts()) : $my_query->the_post(); 
    //$the_excerpt = the_excerpt_max_charlength(40); 
    echo '<div class="postBox">';
    echo '<div class="postBoxText"><span><div class="postBoxTitle"><a href="' . get_permalink($post->ID) . '">'.get_the_title($post->ID).'</a></div>';
    echo '. . . . .<br>';
    echo '<div class="postBoxExcerpt">'.the_excerpt_max_charlength(100).'</div></span></div>';
    echo '<div class="postBoxLink"><a href="' . get_permalink($post->ID) . '">read more</a></div>';
    echo '</div>';
			

endwhile;

        }
wp_reset_query();
?>
                
            </div>
            <div class="col-md-6 text-center postBlockContainer">
                <h2 class="postBlockTitle"><i>F</i>ace <i>C</i>hange</h2>
                <div class="postBox">
                    <div class="postBoxText"><span><div class="postBoxTitleQuote"><?php echo get_field( 'read_dr_cole_quote'); ?></div>
. . . . .<br>
 <div class="postBoxFaceChange">– dr. cole, <a href="<?php echo get_field( 'read_dr_cole_quote_link'); ?>">face change</a></div></span></div>
                    <div class="postBoxLink"><a href="<?php echo get_field( 'read_dr_cole_quote_link'); ?>">read more</a></div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer() ?>