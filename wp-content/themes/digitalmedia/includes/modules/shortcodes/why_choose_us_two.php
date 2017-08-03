<?php
ob_start() ;?>
<section class="why-choose-us-two sec-padding">
	<div class="auto-container">
		<div class="row">
			<div class="col-md-5 col-sm-12 col-xs-12 pull-left text-center">
				<img src="<?php echo wp_get_attachment_url( $image, 'full' ); ?>" alt=""/>
			</div><!-- /.col-md-5 -->
			<div class="col-md-6 col-sm-12 col-xs-12 pull-right">
				<div class="sec-title light">
					<h3><?php echo balanceTags($title);?></h3>
					<p><?php echo balanceTags($sub_title);?></p>
				</div>
				<ul class="why-choose-us-two-list">
					<li>
						<div class="icon-box">
							<img src="<?php echo wp_get_attachment_url( $image1, 'full' ); ?>"  alt="">
						</div><!-- /.icon-box -->
						<div class="text-box">
							<h3><?php echo balanceTags($title1);?></h3>
							<p><?php echo balanceTags($text1);?></p>
						</div><!-- /.text-box -->
					</li>
					<li>
						<div class="icon-box">
							<img src="<?php echo wp_get_attachment_url( $image2, 'full' ); ?>"  alt="">
						</div><!-- /.icon-box -->
						<div class="text-box">
							<h3><?php echo balanceTags($title2);?></h3>
							<p><?php echo balanceTags($text2);?></p>
						</div><!-- /.text-box -->
					</li>
					<li>
						<div class="icon-box">
							<img src="<?php echo wp_get_attachment_url( $image3, 'full' ); ?>"  alt="">
						</div><!-- /.icon-box -->
						<div class="text-box">
							<h3><?php echo balanceTags($title3);?></h3>
							<p><?php echo balanceTags($text3);?></p>
						</div><!-- /.text-box -->
					</li>
				</ul><!-- /.why-choose-us-two -->
			</div><!-- /.col-md-6 -->
		</div><!-- /.row -->
	</div><!-- /.auto-container -->
</section><!-- /.why-choose-us -->
<?php
$output = ob_get_contents(); 
 ob_end_clean(); 
 return $output ; ?>
 