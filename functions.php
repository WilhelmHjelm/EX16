<?php
/**
 * ex16 functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package ex16
 */

if ( ! function_exists( 'ex16_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function ex16_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on ex16, use a find and replace
	 * to change 'ex16' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'ex16', get_template_directory() . '/languages' );

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

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'ex16' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );


	/**
	 * Avoid WordPress' JPEG quality reduction
	 */

	function gpp_jpeg_quality_callback()
	{
	return (int)100;
	}
	add_filter('jpeg_quality', 'gpp_jpeg_quality_callback');

	/**
	 * Remove emojis
	 */

	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );

	/**
	 * Remove comment support (+ "post" link in admin menu)
	 */

	 // Removes from admin menu
	 add_action( 'admin_menu', 'my_remove_admin_menus' );
	 function my_remove_admin_menus() {
	     remove_menu_page( 'edit-comments.php' );
			  remove_menu_page( 'edit.php' );
	 }
	 // Removes from post and pages
	 add_action('init', 'remove_comment_support', 100);

	 function remove_comment_support() {
	     remove_post_type_support( 'post', 'comments' );
	     remove_post_type_support( 'page', 'comments' );
	 }
	 // Removes from admin bar
	 function mytheme_admin_bar_render() {
	     global $wp_admin_bar;
	     $wp_admin_bar->remove_menu('comments');
	 }
	 add_action( 'wp_before_admin_bar_render', 'mytheme_admin_bar_render' );



	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'ex16_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // ex16_setup
add_action( 'after_setup_theme', 'ex16_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function ex16_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'ex16_content_width', 640 );
}
add_action( 'after_setup_theme', 'ex16_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function ex16_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'ex16' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'ex16_widgets_init' );

/**
 * Change login logotype
 */

function my_login_logo() { ?>
    <style type="text/css">
        .login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/logotyp.png);
            padding-bottom: 30px;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );
function my_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

function my_login_logo_url_title() {
    return 'ex16.se';
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );


/**
 * Enqueue scripts and styles.
 */
