<?php
// Enqueue Scripts and Styles
function enqueue_styles() {

  wp_enqueue_style( 'main_style',
      get_stylesheet_directory_uri() . '/assets/css/main.css'
  );

  wp_enqueue_script( 'main_script',
    get_stylesheet_directory_uri() . '/assets/js/site.js',
    array('jquery'),
    wp_get_theme()->get('Version'),
    true
  );

}
add_action( 'wp_enqueue_scripts', 'enqueue_styles' );

// Register Menu
add_action( 'init', 'register_my_menu' );
function register_my_menu() {
  register_nav_menu( 'primary-menu', __( 'Primary Menu' ) );
}

// Options page
if( function_exists('acf_add_options_page') ) {
  acf_add_options_page(array(
		'page_title' 	=> 'Theme Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));

  acf_add_options_sub_page(array(
		'page_title' 	=> 'Footer',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-settings',
	));
}
