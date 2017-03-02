<?php 
// Simple products
add_filter( 'woocommerce_quantity_input_args', 'jk_woocommerce_quantity_input_args', 10, 2 );

function jk_woocommerce_quantity_input_args( $args, $product ) {
	if ( is_singular( 'product' ) ) {
		$args['input_value'] 	= 2;	// Starting value (we only want to affect product pages, not cart)
	}
	$args['max_value'] 	= ''; 	// Maximum value
	$args['min_value'] 	= 250;   	// Minimum value
	$args['step'] 		= 2;    // Quantity steps
	return $args;
}

// Variations
add_filter( 'woocommerce_available_variation', 'jk_woocommerce_available_variation' );

function jk_woocommerce_available_variation( $args ) {
	$args['max_qty'] = ''; 		// Maximum value (variations)
	$args['min_qty'] = 250;   	// Minimum value (variations)
	return $args;
}


/* custom link */
// function floatingkitchen_custom_add_to_cart_redirect() { 
//     return 'http://localhost/floatingkitchen/funcy-pages/'; 
// }
// add_filter( 'woocommerce_add_to_cart_redirect', 'floatingkitchen_custom_add_to_cart_redirect' );



