<?php
add_action( 'init', 'add_team_post_type' );
/**
 * Register a team post type.
 */
function add_team_post_type() {
	$labels = array(
		'name'               => _x( 'Team members', 'post type general name', 'your-plugin-textdomain' ),
		'singular_name'      => _x( 'Team member', 'post type singular name', 'your-plugin-textdomain' ),
		'menu_name'          => _x( 'Team members', 'admin menu', 'your-plugin-textdomain' ),
		'name_admin_bar'     => _x( 'Team member', 'add new on admin bar', 'your-plugin-textdomain' ),
		'add_new'            => _x( 'Add New', 'Team member', 'your-plugin-textdomain' ),
		'add_new_item'       => __( 'Add New Team member', 'your-plugin-textdomain' ),
		'new_item'           => __( 'New Team member', 'your-plugin-textdomain' ),
		'edit_item'          => __( 'Edit Team member', 'your-plugin-textdomain' ),
		'view_item'          => __( 'View Team member', 'your-plugin-textdomain' ),
		'all_items'          => __( 'All Team members', 'your-plugin-textdomain' ),
		'search_items'       => __( 'Search Team members', 'your-plugin-textdomain' ),
		'parent_item_colon'  => __( 'Parent Team members:', 'your-plugin-textdomain' ),
		'not_found'          => __( 'No members found.', 'your-plugin-textdomain' ),
		'not_found_in_trash' => __( 'No members found in Trash.', 'your-plugin-textdomain' )
	);

	$args = array(
		'labels'             => $labels,
        'description'        => __( 'Description.', 'your-plugin-textdomain' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'book' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'menu_icon'			 => 'dashicons-groups',
		'supports'           => array( 'title', 'editor', 'thumbnail' )
	);

	register_post_type( 'team', $args );
}

add_action( 'init', 'add_portfolio_post_type' );
/**
 * Register a portoflio post type.
 */
function add_portfolio_post_type() {
	$labels = array(
		'name'               => _x( 'Portfolio', 'post type general name', 'your-plugin-textdomain' ),
		'singular_name'      => _x( 'Portfolio item', 'post type singular name', 'your-plugin-textdomain' ),
		'menu_name'          => _x( 'Portfolio items', 'admin menu', 'your-plugin-textdomain' ),
		'name_admin_bar'     => _x( 'Portfolio item', 'add new on admin bar', 'your-plugin-textdomain' ),
		'add_new'            => _x( 'Add New', 'Portfolio item', 'your-plugin-textdomain' ),
		'add_new_item'       => __( 'Add New Portfolio item', 'your-plugin-textdomain' ),
		'new_item'           => __( 'New Portfolio item', 'your-plugin-textdomain' ),
		'edit_item'          => __( 'Edit Portfolio item', 'your-plugin-textdomain' ),
		'view_item'          => __( 'View Portfolio item', 'your-plugin-textdomain' ),
		'all_items'          => __( 'All TPortfolio items', 'your-plugin-textdomain' ),
		'search_items'       => __( 'Search Portfolio items', 'your-plugin-textdomain' ),
		'parent_item_colon'  => __( 'Parnt Portfolio items:', 'your-plugin-textdomain' ),
		'not_found'          => __( 'No portfolio items found.', 'your-plugin-textdomain' ),
		'not_found_in_trash' => __( 'No portfolio items found in Trash.', 'your-plugin-textdomain' )
	);

	$args = array(
		'labels'             => $labels,
        'description'        => __( 'Description.', 'your-plugin-textdomain' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'book' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'menu_icon'			 => 'dashicons-portfolio',
		'supports'           => array( 'title', 'editor', 'thumbnail' )
	);

	register_post_type( 'portfolio', $args );
}

add_action( 'init', 'add_testimonial_post_type' );
/**
 * Register a testimonials post type.
 */
function add_testimonial_post_type() {
	$labels = array(
		'name'               => _x( 'Testimonial', 'post type general name', 'your-plugin-textdomain' ),
		'singular_name'      => _x( 'Testimonial item', 'post type singular name', 'your-plugin-textdomain' ),
		'menu_name'          => _x( 'Testimonial items', 'admin menu', 'your-plugin-textdomain' ),
		'name_admin_bar'     => _x( 'Testimonial item', 'add new on admin bar', 'your-plugin-textdomain' ),
		'add_new'            => _x( 'Add New', 'Testimonial item', 'your-plugin-textdomain' ),
		'add_new_item'       => __( 'Add New Testimonial item', 'your-plugin-textdomain' ),
		'new_item'           => __( 'New Testimonial item', 'your-plugin-textdomain' ),
		'edit_item'          => __( 'Edit Testimonial item', 'your-plugin-textdomain' ),
		'view_item'          => __( 'View Testimonial item', 'your-plugin-textdomain' ),
		'all_items'          => __( 'All Testimonial items', 'your-plugin-textdomain' ),
		'search_items'       => __( 'Search Testimonial items', 'your-plugin-textdomain' ),
		'parent_item_colon'  => __( 'Parent Testimonial items:', 'your-plugin-textdomain' ),
		'not_found'          => __( 'No testimonials found.', 'your-plugin-textdomain' ),
		'not_found_in_trash' => __( 'No testimonials found in Trash.', 'your-plugin-textdomain' )
	);

	$args = array(
		'labels'             => $labels,
        'description'        => __( 'Description.', 'your-plugin-textdomain' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'book' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'menu_icon'			 => 'dashicons-testimonial',
		'supports'           => array( 'title', 'editor', 'thumbnail' )
	);

	register_post_type( 'testimonial', $args );
}