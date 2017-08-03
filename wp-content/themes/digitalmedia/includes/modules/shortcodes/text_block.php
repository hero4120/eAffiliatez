<?php
ob_start() ;?>
<section class="about-info sec-padding">
	<div class="auto-container">
		<div class="row">
			<div class="col-md-12">
				<div class="right-text">
					<div class="sec-title">
						<p><?php echo balanceTags($sub_title);?></p>
						<h3><?php echo balanceTags($title);?></h3>
					</div>
					<p><?php echo balanceTags($text);?></p>
					<a href="<?php echo esc_url($link);?>" class="btn btn-default"><?php echo balanceTags($btn);?></a>
				</div><!-- /.right-text -->
			</div><!-- /.col-md-6 -->
		</div><!-- /.row -->
	</div><!-- /.auto-container -->
</section><!-- /.about-info -->
<?php
$output = ob_get_contents(); 
  ob_end_clean(); 
   return $output ; ?>
