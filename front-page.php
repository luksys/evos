<?php 
	get_header();
	
    if( is_home() ) :
        get_template_part('template-parts/content', 'home');
    else :
        get_template_part('template-parts/content', 'front-page');
    endif;

    evos_display_sidebar();

	get_footer();
?>