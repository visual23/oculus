<?php 
/* Template name: Products Type */ 

?>


<?php get_header() ?>


<div class="heroImage"><img src="<?php echo get_field( 'hero_image'); ?>"></div>

<div class="lightBlueIntro">
    <div class="container">
        <div class="row">
        <div class="col-md-8 center-block text-center">
            <div class="introTitle"><?php echo get_field( 'intro_title'); ?></div>
             <?php echo get_field( 'intro_text'); ?>
        </div>
            </div>
    </div>
</div>


<div class="productsList">
<div class="container">
    <div class="row">
<?php

 if( get_field( 'products') ){
    $row_count = 0;	
    while( the_repeater_field( 'products') ){
       

        echo '<div class="col-md-4 col-sm-4 text-center">';
        echo '<div class="productWrapper">';
        echo '<img src="'.get_sub_field('photo').'">';
        echo '<div class="productTitle">'.get_sub_field('title').'</div>';      
		echo '<div class="productDetails">'.get_sub_field('details').'</div>';	
        echo '<div class="productDescription">'.get_sub_field('description').'</div>';
        echo '<div class="productPrice">'.get_sub_field('price').'</div>';
        if(get_sub_field('as_seen_in_face_change'))
        {
            echo '<div class="highlightBox">AS SEEN IN FACE CHANGE</div>';
        }
        if(get_sub_field('staff_favorite'))
        {
            echo '<div class="highlightBox">STAFF FAVORITE</div>';
        }
        echo '</div>';
        echo '</div>';
		$row_count++;
    }

 }	

		  ?> 
        </div>
    </div>
    </div>

<?php get_footer() ?>