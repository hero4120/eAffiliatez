<?php 
global $wp_query;
$paged = get_query_var('paged');
$args = array('post_type' => 'bunch_gallery', 'showposts'=>$num, 'orderby'=>$sort, 'order'=>$order, 'paged'=>$paged);
$terms_array = explode(",",$exclude_cats);
if($exclude_cats) $args['tax_query'] = array(array('taxonomy' => 'gallery_category','field' => 'id','terms' => $terms_array,'operator' => 'NOT IN',));
$query = new WP_Query($args);

$t = $GLOBALS['_bunch_base'];

$data_filtration = '';
$data_posts = '';

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
?>


<?php if( $query->have_posts() ):
	
ob_start();?>

	<?php $count = 0; 
	$fliteration = array();?>
	<?php while( $query->have_posts() ): $query->the_post();
		global  $post;
		$meta = get_post_meta( get_the_id(), '_bunch_portfolio_meta', true );//printr($meta);
		$meta1 = _WSH()->get_meta();
		$post_terms = get_the_terms( get_the_id(), 'gallery_category');// printr($post_terms); exit();
		foreach( (array)$post_terms as $pos_term ) $fliteration[$pos_term->term_id] = $pos_term;
		$temp_category = get_the_term_list(get_the_id(), 'gallery_category', '', ', ');
	?>
		<?php $post_terms = wp_get_post_terms( get_the_id(), 'gallery_category'); 
		$term_slug = '';
		if( $post_terms ) foreach( $post_terms as $p_term ) $term_slug .= $p_term->slug.' ';?>		
		   <?php 
		    $gallery_meta = _WSH()->get_meta();
			$post_thumbnail_id = get_post_thumbnail_id($post->ID);
			$post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id );
		   ?>     
		   <div class="col-md-<?php echo esc_attr( $column_class ); ?> col-sm-6 col-xs-12 filter-item <?php echo esc_attr($term_slug); ?>">
				<div class="single-case-study">
					<div class="img-box">
						<?php the_post_thumbnail();?>
						<div class="overlay">
							<div class="box">
								<div class="content">
									<a href="<?php echo esc_url(digitalmedia_set($gallery_meta, 'ext_url'));?>"><i class="fa fa-expand"></i></a>
								</div>
							</div>
						</div>
					</div>
					<div class="text-box">
						<h3><?php the_title(); ?></h3>
						<p><?php echo balanceTags(digitalmedia_set( $t, 'name')); ?></p>
					</div><!-- /.text-box -->
				</div><!-- /.single-case-study -->
			</div><!-- /.col-md-6 filter-item -->
           
<?php endwhile;?>
  
<?php wp_reset_postdata();
$data_posts = ob_get_contents();
ob_end_clean();

endif; 

ob_start();?>	 

<?php $terms = get_terms(array('gallery_category')); ?>
<!--Gallery Section-->
<section class="case-study-masonary sec-padding">
	<div class="auto-container">
		<ul class="post-filter text-center">
			<li class="active" data-filter=".filter-item"><span><?php esc_attr_e('All Projects', 'digitalmedia');?></span></li>
			<?php foreach( $fliteration as $t ): ?>
                <li class="filter" data-role="button" data-filter=".<?php echo esc_attr(digitalmedia_set( $t, 'slug' )); ?>">
                	<span><?php echo balanceTags(digitalmedia_set( $t, 'name')); ?></span>
                </li>
                <?php endforeach;?>
		</ul><!-- /.post-filter -->
		<div class="row filter-layout masonary-layout">
			<?php echo balanceTags($data_posts); ?>   
		</div><!-- /.row filter-layout -->
	</div>
</section>
<?php $output = ob_get_contents();
ob_end_clean(); 
return $output;?>

