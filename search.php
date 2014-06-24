<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package oculus
 */

get_header(); ?>

<div class="main-content">
	<div class="container">
		<div class="row">

			<div id="content" class="main-content-inner col-sm-12 col-md-8">


	<?php if ( have_posts() ) : ?>

		<header class="page-header">
			<h2 class="searchTitle"><?php printf( __( 'Search Results for: %s', 'oculus' ), '<span>' . get_search_query() . '</span>' ); ?></h2>
		</header><!-- .page-header -->

		<?php // start the loop. ?>
		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'search' ); ?>

		<?php endwhile; ?>

		<?php oculus_content_nav( 'nav-below' ); ?>

	<?php else : ?>

		<?php get_template_part( 'no-results', 'search' ); ?>

	<?php endif; // end of loop. ?>



           </div><!-- close .*-inner (main-content or sidebar, depending if sidebar is used) -->
		</div><!-- close .row -->
	</div><!-- close .container -->
</div><!-- close .main-content -->
<?php get_footer(); ?>