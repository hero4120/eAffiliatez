<?php
	function firsttheme_script_enqueue(){
		wp_enqueue_style('cumstomtheme',get_template_directory_uri().'/css/first-theme.css',array(),'1.0','all');
		wp_enqueue_script('customjs',get_template_directory_uri().'/js/first-theme.js',array(),'1.0',true);
	}
	add_action('wp_enqueue_scripts','firsttheme_script_enqueue');
?>