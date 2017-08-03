<?php
		$prt = array();
		$prt['layout'] = balanceTags($layout);
		$prt['prt_title1'] = balanceTags($title1);
		$prt['prt_title2'] = balanceTags($title2);
		$prt['prt_title3'] = balanceTags($title3);
		$prt['prt_title4'] = balanceTags($title4);
		$prt['prt_number1'] = balanceTags($number1);
		$prt['prt_number2'] = balanceTags($number2);
		$prt['prt_number3'] = balanceTags($number3);
		$prt['prt_number4'] = balanceTags($number4);
		
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
<!--Featured Three Column-->
   <section class="fact-counter">
	<div class="auto-container">
		<div class="row">
		    <?php for($i=1; $i <= $layout ; $i++) { ?>	
			<div class="col-md-<?php echo esc_attr( $column_class ); ?> col-sm-6 col-xs-12">
				<div class="single-fact-counter text-center">
					<h3><?php echo stripslashes($prt['prt_number'.$i]); ?></h3>
					<p><?php echo stripslashes($prt['prt_title'.$i]); ?></p>
				</div><!-- /.single-fact-counter -->
			</div><!-- /.col-md-3 -->
		  <?php  }?> 	
		</div><!-- /.row -->
	</div><!-- /.auto-container -->
</section><!-- /.fact-counter -->
<?php
$output = ob_get_contents(); 
  ob_end_clean(); 
 return $output ; ?>
  