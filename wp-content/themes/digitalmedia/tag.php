<?php bunch_global_variable();

	$options = _WSH()->option();

	get_header(); 

	$meta = _WSH()->get_term_meta( '_bunch_category_settings' );

	if(digitalmedia_set($_GET, 'layout_style')) $layout = digitalmedia_set($_GET, 'layout_style'); else

	$layout = digitalmedia_set( $meta, 'layout', 'right' );

	$sidebar = digitalmedia_set( $meta, 'sidebar', 'blog-sidebar' );

	$view = digitalmedia_set( $meta, 'view', 'list' ) ? digitalmedia_set( $meta, 'view', 'list' ) : 'list';

	_WSH()->page_settings = array('layout'=>$layout, 'sidebar'=>$sidebar);


	$classes = ( !$layout || $layout == 'full' ) ? ' col-lg-12 col-md-12 col-sm-12 col-xs-12' : ' col-lg-9 col-md-8 col-sm-7 col-xs-12 ';

	if($layout == 'both') $classes = ' col-lg-6 col-md-6 col-sm-6 col-xs-12 ';  


	$bg = digitalmedia_set($meta, 'header_img');

	$title = digitalmedia_set($meta, 'header_title');

?>

<!-- Page Banner -->

<!--Page Title-->
<section class="inner-banner">
	<div class="auto-container clearfix">
		<div class="title pull-left">
			<h3><?php if($title) echo wp_kses_post($title); else wp_title('');?></h3>
		</div><!-- /.title pull-left -->
		<div class="breadcumb pull-right">
			<ul class="list-inline">
				<?php echo wp_kses_post(digitalmedia_get_the_breadcrumb()); ?>
			</ul><!-- /.list-inline -->
		</div><!-- /.breadcumb pull-right -->
	</div><!-- /.auto-container -->
</section><!-- /.inner-banner -->
    
    <!--Sidebar Page-->
<section class="latest-news-area blog-page sec-padding">
    <div class="auto-container">
        <div class="row">
                
                <!-- sidebar area -->
                <?php if( $layout == 'left' ): ?>
                <?php if ( is_active_sidebar( $sidebar ) ) { ?>
                <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
                        <?php dynamic_sidebar( $sidebar ); ?>
                </div>
                <?php } ?>
                <?php endif; ?>
                
                <!--Content Side-->	
                <div class="<?php echo esc_attr($classes);?>">
                    
                   
				
                        <!--Blog Post-->
                        <?php while( have_posts() ): the_post();?>
                            <!-- blog post item -->
                            <!-- Post -->
                            <div id="post-<?php the_ID(); ?>" <?php post_class();?>>
                                <?php get_template_part( 'blog' ); ?>
                            <!-- blog post item -->
                            </div><!-- End Post -->
                        <?php endwhile;?>
                        
					<ul class="post-navigation text-center list-inline">
							 <?php digitalmedia_the_pagination(); ?>
					</ul>
                </div>
                <!--Content Side-->
                
                <!--Sidebar-->	
                <!-- sidebar area -->
                <?php if( $layout == 'right' ): ?>
                <?php if ( is_active_sidebar( $sidebar ) ) { ?>
                <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
                        <?php dynamic_sidebar( $sidebar ); ?>
                </div>
                <?php } ?>
                <?php endif; ?>
                <!--Sidebar-->
            </div>
        </div>
    </section>
<?php get_footer(); ?>