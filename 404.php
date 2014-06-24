<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package oculus
 */

get_header(); ?>

	<?php // add the class "panel" below here to wrap the content-padder in Bootstrap style ;) ?>

    <div class="main-content">
	<div class="container">
		<div class="row">

			<div id="content" class="main-content-inner col-sm-12 col-md-8">


	
		
<section class="content-padder error-404 not-found">
        
        <div class="main-content">
	     <div class="container">

		<header class="page-header">
			<h2 class="page-title"><?php _e( 'Oops! Something went wrong here.', 'oculus' ); ?></h2>
		</header><!-- .page-header -->

		<div class="page-content">

			<p><?php _e( 'Nothing could be found at this location. Maybe try a search?', 'oculus' ); ?></p>

			<?php get_search_form(); ?>

		</div><!-- .page-content -->
             </div>
            </div>

	</section><!-- .content-padder -->

	


           </div><!-- close .*-inner (main-content or sidebar, depending if sidebar is used) -->
		</div><!-- close .row -->
	</div><!-- close .container -->
</div>

	

<?php get_footer(); ?>