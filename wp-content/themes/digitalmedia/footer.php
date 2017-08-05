<?php $options = get_option('wp_digitalmedia'.'_theme_options');?>

<?php if(!(digitalmedia_set($options, 'hide_whole_footer'))):?>
	<!--Start footer-top-area-->
	<section class="footer-top-area">
	    <div class="auto-container">
	        <?php if(!(digitalmedia_set($options, 'hide_upper_footer'))):?>
			<?php if ( is_active_sidebar( 'footer-sidebar' ) ) { ?>	
				<div class="row">
					<div class="widget_item"><?php dynamic_sidebar( 'footer-sidebar' ); ?></div>
                </div>
			 <?php } ?> 	
			<?php endif;?>	
	    </div>
	</section>
	<!--End footer-top-area-->
<?php if(!(digitalmedia_set($options, 'hide_bottom_footer'))):?>
	<!--Start footer-bottom-area-->
	<section class="wrapper footer">
		<div class="container_24">
			<div class="grid_24">
	                <div class="menu-footer-menu-container">
	                    <ul>
						<?php wp_nav_menu( array( 'theme_location' => 'footer_menu', 'container_id' => 'navbar-collapse-1',
									'container_class'=>'menu-footer-menu-container',
									'menu_class'=>'footer_menu',
									'menu_id'=>'menu-footer-menu',
									'fallback_cb'=>false, 
									//'items_wrap' => '%3$s', 
									'container'=>false,
									'walker'=> new Bunch_Bootstrap_walker()  
						) ); ?>
	                    </ul>
	                </div>
	                <p>Copyright © 2017 eAffiliatez.com. All Rights Reserved.</p>
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