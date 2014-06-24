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
        <div class="col-md-6 col-sm-6 nopadding picBox">
            <div class="picBoxText lightBlueBG picBoxPadding">
                <?php echo get_field( 'read_dr._cole_text'); ?>
            </div>
            <div class="picBoxTitle fadedPinkishBG"><a href="<?php echo get_field( 'read_dr._cole_link'); ?>" class="readMore">read more</a>
            </div>
        </div>
        <div class="col-md-6 col-sm-6 nopadding picBox ">
            <img src="<?php echo get_field( 'read_dr._cole_photo'); ?>">
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
        <div class="col-md-6 col-sm-6 nopadding picBox">
            <div class="picBoxText lightBlueBG picBoxPadding">
                <?php echo get_field( 'home_surgery_center_text'); ?>
            </div>
            <div class="picBoxTitle fadedPinkishBG"><a href="<?php echo get_field( 'home_surgery_center_link'); ?>" class="readMore">read more</a>
            </div>
        </div>
        <div class="col-md-6 col-sm-6 nopadding picBox ">
            <img src="<?php echo get_field( 'home_surgery_center_photo'); ?>">
            <div class="picBoxTitle fadedPinkishBG">surgery center</div>
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
        <div class="col-md-6 col-sm-6 nopadding picBox">
            <div class="picBoxText lightBlueBG picBoxPadding">
                <?php echo get_field( 'home_our_products_text'); ?>
            </div>
            <div class="picBoxTitle fadedPinkishBG"><a href="<?php echo get_field( 'home_our_products_link'); ?>" class="readMore">read more</a>
            </div>
        </div>
        <div class="col-md-6 col-sm-6 nopadding picBox ">
            <img src="<?php echo get_field( 'home_our_products_photo'); ?>">
        </div>
    </div>   

</div>

<?php get_template_part( 'testimonials' ); ?>



<div class="postBlocks">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-center postBlockContainer">
                <h2 class="postBlockTitle"><i>F</i>rom <i>O</i>ur <i>J</i>ournal</h2>
                <div class="postBox">
                    <div class="postBoxText"><span><div class="postBoxTitle">Lorem Ipsum. Proin gravida nibh vel  velit auctor aliquet.</div>
. . . . .
<div class="postBoxExcerpt">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vehicula fringilla blandit.  Ut ullamcorper...</div></span></div>
                    <div class="postBoxLink"><a href="#">read more</a></div>
                </div>
            </div>
            <div class="col-md-6 text-center postBlockContainer">
                <h2 class="postBlockTitle"><i>F</i>ace <i>C</i>hange</h2>
                <div class="postBox">
                    <div class="postBoxText"><span><div class="postBoxTitleQuote">“Lorem ipsum. Proin gravida  nibh vel  velit auctor aliquet. Proin vehicula fringilla blandit.”</div>
. . . . .
 <div class="postBoxFaceChange">– dr. cole, <a href="#">face change</a></div></span></div>
                    <div class="postBoxLink"><a href="#">read more</a></div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer() ?>