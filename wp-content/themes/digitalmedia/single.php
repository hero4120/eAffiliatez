<?php $options = _WSH()->option();
	get_header();
	$settings  = digitalmedia_set(digitalmedia_set(get_post_meta(get_the_ID(), 'bunch_page_meta', true) , 'bunch_page_options') , 0);
	$meta = _WSH()->get_meta('_bunch_layout_settings');
	$meta1 = _WSH()->get_meta('_bunch_header_settings');
	$meta2 = _WSH()->get_meta();
	_WSH()->page_settings = $meta;
	if(digitalmedia_set($_GET, 'layout_style')) $layout = digitalmedia_set($_GET, 'layout_style'); else
	$layout = digitalmedia_set( $meta, 'layout', 'full' );
	if( !$layout || $layout == 'full' || digitalmedia_set($_GET, 'layout_style')=='full' ) $sidebar = ''; else
	$sidebar = digitalmedia_set( $meta, 'sidebar', 'blog-sidebar' );
	$classes = ( !$layout || $layout == 'full' || digitalmedia_set($_GET, 'layout_style')=='full' ) ? ' col-lg-12 col-md-12 col-sm-12 col-xs-12 ' : ' col-lg-9 col-md-8 col-sm-12 col-xs-12 ' ;
	_WSH()->post_views( true );
?>
<!--Page Title-->
<section class="inner-header">
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
				<?php while( have_posts() ): the_post(); 

					$post_meta = _WSH()->get_meta();
					$post_thumbnail_id = get_post_thumbnail_id($post->ID);
					$post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id );

				?>
				<div class="latest-news">
					<a href="<?php echo esc_url(get_permalink(get_the_id()));?>"><?php the_post_thumbnail('digitalmedia_1200x313', array('class' => 'img-responsive'));?></a>
					<div class="latest-news-text">
						<div class="date">
						   <h6><?php echo get_the_date('d');?><br><?php echo get_the_date('M');?></h6>
						</div>
						<a href="<?php echo esc_url(get_permalink(get_the_id()));?>"><h4><?php the_title();?></h4></a>
						<p><a href=""><?php echo get_the_date('F d, Y')?></a></p>
					</div>
					<div class="latest-text clearfix">
					<?php the_content();?>
					<?php wp_link_pages(array('before'=>'<div class="paginate-links">'.esc_html__('Pages: ', 'digitalmedia'), 'after' => '</div>', 'link_before'=>'<span>', 'link_after'=>'</span>')); ?>	
						<div class="bottom-box clearfix">
							<p class="pull-left"><?php the_tags(); ?></p>
						</div>
					</div>
				</div>
				<!--End single  item-->
				
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