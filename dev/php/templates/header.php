<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
  <head prefix="og: http://ogp.me/ns/website#"><!-- Prefix is used to declare facebook opengraph namespace for websites -->
    <!-- Charset -->
    <meta charset="<?php bloginfo( 'charset' ); ?>" />

    <!-- IE: render in highest mode available -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Title -->
    <title><?php wp_title( '|', true, 'right' ); ?></title>

    <!-- Mobile devices -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Automate reverse linking (pingbacks) -->
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    <!-- Favicons -->
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico">
    <link rel="apple-touch-icon-precomposed" href="<?php echo get_stylesheet_directory_uri(); ?>/apple-touch-icon.png">

    <!-- build:remove:expanded -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/production.min.css">
    <!-- /build -->
    <!-- build:remove:compressed -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/production.css">
    <!-- /build -->

    <!-- build:remove:compressed -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.min.js"></script>
    <!-- /build -->
 <!-- Load jquery from google CDN if possible, with fallback to cdnjs -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.0/jquery.min.js"><\/script>')</script>

    <!-- Wordpress head function -->
    <?php wp_head(); ?>
    <script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

  </head>
  <body <?php body_class(); ?> >

    <div class="Header">
        <div class="u-gridContainer Header-wrapper">
            <img class="header-logo" src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png"/>
            <div class="u-gridRow header-space">
                <div class="u-gridCol2">-
                </div>
                <div class="u-gridCol10 u-cf">
                    <div class="Header-welcome"> <!-- floating -->
                        <h4 class="header-titel">WELKOM BIJ BRESSERS TWEEWIELERS!</h4>
                    </div>
                    <div class="Header-telefoon">
                        <a href="tel:0648038209">
                            <img class="header-imgTel" src="<?php echo get_stylesheet_directory_uri(); ?>/img/svg/telefoon.svg"> 
                            <h4 class="header-textTel">0165 - 38 23 25</h4>
                        </a>
                    </div>
                </div>
            </div>
        </div>  

        <div class="Header-bluebar  header-space"> <!-- 100%, blauwe bg color -->
            <div class="u-gridContainer">
                <div class="u-gridRow">
                    <div class="u-gridCol2">x
                    </div>
                    <div class="u-gridCol10">
                        <div class="u-cf">
                            <a class="Navigation-menuToggle" id="js-navCollapse">
                                <svg class="Icon Icon--inline" viewBox="0 0 128 128">
                                    <use xlink:href="#icon-menu2"></use>
                                </svg>
                            </a>
                            <a href="tel:0648038209" class="Navigation-menuToggle telefoon" id="js-navCollapse">
                                <svg class="Icon Icon--inline" viewBox="0 0 128 128">
                                    <use xlink:href="#icon-phone"></use>
                                </svg>
                            </a>
                            <a class="Navigation-menuToggle winkelmandje show-more header-winkelmandje" id="js-navCollapse">
                                <svg class="Icon Icon--inline" viewBox="0 0 128 128">
                                    <use xlink:href="#icon-cart3"></use>
                                </svg>
                            </a>
                        </div>
                        <?php include 'includes/navigation.php'; ?>            
                    </div>
                </div>
            </div>    
        </div>

        <div class="Header-search"> <!-- 100%, blauwe bg color -->
            <div class="u-gridContainer">
                <div class="u-gridRow header-space">
                    <div class="u-gridCol2"><p class="space-opacity">></p>
                    </div>
                    <div class="u-gridCol10">
                        <div class="Header-zoeken"> <!-- floating -->

                            
                        </div>
                         <div class="Header-winkelmandje">
                            <img class="header-winkelmandje" src="<?php echo get_stylesheet_directory_uri(); ?>/img/svg/arrow-collapse.svg"/>
                            <p class="show-more header-winkelmandje" style="color: #0C5A88;">Bekijk winkelmand</p>

                            <div id="shoppingcart"></div>
                        </div>
                    </div>
                </div>
            </div>    
        </div>
    </div>

    </header>



