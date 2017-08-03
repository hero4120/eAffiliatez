<?php $options = get_option('wp_digitalmedia'.'_theme_options');?>

<?php if(!(digitalmedia_set($options, 'hide_whole_footer'))):?>
	<!--Start footer-top-area-->
	<section class="footer-top-area">
	    <div class="auto-container">
	        <?php if(!(digitalmedia_set($options, 'hide_upper_footer'))):?>
			<?php if ( is_active_sidebar( 'footer-sidebar' ) ) { ?>	
				<div class="row">
					<?php dynamic_sidebar( 'footer-sidebar' ); ?>
                </div>
			 <?php } ?> 	
			<?php endif;?>	
	    </div>
	</section>
	<!--End footer-top-area-->
<?php if(!(digitalmedia_set($options, 'hide_bottom_footer'))):?>
	<!--Start footer-bottom-area-->
	<section class="footer-bottom-area">
	    <div class="auto-container">
	        <div class="clearfix">  
				<div class="pull-left footer-right">
					<div class="coppy-right"><p><?php echo wp_kses_post(digitalmedia_set($options, 'copyright'));?></p></div>
				</div>
				<div class="pull-right footer-right">
	                <div class="footer-menu">
	                    <ul class="">
						<?php wp_nav_menu( array( 'theme_location' => 'footer_menu', 'container_id' => 'navbar-collapse-1',
									'container_class'=>'navbar-collapse collapse navbar-right',
									'menu_class'=>'nav navbar-nav',
									'fallback_cb'=>false, 
									'items_wrap' => '%3$s', 
									'container'=>false,
									'walker'=> new Bunch_Bootstrap_walker()  
						) ); ?>
	                    </ul>
	                </div>
	            </div>
	        </div>
	    </div>
	</section>
	<?php endif;?>
	 <?php endif;?>  
	<!--End footer-bottom-area-->
 </div>

<?php wp_footer(); ?>

</body>
</html>