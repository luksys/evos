<?php

function mytheme_customize_register( $wp_customize ) {

  // Top bar settings
  $wp_customize->add_section('evos_top_bar', array(
      'priority' => 1,
      'title' => __('Evos top bar', 'colormag'),
      // 'panel' => 'colormag_header_options'
   ));

   $wp_customize->add_setting('evos_display_top_bar', array(
      'default' => 0,
      'capability' => 'edit_theme_options',
   ));

   $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'evos_display_top_bar', array(
      'label' => __('Display topbar', 'colormag'),
      'section' => 'evos_top_bar',
      'setting' => 'evos_display_top_bar',
      'type' => 'checkbox'
   )));

  // Header logo
  $wp_customize->add_section('evos_header_logo', array(
      'priority' => 1,
      'title' => __('Header Logo', 'colormag'),
      // 'panel' => 'colormag_header_options'
   ));

   $wp_customize->add_setting('evos_logo', array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'esc_url_raw'
   ));

   $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'evos_logo', array(
      'label' => __('Upload logo for your header', 'colormag'),
      'section' => 'evos_header_logo',
      'setting' => 'evos_logo'
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

}
add_action( 'customize_register', 'mytheme_customize_register' );

/*
$posts_categories = array();

  

    // Header options
    Redux::setSection( $opt_name, array(
        'title'            => __( 'Header options', 'redux-framework-demo' ),
        'id'               => 'htrhrtdjrtfj',
        'desc'             => __( 'Header options', 'redux-framework-demo' ),
        'customizer_width' => '500px',
        'icon'             => 'el el-home',
        'fields'            => array(
             array(
                'id'       => 'fixed_header',
                'title'    => __( 'Header is fixed?', 'redux-framework-demo' ),
                'type' => 'switch',
                'default'  => '0',
            ),
            array(
                'id'       => 'header-logo',
                'type'     => 'media',
                'title'    => __( 'Header Logo', 'redux-framework-demo' ),
                'desc'     => __( 'Here you can upload your logo for header.', 'redux-framework-demo' ),
            ),
            array(
                'id'       => 'topbar',
                'title'    => __( 'Show Top bar?', 'redux-framework-demo' ),
                'type' => 'switch',
                'default'  => '0',
            ),
            array(
                'id'       => 'home-slider',
                'title'    => __( 'Show home slider?', 'redux-framework-demo' ),
                'type' => 'switch',
                'default'  => '0',
            ),
            array(
                'id'       => 'home-slider-category',
                'type'     => 'select',
                'title'    => __( 'Select slider category:', 'redux-framework-demo' ),
                'options'  => $posts_categories,
                'default'  => '2'
            ),
        )
    ) );

    // Top bar section
    // Redux::setSection( $opt_name, array(
    //     'title'             => __( 'Top Bar', 'redux-framework-demo' ),
    //     'id'                => 'topbar_settings',
    //     'desc'              => __( 'Upload all media that is used in header area.', 'redux-framework-demo' ),
    //     'subsection'       => true,
    //     'fields'            => array(
    //         // Topbar visibility
    //         array(
    //             'id'       => 'topbar',
    //             'title'    => __( 'Show Top bar?', 'redux-framework-demo' ),
    //             'type' => 'switch',
    //             'default'  => '0',
    //         ),

    //         // HEADER LAYOUT
    //         // array(
    //         //     'id'=>'boxed_layout',
    //         //     'type' => 'image_select',
    //         //     'compiler'=> false,
    //         //     'customizer' => true,
    //         //     'title' => __('Site Layout Style', 'virtue'), 
    //         //     'subtitle' => __('Select Boxed or Wide Site Layout Style', 'virtue'),
    //         //     'options' => array(
    //         //             'wide' => array('alt' => 'Wide Layout', 'img' => OPTIONS_PATH.'img/1c.png'),
    //         //             'boxed' => array('alt' => 'Boxed Layout', 'img' => OPTIONS_PATH.'img/3cm.png'),
    //         //         ),
    //         //     'default' => 'wide',
    //         // ),
    //     )
    // ) );

      // Main header area layout
    Redux::setSection( $opt_name, array(
        'title'             => __( 'Main header area', 'redux-framework-demo' ),
        'id'                => 'mainheader_options',
        'desc'              => __( 'Main header settings', 'redux-framework-demo' ),
        'subsection'        => true,
        'fields'            => array(
            'id'            =>'layout',
            'type'          => 'image_select',
            'compiler'      => false,
            'customizer'    => true,
            'title'         => __('Header Area Layout', 'redux-framework-demo'), 
            'subtitle'      => __('Choose the layout for the main header area', 'redux-framework-demo'),
            'options'       => array(
                'menu_default' => array('alt' => 'Logo Left Layout', 'img' => OPTIONS_PATH.'img/logo_layout_01.png'),
                'menu_right' => array('alt' => 'Logo Half Layout', 'img' => OPTIONS_PATH.'img/logo_layout_03.png'),
                'menu_under' => array('alt' => 'Logo Center Layout', 'img' => OPTIONS_PATH.'img/logo_layout_02.png'),
                'menu_above' => array('alt' => 'Logo Center Layout', 'img' => OPTIONS_PATH.'img/logo_layout_02.png'),
            ),
            'default' => 'logoleft',
        )
    ) );

    // Redux::setSection( $opt_name, array(
    //     'title'             => __( 'Home slider', 'redux-framework-demo' ),
    //     'id'                => 'home-header-slider-section',
    //     'subsection'       => true,
    //     'fields'            => array(
           
    //     )
    // ) );

    global $evos_extra_options;

    // Global options
    Redux::setSection( $opt_name, array(
        'title'            => __( 'Global', 'redux-framework-demo' ),
        'id'               => 'global_options',
        'desc'             => __( 'Global theme options', 'redux-framework-demo' ),
        'customizer_width' => '500px',
        'icon'             => 'el el-home',
        'fields'            => array(
            array(
                'id'       => 'evos_layout_option',
                'type'     => 'select',
                'title'    => __( 'Select default website layout:', 'redux-framework-demo' ),
                'options'  => $evos_extra_options['evos_layout_options'],
                'default'  => 'sidebar-right'
            ),
            array(
                'id'       => 'evos_top_banner',
                'title'    => __( 'Set to display banner on every page by default?', 'redux-framework-demo' ),
                'type' => 'switch',
                'default'  => '0',
            ),
        )
    ) );



*/