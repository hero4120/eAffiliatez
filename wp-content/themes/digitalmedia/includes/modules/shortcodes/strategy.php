<?php
ob_start() ;?>
   <section class="chart-section sec-padding">
	<div class="auto-container">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="chart-text-right">
					<h3><?php echo balanceTags($title);?></h3>
					<p><?php echo balanceTags($text);?></p>
					<h4><?php echo balanceTags($titlex);?></h4>
					<ul class="icon-box-wrapper">
						<li>
							<div class="icon-box">
								<i class="fa <?php echo str_replace("icon ", "", balanceTags($icon1));?>"></i><span><?php echo balanceTags($number1);?></span>
							</div><!-- /.icon-box -->
							<p><?php echo balanceTags($title1);?></p>
						</li>
						<li>
							<div class="icon-box">
								<i class="fa <?php echo str_replace("icon ", "", balanceTags($icon2));?>"></i> <span><?php echo balanceTags($number2);?></span>
							</div>
							<p><?php echo balanceTags($title2);?></p>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>
<?php
$output = ob_get_contents(); 
 ob_end_clean(); 
 return $output ; ?>
 
