<?php $options = _WSH()->option();
	Global $wp_query;
	$icon_href = (digitalmedia_set( $options, 'site_favicon' )) ? digitalmedia_set( $options, 'site_favicon' ) : get_template_directory_uri().'/images/favicon.png';
 ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		 <!-- Basic -->
	    <meta charset="<?php bloginfo( 'charset' ); ?>">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
		<!-- Favcon -->
		<?php if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ):?>
			<link rel="shortcut icon" type="image/png" href="<?php echo esc_url($icon_href);?>">
		<?php endif;?>
		<link rel="dns-prefetch" href="//fonts.googleapis.com">
		<link rel="stylesheet" id="twentyfifteen-fonts-css" href="https://fonts.googleapis.com/css?family=Noto+Sans%3A400italic%2C700italic%2C400%2C700%7CNoto+Serif%3A400italic%2C700italic%2C400%2C700%7CInconsolata%3A400%2C700&amp;subset=latin%2Clatin-ext" type="text/css" media="all">
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
	
    <div class="page-wrapper">
 	<?php if(digitalmedia_set($options, 'preloader')):?>
    <!-- Preloader -->
    <div class="preloader"></div>
 	<?php endif;?>
    <!-- Main Header -->
	<?php if(!(digitalmedia_set($options, 'hide_top_bar'))):?>
   <section id="top-bar">
	<ul class="wrapper top_menu">
					<li><a href=" https://twitter.com/eaffiliatez/" target="_blank"><i>&#xf099;</i></a></li>
					<li><a href=" https://www.facebook.com/AffiliateServices/" target="_blank"><i>&#xf09a;</i></a></li>
					<li><a href="tel:18666255717" class="red"><i>&#xf095;</i><abbr>1-866-625-5717</abbr></a></li>
					<li><a href="mailto:support@eaffiliatez.com"><i>&#xf003;</i><abbr>support@eaffiliatez.com</abbr></a></li>
				</ul>

</section>
<div class="clear"></div>
<?php endif;?>

<header class="header clearfix">

    <div class="main-header stricky">
        <div class="container">
            <div class="logo pull-left">
                <?php if(digitalmedia_set($options, 'logo_image')):?>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url(digitalmedia_set($options, 'logo_image'));?>" alt="" title="<?php esc_html_e('digitalmedia', 'digitalmedia');?>"></a>
					<?php else:?>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url(get_template_directory_uri().'/images/logo.png');?>" alt="<?php esc_html_e('digitalmedia', 'digitalmedia');?>"></a>
					<?php endif;?>
            </div>

            <div class="nav-outer">
                <nav class="mainmenu-area">
                    <div class="navbar" role="navigation">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only"><?php esc_html_e('Toggle navigation', 'digitalmedia');?></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            
                        </div>

                        <div class="menu-header-menu-container"> 
                            <ul>
							<?php wp_nav_menu( array( 'theme_location' => 'main_menu', 'container_id' => 'navbar-collapse-1',
											'container_class'=>'menu-header-menu-container',
											'menu_class'=>'header_menu',
											'menu_id'=>'menu-header-menu',
											'fallback_cb'=>false, 
											//'items_wrap' => '%3$s', 
											'container'=>false,
											'walker'=> new Bunch_Bootstrap_walker()  
								) ); ?>

                            </ul> 
                        </div> 
                    </div>
                </nav>

                
            </div>

        </div>
    </div>
</header>
