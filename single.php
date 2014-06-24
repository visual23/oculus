<?php
/**
 * The Template for displaying all single posts.
 *
 * @package oculus
 */

get_header(); ?>

<div class="stayConnectedBar">
    <div class="container text-center">
        <div class="stayConnectedWrapper">
        <div class="stayConnectedTitle">stay <i>connected</i></div>
        <form name="ccoptin" action="http://visitor.constantcontact.com/d.jsp" target="_blank" method="post" class="form-inline">

<input type="text" name="ea" value="" placeholder="Enter your email" class="form-control"> <button type="submit" class="btn btn-stay-connected">Sign in</button>

</form>
    </div>
        </div>
</div>

<div class="main-content">
	<div class="container">
		<div class="row">
            <?php get_sidebar(); ?>
			<div id="content" class="main-content-inner col-sm-12 col-md-9">
        <?php while ( have_posts() ) : the_post(); ?>

		<?php get_template_part( 'content', 'single' ); ?>

		<?php oculus_content_nav( 'nav-below' ); ?>

		<?php
			// If comments are open or we have at least one comment, load up the comment template
			if ( comments_open() || '0' != get_comments_number() )
				//comments_template();
		?>

	<?php endwhile; // end of the loop. ?>
   

           </div><!-- close .*-inner (main-content or sidebar, depending if sidebar is used) -->
		</div><!-- close .row -->
	</div><!-- close .container -->
</div><!-- close .main-content -->

<?php get_footer(); ?>