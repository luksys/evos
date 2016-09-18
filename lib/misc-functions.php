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