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

<?php
	$gs_t_loop = new WP_Query(
		array(
			'post_type'	=> 'gs_testimonial',
			'order_by'	=> 'title'
		)
	);
	$postnum = 1;
?>


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
					<?php while( $gs_t_loop->have_posts() ): $gs_t_loop->the_post();?>
						<div class="gs_testimonial_container container">
							<?php if ($postnum&1) : ?>
								<div class="row">
									<div class="col-xs-2">
										<div class="wrapper quote home_quote">
											<sapn><i>"</i></sapn>
										</div>
									</div>

									<div class="col-xs-10">
										<?php the_content();?>
									</div>
								</div>
							<?php else: ?>
								<div class="row">
									<div class="col-xs-10">
										<?php the_content();?>
									</div>
									<div class="col-xs-2">
										<div class="wrapper right-quote home_quote">
											<sapn><i>"</i></sapn>
										</div>
									</div>
								</div>
							<?php endif; ?>
							<?php $postnum++; ?>
						</div>
						<?php comments_template(); ?>
					<?php endwhile;?>
				</div>

			</div>
		</div>
	</section>

<?php get_footer(); ?>