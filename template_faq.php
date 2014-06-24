<?php 
/* Template name: FAQ */ 
 ?>


<?php get_header() ?>

<div class="whiteIntro">
    <div class="container">
        <div class="row">
        <div class="col-md-12 center-block text-center">
            <div class="introTitle"><?php echo get_field( 'intro_title'); ?></div>
        </div>
            </div>
    </div>
</div>

<div class="faqContainer withBorder">
    <div class="container">
        <?php

 if( get_field( 'faq_blocks') ){
    $row_count = 0;	
    while( the_repeater_field( 'faq_blocks') ){
        echo '<div class="row faqRow">';
        echo '<div class="col-md-10 col-md-offset-1">';
        echo '<div class="faqQuestion"><span class="questionQ">Q. </span>'.get_sub_field('question').'</div>';
        echo '<div class="faqAnswer">'.get_sub_field('answer').'</div>';
        echo '</div>';
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