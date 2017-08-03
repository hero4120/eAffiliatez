<?php  
   $count = 1;

   $query_args = array('post_type' => 'bunch_team' , 'showposts' => $num , 'order_by' => $sort , 'order' => $order);

   if( $cat ) $query_args['team_category'] = $cat;

   $query = new WP_Query($query_args) ; 

 ob_start() ;?>

<?php if($query->have_posts()):  ?>		
<section class="team-section sec-padding">
	<div class="auto-container">
		<div class="sec-title light text-center">
			<h3><?php echo balanceTags($title);?></h3>
			<p><?php echo balanceTags($sub_title);?></p>
		</div>		
		<div class="owl-carousel owl-theme team-carousel text-center">
			<?php while($query->have_posts()): $query->the_post();
				global $post ; 
				$teams_meta = _WSH()->get_meta();
				$post_thumbnail_id = get_post_thumbnail_id($post->ID);
				$post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id );
			   ?>
			<div class="item">
				<div class="single-team-carousel">
					<?php the_post_thumbnail('digitalmedia4', array('class' => 'img-responsive'));?>
					<h3><?php the_title();?></h3>
					<p><?php echo digitalmedia_set($teams_meta, 'designation');?></p>
				</div><!-- /.single-team-carousel -->
			</div><!-- /.item -->
		<?php endwhile;?> 	
		</div><!-- /.owl-carousel owl-theme team-carousel -->
	</div><!-- /.auto-container -->
</section><!-- /.team-section -->

<?php endif; ?>
<?php 
	wp_reset_postdata();
	
   $output = ob_get_contents(); 
   
   ob_end_clean(); 
   
   return $output ; 
  