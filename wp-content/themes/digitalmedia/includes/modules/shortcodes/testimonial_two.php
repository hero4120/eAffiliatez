<?php  

   $count = 1;

   $query_args = array('post_type' => 'bunch_testimonials' , 'showposts' => $num , 'order_by' => $sort , 'order' => $order);

   if( $cat ) $query_args['testimonials_category'] = $cat;

   $query = new WP_Query($query_args) ; 

   $display_style = ($display_style == 'red')? 'theme-two' : '';

   ob_start() ;?>
<?php if($query->have_posts()):  ?>   
<section class="testimonial-style-two sec-padding text-center">
	<div class="container">
		<div class="title">
			<h3><?php echo balanceTags($titlex);?></h3>
		</div><!-- /.title -->
		<?php while($query->have_posts()): $query->the_post();
				
					global $post ;
					
					$testimonials_meta = _WSH()->get_meta();
					
				?>
		<div class="single-testimonial-two">
			<?php the_post_thumbnail();?>		
			<p><?php echo digitalmedia_trim(get_the_excerpt(), $text_limit);?></p>
			<div class="info-box">
				<h4><?php the_title();?></h4>
				<span><?php echo digitalmedia_set($testimonials_meta, 'designation');?></span>
			</div><!-- /.info-box -->
		</div><!-- /.single-testimonial-two -->
	<?php endwhile; ?>   	
		
	</div><!-- /.auto-container -->
</section><!-- /.testimonial-style-two -->
<?php endif; ?>

<?php 

	wp_reset_postdata();

   $output = ob_get_contents(); 

   ob_end_clean(); 

   return $output ; 
 
