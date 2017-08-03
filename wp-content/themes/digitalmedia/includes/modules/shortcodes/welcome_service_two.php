<?php  
   $count = 1;
   $query_args = array('post_type' => 'bunch_services' , 'showposts' => $num , 'order_by' => $sort , 'order' => $order);
   
   if( $cat ) $query_args['services_category'] = $cat;
   $query = new WP_Query($query_args) ; 
   
   $layout = balanceTags($layout);
   switch ($layout) {
			case '3':
				$column_class = 4;
			break;
			case '2':
				$column_class = 6;
			break;
			default:
				$column_class = 3;
			break;
		}; 
   ob_start() ;?>
   
<?php if($query->have_posts()):  ?>   
<section class="service-section sec-padding">
	<div class="auto-container">		
		<div class="row">
			<?php while($query->have_posts()): $query->the_post();
					global $post ; 
					$services_meta = _WSH()->get_meta();
			?>
			<div class="col-md-<?php echo esc_attr( $column_class ); ?> col-sm-6 col-xs-12">
				<div class="single-service text-center">
					<div class="img-box">
						<?php the_post_thumbnail();?>
					</div>
					<h3><?php the_title();?></h3>
					<p><?php echo digitalmedia_trim(get_the_excerpt(), $text_limit);?></p>
					<a href="<?php echo esc_url(get_permalink(get_the_id()));?>"><?php esc_html_e('Read More', 'digitalmedia');?></a>
				</div>
			</div>
		<?php endwhile;?>		
		</div>
	</div>
</section>
<?php endif; ?>
<?php 
	wp_reset_postdata();
   $output = ob_get_contents(); 
   ob_end_clean(); 
   return $output ; ?>
   
 