<?php  

   $count = 1;

   $query_args = array('post_type' => 'bunch_testimonials' , 'showposts' => $num , 'order_by' => $sort , 'order' => $order);

   if( $cat ) $query_args['testimonials_category'] = $cat;

   $query = new WP_Query($query_args) ; 

   $display_style = ($display_style == 'red')? 'theme-two' : '';

   ob_start() ;?>

<?php if($query->have_posts()):  ?>   

<section class="testimonial-section sec-padding" style="background:#000 url(<?php echo wp_get_attachment_url( $image, 'full' ); ?>
);" >
	<div class="container">
		<div class="row">
			<div class="col-md-5">
				<div class="left-text">
					<div class="title">
						<h3><?php echo balanceTags($titlex);?><br><span><?php echo balanceTags($titley);?></span></h3>
						<p><?php echo balanceTags($sub_title);?></p>
					</div>
					<hr>
					<ul class="testimonial-nav-btn list-inline">
						<li><a href="#testimonial-home-carousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a></li>
						<li><a href="#testimonial-home-carousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a></li>
					</ul>
				</div>
			</div>
			<div class="col-md-7">
				<div id="testimonial-home-carousel" class="carousel slide" data-ride="carousel">
					<!-- Wrapper for slides -->
					<div class="carousel-inner" role="listbox">
				<?php while($query->have_posts()): $query->the_post();
				
					global $post ;
					
					$testimonials_meta = _WSH()->get_meta();
					
				?>
						
						<div class="item <?php if($active == 1) echo "active";?>">
							<div class="single-testimonial-item">
								<p><span><?php echo digitalmedia_trim(get_the_excerpt(), $text_limit);?></span></p>
								<div class="info-box">
									<div class="img-box">
										<?php the_post_thumbnail('digitalmedia4', array('class' => 'img-responsive'));?>
									</div>
									<div class="text-box">
										<h3><?php the_title();?></h3>
										<p><?php echo digitalmedia_set($testimonials_meta, 'designation');?></p>
									</div>
								</div>
							</div>
						</div>
						
				<?php $active++; endwhile; ?>   	
						
					</div>

				</div>
			</div>
		</div>
	</div>
</section>

<?php endif; ?>



<?php 

	wp_reset_postdata();

   $output = ob_get_contents(); 

   ob_end_clean(); 

   return $output ; 
 
