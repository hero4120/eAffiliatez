<?php
ob_start() ;?>
  <section class="service-section sec-padding roundded-box work-progress">
	<div class="auto-container">
		<div class="sec-title text-center">
			<h3><?php echo balanceTags($title);?></h3>
			<p><?php echo balanceTags($sub_title);?></p>
		</div>
		<div class="row">
			<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="single-service text-center">
					<div class="img-box">
						<img src="<?php echo wp_get_attachment_url( $image1, 'full' ); ?>" alt="Awesome Image"/>
					</div>
					<h3><?php echo balanceTags($title1);?></h3>
					<p><?php echo balanceTags($text1);?></p>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="single-service text-center">
					<div class="img-box">
						<img src="<?php echo wp_get_attachment_url( $image2, 'full' ); ?>" alt="Awesome Image"/>
					</div>
					<h3><?php echo balanceTags($title2);?></h3>
					<p><?php echo balanceTags($text2);?></p>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 col-xs-12 col-lg-offset-0 col-md-offset-0 col-sm-offset-3 col-xs-offset-0">
				<div class="single-service text-center">
					<div class="img-box">
						<img src="<?php echo wp_get_attachment_url( $image3, 'full' ); ?>" alt="Awesome Image"/>
					</div>
					<h3><?php echo balanceTags($title3);?></h3>
					<p><?php echo balanceTags($text3);?></p>
				</div>
			</div>
		</div>
	</div>
</section>

<?php
$output = ob_get_contents(); 
 ob_end_clean(); 
 return $output ; ?>
 
