<?php
ob_start() ;?>
<section class="challenge-box">
	<div class="auto-container">
		<div class="row">
			<div class="col-md-12 col-sm-12 pull-right">
				<ul>
					<li><span><?php echo balanceTags($title1);?></span> <?php echo balanceTags($text1);?></li>
					<li><span><?php echo balanceTags($title2);?></span> <?php echo balanceTags($text2);?></li>
					<li><span><?php echo balanceTags($title3);?></span> <a href="<?php echo esc_url($text3);?>"><?php echo balanceTags($text3);?></a></li>
				</ul>
			</div><!-- /.col-md-3 pull-right -->
		</div><!-- /.row -->
	</div><!-- /.auto-container -->
</section><!-- /.challenge-box -->

<?php
$output = ob_get_contents(); 
  ob_end_clean(); 
   return $output ; ?>
