<!doctype html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>
			<?php bloginfo('name'); // show the blog name, from settings ?> | 
			<?php is_front_page() ? bloginfo('description') : wp_title(''); // if we're on the home page, show the description, from the site's settings - otherwise, show the title of the post or page ?>
		</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->
        <?php wp_head();?>
    </head>
    <body <?php body_class(); ?>>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <?php
            global $evos_options;
        ?>
        <header class="mastheader">
            <?php if( $evos_options['topbar'] )  : ?>
                <div class="top-section">
                    <div class="top-section-inner c">
                        <ul class="icons">
                            <li class="icons-item"><a href="facebook"><i class="fa fa-facebook"></i></a></li>
                            <li class="icons-item"><a href="twitter"><i class="fa fa-twitter"></i></a></li>
                            <li class="icons-item"><a href="instagram"><i class="fa fa-instagram"></i></a></li>
                            <li class="icons-item"><a href="pinterest"><i class="fa fa-pinterest-p"></i></a></li>
                            <li class="icons-item"><a href="linkedin"><i class="fa fa-linkedin"></i></a></li>
                            <li class="icons-item"><a href="youtube"><i class="fa fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            <?php endif;?>

            <div class="masthead-inner c">
                <div class="main-header-area">
                    
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo-link">
                        <h1 class="logo-wrapper">
                            <?php echo wp_get_attachment_image( $evos_options['header-logo']['id'] );?>
                        </h1>
                    </a>
                    
                    <a href="#" class="search-button ion-ios-search-strong"></a>

                    <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'main-menu' ) ); ?>
                    
                </div>
               <!--  <a href="#" class="mobile-menu" id="mobile-menu">
                  <div class="mobile-menu-inner"></div>  
                </a> -->
            </div>
           
           <?php if( $evos_options['home-slider'] ) : ?>
                <?php $slider_classes = ( $evos_options['home-slider-rows'] == 1 )  ? ' multiple' : '';?>
                <div class="slider<?php echo $slider_classes;?>">
                    <?php
                        $args = array(
                            'category' => $evos_options['home-slider-category']
                        );
                        $slides = get_posts( $args );

                        foreach ( $slides as $post ) : setup_postdata( $post ); ?>
                            <div class="slide">
                                <?php if( has_post_thumbnail() ) : ?>
                                    <?php the_post_thumbnail();?>
                                <?php endif;?>
                                <div class="slider-content" slide-image>
                                    <div class="slider-content-header">
                                        <?php the_title();?>
                                    </div>
                                    <div class="slider-content-body">
                                       <?php the_excerpt();?>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; 
                        wp_reset_postdata();?>
                </div>
            <?php endif;?>
    
            <div class="featured-section">
                <div class="c outer">
                    <div class="text-body">Do you like this theme?</div>
                    <div class="helper">
                        <a href="#" class="helper-button hvr-buzz-out">Download it NOW!</a>
                    </div>
                </div>
            </div>
            
            <h1><?php the_title();?></h1>

        </header>

        <main class="main">
            <div class="c">