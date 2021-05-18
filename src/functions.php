<?php
    register_nav_menus( array(
        'mainNav' => 'Main Nav',
    ) );

	add_theme_support( 'post-thumbnails' );

	
function register_test_studies() {
    $labels = array(
        'name'                  => _x( 'Test Studies', 'Post type general name', 'textdomain' ),
        'singular_name'         => _x( 'Test Study', 'Post type singular name', 'textdomain' ),
        'menu_name'             => _x( 'Test Studies', 'Admin Menu text', 'textdomain' ),
        'name_admin_bar'        => _x( 'Test Study', 'Add New on Toolbar', 'textdomain' ),
        'add_new'               => __( 'Add New', 'textdomain' ),
        'add_new_item'          => __( 'Add New Study Test', 'textdomain' ),
        'new_item'              => __( 'New Study Test', 'textdomain' ),
        'edit_item'             => __( 'Edit Study Test', 'textdomain' ),
        'view_item'             => __( 'View Study Test', 'textdomain' ),
        //'all_items'             => __( 'All Study Tests', 'textdomain' ),
        'search_items'          => __( 'Search Study Tests', 'textdomain' ),
        'parent_item_colon'     => __( 'Parent Study Tests:', 'textdomain' ),
        'not_found'             => __( 'No Study Tests found.', 'textdomain' ),
        'not_found_in_trash'    => __( 'No Study Tests found in Trash.', 'textdomain' ),
    );
 
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'menu_icon'          => 'dashicons-list-view',
        'rewrite'            => array( 'slug' => 'test-study' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'taxonomy' ),
        'taxonomies'  => array( 'category' )
    );
 
    register_post_type( 'test-studies-cpt', $args );
}
 
add_action( 'init', 'register_test_studies' );


?>
