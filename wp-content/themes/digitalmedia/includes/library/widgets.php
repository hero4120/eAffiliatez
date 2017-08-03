<?php
///----Blog widgets---

/// Recent Posts 
class Bunch_Recent_Post extends WP_Widget
{
	/** constructor */
	function __construct()
	{
		parent::__construct( /* Base ID */'Bunch_Recent_Post', /* Name */esc_html__('DigitalMedia Recent Posts','digitalmedia'), array( 'description' => esc_html__('Show the recent posts', 'digitalmedia' )) );
	}
 

	/** @see WP_Widget::widget */
	function widget($args, $instance)
	{
		extract( $args );
		$title = apply_filters( 'widget_title', $instance['title'] );
		
		echo wp_kses_post($before_widget); ?>
		
        <!-- Recent Posts -->
        <div class="single-sidebar">
		<div class="blog-post">
            <?php echo wp_kses_post($before_title.$title.$after_title); ?>
		
			<?php $query_string = 'posts_per_page='.$instance['number'];
            if( $instance['cat'] ) $query_string .= '&cat='.$instance['cat'];
            query_posts( $query_string ); 
            
            $this->posts();
            wp_reset_query();
            ?>
          </div>   
        </div>
        
		<?php echo wp_kses_post($after_widget);
	}
 
 
	/** @see WP_Widget::update */
	function update($new_instance, $old_instance)
	{
		$instance = $old_instance;
		
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['number'] = $new_instance['number'];
		$instance['cat'] = $new_instance['cat'];
		
		return $instance;
	}

	/** @see WP_Widget::form */
	function form($instance)
	{
		$title = ( $instance ) ? esc_attr($instance['title']) : esc_html__('Latest News', 'digitalmedia');
		$number = ( $instance ) ? esc_attr($instance['number']) : 3;
		$cat = ( $instance ) ? esc_attr($instance['cat']) : '';?>
			
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Title: ', 'digitalmedia'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('number')); ?>"><?php esc_html_e('No. of Posts:', 'digitalmedia'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('number')); ?>" name="<?php echo esc_attr($this->get_field_name('number')); ?>" type="text" value="<?php echo esc_attr( $number ); ?>" />
        </p>
       
    	<p>
            <label for="<?php echo esc_attr($this->get_field_id('cat')); ?>"><?php esc_html_e('Category', 'digitalmedia'); ?></label>
            <?php wp_dropdown_categories( array('show_option_all'=>esc_html__('All Categories', 'digitalmedia'), 'selected'=>$cat, 'class'=>'widefat', 'name'=>$this->get_field_name('cat')) ); ?>
        </p>
            
		<?php 
	}
	
	function posts()
	{
		
		if( have_posts() ):?>
        
           	<!-- Title -->
				<?php while( have_posts() ): the_post(); ?>
                <ul>
							<li>
								<div class="img-box">
									<?php the_post_thumbnail();?>
								</div><!-- /.img-box -->
								<div class="text-box">
									<a href="<?php echo esc_url(get_permalink(get_the_id()));?>">
										<h4><?php the_title();?></h4>
									</a>
									<a href="<?php echo get_day_link('F d, Y'); ?>"><p><?php echo get_the_date('F d, Y')?></p></a>
								</div><!-- /.text-box -->
							</li>
				</ul>
                <?php endwhile; ?>
            
        <?php endif;
    }
}

///----footer widgets---
//About Us
class Bunch_About_us extends WP_Widget
{
	
	/** constructor */
	function __construct()
	{
		parent::__construct( /* Base ID */'Bunch_About_us', /* Name */esc_html__('DigitalMedia About Us','digitalmedia'), array( 'description' => esc_html__('Show the information about company', 'digitalmedia' )) );
	}

