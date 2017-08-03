<?php
ob_start() ;?>
<section class="service-features">
	<div class="auto-container">
		<div class="row">
			<div class="col-md-5 col-sm-5 col-xs-12">
				<h3><?php echo balanceTags($title);?></h3>
				<p><?php echo balanceTags($text);?></p>
			</div><!-- /.col-md-5 -->
			<div class="col-md-7 col-sm-7 col-xs-12">
				<img src="<?php echo wp_get_attachment_url( $image, 'full' ); ?>" alt="Awesome Image"/>
			</div><!-- /.col-md-7 -->
		</div><!-- /.row -->
	</div><!-- /.auto-container -->
</section><!-- /.service-fetures -->
<?php
$output = ob_get_contents(); 
  ob_end_clean(); 
   return $output ; ?>
