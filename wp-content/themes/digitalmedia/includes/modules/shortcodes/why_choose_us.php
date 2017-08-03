<?php
ob_start() ;?>
   <section class="why-choose-us sec-padding">
	<div class="auto-container">
		<div class="sec-title text-center">
			<h3><?php echo balanceTags($title);?></h3>
			<p><?php echo balanceTags($sub_title);?></p>
		</div>
		<div class="row">
			<div class="col-md-3 col-sm-12 text-right">
				<div class="text-box">
					<h3><?php echo balanceTags($title1);?></h3>
					<p><?php echo balanceTags($text1);?></p>
				</div>
				<div class="text-box bottom">
					<h3><?php echo balanceTags($title2);?></h3>
					<p><?php echo balanceTags($text2);?></p>
				</div>
			</div>
			<div class="col-md-6 col-sm-12 ">
				<div class="choose-box">
					<div class="inner-box">
						<div class="content">
							<h3><?php echo balanceTags($titlex);?></h3>
						</div>
						<div class="icon-box top left">
							<i class="<?php echo balanceTags($icon1);?>"></i>
						</div>
						<div class="icon-box top right">
							<div class="icon-chart">
			                	<i class="<?php echo balanceTags($icon2);?>"></i>
			                </div>
						</div>
						<div class="icon-box bottom left">
							<div class="icon-rocket">
			                <i class="<?php echo balanceTags($icon3);?>"></i>
			                </div>
						</div>
						<div class="icon-box bottom right">
							<i class="<?php echo balanceTags($icon4);?>"></i>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-12">
				<div class="text-box">
					<h3><?php echo balanceTags($title3);?></h3>
					<p><?php echo balanceTags($text3);?></p>
				</div>
				<div class="text-box bottom">
					<h3><?php echo balanceTags($title4);?></h3>
					<p><?php echo balanceTags($text4);?></p>
				</div>
			</div>
		</div>
	</div>
</section>
<?php
$output = ob_get_contents(); 
 ob_end_clean(); 
 return $output ; ?>
 