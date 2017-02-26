<?php

require_once get_template_directory() . '/inc/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'floatingkitchen_register_required_plugins' );


function floatingkitchen_register_required_plugins() {
	/*
	 * Array of plugin arrays. Required keys are name and slug.
	 * If the source is NOT from the .org repo, then source is also required.
	 */
	$plugins = array(

		// This is an example of how to include a plugin from the WordPress Plugin Repository.
		array(
			'name'         	=> 'Advanced Custom Fields Pro', 
			'slug'         	=> 'advanced-custom-fields-pro', 
			'source'       	=> get_stylesheet_directory() . '/inc/plugins/advanced-custom-fields-pro.zip',
			'required'           => true,
		),

		array(
			'name'         	=> 'Mailchimp Pro', 
			'slug'         	=> 'mailchimp-pro', 
			'source'       	=> get_stylesheet_directory() . '/inc/plugins/mailchimp-pro.zip',
			'required'     	=> true,
		),
		array(
			'name'         	=> 'Wishlist Pro', 
			'slug'         	=> 'wishlist-pro', 
			'source'       	=> get_stylesheet_directory() . '/inc/plugins/gema75_wc_wishlist.zip',
			'required'     	=> true,
		),
		array(
			'name'         	=> 'Woo Products Quantity Range Pricing', 
			'slug'         	=> 'Woo-Products-Quantity-Range-Pricing', 
			'source'       	=> get_stylesheet_directory() . '/inc/plugins/Woo-Products-Quantity-Range-Pricing.zip',
			'required'     	=> true,
		),
		array(
			'name'         	=> 'Fancy product Designer', 
			'slug'         	=> 'fancy-product-designer', 
			'source'       	=> get_stylesheet_directory() . '/inc/plugins/fancy-product-designer.zip',
			'required'     	=> true,
		),

		array(
			'name'      	=> 'WooCommerce',
			'slug'      	=> 'woocommerce',
			'required'  	=> true,
		),

		array(
			'name'      	=> 'Ajax Search for WooCommerce',
			'slug'      	=> 'ajax-search-for-woocommerce',
			'required'  	=> true,
		),
		array(
			'name'      	=> 'Nav Menu Roles',
			'slug'      	=> 'nav-menu-roles',
			'required'  	=> true,
		),
		array(
			'name'      	=> 'Contact Form 7',
			'slug'      	=> 'contact-form-7',
			'required'  	=> true,
		),
		array(
			'name'      	=> 'Color and Image Swatches for Variable Product Attributes',
			'slug'      	=> 'color-and-image-swatches-for-variable-product-attributes',
			'required'  	=> true,
		),
	);

	/*
	 * Array of configuration settings. Amend each line as needed.
	 *
	 */
	$config = array(
		'id'           => 'floatingkitchen',                 // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'parent_slug'  => 'themes.php',            // Parent menu slug.
		'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => false,                   // Automatically activate plugins after installation or not.
		'message'      => '',                      // Message to output right before the plugins table.
	);

	tgmpa( $plugins, $config );
}