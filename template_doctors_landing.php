<?php 
/* Template name: Doctors Landing */ 

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
    
    <div class="row picGrid">
        <h2 class="borderTitle centerTitle"><i>O</i>ur <i>D</i>octors</h2>
        <div class="col-md-6 col-sm-6 nopadding picBox ">
            <img src="<?php echo get_field( 'dr._cole_photo', 4); ?>">
            <div class="picBoxTitle darkGreyBG">dr. cole</div>
        </div>
        <div class="col-md-6 col-sm-6 nopadding picBox">
            <div class="picBoxText lightBlueBG">
                <?php echo get_field( 'dr._cole_text', 4); ?>
            </div>
            <div class="picBoxTitle darkGreyBG"><a href="<?php echo get_field( 'dr._cole_link', 4); ?>" class="readMore">read more</a>
            </div>
        </div>
    </div>

    <div class="row picGrid">
        <div class="col-md-6 col-sm-6 nopadding picBox">
            <div class="picBoxText lightBlueBG">
                <?php echo get_field( 'dr._cox_text', 4); ?>
            </div>
            <div class="picBoxTitle pinkishBG"><a href="<?php echo get_field( 'dr._cox_link', 4); ?>" class="readMore">read more</a>
            </div>
        </div>
        <div class="col-md-6 col-sm-6 nopadding picBox ">
            <img src="<?php echo get_field( 'dr._cox_photo', 4); ?>">
            <div class="picBoxTitle fadedPinkishBG">dr. cox</div>
        </div>
    </div>

    <div class="row picGrid">
        <div class="col-md-6 col-sm-6 nopadding picBox ">
            <img src="<?php echo get_field( 'dr._murphy_photo', 4); ?>">
            <div class="picBoxTitle fadedPinkishBG">dr. murphy</div>
        </div>
        <div class="col-md-6 col-sm-6 nopadding picBox">
            <div class="picBoxText lightBlueBG">
                <?php echo get_field( 'dr._murphy_text', 4); ?>
            </div>
            <div class="picBoxTitle pinkishBG"><a href="<?php echo get_field( 'dr._murphy_link', 4); ?>" class="readMore">read more</a>
            </div>
        </div>
    </div>
 

</div>



<?php get_footer() ?>

<!-- add page specific js here -->
</body>

</html>