<?php 

if( function_exists('register_wpas_form')) {
function my_search_form() {
    $args = array();
    
	$args['wp_query'] = array( 'post_type' => array('product'), 
	                           'orderby' => 'title', 
	                           'order' => 'ASC' );

	$args['form'] = array( 'action' => get_bloginfo('url') . '/search-page/');

  $args['fields'][] = array('type' => 'taxonomy',
                              'taxonomy' => 'product_cat',
                              'format' => 'select',
                              'pre_html' => '<div class="select_category_search">',
                              'post_html' => '</div>',
                              'allow_null' => 'All',
                              );    

    $args['fields'][] = array('type' => 'search',
                              'title' => 'Search',
                              'placeholder' => 'Keyword',
                              'pre_html' => '<div class="input_search">',
                              'post_html' => '</div>',
                              );         
   
    $args['fields'][] = array( 'type' => 'submit',
	                           'class' => 'button',
	                           'value' => '',
                             'pre_html' => '<div class="submit_search icon-search blue-grad">',
                             'post_html' => '</div>',
                              );

    register_wpas_form('escaperoom_search', $args);    
}
add_action('init', 'my_search_form');

}
