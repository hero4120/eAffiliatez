<?php bunch_global_variable();
	$options = _WSH()->option();
	get_header(); 
	$settings  = _WSH()->option(); 
	if(digitalmedia_set($_GET, 'layout_style')) $layout = digitalmedia_set($_GET, 'layout_style'); else
	$layout = digitalmedia_set( $settings, 'search_page_layout', 'right' );
	$sidebar = digitalmedia_set( $settings, 'search_page_sidebar', 'blog-sidebar' );
	_WSH()->page_settings = array('layout'=>$layout, 'sidebar'=>$sidebar);
	$classes = ( !$layout || $layout == 'full' || digitalmedia_set($_GET, 'layout_style')=='full' ) ? ' col-lg-12 col-md-12 col-sm-12 col-xs-12 ' : ' col-lg-9 col-md-8 col-sm-12 col-xs-12 ' ;
	$title = digitalmedia_set($options, 'search_title');
	$search_image = digitalmedia_set($options, 'search_image');
?>
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
            
            <?php if(have_posts()):?>
            <!--Content Side-->	
            <div class="<?php echo esc_attr($classes);?> blog-column">
                
                <!--Default Section-->
                <section class="blog-container">
                        <!--Blog Post-->
                        <?php while( have_posts() ): the_post();?>
                            <!-- blog post item -->
                            <!-- Post -->
                            <div id="post-<?php the_ID(); ?>" <?php post_class();?>>
                                <?php get_template_part( 'blog' ); ?>
                            <!-- blog post item -->
                            </div><!-- End Post -->
                        <?php endwhile;?>
                        
                      
                    </section>
			<?php else : ?>
                <div class="<?php echo esc_attr($classes);?> blog_post_area eco-search">
                    <?php if(digitalmedia_set($options, 'search_image')):?>
					<img src="<?php echo esc_url(digitalmedia_set($options, 'search_image'));?>" alt="<?php esc_html_e('images', 'digitalmedia');?>" class="img-responsive">
					 <?php endif;?>
					<h1><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'digitalmedia' ); ?></h1>
                    <aside class="sidebar col-md-6">
                    <?php get_search_form(); ?>
                    </aside>
                </div>
			<?php endif; ?>
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