	/** @see WP_Widget::widget */
	function widget($args, $instance)
	{
		extract( $args );
		$title = apply_filters( 'widget_title', $instance['title'] );
		
		echo wp_kses_post($before_widget);?>
      		
			<div class="footer-logo">
			   <div class="logo">
				
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo wp_kses_post($instance['image']); ?>" alt="" title="<?php esc_html_e('digitalmedia', 'digitalmedia');?>"></a>
				</div>
				<p><?php echo wp_kses_post($instance['content']); ?></p>
				<?php if( $instance['show'] ): ?>
				<div class="social-icon">
				<?php echo wp_kses_post(digitalmedia_get_social_icons()); ?>
				</div>
				<?php endif; ?>
			</div>
			<!--Footer Column-->
            
		<?php
		
		echo wp_kses_post($after_widget);
	}
	
	
	/** @see WP_Widget::update */
	function update($new_instance, $old_instance)
	{
		$instance = $old_instance;

		$instance['title'] = strip_tags($new_instance['title']);
		$instance['image'] = $new_instance['image'];
		$instance['content'] = $new_instance['content'];

		$instance['show'] = $new_instance['show'];

		return $instance;
	}

	/** @see WP_Widget::form */
	function form($instance)
	{
		$title = ($instance) ? esc_attr($instance['title']) : '';
		$image = ($instance) ? esc_attr($instance['image']) : '';
		$content = ($instance) ? esc_attr($instance['content']) : '';
		$show = ( $instance ) ? esc_attr($instance['show']) : '';?>
        
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Title:', 'digitalmedia'); ?></label>
            <input placeholder="<?php esc_html_e('About Us', 'digitalmedia');?>" class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr($title); ?>" />
        </p>
		 <p>
            <label for="<?php echo esc_attr($this->get_field_id('image')); ?>"><?php esc_html_e('Image URL:', 'digitalmedia'); ?></label>
            <textarea class="widefat" id="<?php echo esc_attr($this->get_field_id('image')); ?>" name="<?php echo esc_attr($this->get_field_name('image')); ?>" ><?php echo wp_kses_post($image); ?></textarea>
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('content')); ?>"><?php esc_html_e('Content:', 'digitalmedia'); ?></label>
            <textarea class="widefat" id="<?php echo esc_attr($this->get_field_id('content')); ?>" name="<?php echo esc_attr($this->get_field_name('content')); ?>" ><?php echo wp_kses_post($content); ?></textarea>
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('show')); ?>"><?php esc_html_e('Show Social Icons:', 'digitalmedia'); ?></label>
			<?php $selected = ( $show ) ? ' checked="checked"' : ''; ?>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('show')); ?>"<?php echo esc_attr($selected); ?> name="<?php echo esc_attr($this->get_field_name('show')); ?>" type="checkbox" value="true" />
        </p>        
                
		<?php 
	}
	
}

class Bunch_Contact_us extends WP_Widget
{
	
	/** constructor */
	function __construct()
	{
		parent::__construct( /* Base ID */'Bunch_Contact_us', /* Name */esc_html__('DigitalMedia Contact Us','digitalmedia'), array( 'description' => esc_html__('Show the information Contact Us', 'digitalmedia' )) );
	}

	/** @see WP_Widget::widget */
	function widget($args, $instance)
	{
		extract( $args );
		$title = apply_filters( 'widget_title', $instance['title'] );
		
		echo wp_kses_post($before_widget);?>
      		
			<!--Footer Column-->
           <div class="contact-us">
				 <?php echo wp_kses_post($before_title.$title.$after_title); ?>
				<h4><?php esc_html_e('Address', 'digitalmedia');?></h4>
				<p><?php echo wp_kses_post($instance['add']); ?></p>
				<h4><?php esc_html_e('Email Us', 'digitalmedia');?></h4>
				<p><?php echo wp_kses_post($instance['email']); ?></p>
				<h4><?php esc_html_e('Call Us', 'digitalmedia');?></h4>
				<p><?php echo wp_kses_post($instance['mobile']); ?></p>
			</div>
		<?php
		
		echo wp_kses_post($after_widget);
	}
	
	
	/** @see WP_Widget::update */
	function update($new_instance, $old_instance)
	{
		$instance = $old_instance;
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['add'] = $new_instance['add'];
		$instance['mobile'] = $new_instance['mobile'];
		$instance['email'] = $new_instance['email'];

		return $instance;
	}

