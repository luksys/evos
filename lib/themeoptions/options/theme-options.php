<?php
    define( 'OPTIONS_PATH', get_template_directory_uri() . '/themeoptions/options/' );

    /**
     * ReduxFramework Barebones Sample Config File
     * For full documentation, please visit: http://docs.reduxframework.com/
     */

    if ( ! class_exists( 'Redux' ) ) {
        return;
    }

    // This is your option name where all the Redux data is stored.
    $opt_name = "evos_options";

    /**
     * ---> SET ARGUMENTS
     * All the possible arguments for Redux.
     * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
     * */

    $theme = wp_get_theme(); // For use with some settings. Not necessary.

    $args = array(
        // TYPICAL -> Change these values as you need/desire
        'opt_name'             => $opt_name,
        // This is where your data is stored in the database and also becomes your global variable name.
        'display_name'         => $theme->get( 'Name' ),
        // Name that appears at the top of your panel
        'display_version'      => $theme->get( 'Version' ),
        // Version that appears at the top of your panel
        'menu_type'            => 'hidden',
        //Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
        'allow_sub_menu'       => true,
        // Show the sections below the admin menu item or not
        'menu_title'           => __( 'Sample Options', 'redux-framework-demo' ),
        'page_title'           => __( 'Sample Options', 'redux-framework-demo' ),
        // You will need to generate a Google API key to use this feature.
        // Please visit: https://developers.google.com/fonts/docs/developer_api#Auth
        'google_api_key'       => '',
        // Set it you want google fonts to update weekly. A google_api_key value is required.
        'google_update_weekly' => false,
        // Must be defined to add google fonts to the typography module
        'async_typography'     => true,
        // Use a asynchronous font on the front end or font string
        //'disable_google_fonts_link' => true,                    // Disable this in case you want to create your own google fonts loader
        'admin_bar'            => true,
        // Show the panel pages on the admin bar
        'admin_bar_icon'       => 'dashicons-portfolio',
        // Choose an icon for the admin bar menu
        'admin_bar_priority'   => 50,
        // Choose an priority for the admin bar menu
        // 'global_variable'      => 'evos',
        // Set a different name for your global variable other than the opt_name
        'dev_mode'             => true,
        // Show the time the page took to load, etc
        'update_notice'        => true,
        // If dev_mode is enabled, will notify developer of updated versions available in the GitHub Repo
        'customizer'           => true,
        // Enable basic customizer support
        //'open_expanded'     => true,                    // Allow you to start the panel in an expanded way initially.
        //'disable_save_warn' => true,                    // Disable the save warning when a user changes a field

        // OPTIONAL -> Give you extra features
        'page_priority'        => null,
        // Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
        'page_parent'          => 'themes.php',
        // For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
        'page_permissions'     => 'manage_options',
        // Permissions needed to access the options panel.
        'menu_icon'            => '',
        // Specify a custom URL to an icon
        'last_tab'             => '',
        // Force your panel to always open to a specific tab (by id)
        'page_icon'            => 'icon-themes',
        // Icon displayed in the admin panel next to your menu_title
        'page_slug'            => '_options',
        // Page slug used to denote the panel
        'save_defaults'        => true,
        // On load save the defaults to DB before user clicks save or not
        'default_show'         => false,
        // If true, shows the default value next to each field that is not the default value.
        'default_mark'         => '',
        // What to print by the field's title if the value shown is default. Suggested: *
        'show_import_export'   => true,
        // Shows the Import/Export panel when not used as a field.

        // CAREFUL -> These options are for advanced use only
        'transient_time'       => 60 * MINUTE_IN_SECONDS,
        'output'               => true,
        // Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output
        'output_tag'           => true,
        // Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head
        // 'footer_credit'     => '',                   // Disable the footer credit of Redux. Please leave if you can help it.

        // FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
        'database'             => '',
        // possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!

        'use_cdn'              => true,
        // If you prefer not to use the CDN for Select2, Ace Editor, and others, you may download the Redux Vendor Support plugin yourself and run locally or embed it in your code.

        //'compiler'             => true,

        // HINTS
        'hints'                => array(
            'icon'          => 'el el-question-sign',
            'icon_position' => 'right',
            'icon_color'    => 'lightgray',
            'icon_size'     => 'normal',
            'tip_style'     => array(
                'color'   => 'light',
                'shadow'  => true,
                'rounded' => false,
                'style'   => '',
            ),
            'tip_position'  => array(
                'my' => 'top left',
                'at' => 'bottom right',
            ),
            'tip_effect'    => array(
                'show' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'mouseover',
                ),
                'hide' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'click mouseleave',
                ),
            ),
        )
    );

    // ADMIN BAR LINKS -> Setup custom links in the admin bar menu as external items.
    $args['admin_bar_links'][] = array(
        'id'    => 'redux-docs',
        'href'  => 'http://docs.reduxframework.com/',
        'title' => __( 'Documentation', 'redux-framework-demo' ),
    );

    $args['admin_bar_links'][] = array(
        //'id'    => 'redux-support',
        'href'  => 'https://github.com/ReduxFramework/redux-framework/issues',
        'title' => __( 'Support', 'redux-framework-demo' ),
    );

    $args['admin_bar_links'][] = array(
        'id'    => 'redux-extensions',
        'href'  => 'reduxframework.com/extensions',
        'title' => __( 'Extensions', 'redux-framework-demo' ),
    );

    // SOCIAL ICONS -> Setup custom links in the footer for quick links in your panel footer icons.
    $args['share_icons'][] = array(
        'url'   => 'https://github.com/ReduxFramework/ReduxFramework',
        'title' => 'Visit us on GitHub',
        'icon'  => 'el el-github'
        //'img'   => '', // You can use icon OR img. IMG needs to be a full URL.
    );
    $args['share_icons'][] = array(
        'url'   => 'https://www.facebook.com/pages/Redux-Framework/243141545850368',
        'title' => 'Like us on Facebook',
        'icon'  => 'el el-facebook'
    );
    $args['share_icons'][] = array(
        'url'   => 'http://twitter.com/reduxframework',
        'title' => 'Follow us on Twitter',
        'icon'  => 'el el-twitter'
    );
    $args['share_icons'][] = array(
        'url'   => 'http://www.linkedin.com/company/redux-framework',
        'title' => 'Find us on LinkedIn',
        'icon'  => 'el el-linkedin'
    );

    // Panel Intro text -> before the form
    if ( ! isset( $args['global_variable'] ) || $args['global_variable'] !== false ) {
        if ( ! empty( $args['global_variable'] ) ) {
            $v = $args['global_variable'];
        } else {
            $v = str_replace( '-', '_', $args['opt_name'] );
        }
        $args['intro_text'] = sprintf( __( '<p>Did you know that Redux sets a global variable for you? To access any of your saved options from within your code you can use your global variable: <strong>$%1$s</strong></p>', 'redux-framework-demo' ), $v );
    } else {
        $args['intro_text'] = __( '<p>This text is displayed above the options panel. It isn\'t required, but more info is always better! The intro_text field accepts all HTML.</p>', 'redux-framework-demo' );
    }

    // Add content after the form.
    $args['footer_text'] = __( '<p>This text is displayed below the options panel. It isn\'t required, but more info is always better! The footer_text field accepts all HTML.</p>', 'redux-framework-demo' );

    Redux::setArgs( $opt_name, $args );

    /*
     * ---> END ARGUMENTS
     */

    /*
     * ---> START HELP TABS
     */

    $tabs = array(
        array(
            'id'      => 'redux-help-tab-1',
            'title'   => __( 'Theme Information 1', 'redux-framework-demo' ),
            'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'redux-framework-demo' )
        ),
        array(
            'id'      => 'redux-help-tab-2',
            'title'   => __( 'Theme Information 2', 'redux-framework-demo' ),
            'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'redux-framework-demo' )
        )
    );
    Redux::setHelpTab( $opt_name, $tabs );

    // Set the help sidebar
    $content = __( '<p>This is the sidebar content, HTML is allowed.</p>', 'redux-framework-demo' );
    Redux::setHelpSidebar( $opt_name, $content );


    // Header options
    Redux::setSection( $opt_name, array(
        'title'            => __( 'Header', 'redux-framework-demo' ),
        'id'               => 'header',
        'desc'             => __( 'Header options', 'redux-framework-demo' ),
        'customizer_width' => '500px',
        'icon'             => 'el el-home'
    ) );

    // Header logo
    Redux::setSection( $opt_name, array(
        'title'             => __( 'Header Media', 'redux-framework-demo' ),
        'id'                => 'header-media',
        'desc'              => __( 'Upload all media that is used in header area.', 'redux-framework-demo' ),
        'subsection'       => true,
        'fields'            => array(
            array(
                'id'       => 'header-logo',
                'type'     => 'media',
                'title'    => __( 'Header Logo', 'redux-framework-demo' ),
                'desc'     => __( 'Here you can upload your logo for header.', 'redux-framework-demo' ),
            ),
        )
    ) );


    // Top bar section
    Redux::setSection( $opt_name, array(
        'title'             => __( 'Top Bar', 'redux-framework-demo' ),
        'id'                => 'topbar_settings',
        'desc'              => __( 'Upload all media that is used in header area.', 'redux-framework-demo' ),
        'subsection'       => true,
        'fields'            => array(
            // Topbar visibility
            array(
                'id'       => 'topbar',
                'title'    => __( 'Show Top bar?', 'redux-framework-demo' ),
                'type' => 'switch',
                'default'  => '0',
            ),

            // HEADER LAYOUT
            // array(
            //     'id'=>'boxed_layout',
            //     'type' => 'image_select',
            //     'compiler'=> false,
            //     'customizer' => true,
            //     'title' => __('Site Layout Style', 'virtue'), 
            //     'subtitle' => __('Select Boxed or Wide Site Layout Style', 'virtue'),
            //     'options' => array(
            //             'wide' => array('alt' => 'Wide Layout', 'img' => OPTIONS_PATH.'img/1c.png'),
            //             'boxed' => array('alt' => 'Boxed Layout', 'img' => OPTIONS_PATH.'img/3cm.png'),
            //         ),
            //     'default' => 'wide',
            // ),
        )
    ) );

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


    $posts_categories = array();

    foreach (get_categories() as $key => $category) :
        $posts_categories[$category->term_id] = $category->cat_name;
    endforeach;

    Redux::setSection( $opt_name, array(
        'title'             => __( 'Home slider', 'redux-framework-demo' ),
        'id'                => 'home-header-slider-section',
        'subsection'       => true,
        'fields'            => array(
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

    global $evos_layout_options;

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
                'options'  => $evos_layout_options,
                'default'  => 'sidebar-right'
            ),
        )
    ) );