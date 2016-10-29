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
      'title' => __('Header', 'evos'),
      'panel' => 'evos_global_settings'
   ));

  // Top bar settings
   $wp_customize->add_setting('evos_display_top_bar', array(
      'default' => 0,
      'capability' => 'edit_theme_options',
   ));

   $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'evos_display_top_bar', array(
      'label' => __('Display topbar', 'evos'),
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
      'label' => __('Upload logo for your header', 'evos'),
      'section' => 'evos_header',
      'setting' => 'evos_logo'
   )));

  // Header fixed
  $wp_customize->add_setting('evos_header_fixed', array(
      'default' => 0,
      'capability' => 'edit_theme_options',
  ));

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'evos_header_fixed', array(
      'label' => __('Header Fixed?', 'evos'),
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
      'title' => __('Slideshow options', 'evos'),
      'panel' => 'evos_homepage_panel'
   ));

   $wp_customize->add_setting('evos_display_homepage_slider', array(
      'default' => 0,
      'capability' => 'edit_theme_options',
   ));

   $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'evos_display_homepage_slider', array(
      'label' => __('Display homepage slider', 'evos'),
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
      'label' => __('Homepage slider category', 'evos'),
      'section' => 'evos_homepage',
      'setting' => 'evos_homepage_slider_category',
      'type'    => 'select',
      'choices' => $posts_categories
  )));

  // Homepage call to action
  $wp_customize->add_section('evos_call_to_action', array(
      'priority' => 1,
      'title' => __('Call to Action', 'evos'),
      'panel' => 'evos_homepage_panel'
   ));

  $wp_customize->add_setting('evos_call_to_action', array(
      'default' => 0,
      'capability' => 'edit_theme_options',
  ));

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'evos_call_to_action', array(
      'label' => __('Display Call to action section?', 'evos'),
      'section' => 'evos_call_to_action',
      'setting' => 'evos_call_to_action',
      'type' => 'checkbox'
  )));

  // Call to action text
  $wp_customize->add_setting('evos_call_to_action_text', array(
      'default' => '',
      'capability' => 'edit_theme_options',
  ));

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'evos_call_to_action_text', array(
      'label' => __('Call to action text', 'evos'),
      'section' => 'evos_call_to_action',
      'setting' => 'evos_call_to_action_text',
      'type' => 'textarea'
  )));

  // Call to action button text
  $wp_customize->add_setting('evos_call_to_action_button_text', array(
      'default' => '',
      'capability' => 'edit_theme_options',
  ));

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'evos_call_to_action_button_text', array(
      'label' => __('Call to action text', 'evos'),
      'section' => 'evos_call_to_action',
      'setting' => 'evos_call_to_action_button_text',
      'type' => 'textarea'
  )));

  // Call to action button link
  $wp_customize->add_setting('evos_call_to_action_button_link', array(
      'default' => '#',
      'capability' => 'edit_theme_options',
  ));

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'evos_call_to_action_button_link', array(
      'label' => __('Call to action button link', 'evos'),
      'section' => 'evos_call_to_action',
      'setting' => 'evos_call_to_action_button_link',
      'type' => 'text'
  )));

  // Featured block
  $wp_customize->add_section('evos_featured_block', array(
      'priority' => 1,
      'title' => __('Featured block', 'evos'),
      'panel' => 'evos_homepage_panel'
  ));

  $wp_customize->add_setting('evos_display_featured_area', array(
      'default' => 0,
      'capability' => 'edit_theme_options',
  ));

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'evos_display_featured_area', array(
      'label' => __('Display featured area?', 'evos'),
      'section' => 'evos_featured_block',
      'setting' => 'evos_display_featured_area',
      'type' => 'checkbox'
  )));

  // Featured block title
  $wp_customize->add_setting('evos_featured_block_title', array(
      'default' => '',
      'capability' => 'edit_theme_options',
  ));

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'evos_featured_block_title', array(
      'label' => __('Featured block title', 'evos'),
      'section' => 'evos_featured_block',
      'setting' => 'evos_featured_block_title',
      'type' => 'text'
  )));

  // Featured block subtitle
  $wp_customize->add_setting('evos_featured_block_subtitle', array(
      'default' => '',
      'capability' => 'edit_theme_options',
  ));

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'evos_featured_block_subtitle', array(
      'label' => __('Featured block sub title', 'evos'),
      'section' => 'evos_featured_block',
      'setting' => 'evos_featured_block_subtitle',
      'type' => 'textarea'
  )));

  // FEATURED BLOCK 1
  // Image
  $wp_customize->add_setting('evos_featured_block_image_1', array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'esc_url_raw'
  ));

  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'evos_featured_block_image_1', array(
      'label' => __('Featured area 1 logo', 'evos'),
      'section' => 'evos_featured_block',
      'setting' => 'evos_featured_block_image_1'
  )));

  // Title
  $wp_customize->add_setting('evos_featured_block_title_1', array(
      'default' => '',
      'capability' => 'edit_theme_options',
  ));

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'evos_featured_block_title_1', array(
      'label' => __('Featured block title 1', 'evos'),
      'section' => 'evos_featured_block',
      'setting' => 'evos_featured_block_title_1',
      'type' => 'text'
  )));

  // Subtitle
  $wp_customize->add_setting('evos_featured_block_subtitle_1', array(
      'default' => '',
      'capability' => 'edit_theme_options',
  ));

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'evos_featured_block_subtitle_1', array(
      'label' => __('Featured block subtitle 1', 'evos'),
      'section' => 'evos_featured_block',
      'setting' => 'evos_featured_block_subtitle_1',
      'type' => 'text'
  )));

  // FEATURED BLOCK 2
  // Image
  $wp_customize->add_setting('evos_featured_block_image_2', array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'esc_url_raw'
  ));

  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'evos_featured_block_image_2', array(
      'label' => __('Featured area 2 logo', 'evos'),
      'section' => 'evos_featured_block',
      'setting' => 'evos_featured_block_image_2'
  )));

  // Title
  $wp_customize->add_setting('evos_featured_block_title_2', array(
      'default' => '',
      'capability' => 'edit_theme_options',
  ));

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'evos_featured_block_title_2', array(
      'label' => __('Featured block title 2', 'evos'),
      'section' => 'evos_featured_block',
      'setting' => 'evos_featured_block_title_2',
      'type' => 'text'
  )));

  // Subtitle
  $wp_customize->add_setting('evos_featured_block_subtitle_2', array(
      'default' => '',
      'capability' => 'edit_theme_options',
  ));

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'evos_featured_block_subtitle_2', array(
      'label' => __('Featured block subtitle 2', 'evos'),
      'section' => 'evos_featured_block',
      'setting' => 'evos_featured_block_subtitle_2',
      'type' => 'text'
  )));

  // FEATURED BLOCK 3
  // Image
  $wp_customize->add_setting('evos_featured_block_image_3', array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'esc_url_raw'
  ));

  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'evos_featured_block_image_3', array(
      'label' => __('Featured area 3 logo', 'evos'),
      'section' => 'evos_featured_block',
      'setting' => 'evos_featured_block_image_3'
  )));

  // Title
  $wp_customize->add_setting('evos_featured_block_title_3', array(
      'default' => '',
      'capability' => 'edit_theme_options',
  ));

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'evos_featured_block_title_3', array(
      'label' => __('Featured block title 3', 'evos'),
      'section' => 'evos_featured_block',
      'setting' => 'evos_featured_block_title_3',
      'type' => 'text'
  )));

  // Subtitle
  $wp_customize->add_setting('evos_featured_block_subtitle_3', array(
      'default' => '',
      'capability' => 'edit_theme_options',
  ));

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'evos_featured_block_subtitle_3', array(
      'label' => __('Featured block subtitle 3', 'evos'),
      'section' => 'evos_featured_block',
      'setting' => 'evos_featured_block_subtitle_3',
      'type' => 'text'
  )));

  // Articles
  $wp_customize->add_section('evos_featured_posts', array(
      'priority' => 1,
      'title' => __('Featured Posts', 'evos'),
      'panel' => 'evos_homepage_panel'
  ));

  // Enable articles
  $wp_customize->add_setting('evos_display_featured_posts', array(
      'default' => 0,
      'capability' => 'edit_theme_options',
  ));

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'evos_display_featured_posts', array(
      'label' => __('Enable featured posts?', 'evos'),
      'section' => 'evos_featured_posts',
      'setting' => 'evos_display_featured_posts',
      'type' => 'checkbox'
  )));

  $posts_array = array('' => 'Select post');
  $args = array( 'post_type' => 'post', 'posts_per_page' => -1 );
  $posts = new WP_Query( $args );

  // Get posts
  if ( $posts->have_posts() ) :
    while ( $posts->have_posts() ) :
      $posts->the_post();
      $posts_array[get_the_ID()] = get_the_title(); 
    endwhile;
    wp_reset_postdata();
  endif;

  $wp_customize->add_setting('evos_homepage_feautred_posts_1', array(
    'capability' => 'edit_theme_options',
  ));

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'evos_homepage_feautred_posts_1', array(
      'label' => __('Homepage post 1', 'evos'),
      'section' => 'evos_featured_posts',
      'setting' => 'evos_homepage_feautred_posts_1',
      'type'    => 'select',
      'choices' => $posts_array
  )));

  $wp_customize->add_setting('evos_homepage_feautred_posts_2', array(
    'capability' => 'edit_theme_options',
  ));

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'evos_homepage_feautred_posts_2', array(
      'label' => __('Homepage post 2', 'evos'),
      'section' => 'evos_featured_posts',
      'setting' => 'evos_homepage_feautred_posts_2',
      'type'    => 'select',
      'choices' => $posts_array
  )));

  $wp_customize->add_setting('evos_homepage_feautred_posts_3', array(
    'capability' => 'edit_theme_options',
  ));

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'evos_homepage_feautred_posts_3', array(
      'label' => __('Homepage post 3', 'evos'),
      'section' => 'evos_featured_posts',
      'setting' => 'evos_homepage_feautred_posts_3',
      'type'    => 'select',
      'choices' => $posts_array
  )));

  // CUSTOM BANNER BLOCK
  $wp_customize->add_section('evos_custom_banner', array(
      'priority' => 1,
      'title' => __('Banner settings', 'evos'),
      'panel' => 'evos_homepage_panel'
  ));

  $wp_customize->add_setting('evos_display_custom_banner', array(
      'default' => 0,
      'capability' => 'edit_theme_options',
  ));

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'evos_display_custom_banner', array(
      'label' => __('Custom banner', 'evos'),
      'section' => 'evos_custom_banner',
      'setting' => 'evos_display_custom_banner',
      'type'    => 'checkbox',
  )));

  // Custom block image
  $wp_customize->add_setting('evos_custom_block_image', array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'esc_url_raw'
   ));

   $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'evos_custom_block_image', array(
      'label' => __('Image', 'evos'),
      'section' => 'evos_custom_banner',
      'setting' => 'evos_custom_block_image'
   )));

  // Custom block title
  $wp_customize->add_setting('evos_custom_block_title', array(
      'default' => '',
      'capability' => 'edit_theme_options',
  ));

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'evos_custom_block_title', array(
      'label' => __('Title', 'evos'),
      'section' => 'evos_custom_banner',
      'setting' => 'evos_custom_block_title',
      'type' => 'text'
  )));

  // Custom block text
  $wp_customize->add_setting('evos_custom_block_text', array(
      'default' => '',
      'capability' => 'edit_theme_options',
  ));

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'evos_custom_block_text', array(
      'label' => __('Description', 'evos'),
      'section' => 'evos_custom_banner',
      'setting' => 'evos_custom_block_text',
      'type' => 'textarea'
  )));
  
  // Custom block button text
  $wp_customize->add_setting('evos_custom_button_text', array(
      'default' => '',
      'capability' => 'edit_theme_options',
  ));

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'evos_custom_button_text', array(
      'label' => __('Button text', 'evos'),
      'section' => 'evos_custom_banner',
      'setting' => 'evos_custom_button_text',
      'type' => 'text'
  )));

  // Custom block button link
  $wp_customize->add_setting('evos_custom_button_link', array(
      'default' => '',
      'capability' => 'edit_theme_options',
  ));

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'evos_custom_button_link', array(
      'label' => __('Button link', 'evos'),
      'section' => 'evos_custom_banner',
      'setting' => 'evos_custom_button_link',
      'type' => 'text'
  )));

  // LOGO SECTION
  $wp_customize->add_section('evos_logos_section', array(
      'priority' => 1,
      'title' => __('Logos section', 'evos'),
      'panel' => 'evos_homepage_panel'
  ));

  $wp_customize->add_setting('evos_display_logos_section', array(
      'default' => 0,
      'capability' => 'edit_theme_options',
  ));

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'evos_display_logos_section', array(
      'label' => __('Enable logos section', 'evos'),
      'section' => 'evos_logos_section',
      'setting' => 'evos_display_logos_section',
      'type'    => 'checkbox',
  )));

  // Logo slider title
  $wp_customize->add_setting('evos_logos_section_title', array(
      'default' => '',
      'capability' => 'edit_theme_options',
  ));

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'evos_logos_section_title', array(
      'label' => __('Title', 'evos'),
      'section' => 'evos_logos_section',
      'setting' => 'evos_logos_section_title',
      'type' => 'text'
  )));

  // Logo slider subtitle
   $wp_customize->add_setting('evos_logos_section_subtitle', array(
      'default' => '',
      'capability' => 'edit_theme_options',
  ));

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'evos_logos_section_subtitle', array(
      'label' => __('Subtitle', 'evos'),
      'section' => 'evos_logos_section',
      'setting' => 'evos_logos_section_subtitle',
      'type' => 'textarea'
  )));

  // Logo slide 1
  $wp_customize->add_setting('evos_logos_fsection_image_1', array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'esc_url_raw'
  ));

  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'evos_logos_section_image_1', array(
      'label' => __('Logo 1', 'evos'),
      'section' => 'evos_logos_section',
      'setting' => 'evos_logos_section_image_1'
  )));

  // Logo slide 2
  $wp_customize->add_setting('evos_logos_section_image_2', array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'esc_url_raw'
  ));

  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'evos_logos_section_image_2', array(
      'label' => __('Logo 2', 'evos'),
      'section' => 'evos_logos_section',
      'setting' => 'evos_logos_section_image_2'
  )));
  
  // Logo slide 3
  $wp_customize->add_setting('evos_logos_section_image_3', array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'esc_url_raw'
  ));

  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'evos_logos_section_image_3', array(
      'label' => __('Logo 3', 'evos'),
      'section' => 'evos_logos_section',
      'setting' => 'evos_logos_section_image_3'
  )));

  // Logo slide 4
  $wp_customize->add_setting('evos_logos_section_image_4', array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'esc_url_raw'
  ));

  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'evos_logos_section_image_4', array(
      'label' => __('Logo 4', 'evos'),
      'section' => 'evos_logos_section',
      'setting' => 'evos_logos_section_image_4'
  )));

  // Logo slide 5 
  $wp_customize->add_setting('evos_logos_section_image_5', array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'esc_url_raw'
  ));

  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'evos_logos_section_image_5', array(
      'label' => __('Logo 5', 'evos'),
      'section' => 'evos_logos_section',
      'setting' => 'evos_logos_section_image_5'
  )));

  // Logo slide 6 
  $wp_customize->add_setting('evos_logos_section_image_6', array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'esc_url_raw'
  ));

  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'evos_logos_section_image_6', array(
      'label' => __('Logo 6', 'evos'),
      'section' => 'evos_logos_section',
      'setting' => 'evos_logos_section_image_6'
  )));

  // Logo slide 7 
  $wp_customize->add_setting('evos_logos_section_image_7', array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'esc_url_raw'
  ));

  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'evos_logos_section_image_7', array(
      'label' => __('Logo 7', 'evos'),
      'section' => 'evos_logos_section',
      'setting' => 'evos_logos_section_image_7'
  )));

  // Logo slide 8 
  $wp_customize->add_setting('evos_logos_section_image_8', array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'esc_url_raw'
  ));

  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'evos_logos_section_image_8', array(
      'label' => __('Logo 8', 'evos'),
      'section' => 'evos_logos_section',
      'setting' => 'evos_logos_section_image_8'
  )));

  // Logo slide 9   
  $wp_customize->add_setting('evos_logos_section_image_9', array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'esc_url_raw'
  ));

  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'evos_logos_section_image_9', array(
      'label' => __('Logo 9', 'evos'),
      'section' => 'evos_logos_section',
      'setting' => 'evos_logos_section_image_9'
  )));

  // TEAM SECTION
  $wp_customize->add_section('evos_team', array(
      'priority' => 1,
      'title' => __('Team', 'evos'),
      'panel' => 'evos_homepage_panel'
  ));

  $wp_customize->add_setting('evos_display_team', array(
      'default' => 0,
      'capability' => 'edit_theme_options',
  ));

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'evos_display_team', array(
      'label' => __('Enable team members', 'evos'),
      'section' => 'evos_team',
      'setting' => 'evos_display_team',
      'type'    => 'checkbox',
  )));

  // PORTFOLIO SECTION
  $wp_customize->add_section('evos_portfolio', array(
      'priority' => 1,
      'title' => __('Portfolio', 'evos'),
      'panel' => 'evos_homepage_panel'
  ));

  $wp_customize->add_setting('evos_display_portfolio', array(
      'default' => 0,
      'capability' => 'edit_theme_options',
  ));

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'evos_display_portfolio', array(
      'label' => __('Enable portfolio', 'evos'),
      'section' => 'evos_portfolio',
      'setting' => 'evos_display_portfolio',
      'type'    => 'checkbox',
  )));

  // TESTIMONIALS SECTION
  $wp_customize->add_section('evos_testimonials', array(
      'priority' => 1,
      'title' => __('Testimonials', 'evos'),
      'panel' => 'evos_homepage_panel'
  ));

  $wp_customize->add_setting('evos_display_testimonials', array(
      'default' => 0,
      'capability' => 'edit_theme_options',
  ));

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'evos_display_testimonials', array(
      'label' => __('Enable testimonials', 'evos'),
      'section' => 'evos_testimonials',
      'setting' => 'evos_display_testimonials',
      'type'    => 'checkbox',
  )));


  // Layout options
  $wp_customize->add_section('evos_layout', array(
      'priority' => 1,
      'title' => __('Layout options', 'evos'),
      'panel' => 'evos_global_settings'
  ));

  $wp_customize->add_setting('evos_layout_settings', array(
      'default' => 0,
      'capability' => 'edit_theme_options',
  ));

  global $evos_extra_options;

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'evos_layout_settings', array(
      'label' => __('Display homepage slider', 'evos'),
      'section' => 'evos_layout',
      'setting' => 'evos_layout_settings',
      'type'    => 'select',
      'choices' => $evos_extra_options['evos_layout_options']
  )));

  $wp_customize->add_section('evos_banner', array(
      'priority' => 1,
      'title' => __('Banner settings', 'evos'),
      'panel' => 'evos_global_settings'
  ));

  $wp_customize->add_setting('evos_display_banner_global', array(
      'default' => 0,
      'capability' => 'edit_theme_options',
  ));

  global $evos_extra_options;

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'evos_display_banner_global', array(
      'label' => __('Display top banner', 'evos'),
      'section' => 'evos_banner',
      'setting' => 'evos_display_banner_global',
      'type'    => 'checkbox',
  )));


}
add_action( 'customize_register', 'mytheme_customize_register' );