<?php
ob_start() ;?>
<!--Sidebar Page-->
<section class="contact-info gray-bg">
	<div class="auto-container">
		<div class="row">
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="single-contact-info">
					<i class="flaticon-placeholder"></i>
					<h3><?php echo balanceTags($title1);?></h3>
					<p><?php echo balanceTags($text1);?></p>
					<a href="<?php echo esc_url($link1);?>"><?php echo balanceTags($btn1);?></a>
				</div><!-- /.single-contact-info -->
			</div><!-- /.col-md-3 -->
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="single-contact-info">
					<i class="flaticon-phone-call"></i>
					<h3><?php echo balanceTags($title2);?></h3>
					<p><?php echo balanceTags($text2);?></p>
					<a href="<?php echo esc_url($link2);?>"><?php echo balanceTags($btn2);?></a>
				</div><!-- /.single-contact-info -->
			</div><!-- /.col-md-3 -->
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="single-contact-info">
					<i class="flaticon-technology"></i>
					<h3><?php echo balanceTags($title3);?></h3>
					<p><?php echo balanceTags($text3);?></p>
					<a href="<?php echo esc_url($link3);?>"><?php echo balanceTags($btn3);?></a>
				</div><!-- /.single-contact-info -->
			</div><!-- /.col-md-3 -->
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="single-contact-info">
					<i class="flaticon-envelope-opened-outline"></i>
					<h3><?php echo balanceTags($title4);?></h3>
					<p><?php echo balanceTags($text4);?></p>
					<a href="<?php echo esc_url($link4);?>"><?php echo balanceTags($btn4);?></a>
				</div><!-- /.single-contact-info -->
			</div><!-- /.col-md-3 -->
		</div><!-- /.row -->
	</div><!-- /.auto-container -->
</section><!-- /.contact-info -->
    
<?php
	$output = ob_get_contents(); 
   ob_end_clean(); 
   return $output ; ?>
 
