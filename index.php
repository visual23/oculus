<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
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
			<div id="content" class="main-content-inner col-sm-9 col-md-9">

	<?php if ( have_posts() ) : ?>

		<?php /* Start the Loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>

			<?php
				/* Include the Post-Format-specific template for the content.				
				 */
				get_template_part( 'content', get_post_format() );
			?>

		<?php endwhile; ?>

		<?php oculus_content_nav( 'nav-below' ); ?>

	<?php else : ?>

		<?php get_template_part( 'no-results', 'index' ); ?>

	<?php endif; ?>
                
           </div><!-- close .*-inner (main-content or sidebar, depending if sidebar is used) -->
		</div><!-- close .row -->
	</div><!-- close .container -->
</div><!-- close .main-content -->
<?php get_footer(); ?>