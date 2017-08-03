<?php
ob_start() ;?>
<section class="challenge-box">
	<div class="auto-container">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12 pull-left">
				<h2><?php echo balanceTags($title);?></h2>
				<p><?php echo balanceTags($text);?></p>
			</div><!-- /.col-md-8 pull-left -->
		</div><!-- /.row -->
	</div><!-- /.auto-container -->
</section><!-- /.challenge-box -->

<?php
$output = ob_get_contents(); 
  ob_end_clean(); 
   return $output ; ?>
