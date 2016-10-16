<?php

function mytheme_customize_register( $wp_customize ) {

  // Global options
  $wp_customize->add_panel( 'evos_global_settings', array(
    'title' => 'Global Settings',
    'description' => 'Evos global settings',
    'priority' => 10,
  ) );

  // Header section
   $wp_customize->add_section('evos_header', array(
      'priority' => 1,
      'title' => __('Header', 'colormag'),
      'panel' => 'evos_global_settings'
   ));

  // Top bar settings
   $wp_customize->add_setting('evos_display_top_bar', array(
      'default' => 0,
      'capability' => 'edit_theme_options',
   ));

   $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'evos_display_top_bar', array(
      'label' => __('Display topbar', 'colormag'),
      'section' => 'evos_header',
      'setting' => 'evos_display_top_bar',
      'type' => 'checkbox'
   )));   

  // Header logo
   $wp_customize->add_setting('evos_logo', array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'esc_url_raw'
   ));

   $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'evos_logo', array(
      'label' => __('Upload logo for your header', 'colormag'),
      'section' => 'evos_header',
      'setting' => 'evos_logo'
   )));

  // Header fixed
  $wp_customize->add_setting('evos_header_fixed', array(
      'default' => 0,
      'capability' => 'edit_theme_options',
  ));

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'evos_header_fixed', array(
      'label' => __('Header Fixed?', 'colormag'),
      'section' => 'evos_header',
      'setting' => 'evos_header_fixed',
      'type' => 'checkbox'
  )));

    // Homepage panel
   $wp_customize->add_panel( 'evos_homepage_panel', array(
        'title' => 'Homepage Settings',
        'description' => 'Homepage settings',
        'priority' => 10,
    ) );

  // Homepage slider
  $wp_customize->add_section('evos_homepage', array(
      'priority' => 1,
      'title' => __('Slideshow options', 'colormag'),
      'panel' => 'evos_homepage_panel'
   ));

   $wp_customize->add_setting('evos_display_homepage_slider', array(
      'default' => 0,
      'capability' => 'edit_theme_options',
   ));

   $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'evos_display_homepage_slider', array(
      'label' => __('Display homepage slider', 'colormag'),
      'section' => 'evos_homepage',
      'setting' => 'evos_display_homepage_slider',
      'type'    => 'checkbox'
   )));

   // Homepage slider category
   $wp_customize->add_setting('evos_homepage_slider_category', array(
      'capability' => 'edit_theme_options',
   ));

   foreach (get_categories() as $key => $category) :
        $posts_categories[$category->term_id] = $category->cat_name;
    endforeach;

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'evos_homepage_slider_category', array(
      'label' => __('Homepage slider category', 'colormag'),
      'section' => 'evos_homepage',
      'setting' => 'evos_homepage_slider_category',
      'type'    => 'select',
      'choices' => $posts_categories
  )));

  // Layout options
  $wp_customize->add_section('evos_layout', array(
      'priority' => 1,
      'title' => __('Layout options', 'colormag'),
      'panel' => 'evos_global_settings'
  ));

  $wp_customize->add_setting('evos_layout_settings', array(
      'default' => 0,
      'capability' => 'edit_theme_options',
  ));

  global $evos_extra_options;

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'evos_layout_settings', array(
      'label' => __('Display homepage slider', 'colormag'),
      'section' => 'evos_layout',
      'setting' => 'evos_layout_settings',
      'type'    => 'select',
      'choices' => $evos_extra_options['evos_layout_options']
  )));

  $wp_customize->add_section('evos_banner', array(
      'priority' => 1,
      'title' => __('Banner settings', 'colormag'),
      'panel' => 'evos_global_settings'
  ));

  $wp_customize->add_setting('evos_display_banner_global', array(
      'default' => 0,
      'capability' => 'edit_theme_options',
  ));

  global $evos_extra_options;

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'evos_display_banner_global', array(
      'label' => __('Display top banner', 'colormag'),
      'section' => 'evos_banner',
      'setting' => 'evos_display_banner_global',
      'type'    => 'checkbox',
  )));


}
add_action( 'customize_register', 'mytheme_customize_register' );