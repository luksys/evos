<?php
// Load Evos conditional scripts
function evos_conditional_scripts(){
    if (is_page('pagenamehere')) {
        wp_register_script('scriptname', get_template_directory_uri() . '/js/main.js', array('jquery'), '1.0.0'); // Conditional script(s)
        wp_enqueue_script('scriptname'); // Enqueue it!
    }
}

// Load Evos scripts
function evos_scripts() {
    wp_register_script('flickity', get_template_directory_uri() . '/js/vendor/flickity.pkgd.min.js', false, '1.1.1', true);
    wp_register_script('main', get_template_directory_uri() . '/js/main.js', array('flickity'),'1.0.0', true);
    wp_enqueue_script('main');
}

// Load Evos styles
function evos_styles(){
    wp_register_style('layout', get_template_directory_uri() . '/css/layout.css', array(), '1.0', 'all');
    wp_enqueue_style('layout');
}
?>