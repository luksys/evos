<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>

		<header class="mastheader">
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
            <div class="masthead-inner c">
                <div class="left-block">
                    <a href="#" class="logo-link"><h1 class="logo-wrapper"><img src="<?php echo get_stylesheet_directory_uri();?>/img/logo-header.png" alt="main logo" class="logo"></h1></a>

                    
                    <ul class="menu" id="main-menu">
                        <li class="menu-item current-menu-item"><a href="">Home</a></li>
                        <li class="menu-item menu-item-has-children"><a href="#">Services</a>
                            <ul class="sub-menu">
                                <li class="menu-item"><a href=""><span class="sub-menu-item">Sub page first page</span></a></li>
                                <li class="menu-item"><a href=""><span class="sub-menu-item">Sub page</span></a></li>
                                <li class="menu-item"><a href=""><span class="sub-menu-item">Sub page</span></a></li>
                                <li class="menu-item"><a href=""><span class="sub-menu-item">Sub page</span></a></li>
                            </ul>
                        </li>
                        <li class="menu-item"><a href="">About</a></li>
                        <li class="menu-item"><a href="">Contact</a></li>
                    </ul>
                </div>
                <div class="right-block">
                    <form class="search-form">
                        <input type="text" class="input-field" placeholder="Type to search...">
                        <input type="submit" class="submit-button fa fa-search" value="&#xf002;">
                    </form>
                </div>
                <a href="#" class="mobile-menu" id="mobile-menu">
                  <div class="mobile-menu-inner"></div>  
                </a>
            </div>
       
  <!--       <div class="slider">
            <div class="slide">
                <img src="img/slide.jpg" alt="">
                <div class="slider-content" slide-image>
                    <div class="slider-content-header">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus.</p>
                    </div>
                    <div class="slider-content-body">
                        <p>purus a, scelerisque urna. Pellentesque iaculis finibus ante, ut hendrerit libero. Vestibulum orci turpis, 
                            malesuada eget tortor finibus, elementum pretium orci. Donec et tempus dui. Nullam finibus quis sapien 
                            et commodo. Nam vitae porttitor est, non consequat urna.
                        </p>
                    </div>
                </div>
            </div>
              <div class="slide">
                <img src="img/slide.jpg" alt="" slide-image>
                <div class="slider-content">
                    <div class="slider-content-header">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus.</p>
                    </div>
                    <div class="slider-content-body">
                        <p>purus a, scelerisque urna. Pellentesque iaculis finibus ante, ut hendrerit libero. Vestibulum orci turpis, 
                            malesuada eget tortor finibus, elementum pretium orci. Donec et tempus dui. Nullam finibus quis sapien 
                            et commodo. Nam vitae porttitor est, non consequat urna.
                        </p>
                    </div>
                </div>
            </div>
              <div class="slide">
                <img src="img/slide.jpg" alt="" slide-image>
                <div class="slider-content">
                    <div class="slider-content-header">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus.</p>
                    </div>
                    <div class="slider-content-body">
                        <p>purus a, scelerisque urna. Pellentesque iaculis finibus ante, ut hendrerit libero. Vestibulum orci turpis, 
                            malesuada eget tortor finibus, elementum pretium orci. Donec et tempus dui. Nullam finibus quis sapien 
                            et commodo. Nam vitae porttitor est, non consequat urna.
                        </p>
                    </div>
                </div>
            </div>
            <div class="slide">
                <img src="img/slide.jpg" alt="" slide-image>
                <div class="slider-content">
                    <div class="slider-content-header">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus.</p>
                    </div>
                    <div class="slider-content-body">
                        <p>purus a, scelerisque urna. Pellentesque iaculis finibus ante, ut hendrerit libero. Vestibulum orci turpis, 
                            malesuada eget tortor finibus, elementum pretium orci. Donec et tempus dui. Nullam finibus quis sapien 
                            et commodo. Nam vitae porttitor est, non consequat urna.
                        </p>
                    </div>
                </div>
            </div>
            <div class="slide">
                <img src="img/slide.jpg" alt="">
                <div class="slider-content">
                    <div class="slider-content-header">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus.</p>
                    </div>
                    <div class="slider-content-body">
                        <p>purus a, scelerisque urna. Pellentesque iaculis finibus ante, ut hendrerit libero. Vestibulum orci turpis, 
                            malesuada eget tortor finibus, elementum pretium orci. Donec et tempus dui. Nullam finibus quis sapien 
                            et commodo. Nam vitae porttitor est, non consequat urna.
                        </p>
                    </div>
                </div>
            </div>
        </div> -->

      <!--   <div class="slider multiple">
            <a href="#" class="slide">
                <img src="img/city2.jpg" alt="" class="slide-image">
                <div class="slider-content">
                    <div class="slider-content-header">
                        <p>Lorem ipsum dolor sit amet</p>
                    </div>
                </div>
            </a>
            <a href="#" class="slide">
                <img src="img/city2.jpg" alt="" class="slide-image">
                <div class="slider-content">
                    <div class="slider-content-header">
                        <p>Lorem ipsum dolor sit</p>
                    </div>
                </div>
            </a>
              <a href="#" class="slide">
                <img src="img/city2.jpg" alt="" class="slide-image">
                <div class="slider-content">
                    <div class="slider-content-header">
                        <p>Lorem ipsum dolor sit ame</p>
                    </div>
                </div>
            </a>
            <a href="#" class="slide">
                <img src="img/city2.jpg" alt="" class="slide-image">
                <div class="slider-content">
                    <div class="slider-content-header">
                        <p>Lorem ipsum dolor sit consectetu.</p>
                    </div>
                </div>
            </a>
            <a href="#" class="slide">
                <img src="img/city2.jpg" alt="" class="slide-image">
                <div class="slider-content">
                    <div class="slider-content-header">
                        <p>adipiscing elit. Vivamus.</p>
                    </div>
                </div>
            </a>
        </div>

        <div class="featured-section">
            <div class="c outer">
                <div class="text-body">Do you like this theme?</div>
                <div class="helper">
                    <a href="#" class="helper-button hvr-buzz-out">Download it NOW!</a>
                </div>
            </div>
        </div> -->
    </header>

