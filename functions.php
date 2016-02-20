<?php

// if (!isset($content_width))
// {
//     $content_width = 900;
// }

// if (function_exists('add_theme_support'))
// {
//     // Add Menu Support
//     add_theme_support('menus');

//     // Add Thumbnail Theme Support
//     add_theme_support('post-thumbnails');
//     add_image_size('large', 700, '', true); // Large Thumbnail
//     add_image_size('medium', 250, '', true); // Medium Thumbnail
//     add_image_size('small', 120, '', true); // Small Thumbnail
//     add_image_size('custom-size', 700, 200, true); // Custom Thumbnail Size call using the_post_thumbnail('custom-size');

//     // Enables post and comment RSS feed links to head
//     add_theme_support('automatic-feed-links');

//     // Localisation Support
//     load_theme_textdomain('evos', get_template_directory() . '/languages');
// }

function evos_setup() {
	//add_theme_support( 'custom-header' );
	add_theme_support( 'title-tag' );
	// add_theme_support('automatic-feed-links');
	// add_theme_support( 'post-thumbnails' );
	// //Custom Background	
	// add_theme_support( 'custom-background', array( 'default-color' => 'f7f7f7') );	
	// //Make theme available for translation
	// load_theme_textdomain('optimizer', get_template_directory() . '/languages/');  
	
	// //Custom Thumbnail Size	
	// 	add_image_size( 'optimizer_thumb', 400, 270, true ); /*(cropped)*/
   
	// //Register Menus
	// register_nav_menus( array(
	// 		'primary' => __( 'Header Navigation', 'optimizer' ),
	// 	) );
	}
add_action( 'after_setup_theme', 'evos_setup' );


// Evos core constants
define('EVOS_PARENT_DIR', get_template_directory());  

// Evos functions
require(EVOS_PARENT_DIR . '/inc/enqueue.php');
require(EVOS_PARENT_DIR . '/inc/functions.php');
require(EVOS_PARENT_DIR . '/inc/widgets.php');
