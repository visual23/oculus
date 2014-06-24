<?php
/**
 * oculus functions and definitions
 *
 * @package oculus
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) )
	$content_width = 1020; /* pixels */

if ( ! function_exists( 'oculus_setup' ) ) :
/**
 * Set up theme defaults and register support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function oculus_setup() {
	global $cap, $content_width;

	// This theme styles the visual editor with editor-style.css to match the theme style.
	add_editor_style();

	if ( function_exists( 'add_theme_support' ) ) {

		/**
		 * Add default posts and comments RSS feed links to head
		*/
		add_theme_support( 'automatic-feed-links' );

		/**
		 * Enable support for Post Thumbnails on posts and pages
		 *
		 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
		*/
		add_theme_support( 'post-thumbnails' );

		/**
		 * Enable support for Post Formats
		*/
		add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );

		/**
		 * Setup the WordPress core custom background feature.
		*/
		add_theme_support( 'custom-background', apply_filters( 'oculus_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

	}

	/**
	 * Make theme available for translation
	 * Translations can be filed in the /languages/ directory
	 * If you're building a theme based on oculus, use a find and replace
	 * to change 'oculus' to the name of your theme in all the template files
	*/
	load_theme_textdomain( 'oculus', get_template_directory() . '/languages' );

	/**
	 * This theme uses wp_nav_menu() in one location.
	*/
    register_nav_menus(
        array(
            'primary' => 'Header Menu',
            'about-menu' => 'About Menu',
            'services-menu' => 'Services Menu',
            'products-menu' => 'Products Menu',
            'contact-menu' => 'Contact Menu',
            'journal-menu' => 'Journal Menu',
            'my-account-menu' => 'My Account Menu',
            'follow-us-menu' => 'Follow Us Menu'
        )
    );
	
    // adds nav menu
function top_menu(){

   wp_nav_menu( array(
        'menu'              => '',
        'theme_location'    => 'header-menu',
        'depth'             => 2,
        'container'         => 'div',
        'container_class'   => 'navbar-collapse collapse',
        'menu_class'        => 'nav navbar-nav',
       'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
        'walker'            => new wp_bootstrap_navwalker())
    );
}

function about_menu(){

   wp_nav_menu( array(
        'menu'              => '',
        'theme_location'    => 'about-menu',
        'depth'             => 1,
        'container'         => '',
        'container_class'   => '',
        'menu_class'        => 'footerMenu')
    );
}

function services_menu(){

   wp_nav_menu( array(
        'menu'              => '',
        'theme_location'    => 'services-menu',
        'depth'             => 1,
        'container'         => '',
        'container_class'   => '',
        'menu_class'        => 'footerMenu')
    );
}

function products_menu(){

   wp_nav_menu( array(
        'menu'              => '',
        'theme_location'    => 'products-menu',
        'depth'             => 1,
        'container'         => '',
        'container_class'   => '',
        'menu_class'        => 'footerMenu')
    );
}
function contact_menu(){

   wp_nav_menu( array(
        'menu'              => '',
        'theme_location'    => 'contact-menu',
        'depth'             => 1,
        'container'         => '',
        'container_class'   => '',
        'menu_class'        => 'footerMenu')
    );
}

function journal_menu(){

   wp_nav_menu( array(
        'menu'              => '',
        'theme_location'    => 'journal-menu',
        'depth'             => 1,
        'container'         => '',
        'container_class'   => '',
        'menu_class'        => 'footerMenu')
    );
}

function my_acc_menu(){

   wp_nav_menu( array(
        'menu'              => '',
        'theme_location'    => 'my-account-menu',
        'depth'             => 1,
        'container'         => '',
        'container_class'   => '',
        'menu_class'        => 'footerMenu')
    );
}
function follow_us_menu(){

   wp_nav_menu( array(
        'menu'              => '',
        'theme_location'    => 'follow-us-menu',
        'depth'             => 1,
        'container'         => '',
        'container_class'   => '',
        'menu_class'        => 'footerMenu')
    );
}

}
endif; // oculus_setup
add_action( 'after_setup_theme', 'oculus_setup' );

/**
 * Register widgetized area and update sidebar with default widgets
 */
function oculus_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'oculus' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'oculus_widgets_init' );

/**
 * Enqueue scripts and styles
 */

function my_init() {
	if (!is_admin()) {
		wp_deregister_script('jquery');

		// load the local copy of jQuery in the footer
		wp_register_script('jquery', '/wp-includes/js/jquery/jquery.js', false, '1.8.3', true);
        wp_register_script('jquery-migrate', '/wp-includes/js/jquery/jquery-migrate.min.js', false, '1.2.1', true);
        wp_register_script('jquery-ui', get_template_directory_uri() . '/includes/js-plugin/jquery-ui/jquery-ui-1.8.23.custom.min.js', false, '1.8.23', true);
        

		// or load the Google API copy in the footer
		//wp_register_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js', false, '1.8.3', true);

		wp_enqueue_script('jquery');
        wp_enqueue_script('jquery-migrate');
        wp_enqueue_script('jquery-ui');
	}
}
add_action('init', 'my_init');

