<?php  

ob_start() ;

?>
<div class="contact-page contact-form-wrapper sec-padding">
	<div class="auto-container">
		<div class="row">
			<div class="col-md-12">
				<div class="title">
					<h3><?php echo balanceTags($title);?></h3>
				</div><!-- /.title -->
				<p><?php echo balanceTags($text);?></p>
				<form id="contact-form" class="validate-cf contact-form" method="post" action="<?php echo admin_url( 'admin-ajax.php?action=_bunch_ajax_callback&amp;subaction=contact_form_submit'); ?>">
					<input type="text" name="contact_name" id="contact_name" value="" placeholder="<?php esc_html_e('Your Name', 'digitalmedia');?>">
					<input type="email" name="contact_email" id="contact_email" value="" placeholder="<?php esc_html_e('Your Email Address', 'digitalmedia');?>">
					<textarea name="contact_message" id="contact_message" placeholder="<?php esc_html_e('Your Message Here', 'digitalmedia');?>"></textarea>
					<button type="submit"><?php echo balanceTags($btn);?></button>
				</form>

			</div><!-- /.col-md-6 -->
		</div><!-- /.row -->
	</div><!-- /.auto-container -->
</div><!-- /.contact-page contact-form-wrapper -->
<?php 
	wp_reset_postdata();

   $output = ob_get_contents(); 

   ob_end_clean(); 

   return $output ; ?>	

