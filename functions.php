<?php

// $con = mysqli_connect('localhost', 'root', 'admin');
//   if (!$con) {
//       echo "Cannot connect to the database ";
//       die();
//   }
//   mysqli_select_db('floatingkitchen');
//   $result = mysqli_query('show tables');
//   while ($tables = mysqli_fetch_array($result)) {
//       foreach ($tables as $key => $value) {
//           mysqli_query("ALTER TABLE $value CONVERT TO CHARACTER SET utf8 COLLATE utf8_bin");
//       }
//   }
//   echo "The collation of your database has been successfully changed!";



/**
 * floatingkitchen functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package floatingkitchen
 */

if ( ! function_exists( 'floatingkitchen_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function floatingkitchen_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on floatingkitchen, use a find and replace
	 * to change 'floatingkitchen' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'floatingkitchen', get_template_directory() . '/languages' );

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
	add_theme_support('woocommerce');

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary_menu' => esc_html__( 'Primary Menu', 'granolaecommerce' ),
		
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

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'floatingkitchen_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'floatingkitchen_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function floatingkitchen_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'floatingkitchen_content_width', 640 );
}
add_action( 'after_setup_theme', 'floatingkitchen_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function floatingkitchen_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Footer widgets', 'floatingkitchen' ),
		'id'            => 'footer_widgets',
		'description'   => esc_html__( 'Add widgets here.', 'floatingkitchen' ),
		'before_widget' => '<div class="col-md-4 col-sm-4 col-xs-12"><div id="%1$s" class="pull-left widget %2$s">',
		'after_widget'  => '</div></div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );	
	register_sidebar( array(
		'name'          => esc_html__( 'Shop Sidebar', 'floatingkitchen' ),
		'id'            => 'shop-sidebar',
		'description'   => esc_html__( 'Add widgets For Vendor page.', 'floatingkitchen' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget_title">',
		'after_title'   => '</h2>',
	) );					

}
add_action( 'widgets_init', 'floatingkitchen_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function floatingkitchen_scripts() {

	// wp_enqueue_styles
	wp_enqueue_style('ionicons', 'https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css', array(), false, 'all');
	wp_enqueue_style('font_awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css');
	wp_enqueue_style('bootstrap_min', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all');
	wp_enqueue_style('slick_theme', get_template_directory_uri() . '/css/slick-theme.css', array(), false, 'all');
	wp_enqueue_style('slick', get_template_directory_uri() . '/css/slick.css', array(), false, 'all');
	wp_enqueue_style('fonts_icon', get_template_directory_uri() . '/fonts/icon.css', array(), false, 'all');
	wp_enqueue_style('floating_kitchen_style', get_template_directory_uri() . '/css/floating_kitchen.css', array(), false, 'all');
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	


	wp_enqueue_script('jquery');
	wp_enqueue_script('bootstrap_min', get_template_directory_uri() . '/js/bootstrap.min.js', array(), false, true);
	wp_enqueue_script('slick_min', get_template_directory_uri() . '/js/slick.min.js', array(), false, true);
	wp_enqueue_script('settings', get_template_directory_uri() . '/js/settings.js', array(), false, true);


	wp_enqueue_script( 'floatingkitchen-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'floatingkitchen-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'floatingkitchen_scripts' );

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
require get_template_directory() . '/inc/required_plugins.php';
require get_template_directory() . '/inc/wp_bootstrap_navwalker.php';
require get_template_directory() . '/inc/widgets/quick_links.php';
require get_template_directory() . '/inc/options.php';
require get_template_directory() . '/inc/shortcodes.php';
require_once('wp-advanced-search/wpas.php');
require get_template_directory() . '/inc/search.php';




/* woocommerce function */


/**
 * Header right mini cart number ajaxify
 *
 */
function granola_header_ajaxify_add_to_cart( $fragments ) {
	global $woocommerce;
	
	ob_start();
	
	?>
	<a class="ajaxify_cart" href="<?php echo $woocommerce->cart->get_cart_url(); ?>" title="<?php _e('View your shopping cart', 'floatingkitchen'); ?>">
		<div class="mini_cart">
			<span class="icon-cart"></span>
			<span class="cart_quantity"><?php echo sprintf(_n('%d', '%d', $woocommerce->cart->cart_contents_count, 'floatingkitchen'), $woocommerce->cart->cart_contents_count);?></span>
		</div>
	</a>
	<?php
	
	$fragments['.ajaxify_cart'] = ob_get_clean();
	
	return $fragments;
	
}
add_filter('add_to_cart_fragments', 'granola_header_ajaxify_add_to_cart');

/**
 * Header right mini cart hover load cart item ajaxify
 * Js Part settings.js File
 */
function mode_theme_update_mini_cart() {
  echo wc_get_template( 'cart/mini-cart.php' );
  die();
}
add_filter( 'wp_ajax_nopriv_mode_theme_update_mini_cart', 'mode_theme_update_mini_cart' );
add_filter( 'wp_ajax_mode_theme_update_mini_cart', 'mode_theme_update_mini_cart' );



/* define default min max quantity */
// Simple products
add_filter( 'woocommerce_quantity_input_args', 'jk_woocommerce_quantity_input_args', 10, 2 );

function jk_woocommerce_quantity_input_args( $args, $product ) {
	if ( is_singular( 'product' ) ) {
		$args['input_value'] 	= 250;	// Starting value (we only want to affect product pages, not cart)
	}
	$args['max_value'] 	= 100000; 	// Maximum value
	$args['min_value'] 	= 250;   	// Minimum value
	$args['step'] 		= 250;    // Quantity steps
	return $args;
}

// Variations
add_filter( 'woocommerce_available_variation', 'jk_woocommerce_available_variation' );

function jk_woocommerce_available_variation( $args ) {
	$args['max_qty'] = 100000; 		// Maximum value (variations)
	$args['min_qty'] = 250;   	// Minimum value (variations)
	return $args;
}




/**
 * Add the metabox.
 */

// Display Fields
add_action( 'woocommerce_product_options_general_product_data', 'woo_add_custom_general_fields' );

// Save Fields
add_action( 'woocommerce_process_product_meta', 'woo_add_custom_general_fields_save' );

function woo_add_custom_general_fields() {

  global $woocommerce, $post;
  
  echo '<div class="options_group">';
  
  // Custom fields will be created here...

woocommerce_wp_text_input( 
	array( 
		'id'          => '_text_field', 
		'label'       => __( 'Custom Link', 'woocommerce' ), 
		'placeholder' => 'http://',
		'desc_tip'    => 'true',
		'description' => __( 'Enter the custom url', 'woocommerce' ) 
	)
);
  
  echo '</div>';
	
}

function woo_add_custom_general_fields_save( $post_id ){
	
	// Text Field
	$woocommerce_text_field = $_POST['_text_field'];
	if( !empty( $woocommerce_text_field ) )
		update_post_meta( $post_id, '_text_field', esc_attr( $woocommerce_text_field ) );	
}

