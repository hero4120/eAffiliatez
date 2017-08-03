
<?php /* Template Name: VC Page */
	get_header() ;
	$meta = _WSH()->get_meta('_bunch_header_settings');
	$bg = digitalmedia_set($meta, 'header_img');
	$title = digitalmedia_set($meta, 'header_title');
?>
<?php if(digitalmedia_set($meta, 'breadcrumb')):?>
<section class="inner_header" <?php if($bg):?>style="background-image:url('<?php echo esc_attr($bg)?>');"<?php endif;?>>
	<div class="container_24">
		
			<h1 class="entry-title"><?php if($title) echo wp_kses_post($title); else wp_title('');?></h1>
		
		
	</div><!-- /.auto-container -->
</section>
<?php endif;?>
<?php while( have_posts() ): the_post(); ?>
<?php the_content(); ?>
<?php endwhile;  ?>
<?php get_footer() ; ?>