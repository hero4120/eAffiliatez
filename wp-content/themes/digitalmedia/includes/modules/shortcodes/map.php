<?php   
ob_start();
?>
<!-- Google map Hafizur************************ -->
<section class="contact-section">
	<div class="auto-container">
	  <div class="row clearfix">
		<div class="column map-column col-md-12 col-xs-12">
			<article class="inner-box">
				<!--Map Container-->
				<div class="map-container" id="google-map-area">
					<!--Map Canvas-->
					<div class="google-map-home" id="google-map" data-map-lat="<?php echo esc_js($lat);?>" data-map-lng="<?php echo esc_js($long);?>" data-icon-path="<?php echo esc_url(get_template_directory_uri().'/images/icons/map-marker.png');?>" data-map-title="<?php echo balanceTags($mark_title);?>" data-map-zoom="11"></div>
				</div>
			</article>
		</div>
	  </div>
    </div>
 </section>
<?php return ob_get_clean();?>	