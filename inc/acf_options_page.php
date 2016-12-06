<?php 
// Options page for the Facebook Pixel tracking code
if( function_exists('acf_add_options_page') ) {
	$option_page = acf_add_options_page(array(
		'page_title' 	=> 'Facebook Pixel',
		'menu_title' 	=> 'Facebook Pixel',
		'menu_slug' 	=> 'fb_pixel_options',
		'capability' 	=> 'edit_posts',
		'icon_url'     => 'dashicons-facebook',
		'position' => 90,
		'redirect' 	=> false
	));
}
 ?>