function ex16_scripts() {
	wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,700,700italic,600', array() );
	wp_enqueue_style( 'main-stylesheet', get_template_directory_uri() . '/css/main.css', array(), '1.0' );

	/* Jquery */
	if( !is_admin()){
		wp_deregister_script('jquery');
		wp_register_script('jquery', ("https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"), false, '2.1.4', false);
		wp_enqueue_script('jquery');
	}

	wp_enqueue_script( 'ex16-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );
	wp_enqueue_script( 'ex16-main', get_template_directory_uri() . '/js/main.js', array(), '20160220', true );

		if ( is_page( 'examensklassen' ) ) {
			wp_enqueue_script( 'ex16-expanding-grid', get_template_directory_uri() . '/js/expanding-grid.js', array(), '20160226', true );
			wp_enqueue_script( 'ex16-modernizr-custom', get_template_directory_uri() . '/js/modernizr.custom.js', array(), '20160226' );
	   }

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'ex16_scripts' );


/**
 * Custom Post Types
 */

function custom_post_type() {
	register_post_type( 'sponsorer', array(
		'labels'        => array('name' => __( 'Sponsors', 'ex16' ), 'singular_name' => __( 'Sponsor', 'ex16' ) ),
		'description'   => 'Holds the information about EX16s sponors.',
		'public'        => true,
		'menu_position' => 4,
		'supports'      => array( 'title' ),
		'has_archive'   => false
	)
	);

	register_post_type( 'examensklassen', array(
		'labels'        => array('name' => __( 'Graduates', 'ex16'  ), 'singular_name' => __( 'Graduates', 'ex16'  ) ),
		'description'   => 'Holds the information about EX16 graduate students.',
		'public'        => true,
		'menu_position' => 5,
		'supports'      => array( 'title', 'editor', 'custom-fields' ),
		'has_archive'   => false
	)
	);

	register_post_type( 'projektgruppen', array(
		'labels'        => array('name' => __( 'Projectgroups', 'ex16'  ), 'singular_name' => __( 'Projectgroup', 'ex16'  ) ),
		'description'   => 'Holds the information about EX16 project groups.',
		'public'        => true,
		'menu_position' => 6,
		'supports'      => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
		'has_archive'   => false,
		'taxonomies' 		=> array('category')
	)
	);
	register_post_type( 'forelasare', array(
		'labels'        => array('name' => __( 'Lecturers', 'ex16'  ), 'singular_name' => __( 'Lecturer', 'ex16'  ) ),
		'description'   => 'Holds the information about EX16 lectures.',
		'public'        => true,
		'menu_position' => 7,
		'supports'      => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
		'has_archive'   => false
	)
	);
	register_post_type( 'portfolio', array(
		'labels'        => array('name' => __( 'Portfolio', 'ex16'  ), 'singular_name' => __( 'Portfolio', 'ex16'  ) ),
		'description'   => 'Holds the information about EX16 digital works.',
		'public'        => true,
		'menu_position' => 8,
		'supports'      => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
		'has_archive'   => false
	)
	);

}
add_action( 'init', 'custom_post_type');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';


/**
 * TGM Plugin Activation
 */

require_once dirname( __FILE__ ) . '/inc/class-tgm-plugin-activation.php';
add_action( 'tgmpa_register', 'my_theme_register_required_plugins' );

function my_theme_register_required_plugins() {
	/*
	 * Array of plugin arrays. Required keys are name and slug.
	 * If the source is NOT from the .org repo, then source is also required.
	 */
	$plugins = array(

		// This is an example of how to include a plugin from the WordPress Plugin Repository.
		array(
			'name'      => 'Advanced Custom Fields',
			'slug'      => 'advanced-custom-fields',
			'required'  => true,
		),
		array(
			'name'      => 'WP Retina 2x',
			'slug'      => 'wp-retina-2x',
			'required'  => false,
		),
		array(
			'name'      => 'Google Analytics by Yoast',
			'slug'      => 'google-analytics-for-wordpress',
			'required'  => false,
		),
		array(
			'name'      => 'RealFaviconGenerator',
			'slug'      => 'favicon-by-realfavicongenerator',
			'required'  => false,
		),
		array(
			'name'      => 'W3 Total Cache',
			'slug'      => 'w3-total-cache',
			'required'  => false,
		),


	);

	/*
	 * Array of configuration settings. Amend each line as needed.
	 * Only uncomment the strings in the config array if you want to customize the strings.
	 */
	$config = array(
		'id'           => 'tgmpa',                 // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'parent_slug'  => 'themes.php',            // Parent menu slug.
		'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => false,                   // Automatically activate plugins after installation or not.
		'message'      => '',                      // Message to output right before the plugins table.

		/*
		'strings'      => array(
			'page_title'                      => __( 'Install Required Plugins', 'theme-slug' ),
			'menu_title'                      => __( 'Install Plugins', 'theme-slug' ),
			'installing'                      => __( 'Installing Plugin: %s', 'theme-slug' ), // %s = plugin name.
			'updating'                        => __( 'Updating Plugin: %s', 'theme-slug' ), // %s = plugin name.
			'oops'                            => __( 'Something went wrong with the plugin API.', 'theme-slug' ),
			'notice_can_install_required'     => _n_noop(
				'This theme requires the following plugin: %1$s.',
				'This theme requires the following plugins: %1$s.',
				'theme-slug'
			), // %1$s = plugin name(s).
			'notice_can_install_recommended'  => _n_noop(
				'This theme recommends the following plugin: %1$s.',
				'This theme recommends the following plugins: %1$s.',
				'theme-slug'
			), // %1$s = plugin name(s).
			'notice_ask_to_update'            => _n_noop(
				'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.',
				'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.',
				'theme-slug'
			), // %1$s = plugin name(s).
			'notice_ask_to_update_maybe'      => _n_noop(
				'There is an update available for: %1$s.',
				'There are updates available for the following plugins: %1$s.',
				'theme-slug'
			), // %1$s = plugin name(s).
			'notice_can_activate_required'    => _n_noop(
				'The following required plugin is currently inactive: %1$s.',
				'The following required plugins are currently inactive: %1$s.',
				'theme-slug'
			), // %1$s = plugin name(s).
			'notice_can_activate_recommended' => _n_noop(
				'The following recommended plugin is currently inactive: %1$s.',
				'The following recommended plugins are currently inactive: %1$s.',
				'theme-slug'
			), // %1$s = plugin name(s).
			'install_link'                    => _n_noop(
				'Begin installing plugin',
				'Begin installing plugins',
				'theme-slug'
			),
			'update_link' 					  => _n_noop(
				'Begin updating plugin',
				'Begin updating plugins',
				'theme-slug'
			),
			'activate_link'                   => _n_noop(
				'Begin activating plugin',
				'Begin activating plugins',
				'theme-slug'
			),
			'return'                          => __( 'Return to Required Plugins Installer', 'theme-slug' ),
			'plugin_activated'                => __( 'Plugin activated successfully.', 'theme-slug' ),
			'activated_successfully'          => __( 'The following plugin was activated successfully:', 'theme-slug' ),
			'plugin_already_active'           => __( 'No action taken. Plugin %1$s was already active.', 'theme-slug' ),  // %1$s = plugin name(s).
			'plugin_needs_higher_version'     => __( 'Plugin not activated. A higher version of %s is needed for this theme. Please update the plugin.', 'theme-slug' ),  // %1$s = plugin name(s).
			'complete'                        => __( 'All plugins installed and activated successfully. %1$s', 'theme-slug' ), // %s = dashboard link.
			'notice_cannot_install_activate'  => __( 'There are one or more required or recommended plugins to install, update or activate.', 'theme-slug' ),
			'contact_admin'                   => __( 'Please contact the administrator of this site for help.', 'theme-slug' ),

			'nag_type'                        => '', // Determines admin notice type - can only be one of the typical WP notice classes, such as 'updated', 'update-nag', 'notice-warning', 'notice-info' or 'error'. Some of which may not work as expected in older WP versions.
		),
		*/
	);

	tgmpa( $plugins, $config );
}
?>
