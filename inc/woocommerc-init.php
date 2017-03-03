<?php 


/* woocommerce function */


/**
 * Header right mini cart number ajaxify
 *
 */
function floatingkitchen_header_ajaxify_add_to_cart( $fragments ) {
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
add_filter('add_to_cart_fragments', 'floatingkitchen_header_ajaxify_add_to_cart');

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






/**
 * Add the metabox.
 */

// Display Fields
add_action( 'woocommerce_product_options_general_product_data', 'woo_add_custom_general_fields' );

function woo_add_custom_general_fields() {

  global $woocommerce, $post;
  
  echo '<div class="options_group">';
  
  // Custom fields will be created here...

// woocommerce_wp_text_input( 
// 	// array( 
// 	// 	'id'          => 'quantity_title', 
// 	// 	'label'       => __( 'Enter Quantity', 'floatingkitchen' ), 
// 	// 	'placeholder' => 'Enter Quantity',
// 	// 	'desc_tip'    => 'true',
// 	// 	'description' => __( 'Enter Quantity Title Text', 'floatingkitchen' ) 
// 	// ),
// 	// array( 
// 	// 	'id'          => 'quantity_min_text', 
// 	// 	'label'       => __( 'Minimum Numbe', 'floatingkitchen' ), 
// 	// 	'placeholder' => 'Min',
// 	// 	'desc_tip'    => 'true',
// 	// 	'description' => __( 'Enter Minimum Numbe Title', 'floatingkitchen' ) 
// 	// ),
// 	array( 
// 		'id'          => 'quantity_min_number', 
// 		'label'       => __( 'Minimum Number', 'floatingkitchen' ), 
// 		'placeholder' => '250',
// 		'desc_tip'    => 'true',
// 		'description' => __( 'Enter Minimum Numbe Title', 'floatingkitchen' ) 
// 	)
// );

// woocommerce_wp_text_input( 
	
// 	array( 
// 		'id'          => 'quantity_min_text', 
// 		'label'       => __( 'Minimum Quantity Text', 'floatingkitchen' ), 
// 		'placeholder' => 'Min',
// 		'desc_tip'    => 'true',
// 		'description' => __( 'Enter Minimum Numbe Title', 'floatingkitchen' ) 
// 	)
// );
  
woocommerce_wp_text_input( 
	
	array( 
		'id'          => 'quantity_min_number', 
		'label'       => __( 'Minimum Quantity Number', 'floatingkitchen' ), 
		'placeholder' => '250',
		'desc_tip'    => 'true',
		'description' => __( 'Enter Minimum Numbe Title', 'floatingkitchen' ) 
	)
);
  echo '</div>';
	
}


add_action( 'woocommerce_process_product_meta', 'woo_add_custom_general_fields_save' );
function woo_add_custom_general_fields_save( $post_id ){
	
	
	// $quantity_title = $_POST['quantity_title'];
	// if( !empty( $quantity_title ) )
	// 	update_post_meta( $post_id, 'quantity_title', esc_attr( $quantity_title ) );

	// $quantity_min_text = $_POST['quantity_min_text'];
	// if( !empty( $quantity_min_text ) )
	// 	update_post_meta( $post_id, 'quantity_min_text', esc_attr( $quantity_min_text ) );	

	$quantity_min_number = $_POST['quantity_min_number'];
	if( !empty( $quantity_min_number ) )
		update_post_meta( $post_id, 'quantity_min_number', esc_attr( $quantity_min_number ) );	
}

///Add the File Upload Field in Shipping Fields Group 
/*add_filter( 'woocommerce_checkout_process', 'woo_filter_upload_shipping' );

function woo_filter_upload_shipping( $address_fields ) { */
//  $address_fields['file_upload']['required'] = true;

/*$address_fields['file_upload'] = array(
    'label'     => __('Upload your ID', 'woocommerce'),
    'required'  => false,
    'class'     => array('form-row-wide'),
    'clear'     => true
);

return $address_fields;
}

add_action('woocommerce_after_order_notes','add_file_field');
function add_file_field(){

  $uploadFile   = "";

  $uploadFile   .='<div id="upload_CNIC_image">';
  $uploadFile .='<input id="file_upload" name="file_upload" type="file" multiple="true">';
  $uploadFile .='<span id="uploadComplete">';
  $uploadFile .='</span>';
  $uploadFile .='</div>';
  echo $uploadFile;


}*/


/**
 * Process the checkout
 */
// add_action('woocommerce_checkout_process', 'my_custom_checkout_field_process');

// function my_custom_checkout_field_process() {
//     // Check if set, if its not set add an error.
//     if ( ! $_POST['file_upload'] )
//         wc_add_notice( __( 'Phone 2 is compulsory. Please enter a value' ), 'error' );
// }


/**
 * Update the order meta with field value
 */


/*add_action( 'woocommerce_checkout_update_order_meta', 'my_custom_checkout_field_update_order_meta' );

function my_custom_checkout_field_update_order_meta( $order_id ) {
    if ( ! empty( $_POST['file_upload'] ) ) {
        update_post_meta( $order_id, 'file_upload', sanitize_text_field( $_POST['file_upload'] ) );
    }
} */


/**
 * Display field value on the order edit page
 */

/*add_action( 'woocommerce_admin_order_data_after_billing_address', 'my_custom_checkout_field_display_admin_order_meta', 10, 1 );

function my_custom_checkout_field_display_admin_order_meta($order){
    echo '<p><strong>'.__('Phone 2').':</strong> <br/>' . get_post_meta( $order->id, 'file_upload', true ) . '</p>';
}*/