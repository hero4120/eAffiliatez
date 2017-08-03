<?php  
   global $post ;
   $count = 0;
   $query_args = array('post_type' => 'post' , 'showposts' => $num , 'order_by' => $sort , 'order' => $order);
   if( $cat ) $query_args['category_name'] = $cat;
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
<!--Start latest-news-area-->
<section class="latest-news-area sec-padding">
    <div class="auto-container">
        <div class="sec-title text-center">
			<h3><?php echo balanceTags($title);?></h3>
			<p><?php echo balanceTags($sub_title);?></p>
		</div>
        <div class="row">
			<div class="latest-news-box">
			<?php while($query->have_posts()): $query->the_post();
                global $post ; 
                $post_meta = _WSH()->get_meta();
            ?>
            <?php 
				$post_thumbnail_id = get_post_thumbnail_id($post->ID);
				$post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id );
			?>
				
				<div class="col-md-<?php echo esc_attr( $column_class ); ?> col-sm-4 col-xs-12">
					<!--Start single  item-->
					<div class="latest-news">
						 <a href="<?php echo esc_url(get_permalink(get_the_id()));?>"><?php the_post_thumbnail('digitalmedia_three', array('class' => 'img-responsive'));?></a>
						<div class="latest-news-text">
							<div class="date">
							   <h6><?php echo get_the_date('d');?><br><?php echo get_the_date('M');?></h6>
							</div>
							<a href="<?php echo esc_url(get_permalink(get_the_id()));?>"><h4><?php the_title();?></h4></a>
							<p> <?php esc_html_e('By ', 'digitalmedia');?><?php the_author();?></p>
						</div> 
						<div class="latest-text">
							<p><?php echo digitalmedia_trim(get_the_excerpt(), $text_limit);?></p>
							<a href="<?php echo esc_url(get_permalink(get_the_id()));?>"><?php esc_html_e('Read More', 'digitalmedia');?></a>
						</div>
					</div>
					<!--End single  item-->
				</div>
			<?php endwhile;?>	
			</div>
        </div>
    </div>
</section>
<!--End latest-news-area-->
<?php endif; ?>
<?php 
	wp_reset_postdata();
   $output = ob_get_contents(); 
   ob_end_clean(); 
   return $output ; 
   
  