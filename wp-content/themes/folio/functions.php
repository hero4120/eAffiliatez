<?php
add_theme_support( 'menus' );
register_nav_menus(
        array(
                'main-nav' => 'Menu chính'
        )
);
?>
<?php
/*	<!-- =========================
       favicon and app touch icon
    ============================== -->
    <link rel="shortcut icon" href="http://localhost/hanh/wp-content/themes/folio/favicon.ico"/>
    <link rel="apple-touch-icon" href="http://localhost/hanh/wp-content/themes/folio/apple-touch-icon.png">


    <!-- =========================
       Bootstrap and animation
    ============================== -->
    <link rel="stylesheet" href="http://localhost/hanh/wp-content/themes/folio/css/bootstrap.css">
    <link rel="stylesheet" href="http://localhost/hanh/wp-content/themes/folio/css/animate.min.css">

    <!-- =========================
       Fonts, typography and icons
    ============================== -->
    <link rel="stylesheet" href="http://localhost/hanh/wp-content/themes/folio/css/font-awesome.css">
    <link rel="stylesheet" href="http://localhost/hanh/wp-content/themes/folio/css/typography.css">

    <!-- =========================
       Carousel, lightbox and circle generator
    ============================== -->
    <link rel="stylesheet" href="http://localhost/hanh/wp-content/themes/folio/css/owl.carousel.css">
    <link rel="stylesheet" href="http://localhost/hanh/wp-content/themes/folio/css/owl.theme.css">
    <link rel="stylesheet" href="http://localhost/hanh/wp-content/themes/folio/css/nivo-lightbox.css">
    <link rel="stylesheet" href="http://localhost/hanh/wp-content/themes/folio/css/nivo-lightbox-default.css">
    <link rel="stylesheet" href="http://localhost/hanh/wp-content/themes/folio/css/jquery.circliful.css">

    <!-- ***** Custom Stylesheet ***** --> 
    <link rel="stylesheet" href="http://localhost/hanh/wp-content/themes/folio/style.css">

    <!-- ***** Responsive fixes ***** -->
    <link rel="stylesheet" href="http://localhost/hanh/wp-content/themes/folio/css/responsive.css">

    <!-- Header scripts -->
    <script src="http://localhost/hanh/wp-content/themes/folio/js/vendor/modernizr-2.8.3.min.js"></script>
    <script src="http://localhost/hanh/wp-content/themes/folio/js/queryloader2.min.js"></script>
    */
    add_action('wp_enqueue_scripts','folio_theme_register_style');
    function folio_theme_register_style()
    {
        $cssurl = get_template_directory_uri() . '/css';
        //echo $cssurl;
        wp_register_style('folio_theme_bootstrap',$cssurl.'/bootstrap.css',array(),'1.0');
        wp_enqueue_style('folio_theme_bootstrap');
         wp_register_style('folio_theme_animate_min',$cssurl.'/animate.min.css',array(),'1.0');
        wp_enqueue_style('folio_theme_animate_min');
         wp_register_style('folio_theme_font_awesome',$cssurl.'/font-awesome.css',array(),'1.0');
        wp_enqueue_style('folio_theme_font_awesome');
         wp_register_style('folio_theme_typography',$cssurl.'/typography.css',array(),'1.0');
        wp_enqueue_style('folio_theme_typography');
         wp_register_style('folio_theme_owl_carousel',$cssurl.'/owl.carousel.css',array(),'1.0');
        wp_enqueue_style('folio_theme_owl_carousel');
        wp_register_style('folio_theme_owl_theme',$cssurl.'/owl.theme.css',array(),'1.0');
        wp_enqueue_style('folio_theme_owl_theme');
        wp_register_style('folio_theme_nivo_lightbox',$cssurl.'/nivo-lightbox.css',array(),'1.0');
        wp_enqueue_style('folio_theme_nivo_lightbox');
        wp_register_style('folio_theme_owl_nivo_lightbox_default',$cssurl.'/nivo-lightbox-default.css',array(),'1.0');
        wp_enqueue_style('folio_theme_owl_nivo_lightbox_default');
        wp_register_style('folio_theme_owl_jquery_circliful',$cssurl.'/jquery.circliful.css',array(),'1.0');
        wp_enqueue_style('folio_theme_owl_jquery_circliful');
        wp_register_style('folio_theme_owl_responsive',$cssurl.'/responsive.css',array(),'1.0');
        wp_enqueue_style('folio_theme_owl_responsive');
        $iconurl = get_template_directory_uri();
        wp_register_style('folio_theme_favicon_ico',$iconurl.'/favicon.ico',array(),'1.0');
        wp_enqueue_style('folio_theme_favicon_ico');
        wp_register_style('folio_theme_apple_touch_icon',$iconurl.'/apple-touch-icon.png',array(),'1.0');
        wp_enqueue_style('folio_theme_apple_touch_icon');
        $jsurl = get_template_directory_uri() . '/js';
        wp_register_style('folio_theme_vendor_modernizr',$jsurl.'/vendor/modernizr-2.8.3.min.js',array(),'1.0');
        wp_enqueue_style('folio_theme_vendor_modernizr');
        wp_register_style('folio_theme_queryloader2',$jsurl.'/queryloader2.min.js',array(),'1.0');
        wp_enqueue_style('folio_theme_queryloader2');


    }
    ?>
