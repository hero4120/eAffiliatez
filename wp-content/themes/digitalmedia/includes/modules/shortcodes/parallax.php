<?php  
ob_start() ;?>
    
<section class="home-cta">
	<div class="container clearfix">
		<div class="left-text pull-left">
			<p><?php echo balanceTags($title);?></p>
		</div>
		<div class="right-text pull-right">
			<a href="<?php echo esc_url($link);?>" class="btn btn-default"><?php echo balanceTags($btn);?></a>
		</div>
	</div>
</section> 
<?php 
   wp_reset_postdata();
   $output = ob_get_contents(); 
   ob_end_clean(); 
   return $output ; 
 