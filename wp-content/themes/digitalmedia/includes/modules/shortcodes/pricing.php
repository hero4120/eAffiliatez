<?php
	
		$prt = array();
		$prt['layout'] = balanceTags($layout);
		$prt['prt_title1'] = balanceTags($title1);
		$prt['prt_title2'] = balanceTags($title2);
		$prt['prt_title3'] = balanceTags($title3);
		$prt['prt_title4'] = balanceTags($title4);
		
		$prt['prt_duration1'] = balanceTags($duration1);
		$prt['prt_duration2'] = balanceTags($duration2);
		$prt['prt_duration3'] = balanceTags($duration3);
		$prt['prt_duration4'] = balanceTags($duration4);
		
		$prt['prt_currency1'] = balanceTags($currency1);
		$prt['prt_currency2'] = balanceTags($currency2);
		$prt['prt_currency3'] = balanceTags($currency3);
		$prt['prt_currency4'] = balanceTags($currency4);
		
		$prt['prt_amount1'] = balanceTags($amount1);
		$prt['prt_amount2'] = balanceTags($amount2);
		$prt['prt_amount3'] = balanceTags($amount3);
		$prt['prt_amount4'] = balanceTags($amount4);
		
		$prt['prt_pricing_desc1'] = balanceTags($prt_pricing_desc1);
		$prt['prt_pricing_desc2'] = balanceTags($prt_pricing_desc2);
		$prt['prt_pricing_desc3'] = balanceTags($prt_pricing_desc3);
		$prt['prt_pricing_desc4'] = balanceTags($prt_pricing_desc4);
		
		$prt['prt_link1'] = balanceTags($link1);
		$prt['prt_link2'] = balanceTags($link2);
		$prt['prt_link3'] = balanceTags($link3);
		$prt['prt_link4'] = balanceTags($link4);
		
		$prt['prt_bttn1'] = balanceTags($bttn1);
		$prt['prt_bttn2'] = balanceTags($bttn2);
		$prt['prt_bttn3'] = balanceTags($bttn3);
		$prt['prt_bttn4'] = balanceTags($bttn4);


		$layout = balanceTags($layout);
		  switch ($layout) {
					case '3':
						$column_class = 4;
					break;
					case '2':
						$column_class = 6;
					break;
					default:
						$column_class = 3;
					break;
				}; 

ob_start() ;?>
<!--Our Process-->
<section class="pricing-section sec-padding gray-bg">
	<div class="auto-container">
		<div class="sec-title text-center">
			<h3><?php echo balanceTags($title);?></h3>
			<p><?php echo balanceTags($sub_title);?></p>
		</div>
		<div class="row">
			<?php for($i=1; $i <= $layout ; $i++) { ?>	
			
			<div class="col-md-<?php echo esc_attr( $column_class );?> col-sm-6 col-xs-12">
				<div class="single-price-plan-wrapper">
					<div class="single-price-plan">
						<div class="top-box">
							<div class="inner-box">
								<h3>Basic Plan</h3>
								<p><span class="price"><?php echo stripslashes($prt['prt_currency'.$i]); ?></span><span><?php echo stripslashes($prt['prt_amount'.$i]); ?></span><?php echo stripslashes($prt['prt_duration'.$i]); ?></p>
							</div><!-- /.inner-box -->
						</div>
						<ul>
							<?php
								$desc_price = explode(",", $prt['prt_pricing_desc'.$i]);
									$dem=0;
									for ($j=0; $j < count($desc_price); $j++) {
							?>
							<li><?php echo stripslashes($desc_price[$j]); ?></li>
							<?php } ?>
						</ul>
						<a href="<?php echo esc_url($prt['prt_link'.$i]); ?>" class="btn btn-default"><?php echo stripslashes($prt['prt_bttn'.$i]); ?></a>
					</div>
				</div>
			</div>
		<?php  }?>  	
			
		</div>
	</div>
</section>

<!--End latest-news-area-->
<?php

	$output = ob_get_contents(); 

   ob_end_clean(); 

   return $output ; ?>
