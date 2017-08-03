<?php
ob_start() ;?>
<section class="client-carousel">
	<div class="container">
		<div class="inner-container">
			<div class="owl-carousel owl-theme">
				<?php if(wp_get_attachment_url( $image1, 'full' )):?>
				<div class="item"><img src="<?php echo wp_get_attachment_url( $image1, 'full' ); ?>" alt=""></div>
				<?php endif ?>
				<?php if(wp_get_attachment_url( $image2, 'full' )):?>
				<div class="item"><img src="<?php echo wp_get_attachment_url( $image2, 'full' ); ?>" alt=""></div>
				<?php endif ?>
				<?php if(wp_get_attachment_url( $image3, 'full' )):?>
				<div class="item"><img src="<?php echo wp_get_attachment_url( $image3, 'full' ); ?>" alt=""></div>
				<?php endif ?>
				<?php if(wp_get_attachment_url( $image4, 'full' )):?>
				<div class="item"><img src="<?php echo wp_get_attachment_url( $image4, 'full' ); ?>" alt=""></div>
				<?php endif ?>
				<?php if(wp_get_attachment_url( $image5, 'full' )):?>
				<div class="item"><img src="<?php echo wp_get_attachment_url( $image5, 'full' ); ?>" alt=""></div>
				<?php endif ?>
				<?php if(wp_get_attachment_url( $image6, 'full' )):?>
				<div class="item"><img src="<?php echo wp_get_attachment_url( $image6, 'full' ); ?>" alt=""></div>
				<?php endif ?>
				<?php if(wp_get_attachment_url( $image7, 'full' )):?>
				<div class="item"><img src="<?php echo wp_get_attachment_url( $image7, 'full' ); ?>" alt=""></div>
				<?php endif ?>
				<?php if(wp_get_attachment_url( $image8, 'full' )):?>
				<div class="item"><img src="<?php echo wp_get_attachment_url( $image8, 'full' ); ?>" alt=""></div>
				<?php endif ?>
				<?php if(wp_get_attachment_url( $image9, 'full' )):?>
				<div class="item"><img src="<?php echo wp_get_attachment_url( $image9, 'full' ); ?>" alt=""></div>
				<?php endif ?>
			</div>
		</div>
	</div>
</section>
<?php

	$output = ob_get_contents(); 

   ob_end_clean(); 

   return $output ; ?>