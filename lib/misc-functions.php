<?php

function evos_get_title(){
	global $post;
	$title = '';

	if( is_singular() ){
		$title = get_the_title();
	}elseif( is_home() ){
		$title = get_the_title( get_option('page_for_posts', true) );
	}

	return $title;
}

add_filter( 'body_class', function( $classes ) {
   global $post, $evos_options,	$evos_display_sidebar;
   $evos_display_sidebar = true;
   $class = '';

    if( is_singular() ) :
   		$layout_option = get_post_meta($post->ID, 'evos_layout_options', true);
   		$class = !empty($layout_option) ? $layout_option : $evos_options['evos_layout_option'];
    elseif( is_home() ) :
    	$layout_option = get_post_meta( get_option( 'page_for_posts' ), 'evos_layout_options', true );
   		$class = !empty( $layout_option ) ? $layout_option : $evos_options['evos_layout_option'];
   	else :
   		$class = $evos_options['evos_layout_option'];
   endif;

   if( $class === 'no-sidebar' || $class === 'full-width' )
   		$evos_display_sidebar = false;

   $classes[] = $class;

   return $classes;
} );


function evos_display_sidebar(){
	global $evos_display_sidebar;

	if( $evos_display_sidebar() ) :
		get_sidebar();

	return;
}