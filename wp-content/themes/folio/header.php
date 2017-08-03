
<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset')?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <!-- =========================
       Meta Information
    ============================== -->
    <meta name="description" content="KreFolio - Startup Agency Landing Page Template">
    <meta name="keywords" content="KreFolio, KreFolio html template, Free Bootstrap template, Responsive onepage template">
    <meta name="author" content="Zahidul Hossain @choyan">


    <!-- SITE TITLE -->
    <title>
        <?php
            wp_title('|',true,'right');
            bloginfo('name');
        ?>
    </title>
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url');?>">
   <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>

    <!-- =========================
       Preloader
    ============================== -->
    <script>
        window.addEventListener('DOMContentLoaded', function() {
            "use strict";
            new QueryLoader2(document.querySelector("body"), {
                barColor: "#e74c3c",
                backgroundColor: "#111",
                percentage: true,
                barHeight: 1,
                minimumTime: 200,
                fadeOutTime: 1000
            });
        });
        var alert_color_success_background = '#e74c3c';
        var alert_color_error_background = '#CF000F';

    </script>
    <?php wp_head(); ?>
</head>
<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <!-- =========================
       Fullscreen menu
    ============================== -->
    <?php show_admin_bar( true ); ?>

<?php wp_nav_menu( array(
     'theme_location' => 'mobilenav', // tên location cần hiển thị
     'container' => 'nav', // thẻ container của menu
     'container_class' => 'menu clearfix', //class của container
     'menu_class' => 'mobilenav' // class của menu bên trong
) ); ?>
<!--<nav role="navigation">
<nav class="mobilenav">
        <ul class="menu clearfix">
            <li data-rel="#header">
                <span class="nav-label">Home</span>
            </li>
            <li data-rel="#about-us">
                <span class="nav-label">About Us</span>
            </li>
            <li data-rel="#why-choose-us">
                <span class="nav-label">Why Choose Us</span>
            </li>
            <li data-rel="#our-team">
                <span class="nav-label">Our Team</span>
            </li>
            <li data-rel="#testimonial">
                <span class="nav-label">Testimonial</span>
            </li>
            <li data-rel="#portfolio">
                <span class="nav-label">Portfolio</span>
            </li>
            <li data-rel="#map">
                <span class="nav-label">Contact Us</span>
            </li>
        </ul>
    </nav>
    </nav>
      <!-- *** end Full Screen Menu *** -->

    <!-- *****  hamburger icon ***** -->
    <a href="javascript:void(0)" class="menu-trigger">
       <div class="hamburger">
         <div class="menui top-menu"></div>
         <div class="menui mid-menu"></div>
         <div class="menui bottom-menu"></div>
       </div>
    </a>


    <!-- =========================
       Header
    ============================== -->
    <header id="header">
        <div id="myCarousel" class="carousel slide">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
                <li data-target="#myCarousel" data-slide-to="4"></li>
            </ol>

            <!-- Wrapper for Slides -->
            <div class="carousel-inner">

                <!-- *****  Logo ***** -->
                <div class="logo-container">
                    <a href="#">
                        <img src="http://localhost/hanh/wp-content/themes/folio/img/logo-header.png" height="37" width="197" alt="">
                    </a>
                </div>

                <!-- =========================
                   Header item 1
                ============================== -->
                <div class="item active">

                    <!-- Set the first background image using inline CSS below. -->
                    <div class="fill" style="background-image:url('http://localhost/hanh/wp-content/themes/folio/img/slider/slider-4.jpg');">
                    </div>
                    <div class="carousel-caption">
                        <h1 class="light mab-none">This is <strong class="bold-text">KreFolio</strong></h1>
                        <h1 class="light margin-bottom-medium mat-none">And We Are <strong class="bold-text">Awesome</strong></h1>
                        <p class="light margin-bottom-medium">Stop blending in & start leaving your mark on the web.</p>
                        <div class="call-button">
                            <div class="row">
                                <div class="col-md-4 col-md-offset-2 col-sm-4 col-sm-offset-2 col-xs-12">
                                    <a href="#portfolio" class="button pull-right internal-link bold-text light hvr-grow" data-rel="#portfolio">Our Work</a>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <a href="#about-us" class="button pull-left internal-link bold-text main-bg hvr-grow" data-rel="#about-us">About Us</a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="overlay"></div>
                </div>

                <!-- =========================
                   Header item 2
                ============================== -->
                <div class="item">

                    <!-- Set the second background image using inline CSS below. -->
                    <div class="fill" style="background-image:url('http://localhost/hanh/wp-content/themes/folio/img/slider/slider-1.jpg');"></div>
                    <div class="carousel-caption">
                        <h1 class="light mab-none">This is <strong class="bold-text">KreFolio</strong></h1>
                        <h1 class="light margin-bottom-medium mat-none">And We Are <strong class="bold-text">Awesome</strong></h1>
                        <p class="light margin-bottom-medium">Stop blending in & start leaving your mark on the web.</p>
                        <div class="call-button">
                            <div class="row">
                                <div class="col-md-4 col-md-offset-2 col-sm-4 col-sm-offset-2 col-xs-12">
                                    <a href="#portfolio" class="button pull-right internal-link bold-text light hvr-grow" data-rel="#portfolio">Our Work</a>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <a href="#about-us" class="button pull-left internal-link bold-text main-bg hvr-grow" data-rel="#about-us">About Us</a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="overlay"></div>
                </div>

                <!-- =========================
                   Header item 3
                ============================== -->
                <div class="item">

                    <!-- Set the third background image using inline CSS below. -->
                    <div class="fill" style="background-image:url('http://localhost/hanh/wp-content/themes/folio/img/slider/slider-2.jpg');"></div>
                    <div class="carousel-caption">
                        <h1 class="light mab-none">This is <strong class="bold-text">KreFolio</strong></h1>
                        <h1 class="light margin-bottom-medium mat-none">And We Are <strong class="bold-text">Awesome</strong></h1>
                        <p class="light margin-bottom-medium">Stop blending in & start leaving your mark on the web.</p>
                        <div class="call-button">
                            <div class="row">
                                <div class="col-md-4 col-md-offset-2 col-sm-4 col-sm-offset-2 col-xs-12">
                                    <a href="#portfolio" class="button pull-right internal-link bold-text light hvr-grow" data-rel="#portfolio">Our Work</a>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <a href="#about-us" class="button pull-left internal-link bold-text main-bg hvr-grow" data-rel="#about-us">About Us</a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="overlay"></div>
                </div>

                <!-- =========================
                   Header item 4
                ============================== -->
                <div class="item">

                    <!-- Set the third background image using inline CSS below. -->
                    <div class="fill" style="background-image:url('http://localhost/hanh/wp-content/themes/folio/img/slider/slider-3.jpg');"></div>
                    <div class="carousel-caption">
                        <h1 class="light mab-none">This is <strong class="bold-text">KreFolio</strong></h1>
                        <h1 class="light margin-bottom-medium mat-none">And We Are <strong class="bold-text">Awesome</strong></h1>
                        <p class="light margin-bottom-medium">Stop blending in & start leaving your mark on the web.</p>
                        <div class="call-button">
                            <div class="row">
                                <div class="col-md-4 col-md-offset-2 col-sm-4 col-sm-offset-2 col-xs-12">
                                    <a href="#portfolio" class="button pull-right internal-link bold-text light hvr-grow" data-rel="#portfolio">Our Work</a>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <a href="#about-us" class="button pull-left internal-link bold-text main-bg hvr-grow" data-rel="#about-us">About Us</a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="overlay"></div>
                </div>

                <!-- =========================
                   Header item 5
                ============================== -->
                <div class="item">

                    <!-- Set the third background image using inline CSS below. -->
                    <div class="fill" style="background-image:url('http://localhost/hanh/wp-content/themes/folio/img/slider/slider-4.jpg');"></div>
                    <div class="carousel-caption">
                        <h1 class="light mab-none">This is <strong class="bold-text">KreFolio</strong></h1>
                        <h1 class="light margin-bottom-medium mat-none">And We Are <strong class="bold-text">Awesome</strong></h1>
                        <p class="light margin-bottom-medium">Stop blending in & start leaving your mark on the web.</p>
                        <div class="call-button">
                            <div class="row">
                                <div class="col-md-4 col-md-offset-2 col-sm-4 col-sm-offset-2 col-xs-12">
                                    <a href="#portfolio" class="button pull-right internal-link bold-text light hvr-grow" data-rel="#portfolio">Our Work</a>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <a href="#about-us" class="button pull-left internal-link bold-text main-bg hvr-grow" data-rel="#about-us">About Us</a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="overlay"></div>
                </div>
            </div> <!-- *** end wrapper *** -->

            <!-- Carousel Controls -->
            <a class="left carousel-control hidden-xs" href="#myCarousel" data-slide="prev">
                <span class="icon-prev icon-arrow-left"></span>
            </a>
            <a class="right carousel-control hidden-xs" href="#myCarousel" data-slide="next">
                <span class="icon-next icon-arrow-right"></span>
            </a>
        </div>
    </header> <!-- *** end Header *** -->
