<?php  
   $count = 1;
   $query_args = array('post_type' => 'bunch_case' , 'showposts' => $num , 'order_by' => $sort , 'order' => $order);
   
   if( $cat ) $query_args['case_category'] = $cat;
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
<!--Gallery Section-->
<section class="case-study sec-padding gray-bg home-3">
	<div class="auto-container">
		<div class="sec-title text-center">
			<h3><?php echo balanceTags($title);?></h3>
			<p><?php echo balanceTags($sub_title);?></p>
		</div>
		<div class="row">
			
			<?php while($query->have_posts()): $query->the_post();
						global $post ; 
						$case_meta = _WSH()->get_meta();
				?>
				<?php 
					$post_thumbnail_id = get_post_thumbnail_id($post->ID);
					$post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id );
			?>
			
			<div class="col-md-<?php echo esc_attr( $column_class ); ?> col-sm-6 col-xs-12">
				<div class="single-case-study">
					<div class="img-box">
						<?php the_post_thumbnail();?>
						<div class="overlay">
							<div class="box">
								<div class="content">
									<a href="<?php echo esc_url(digitalmedia_set($case_meta , 'ext_url'));?>"><i class="fa fa-expand"></i></a>
								</div>
							</div>
						</div>
					</div>
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
   
  