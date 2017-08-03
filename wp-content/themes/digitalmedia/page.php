<?php $options = _WSH()->option();
	get_header();
	$settings  = digitalmedia_set(digitalmedia_set(get_post_meta(get_the_ID(), 'bunch_page_meta', true) , 'bunch_page_options') , 0);
	$meta = _WSH()->get_meta('_bunch_layout_settings');
	$meta1 = _WSH()->get_meta('_bunch_header_settings');
	if(digitalmedia_set($_GET, 'layout_style')) $layout = digitalmedia_set($_GET, 'layout_style'); else
	$layout = digitalmedia_set( $meta, 'layout', 'full' );
	$sidebar = digitalmedia_set( $meta, 'sidebar', 'blog-sidebar' );
	$classes = ( !$layout || $layout == 'full' || digitalmedia_set($_GET, 'layout_style')=='full' ) ? ' col-lg-12 col-md-12 col-sm-12 col-xs-12 ' : ' col-lg-9 col-md-8 col-sm-12 col-xs-12 ' ;
?>
<!--Page Title-->
<section class="inner_header">
	<div class="container_24">
		
			<h1 class="entry-title"><?php if($title) echo wp_kses_post($title); else wp_title('');?></h1>
		

	</div><!-- /.auto-container -->
</section><!-- /.inner-banner -->

<!--Sidebar Page-->
<section class="latest-news-area blog-page sec-padding single-blog-post">
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
            <div class="<?php echo esc_attr($classes);?>">
				<!--Start single  item-->
				<?php while( have_posts() ): the_post();?>
				<div class="latest-news">
					<div class="latest-text clearfix">
						<?php the_content();?>
					</div>
				</div>
				<!--End single  item-->
			<?php wp_link_pages(array('before'=>'<div class="paginate-links">'.esc_html__('Pages: ', 'digitalmedia'), 'after' => '</div>', 'link_before'=>'<span>', 'link_after'=>'</span>')); ?>	
			<?php comments_template(); ?>
			<?php endwhile;?> 
			</div>
            
            <!-- sidebar area -->
			<?php if( $layout == 'right' ): ?>
			<?php if ( is_active_sidebar( $sidebar ) ) { ?>
				<div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
                        <?php dynamic_sidebar( $sidebar ); ?>
                </div>
			<?php } ?>
			<?php endif; ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>