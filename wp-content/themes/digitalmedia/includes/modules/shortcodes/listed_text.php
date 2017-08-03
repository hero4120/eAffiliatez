<?php
ob_start() ;?>
<section class="service-features-two sec-padding gray-bg">
	<div class="auto-container">
		<div class="row">			
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="right-text">
					<div class="sec-title">
						<h3><?php echo balanceTags($title);?></h3>
						<p><?php echo balanceTags($sub_title);?></p>
					</div><!-- /.sec-title -->
					<p><?php echo balanceTags($text);?></p>
					<div class="row">
						<div class="col-md-6">
							<ul>
							<?php
					$desc_li_text = explode(",", balanceTags($li_text));
						$dem=0;
						for ($j=0; $j < count($desc_li_text); $j++) {
					?>	
								<li><?php echo stripslashes($desc_li_text[$j]); ?></li>
						 <?php } ?>	
							</ul>
						</div><!-- /.col-md-6 -->
						<div class="col-md-6">
							<ul>
							<?php
					$desc_li_text1 = explode(",", balanceTags($li_text1));
						$dem=0;
						for ($j=0; $j < count($desc_li_text1); $j++) {
					?>	
								<li><?php echo stripslashes($desc_li_text1[$j]); ?></li>
						 <?php } ?>	
							</ul>
						</div><!-- /.col-md-6 -->
					</div><!-- /.row -->
				</div><!-- /.right-text -->
			</div><!-- /.col-md-6 -->
		</div><!-- /.row -->
	</div><!-- /.auto-container -->
</section><!-- /.service-features-two -->

<?php
	$output = ob_get_contents(); 
   ob_end_clean(); 
   return $output ; ?>
   
   