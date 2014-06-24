<?php
/**
 * @package oculus
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    
    <div class="row">
        <div class="col-md-4 text-right">
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
        <div class="col-md-8">
            <header class="page-header">
            <h1 class="page-title"><?php the_title(); ?></h1>

        </header><!-- .entry-header -->

        <div class="entry-content">
            <?php the_content(); ?>
            <?php
                wp_link_pages( array(
                    'before' => '<div class="page-links">' . __( 'Pages:', 'oculus' ),
                    'after'  => '</div>',
                ) );
            ?>
        </div><!-- .entry-content -->
        </div>
    </div>
    
	

	
</article><!-- #post-## -->
