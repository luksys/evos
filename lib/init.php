<?php
global $evos_extra_options;
$evos_extra_options['main_title'] = true;
$evos_extra_options['evos_layout_options'] = array( 'no-sidebar' => 'No Sidebar', 'sidebar-left' => 'Left Sidebar', 'sidebar-right' => 'Right Sidebar', 'full-width' => 'Full Width' );

if ( ! function_exists( 'evos_setup' ) ) :

function evos_setup() {
	// Evos textdomain
	load_theme_textdomain( 'twentysixteen', get_template_directory() . '/languages' );
	add_theme_support( 'title-tag' );
	add_filter( 'pre_option_link_manager_enabled', '__return_true' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'twentysixteen' ),
		'footer_bottom_menu' => __( 'Footer Bottom Menu', 'twentysixteen' ),
		'social'  => __( 'Social Links Menu', 'twentysixteen' ),
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

	// Add image sizes
	add_image_size( 'size-large', 1920, 800, true );
}
endif; // twentysixteen_setup
add_action( 'after_setup_theme', 'evos_setup' );