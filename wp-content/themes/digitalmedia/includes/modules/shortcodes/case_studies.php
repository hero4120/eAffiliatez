<?php
ob_start() ;?>
<section class="case-study">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="single-case-study">
					<div class="img-box">
						<img src="<?php echo wp_get_attachment_url( $image, 'full' ); ?>" alt="Awesome Image"/>
						<div class="overlay">
							<div class="box">
								<div class="content">
									<a href="<?php echo esc_url($link);?>"><i class="fa fa-expand"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
</section>

<?php
$output = ob_get_contents(); 
 ob_end_clean(); 
 return $output ; ?>
 