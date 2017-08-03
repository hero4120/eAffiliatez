<?php  
ob_start() ;
?>
<section class="get-a-qoute sec-padding">
	<div class="auto-container">
		<div class="sec-title text-center">
			<h3><?php echo balanceTags($title);?></h3>
			<p><?php echo balanceTags($sub_title);?></p>
		</div>
		<?php echo do_shortcode(bunch_base_decode($contact_form));?>
	</div><!-- /.auto-container -->
</section><!-- /.get-started sec-padding -->
<?php 
	wp_reset_postdata();

   $output = ob_get_contents(); 

   ob_end_clean(); 

   return $output ; ?>	

