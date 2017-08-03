<?php
ob_start() ;?>

<section class="promo-area">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="single-promo">
					<img src="<?php echo wp_get_attachment_url( $image, 'full' ); ?>" alt="Awesome Image"/>
					<h3><?php echo balanceTags($title);?></h3>
					<p><?php echo balanceTags($text);?></p>
					<ul>
					<?php
					$desc_li_text = explode(",", balanceTags($li_text));
						$dem=0;
						for ($j=0; $j < count($desc_li_text); $j++) {
					?>	
						<li><?php echo stripslashes($desc_li_text[$j]); ?></li>
					<?php } ?>	
					</ul>
				</div>
			</div>
	</div>
</section>

<!--End latest-news-area-->
<?php
$output = ob_get_contents(); 
  ob_end_clean(); 
   return $output ; ?>
 