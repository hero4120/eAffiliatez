<?php  
ob_start() ;?>
   <!--Parallax Section-->
   <section>
    	<div class="container">
            <div class="row">
				<div class="col-md-12 sec-title text-center">
					<h3><?php echo balanceTags($title);?></h3>
					<p><?php echo balanceTags($sub_title);?></p>
				</div>
            </div>
		</div>
	</section>	
	
 <?php 
   wp_reset_postdata();
   $output = ob_get_contents(); 
   ob_end_clean(); 
   return $output ; 
   
   