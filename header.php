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
                    <a href="#" class="logo-link"><h1 class="logo-wrapper"><img src="img/logo-header.png" alt="main logo" class="logo"></h1></a>
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

            <div class="slider multiple">
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
            </div>
        </header>