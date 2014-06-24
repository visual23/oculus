<?php 
/* Template name: Facilities */ 

?>


<?php get_header() ?>

<div class="heroImage"><img src="<?php echo get_field( 'hero_image'); ?>"></div>

<div class="introText">
    <div class="container">
        <div class="row">
        <div class="col-md-9 center-block">
            <?php echo get_field( 'intro_text'); ?>           
            
        </div>
            </div>
    </div>
</div>

<div class="container">    

    <div class="row picGrid">
        <h2 class="borderTitle centerTitle"><i>O</i>ur <i>F</i>acilities</h2> 
        <div class="col-md-6 col-sm-6 nopadding picBox">
            <div class="picBoxText lightBlueBG">
                <?php echo get_field( 'home_surgery_center_text', 4); ?>
            </div>
            <div class="picBoxTitle fadedPinkishBG"><a href="<?php echo get_field( 'home_surgery_center_link', 4); ?>" class="readMore">read more</a>
            </div>
        </div>
        <div class="col-md-6 col-sm-6 nopadding picBox ">
            <img src="<?php echo get_field( 'home_surgery_center_photo', 4); ?>">
            <div class="picBoxTitle fadedPinkishBG">surgery center</div>
        </div>
    </div>

    <div class="row picGrid">
        <div class="col-md-6 col-sm-6 nopadding picBox ">
            <img src="<?php echo get_field( 'home_skin_care_center_photo', 4); ?>">
            <div class="picBoxTitle fadedPinkishBG">skin care center</div>
        </div>
        <div class="col-md-6 col-sm-6 nopadding picBox">
            <div class="picBoxText lightBlueBG">
                <?php echo get_field( 'home_skin_care_center_text', 4); ?>
            </div>
            <div class="picBoxTitle fadedPinkishBG"><a href="<?php echo get_field( 'home_skin_care_center_link', 4); ?>" class="readMore">read more</a>
            </div>
        </div>
    </div>

</div>

<?php get_template_part( 'testimonials' ); ?>




<?php get_footer() ?>

<!-- add page specific js here -->
</body>

</html>