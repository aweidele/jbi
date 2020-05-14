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

// Image sizes
add_image_size( 'proj-thumb', 580, 819, true );
add_image_size( 'proj-hero', 1920, 1075, true );
add_image_size( 'proj-col-1', 580, 850, true );
add_image_size( 'proj-col-2', 1180, 850, true );
add_image_size( 'proj-col-3', 1788, 850, true );
add_image_size( 'proj-col-2', 1180, 850, true );
add_image_size( 'media-logo', 854, 570, true );

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

// Custom Post Types
function custom_post_type() {
  // Projects
  	$labels = array(
  			'name'                  => _x( 'Projects', 'Post Type General Name', 'text_domain' ),
  			'singular_name'         => _x( 'Project', 'Post Type Singular Name', 'text_domain' ),
  			'menu_name'             => __( 'Projects', 'text_domain' ),
  			'name_admin_bar'        => __( 'Projects', 'text_domain' ),
  			'archives'              => __( 'All Projects', 'text_domain' ),
  			'attributes'            => __( '', 'text_domain' ),
  			'parent_item_colon'     => __( '', 'text_domain' ),
  			'all_items'             => __( 'All Projects', 'text_domain' ),
  			'add_new_item'          => __( 'Add New Project', 'text_domain' ),
  			'add_new'               => __( 'Add New Project', 'text_domain' ),
  			'new_item'              => __( 'New Project', 'text_domain' ),
  			'edit_item'             => __( 'Edit Project', 'text_domain' ),
  			'update_item'           => __( 'Update Project', 'text_domain' ),
  			'view_item'             => __( 'View Project', 'text_domain' ),
  			'view_items'            => __( 'View Project', 'text_domain' ),
  			'search_items'          => __( 'Search Projects', 'text_domain' ),
  			'not_found'             => __( 'Not found', 'text_domain' ),
  			'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
  		);
  		$args = array(
  			'label'                 => __( 'Projects', 'text_domain' ),
  			'description'           => __( 'Projects and Case Studies', 'text_domain' ),
  			'labels' => $labels,
  	    'public' => true,
  	    'publicly_queryable' => true,
  	    'show_ui' => true,
  	    'query_var' => true,
  	    'menu_icon' => 'dashicons-hammer',
  	    'capability_type' => 'post',
  	    'hierarchical' => false,
  	    'menu_position' => null,
  	    'supports' => array( 'title', 'custom-fields', 'editor', 'page-attributes'),
  	    'has_archive' => true,
  			'rewrite' => array(
  				'slug' => 'projects'),
  		);
  		register_post_type( 'projects', $args );

      register_taxonomy(
        'industry',
        'projects',
        array(
            'labels' => array(
                'name'              => _x( 'Industries' , 'taxonomy general name' ),
                'singular_name'     => _x( 'Industry' , 'taxonomy singular name'),
                'add_new_item' => 'Add Industry',
                'new_item_name' => "New Industry"
            ),
            'show_ui' => true,
            'show_admin_column' => true,
            'show_tagcloud' => false,
            'hierarchical' => true,
            'support' => array('tags'),
            'rewrite' => array(
              'slug' => 'industry'),
        )
      );

      // Press
      	$labels = array(
      			'name'                  => _x( 'Press', 'Post Type General Name', 'text_domain' ),
      			'singular_name'         => _x( 'Press', 'Post Type Singular Name', 'text_domain' ),
      			'menu_name'             => __( 'Press', 'text_domain' ),
      			'name_admin_bar'        => __( 'Press', 'text_domain' ),
      			'archives'              => __( 'All Press', 'text_domain' ),
      			'attributes'            => __( '', 'text_domain' ),
      			'parent_item_colon'     => __( '', 'text_domain' ),
      			'all_items'             => __( 'All Press', 'text_domain' ),
      			'add_new_item'          => __( 'Add New Press', 'text_domain' ),
      			'add_new'               => __( 'Add New Press', 'text_domain' ),
      			'new_item'              => __( 'New Press', 'text_domain' ),
      			'edit_item'             => __( 'Edit Press', 'text_domain' ),
      			'update_item'           => __( 'Update Press', 'text_domain' ),
      			'view_item'             => __( 'View Press', 'text_domain' ),
      			'view_items'            => __( 'View Press', 'text_domain' ),
      			'search_items'          => __( 'Search Press', 'text_domain' ),
      			'not_found'             => __( 'Not found', 'text_domain' ),
      			'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
      		);
      		$args = array(
      			'label'                 => __( 'Press', 'text_domain' ),
      			'description'           => __( 'Press', 'text_domain' ),
      			'labels' => $labels,
      	    'public' => true,
      	    'publicly_queryable' => true,
      	    'show_ui' => true,
      	    'query_var' => true,
      	    'menu_icon' => 'dashicons-admin-site-alt2',
      	    'capability_type' => 'post',
      	    'hierarchical' => false,
      	    'menu_position' => null,
      	    'supports' => array( 'title', 'custom-fields', 'editor', 'page-attributes'),
      	    'has_archive' => true,
      			'rewrite' => array(
      				'slug' => 'press'),
      		);
      		register_post_type( 'press', $args );

          register_taxonomy(
            'outlet',
            'press',
            array(
                'labels' => array(
                    'name'              => _x( 'Media Outlets' , 'taxonomy general name' ),
                    'singular_name'     => _x( 'Media Outlet' , 'taxonomy singular name'),
                    'add_new_item' => 'Add Media Outlet',
                    'new_item_name' => "New Media Outlet"
                ),
                'show_ui' => true,
                'show_admin_column' => true,
                'show_tagcloud' => false,
                'hierarchical' => true,
                'support' => array('tags'),
                'rewrite' => array(
                  'slug' => 'outlet'),
            )
          );

          $labels = array(
        			'name'                  => _x( 'People', 'Post Type General Name', 'text_domain' ),
        			'singular_name'         => _x( 'People', 'Post Type Singular Name', 'text_domain' ),
        			'menu_name'             => __( 'People', 'text_domain' ),
        			'name_admin_bar'        => __( 'People', 'text_domain' ),
        			'archives'              => __( 'All People', 'text_domain' ),
        			'attributes'            => __( '', 'text_domain' ),
        			'parent_item_colon'     => __( '', 'text_domain' ),
        			'all_items'             => __( 'All People', 'text_domain' ),
        			'add_new_item'          => __( 'Add New People', 'text_domain' ),
        			'add_new'               => __( 'Add New People', 'text_domain' ),
        			'new_item'              => __( 'New People', 'text_domain' ),
        			'edit_item'             => __( 'Edit People', 'text_domain' ),
        			'update_item'           => __( 'Update People', 'text_domain' ),
        			'view_item'             => __( 'View People', 'text_domain' ),
        			'view_items'            => __( 'View People', 'text_domain' ),
        			'search_items'          => __( 'Search People', 'text_domain' ),
        			'not_found'             => __( 'Not found', 'text_domain' ),
        			'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
        		);
        		$args = array(
        			'label'                 => __( 'People', 'text_domain' ),
        			'description'           => __( 'People', 'text_domain' ),
        			'labels' => $labels,
        	    'public' => true,
        	    'publicly_queryable' => true,
        	    'show_ui' => true,
        	    'query_var' => true,
        	    'menu_icon' => 'dashicons-groups',
        	    'capability_type' => 'post',
        	    'hierarchical' => false,
        	    'menu_position' => null,
        	    'supports' => array( 'title', 'custom-fields', 'editor', 'page-attributes'),
        	    'has_archive' => true,
        			'rewrite' => array(
        				'slug' => 'people'),
        		);
        		register_post_type( 'people', $args );
}
add_action( 'init', 'custom_post_type', 0 );

// QUERY MODIFICATION
function modify_query( $query ) {
  if (
      ( $query->is_tax('outlet') )
      && $query->is_main_query()
      && !is_admin()
  ) {
    $query->query_vars['posts_per_page'] = -1;
    $query->query_vars['orderby'] = 'meta_value_num';
		$query->query_vars['meta_key'] = 'date';
		$query->query_vars['order']	= 'DESC';
  }

  if (
    is_post_type_archive('projects')
  ) {
    $query->query_vars['posts_per_page'] = -1;
  }
}
add_action( 'pre_get_posts', 'modify_query' );
