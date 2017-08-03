<?php
ob_start() ;?>
<section class="real-time-analytics sec-padding">
	<div class="auto-container">
		<div class="row">
			<div class="col-md-5">
				<div class="sec-title">
					<h3><?php echo balanceTags($title);?></h3>
					<p><?php echo balanceTags($sub_title);?></p>
				</div>
			</div><!-- /.col-md-5 -->
			<div class="col-md-7">
				<div class="right-text">
					<p><?php echo balanceTags($text);?></p>
					<h3><?php echo balanceTags($title1);?></h3>
					<p><?php echo balanceTags($text1);?></p>
					<h3><?php echo balanceTags($title2);?></h3>
					<p><?php echo balanceTags($text2);?> </p>
				</div><!-- /.right-text -->
			</div><!-- /.col-md-7 -->
		</div><!-- /.row -->
	</div><!-- /.auto-container -->
</section><!-- /.real-time-analytics -->
<?php
$output = ob_get_contents(); 
  ob_end_clean(); 
   return $output ; ?>
