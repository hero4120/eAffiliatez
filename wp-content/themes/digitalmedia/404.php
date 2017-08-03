<?php bunch_global_variable(); 
	$options = _WSH()->option();
	get_header(); 
	$settings  = _WSH()->option();
	if(digitalmedia_set($_GET, 'layout_style')) $layout = digitalmedia_set($_GET, 'layout_style'); else
	$layout = digitalmedia_set( $settings, 'archive_page_layout', 'right' );
	if( !$layout || $layout == 'full' || digitalmedia_set($_GET, 'layout_style')=='full' ) $sidebar = ''; else
	$sidebar = digitalmedia_set( $settings, 'archive_page_sidebar', 'blog-sidebar' );
	_WSH()->page_settings = array('layout'=>$layout, 'sidebar'=>$sidebar);
	$classes = ( !$layout || $layout == 'full' || digitalmedia_set($_GET, 'layout_style')=='full' ) ? ' col-lg-12 col-md-12 col-sm-12 col-xs-12 ' : ' col-lg-9 col-md-8 col-sm-12 col-xs-12 ' ;
	$bg = digitalmedia_set($settings, '404_page_header_img');
	$title = digitalmedia_set($settings, '404_page_header_title');
?>

<!--Page Title-->
<section class="inner-header">
	<div class="container_24">
		
			<h1 class="entry-title"><?php if($title) echo wp_kses_post($title); else wp_title('');?></h1>
		
	</div><!-- /.auto-container -->
</section><!-- /.inner-banner -->

<!--  Your page Content End Here -->
<div class="error_page container">
    <div class="row">
		<div class="col-md-10 col-sm-12 col-xs-12 shop_aside pull-right">  <!-- /.shop aside use for styling input search box -->
            </br></br></br>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="transition-ease"><i class="fa fa-angle-double-left"></i><?php esc_html_e('Back to Home', 'digitalmedia')?> </a>
			</br> 
			<?php if(digitalmedia_set($settings, '404_text')):?>
				<h3><?php echo wp_kses_post(digitalmedia_set($settings, '404_text')); ?></h3>
			<?php else :?>
				<h3><?php esc_html_e( 'OOPS!! Its look like something went Wrong!!!', 'digitalmedia' ); ?></h3>
			<?php endif;?>
				</br>
			<?php if(digitalmedia_set($settings, '404_page_bg')):?>
				<img src="<?php echo esc_url(digitalmedia_set($settings, '404_page_bg'));?>" alt="<?php esc_html_e('images', 'digitalmedia');?>" class="img-responsive">
			<?php else :?>
				<img src="<?php echo esc_url(get_template_directory_uri().'/images/404.png');?>" alt="<?php esc_html_e('images', 'digitalmedia');?>" class="img-responsive">
			<?php endif;?>	
			</br> </br> </br>
        </div>
		<div class="col-md-2"></div>
    </div> <!-- /row -->
</div> <!-- /error_page --> 		
<?php get_footer(); ?> 		
<?php get_footer(); ?>