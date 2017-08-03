<?php  
   $count = 1;
   $query_args = array('post_type' => 'bunch_projects' , 'showposts' => $num , 'order_by' => $sort , 'order' => $order);
   
   if( $cat ) $query_args['projects_category'] = $cat;
   $query = new WP_Query($query_args) ; 
   
   ob_start() ;?>
   
<?php if($query->have_posts()):  ?>   
<!--Gallery Section-->
<!--Gallery Section-->
    <section class="gallery-section three-column">
    	<div class="auto-container">   
            <div class="row clearfix">
                
				 <?php while($query->have_posts()): $query->the_post();
						global $post ; 
						$projects_meta = _WSH()->get_meta();
				?>
				<?php 
					$post_thumbnail_id = get_post_thumbnail_id($post->ID);
					$post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id );
				?>
				
				<!--Default Portfolio Item-->
                <div class="col-md-4 col-sm-6 col-xs-12 default-portfolio-item">
                    <div class="inner-box">
                        <figure class="image-box"><?php the_post_thumbnail('380x300', array('class' => 'img-responsive'));?></figure>
                        <!--Overlay Box-->
                        <div class="overlay-box">
                            <div class="overlay-inner">
                                <div class="content">
                                    <a href="<?php echo esc_url(get_permalink(get_the_id()));?>" class="option-btn"><span class="fa fa-link"></span></a>
                                    <a href="<?php echo esc_url($post_thumbnail_url);?>" class="option-btn lightbox-image" title="Image Caption Here" data-fancybox-group="example-gallery"><span class="fa fa-search"></span></a>
                                </div>
                            </div>
                        </div>
                        <!--Caption Box-->
                        <div class="caption">
                            <h3><a href="<?php echo esc_url(get_permalink(get_the_id()));?>"><?php the_title();?></a></h3>
                        </div>
                    </div>
                </div>
            <?php endwhile;?>  
            </div>
            <!-- Styled Pagination -->
            <div class="styled-pagination padd-top-40 text-center">
				<ul>
                   <?php digitalmedia_the_pagination(array('total'=>$query->max_num_pages, 'next_text' => '<i class="fa fa-angle-double-right"></i>', 'prev_text' => '<i class="fa fa-angle-double-left"></i>')); ?>
                </ul>
            </div>
        </div>
    </section>
<?php endif; ?>
<?php 
	wp_reset_postdata();
   $output = ob_get_contents(); 
   ob_end_clean(); 
   return $output ; ?>