function oculus_scripts() {
    
    // load modernizer
    wp_enqueue_script( 'modernizer', get_template_directory_uri() . '/includes/js/modernizr-2.6.1.min.js' );

	// load bootstrap css
	wp_enqueue_style( 'oculus-bootstrap', get_template_directory_uri() . '/includes/resources/bootstrap/css/bootstrap.css', false, 'screen' );
    
    // load video js css and js
    wp_enqueue_style( 'videojs-css', get_template_directory_uri() . '/includes/js-plugin/videojs/video-js.css' );
    wp_enqueue_script( 'videojs-js', get_template_directory_uri() . '/includes/js-plugin/videojs/video.js' );
    
    wp_enqueue_style( 'flexslider-css', get_template_directory_uri() . '/includes/js-plugin/flexslider/flexslider.css' );    


	// load oculus styles
	wp_enqueue_style( 'oculus-style', get_stylesheet_uri() );
    
    wp_enqueue_style( 'layout-css', get_template_directory_uri() . '/includes/css/layout.css' );

	// load bootstrap js
    //wp_enqueue_script('oculus-jquery', get_template_directory_uri().'/includes/js-plugin/jquery/1.8.3/jquery.min.js', array('jquery'), '', true );
	wp_enqueue_script('oculus-bootstrapjs', get_template_directory_uri().'/includes/resources/bootstrap/js/bootstrap.js', array('jquery'), '', true );

	// load bootstrap wp js
	wp_enqueue_script( 'oculus-bootstrapwp', get_template_directory_uri() . '/includes/js/bootstrap-wp.js', array('jquery'), '', true );

	wp_enqueue_script( 'oculus-skip-link-focus-fix', get_template_directory_uri() . '/includes/js/skip-link-focus-fix.js', array(), '20130115', true );
    
    // theme specific files
    //wp_enqueue_script( 'smoothscroll', get_template_directory_uri() . '/includes/js-plugin/smoothscroll/SmoothScroll.js', array(), '', true );
    wp_enqueue_script( 'tweenmax', get_template_directory_uri() . '/includes/js-plugin/greensock/TweenMax.min.js', array(), '', true );
    wp_enqueue_script( 'uitotop', get_template_directory_uri() . '/includes/js-plugin/uitotop/jquery.ui.totop.min.js', array(), '', true );
    wp_enqueue_script( 'flexslider', get_template_directory_uri() . '/includes/js-plugin/flexslider/jquery.flexslider.js', array(), '', true );
    wp_enqueue_script( 'custom', get_template_directory_uri() . '/includes/js/custom.js', array(), '', true );
    wp_enqueue_script( 'animation', get_template_directory_uri() . '/includes/js/animation.js', array(), '', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if ( is_singular() && wp_attachment_is_image() ) {
		wp_enqueue_script( 'oculus-keyboard-image-navigation', get_template_directory_uri() . '/includes/js/keyboard-image-navigation.js', array( 'jquery' ), '20120202' );
	}

}
add_action( 'wp_enqueue_scripts', 'oculus_scripts' );

add_filter('show_admin_bar', '__return_false');

add_action('acf/register_fields', 'my_register_fields');
include_once('acf-options-page/acf-options-page.php');

function my_register_fields()
{
	include_once('acf-repeater/repeater.php');
}


/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/includes/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/includes/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/includes/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/includes/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/includes/jetpack.php';

/**
 * Load custom WordPress nav walker.
 */
require get_template_directory() . '/includes/bootstrap-wp-navwalker.php';



add_action( 'init', 'testimonials');
function testimonials(){
  register_post_type(
    'testimonials', 
    array(
      'description' => '',
      'public' => true,
      'show_ui' => true,
      'show_in_menu' => true,
      'capability_type' => 'post',
      'hierarchical' => false,
      'rewrite' => array('slug' => ''),
      //'rewrite' => array('with_front' => false, 'slug' => 'press'),
      'query_var' => true,
      'has_archive' => true,
      'supports' => array( 'title','revisions' ),
      'labels' => array (
        'name' => 'Testimonials',
        'singular_name' => 'Testimonial',
        'menu_name' => 'Testimonials',
        'add_new' => 'Add a testimonial item',
        'add_new_item' => 'Add a new testimonial item',
        'edit' => 'Edit',
        'edit_item' => 'Edit testimonial item',
        'new_item' => 'New testimonial item',
        'view' => 'View testimonial item',
        'view_item' => 'View testimonial item',
        'search_items' => 'Search Testimonials',
        'not_found' => 'No testimonials found',
        'not_found_in_trash' => 'No testimonials found in trash',
        'parent' => 'Parent'
      )
    )
  );
}
