<?php bunch_global_variable(); 
	$options = _WSH()->option();
	get_header(); 
	$settings  = _WSH()->option(); 
	if(digitalmedia_set($_GET, 'layout_style')) $layout = digitalmedia_set($_GET, 'layout_style'); else
	$layout = digitalmedia_set( $settings, 'author_page_layout', 'right' );
	$sidebar = digitalmedia_set( $settings, 'author_page_sidebar', 'blog-sidebar' );
	$view = digitalmedia_set( $settings, 'author_page_view', 'list' );
	_WSH()->page_settings = array('layout'=>$layout, 'sidebar'=>$sidebar);
	$classes = ( !$layout || $layout == 'full' || digitalmedia_set($_GET, 'layout_style')=='full' ) ? ' col-lg-12 col-md-12 col-sm-12 col-xs-12 ' : ' col-lg-9 col-md-8 col-sm-12 col-xs-12 ' ;
?>
<!--Page Title-->
<section class="inner-header">
	<div class="container_24">
		
			<h1 class="entry-title"><?php if($title) echo wp_kses_post($title); else wp_title('');?></h1>
		
		
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