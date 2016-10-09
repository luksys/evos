<?php

function evos_get_title(){
	global $post;
	$title = '';
  $title_element = '';

	if( is_singular() ) :
		$title = get_the_title();
  elseif( is_front_page() && is_home() ) :
    $title = '';
	elseif( is_home() ) :
		$title = get_the_title( get_option('page_for_posts', true) );
	endif;

  if( !empty($title) ) :
    $title_element = '<h1 class="main-title">'.$title.'</h1>';
  endif;

	return $title_element;
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
	global $evos_display_sidebar, $post;

	if( $evos_display_sidebar )
		return get_sidebar();
}

function evos_top_section_settings(){
  global $post, $evos_options, $evos_extra_options;

  $display_top_banner = false;
  $banner_options = '';

  if( is_singular() ) :
    $banner_options = get_post_meta($post->ID, 'evos_display_top_banner', true);
  elseif( is_home() ) :
    $banner_options = get_post_meta(get_option( 'page_for_posts' ), 'evos_display_top_banner', true);
  endif;

  if( $banner_options === 'on' || (empty($banner_options) && $evos_options['evos_top_banner']) )
    $display_top_banner = true;
  
  if( $display_top_banner && has_post_thumbnail() ) :
    get_template_part('template-parts/content', 'banner');
    $evos_extra_options['main_title'] = false;
  endif;
}