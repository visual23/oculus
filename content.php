<?php
/**
 * @package oculus
 */
?>


<?php // Styling Tip!

// Want to wrap for example the post content in blog listings with a thin outline in Bootstrap style?
// Just add the class "panel" to the article tag here that starts below.
// Simply replace post_class() with post_class('panel') and check your site!
// Remember to do this for all content templates you want to have this,
// for example content-single.php for the post single view. ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="row">
        
        <?php if ( !is_search() ) : // Only display Excerpts for Search and Archive Pages ?>
        <div class="col-md-4 col-sm-4 text-right">
            <?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta">
			<?php oculus_posted_on(); ?>
            <?php
				/* translators: used between list items, there is a space after the comma */
				$tags_list = get_the_tag_list( '', __( ', ', 'oculus' ) );
				if ( $tags_list ) :
			?>
            <br>
			<span class="tags-links">
				<?php printf( __( 'Tags: %1$s', 'oculus' ), $tags_list ); ?>
			</span>
			<?php endif; // End if $tags_list ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
        </div>
        
        <div class="col-md-8 col-sm-8">
            <header class="page-header">
		<h1 class="page-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
        <?php else : ?>
        
        <div class="col-md-12 col-sm-12">
            <header class="page-header">
		<h1 class="page-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
                
        <?php endif; ?>
		
	</header><!-- .entry-header -->

	<?php if ( is_search() || is_archive() ) : // Only display Excerpts for Search and Archive Pages ?>
	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->
	<?php else : ?>
	<div class="entry-content">
		<?php the_content( __( 'Read more...', 'oculus' ) ); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'oculus' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	<?php endif; ?>

	
        </div>
    </div>
</article><!-- #post-## -->
