<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package oculus
 */
?>

</div>
<!-- Start Content -->

<div class="contactBar">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-4 text-center">
                <a href="https://oculusplasticsurgery.nextechweb.com/NexWebPortal510/contactus.aspx" target="_blank">become a patient</a>
            </div>
            <div class="col-md-4 col-sm-4 text-center">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>contact-us/message-us/">message us</a>
            </div>
            <div class="col-md-4 col-sm-4 text-center">
                <a href="#">chat with us</a>
            </div>
        </div>
    </div>
</div>
<footer>
    <div class="container">
        <div class="row">
            <div class="footer-col">
                <?php about_menu(); ?>
            </div>
            <div class="footer-col">
                <?php services_menu(); ?>
            </div>
            <div class="footer-col">
                <?php products_menu(); ?>
            </div>
            <div class="footer-col">
                <?php contact_menu(); ?>
            </div>
            <div class="footer-col">
                <?php journal_menu(); ?>
            </div>
            <div class="footer-col">
                <?php my_acc_menu(); ?>
            </div>
            <div class="footer-col">
                <?php follow_us_menu(); ?>
            </div>
        </div>
        <div class="row footerBox">
            <div class="col-md-4 col-sm-4"><h3>plastic surgery</h3>
404-271-4514<br>
<a href="mailto:info@oculusplasticsurgery.com">Info@oculusplasticsurgery.com</a><br>
<a href="<?php echo esc_url( home_url( '/' ) ); ?>visit-us/">Directions</a> — <a href="<?php echo esc_url( home_url( '/' ) ); ?>visit-us/">Map</a></div>
            <div class="col-md-4 col-sm-4 oculusLogoFooter"></div>
            <div class="col-md-4 col-sm-4"><h3>skin care</h3>
404-843-3636<br>
<a href="mailto:skincare@oculusplasticsurgery.com">Skincare@oculusplasticsurgery.com</a><br>
<a href="<?php echo esc_url( home_url( '/' ) ); ?>visit-us/">Directions</a> — <a href="<?php echo esc_url( home_url( '/' ) ); ?>visit-us/">Map</a></div>
        </div>
        <div class="copyRight">&copy; Copyright <?php echo date('Y'); ?> Oculus Plastic Surgery & Skin Care. All Rights Reserved. <a href="<?php echo esc_url( home_url( '/' ) ); ?>privacy-policy/">Privacy Policy</a> <a href="<?php echo esc_url( home_url( '/' ) ); ?>terms-conditions/">Terms & Conditions</a></div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>