	/** @see WP_Widget::form */
	function form($instance)
	{
		$title = ($instance) ? esc_attr($instance['title']) : 'About Us';
		$add = ($instance) ? esc_attr($instance['add']) : '';
		$mobile = ($instance) ? esc_attr($instance['mobile']) : '';
		$email = ($instance) ? esc_attr($instance['email']) : '';
		
		?>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Title:', 'digitalmedia'); ?></label>
            <input placeholder="<?php esc_html_e('About Us', 'digitalmedia');?>" class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr($title); ?>" />
        </p>
		<p>
            <label for="<?php echo esc_attr($this->get_field_id('add')); ?>"><?php esc_html_e('Address:', 'digitalmedia'); ?></label>
            <textarea class="widefat" id="<?php echo esc_attr($this->get_field_id('add')); ?>" name="<?php echo esc_attr($this->get_field_name('add')); ?>" ><?php echo wp_kses_post($add); ?></textarea>
        </p>
		<p>
            <label for="<?php echo esc_attr($this->get_field_id('email')); ?>"><?php esc_html_e('E-mail:', 'digitalmedia'); ?></label>
            <textarea class="widefat" id="<?php echo esc_attr($this->get_field_id('email')); ?>" name="<?php echo esc_attr($this->get_field_name('email')); ?>" ><?php echo wp_kses_post($email); ?></textarea>
        </p>
		<p>
            <label for="<?php echo esc_attr($this->get_field_id('mobile')); ?>"><?php esc_html_e('Mobile:', 'digitalmedia'); ?></label>
            <textarea class="widefat" id="<?php echo esc_attr($this->get_field_id('mobile')); ?>" name="<?php echo esc_attr($this->get_field_name('mobile')); ?>" ><?php echo wp_kses_post($mobile); ?></textarea>
        </p>
		
               
                
		<?php 
	}
	
}

class Bunch_subscribe extends WP_Widget
{
	
	/** constructor */
	function __construct()
	{
		parent::__construct( /* Base ID */'Bunch_subscribe', /* Name */esc_html__('DigitalMedia Subscribe','digitalmedia'), array( 'description' => esc_html__('Show the Subscribe', 'digitalmedia' )) );
	}


	/** @see WP_Widget::widget */
	function widget($args, $instance)
	{
		extract( $args );
		$title = apply_filters( 'widget_title', $instance['title'] );
		
		echo wp_kses_post($before_widget);?>
      		 <div class="subscribe-us">
			<?php echo wp_kses_post($before_title.$title.$after_title); ?>
				<p><?php echo wp_kses_post($instance['add']); ?></p>
				<div class="email-addres">
				<form target="popupwindow" method="post" role="form" action="http://feedburner.google.com/fb/a/mailverify" accept-charset="utf-8" id="subscribe2" name="mc-embedded-subscribe-form" novalidate>
					<input type="text" name="email" id="newsletter_input2" placeholder="<?php esc_html_e('Enter Email', 'digitalmedia');?>">
								<input type="hidden" id="uri2" name="uri" value="<?php echo wp_kses_post($id); ?>">
			  					<input type="hidden" value="en_US" name="loc">
								<button class="buttn_sub" type="submit" name="subscribe" id="submit2"><i class="fa fa-paper-plane"></i></button>
					
					
					<p><?php esc_html_e('Your Email id is confidential!', 'digitalmedia');?></p>
				</form>	
				</div>
			</div>
		<?php
		
		echo wp_kses_post($after_widget);
	}
	
	
	/** @see WP_Widget::update */
	function update($new_instance, $old_instance)
	{
		$instance = $old_instance;
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['add'] = $new_instance['add'];

		return $instance;
	}

	/** @see WP_Widget::form */
	function form($instance)
	{
		$title = ($instance) ? esc_attr($instance['title']) : 'About Us';
		$add = ($instance) ? esc_attr($instance['add']) : '';
		
		?>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Title:', 'digitalmedia'); ?></label>
            <input placeholder="<?php esc_html_e('About Us', 'digitalmedia');?>" class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr($title); ?>" />
        </p>
		<p>
            <label for="<?php echo esc_attr($this->get_field_id('add')); ?>"><?php esc_html_e('Text:', 'digitalmedia'); ?></label>
            <textarea class="widefat" id="<?php echo esc_attr($this->get_field_id('add')); ?>" name="<?php echo esc_attr($this->get_field_name('add')); ?>" ><?php echo wp_kses_post($add); ?></textarea>
        </p>
	
               
                
		<?php 
	}
	
}



