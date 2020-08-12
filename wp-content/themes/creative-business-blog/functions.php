<?php
/**
 * Creative business blog functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package creative_business_blog
 */


if ( ! function_exists( 'creative_business_blog_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function creative_business_blog_setup() {
		
		/*
		 * Make theme available for translation.
		 *
		 * If you're building a theme based on Creative business blog, use a find and replace
		 * to change 'creative-business-blog' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'creative-business-blog' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );
		add_image_size('creative-business-blog-post-thumbnail-219', 1080, 462, array( 'center','top'));
		add_image_size('creative-business-blog-post-thumbnail-32', 960, 600, array( 'center','top'));

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'creative-business-blog' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'creative_business_blog_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 207,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
		update_option( 'show_on_front', 'posts' );

	}
endif;
add_action( 'after_setup_theme', 'creative_business_blog_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function creative_business_blog_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'creative_business_blog_content_width', 640 );
}
add_action( 'after_setup_theme', 'creative_business_blog_content_width', 0 );

/**
 * Enqueue scripts and styles.
 */
function creative_business_blog_scripts() {
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.js', array( 'jquery' ), '4.1.0', true );
	wp_enqueue_script( 'wowscript', get_template_directory_uri() . '/js/wow/wow.js', array( 'jquery'), '2018', true );
	wp_enqueue_script( 'creative-business-blog-jquery', get_template_directory_uri() . '/js/myjquery.js', array( 'jquery'), '1.0.0', true );
	wp_enqueue_script( 'navigation', get_template_directory_uri() . '/js/navigation.js', array( 'jquery'), '20151215', true );
	wp_enqueue_script( 'skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array( 'jquery'), '20151215', true );
	
	wp_enqueue_style('google-webfonts', '//fonts.googleapis.com/css?family=Aclonica|Anton|Oswald', array(), NULL);
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/fontawesome/css/font-awesome.css', array(), '4.7.0.', 'all' );
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array(), '4.2.0', 'all' );
	wp_enqueue_style( 'wow', get_template_directory_uri() . '/css/wow/animate.css', array(), '3.0.0', 'all' );
	wp_enqueue_style( 'creative-business-blog-style', get_stylesheet_uri() );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'creative_business_blog_scripts' );

/**
 * Configure for max number of Tag display
 */
add_filter('term_links-post_tag','creative_business_blog_limit_to_five_tags');
function creative_business_blog_limit_to_five_tags($terms) {
return array_slice($terms,0,5,true);
}

/**
 * Add View Demo on menu Appearene
 */

function creative_business_blog_theme_settings(){
	require_once( trailingslashit( get_template_directory() ). '/inc/about.php' );
}
function creative_business_blog_menu_add() {
	add_theme_page(__('Title Creative business blog','creative-business-blog'), __('Important Notes','creative-business-blog'), 'edit_theme_options', 'scratch-identifier-1', 'creative_business_blog_theme_settings');
}
add_action('admin_menu', 'creative_business_blog_menu_add');


/**
 * Implement the Custom Header feature.
 */
require_once( trailingslashit( get_template_directory() ). '/inc/custom-header.php' );

/**
 * Custom template tags for this theme.
 */
require_once( trailingslashit( get_template_directory() ). '/inc/template-tags.php' );

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require_once( trailingslashit( get_template_directory() ). '/inc/template-functions.php' );

/**
 * Customizer additions.
 */
require_once( trailingslashit( get_template_directory() ). '/inc/customizer/customizer.php') ;

/**
 * Customizer-color additions.
 */
require_once( trailingslashit(  get_template_directory() ). '/inc/customizer/customizer-color.php' );


/**
 * Customizer-CSS additions.
 */
require_once( trailingslashit( get_template_directory() ) . '/inc/css/css-customize.php' );

/**
 * Color-Luminance additions.
 */
require_once( trailingslashit( get_template_directory() ). '/inc/css/color-luminance.php' );

/**
 *  Extra function.
 */
require_once( trailingslashit( get_template_directory() ) . 'inc/other-functions/customize-function.php' );

/**
 *  register-widgets.
 */
require_once( trailingslashit( get_template_directory() ) . 'inc/widgets/register-widgets-sidebar.php' );

/**
 *  load sanitize.
 */
require_once( trailingslashit( get_template_directory() ) . 'inc/sanitize.php' );

require_once trailingslashit( get_template_directory() ) . '/inc/upgrade-to-pro/control.php';



/**
 *  OCDI.
 */
require_once( trailingslashit( get_template_directory() ) . 'inc/ocdi/ocdi.php' );
require_once( trailingslashit( get_template_directory() ) . 'inc/ocdi/class-import.php' );
require_once( trailingslashit( get_template_directory() ) . 'inc/ocdi/import.php' );
