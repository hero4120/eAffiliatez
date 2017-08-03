<?php
$bunch_sc = array();

$bunch_sc['bunch_contact_form_two']	=	array(
					"name" => __("Contact Form Two", BUNCH_NAME),
					"base" => "bunch_contact_form_two",
					"class" => "",
					"category" => __('DigitalMedia', BUNCH_NAME),
					"icon" => 'fa-briefcase' ,
					'description' => __('Contact Form Two From Contactform7', BUNCH_NAME),
					"params" => array( 
					  
					  array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Title', BUNCH_NAME ),
						   "param_name" => "title",
						   "description" => __('Enter The Section Title', BUNCH_NAME ),
						),
						array(
						   "type" => "textarea",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('SubTitle', BUNCH_NAME ),
						   "param_name" => "sub_title",
						   "description" => __('Enter The Section SubTitle', BUNCH_NAME ),
						),
						array(
						   "type" => "textarea_raw_html",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Contact Form7 Shortcode', BUNCH_NAME ),
						   "param_name" => "contact_form",
						   "description" => __('Enter Contact Form7 Shortcode', BUNCH_NAME )
						),
						
						
					)
				); 
$bunch_sc['bunch_text_block_three']	=	array(
					"name" => __("Service Text Block", BUNCH_NAME),
					"base" => "bunch_text_block_three",
					"class" => "",
					"category" => __('DigitalMedia', BUNCH_NAME),
					"icon" => 'fa-briefcase' ,
					'description' => __('Service Text Block With Image', BUNCH_NAME),
					"params" => array(
					 	array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Title', BUNCH_NAME ),
						   "param_name" => "title",
						   "description" => __('Set the Title', BUNCH_NAME ),
						),
						array(
						   "type" => "textarea",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Text', BUNCH_NAME ),
						   "param_name" => "text",
						   "description" => __('Enter Your Text', BUNCH_NAME ),
						),
						array(
						   "type" => "attach_image",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Image", BUNCH_NAME),
						   "param_name" => "image",
						   "description" => __("Enter the Image to show.", BUNCH_NAME),
						),
						
					)
				);
$bunch_sc['bunch_service_details']	=	array(
					"name" => __("Services Details", BUNCH_NAME),
					"base" => "bunch_service_details",
					"class" => "",
					"category" => __('DigitalMedia', BUNCH_NAME),
					"icon" => 'fa-briefcase' ,
					'description' => __('Services Details Block', BUNCH_NAME),
					"params" => array(
					 	array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Title', BUNCH_NAME ),
						   "param_name" => "title",
						   "description" => __('Set the Title', BUNCH_NAME ),
						),
						array(
						   "type" => "textarea",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('SubTitle', BUNCH_NAME ),
						   "param_name" => "sub_title",
						   "description" => __('Enter The Section SubTitle', BUNCH_NAME ),
						),
						array(
						   "type" => "textarea",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Text', BUNCH_NAME ),
						   "param_name" => "text",
						   "description" => __('Enter Your Text', BUNCH_NAME ),
						   "default" => __("Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis ullam nemo", BUNCH_NAME ),
						),
						
					//Tab-1	
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Title 1', BUNCH_NAME ),
						   "param_name" => "title1",
						   "description" => __('Set the Title', BUNCH_NAME ),
						   "group"       => __("Tab-1", BUNCH_NAME),
						),
						array(
						   "type" => "textarea",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Text 2', BUNCH_NAME ),
						   "param_name" => "text1",
						   "description" => __('Enter Your Text', BUNCH_NAME ),
						   "default" => __("Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis ullam nemo", BUNCH_NAME ),
						   "group"       => __("Tab-1", BUNCH_NAME),
						),
					//Tab-2	
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Title 2', BUNCH_NAME ),
						   "param_name" => "title2",
						   "description" => __('Set the Title', BUNCH_NAME ),
						   "group"       => __("Tab-2", BUNCH_NAME),
						),
						array(
						   "type" => "textarea",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Text 2', BUNCH_NAME ),
						   "param_name" => "text2",
						   "description" => __('Enter Your Text', BUNCH_NAME ),
						   "default" => __("Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis ullam nemo", BUNCH_NAME ),
						   "group"       => __("Tab-2", BUNCH_NAME),
						),		
					
						
					)
				);
$bunch_sc['bunch_listed_text']	=	array(
					"name" => __("Listed Text Block", BUNCH_NAME),
					"base" => "bunch_listed_text",
					"class" => "",
					"category" => __('DigitalMedia', BUNCH_NAME),
					"icon" => 'fa-briefcase' ,
					'description' => __('Listed Text Block', BUNCH_NAME),
					"params" => array(
					 	array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Title', BUNCH_NAME ),
						   "param_name" => "title",
						   "description" => __('Set the Title', BUNCH_NAME ),
						),
						array(
						   "type" => "textarea",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('SubTitle', BUNCH_NAME ),
						   "param_name" => "sub_title",
						   "description" => __('Enter The Section SubTitle', BUNCH_NAME ),
						),
						array(
						   "type" => "textarea",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Text', BUNCH_NAME ),
						   "param_name" => "text",
						   "description" => __('Enter Your Text', BUNCH_NAME ),
						   "default" => __("Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis ullam nemo", BUNCH_NAME ),
						),
						array(
						   "type" => "exploded_textarea",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Listed Text Left', BUNCH_NAME ),
						   "param_name" => "li_text",
						   "description" => __('Set Listed Text', BUNCH_NAME ),
						   "default" => __(' Unlimited traffic,2 GB Disk space,100 GB Monthly bandwidth,Free security service,2 Dashboard accounts', BUNCH_NAME ),
						),
						array(
						   "type" => "exploded_textarea",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Listed Text Right', BUNCH_NAME ),
						   "param_name" => "li_text1",
						   "description" => __('Set Listed Text', BUNCH_NAME ),
						   "default" => __(' Unlimited traffic,2 GB Disk space,100 GB Monthly bandwidth,Free security service,2 Dashboard accounts', BUNCH_NAME ),
						),
						
					
						
					)
				);
   
$bunch_sc['bunch_client_info']	=	array(
					"name" => __("Client Info", BUNCH_NAME),
					"base" => "bunch_client_info",
					"class" => "",
					"category" => __('DigitalMedia', BUNCH_NAME),
					"icon" => 'fa-briefcase' ,
					'description' => __('Client Info Sidebar', BUNCH_NAME),
					"params" => array(
					 	array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Title 1', BUNCH_NAME ),
						   "param_name" => "title1",
						   "description" => __('Set the Title', BUNCH_NAME ),
						),
						array(
						   "type" => "textarea",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Text 1', BUNCH_NAME ),
						   "param_name" => "text1",
						   "description" => __('Enter Your Text', BUNCH_NAME ),
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Title 2', BUNCH_NAME ),
						   "param_name" => "title2",
						   "description" => __('Set the Title', BUNCH_NAME ),
						),
						array(
						   "type" => "textarea",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Text 2', BUNCH_NAME ),
						   "param_name" => "text2",
						   "description" => __('Enter Your Text', BUNCH_NAME ),
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Title 3', BUNCH_NAME ),
						   "param_name" => "title3",
						   "description" => __('Set the Title', BUNCH_NAME ),
						),
						array(
						   "type" => "textarea",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Text 3', BUNCH_NAME ),
						   "param_name" => "text3",
						   "description" => __('Enter Your Text', BUNCH_NAME ),
						),
						
					)
				);
$bunch_sc['bunch_text_block_two']	=	array(
					"name" => __("Text Block Two", BUNCH_NAME),
					"base" => "bunch_text_block_two",
					"class" => "",
					"category" => __('DigitalMedia', BUNCH_NAME),
					"icon" => 'fa-briefcase' ,
					'description' => __('Text Block Two', BUNCH_NAME),
					"params" => array(
					 	array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Title', BUNCH_NAME ),
						   "param_name" => "title",
						   "description" => __('Set the Title', BUNCH_NAME ),
						),
						array(
						   "type" => "textarea",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Text', BUNCH_NAME ),
						   "param_name" => "text",
						   "description" => __('Enter Your Text', BUNCH_NAME ),
						),
					)
				);
$bunch_sc['bunch_contact_section']	=	array(
					"name" => __("Contact Info", BUNCH_NAME),
					"base" => "bunch_contact_section",
					"class" => "",
					"category" => __('DigitalMedia', BUNCH_NAME),
					"icon" => 'fa-briefcase' ,
					'description' => __('Contact Info', BUNCH_NAME),
					"params" => array(
						
					//Tab-1	
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Title', BUNCH_NAME ),
						   "param_name" => "title1",
						   "description" => __('Enter The Section Title to Show.', BUNCH_NAME ),
						   "group"       => __("Tab-1", BUNCH_NAME),
						),
						array(
						   "type" => "textarea",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Text', BUNCH_NAME ),
						   "param_name" => "text1",
						   "description" => __('Enter The Section Text to Show.', BUNCH_NAME ),
						   "group"       => __("Tab-1", BUNCH_NAME),
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Button', BUNCH_NAME ),
						   "param_name" => "btn1",
						   "description" => __('Enter Button Text', BUNCH_NAME ),
						   "default" => __('Read More  ', BUNCH_NAME ),
						   "group"       => __("Tab-1", BUNCH_NAME),
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Link', BUNCH_NAME ),
						   "param_name" => "link1",
						   "description" => __('Enter The Link to Show.', BUNCH_NAME ),
						   "group"       => __("Tab-1", BUNCH_NAME),
						),
					//Tab-2	
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Title', BUNCH_NAME ),
						   "param_name" => "title2",
						   "description" => __('Enter The Section Title to Show.', BUNCH_NAME ),
						   "group"       => __("Tab-2", BUNCH_NAME),
						),
						array(
						   "type" => "textarea",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Text', BUNCH_NAME ),
						   "param_name" => "text2",
						   "description" => __('Enter The Section Text to Show.', BUNCH_NAME ),
						   "group"       => __("Tab-2", BUNCH_NAME),
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Button', BUNCH_NAME ),
						   "param_name" => "btn2",
						   "description" => __('Enter Button Text', BUNCH_NAME ),
						   "default" => __('Read More  ', BUNCH_NAME ),
						   "group"       => __("Tab-2", BUNCH_NAME),
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Link', BUNCH_NAME ),
						   "param_name" => "link2",
						   "description" => __('Enter The Link to Show.', BUNCH_NAME ),
						   "group"       => __("Tab-2", BUNCH_NAME),
						),
					//Tab-3	
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Title', BUNCH_NAME ),
						   "param_name" => "title3",
						   "description" => __('Enter The Section Title to Show.', BUNCH_NAME ),
						   "group"       => __("Tab-3", BUNCH_NAME),
						),
						array(
						   "type" => "textarea",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Text', BUNCH_NAME ),
						   "param_name" => "text3",
						   "description" => __('Enter The Section Text to Show.', BUNCH_NAME ),
						   "group"       => __("Tab-3", BUNCH_NAME),
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Button', BUNCH_NAME ),
						   "param_name" => "btn3",
						   "description" => __('Enter Button Text', BUNCH_NAME ),
						   "default" => __('Read More  ', BUNCH_NAME ),
						   "group"       => __("Tab-3", BUNCH_NAME),
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Link', BUNCH_NAME ),
						   "param_name" => "link3",
						   "description" => __('Enter The Link to Show.', BUNCH_NAME ),
						   "group"       => __("Tab-3", BUNCH_NAME),
						),
					//Tab-4	
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Title', BUNCH_NAME ),
						   "param_name" => "title4",
						   "description" => __('Enter The Section Title to Show.', BUNCH_NAME ),
						   "group"       => __("Tab-4", BUNCH_NAME),
						),
						array(
						   "type" => "textarea",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Text', BUNCH_NAME ),
						   "param_name" => "text4",
						   "description" => __('Enter The Section Text to Show.', BUNCH_NAME ),
						   "group"       => __("Tab-4", BUNCH_NAME),
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Button', BUNCH_NAME ),
						   "param_name" => "btn4",
						   "description" => __('Enter Button Text', BUNCH_NAME ),
						   "default" => __('Read More  ', BUNCH_NAME ),
						   "group"       => __("Tab-4", BUNCH_NAME),
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Link', BUNCH_NAME ),
						   "param_name" => "link4",
						   "description" => __('Enter The Link to Show.', BUNCH_NAME ),
						   "group"       => __("Tab-4", BUNCH_NAME),
						),	
					)
				); 
$bunch_sc['bunch_map']	=	array(
					"name" => __("Google map", BUNCH_NAME),
					"base" => "bunch_map",
					"class" => "",
					"category" => __('DigitalMedia', BUNCH_NAME),
					"icon" => 'fa-briefcase' ,
					'description' => __('Show Google map.', BUNCH_NAME),
					"params" => array(
					   	
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Lattitude', BUNCH_NAME ),
						   "param_name" => "lat",
						   "description" => __('Enter Lattitude for map', BUNCH_NAME ),
						   "default" => '22.866944',
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Longitude', BUNCH_NAME ),
						   "param_name" => "long",
						   "description" => __('Enter Longitude for map', BUNCH_NAME ),
						   "default" => '89.610844',
						),
						
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Mark Title', BUNCH_NAME ),
						   "param_name" => "title",
						   "description" => __('Enter Mark Title for map', BUNCH_NAME ),
						 
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Mark Address', BUNCH_NAME ),
						   "param_name" => "address",
						   "description" => __('Enter Mark Address for map', BUNCH_NAME ),
						),
						array(
							   "type" => "textarea",
							   "holder" => "div",
							   "class" => "",
							   "heading" => __('Email', BUNCH_NAME ),
							   "param_name" => "email",
							   "description" => __('Enter Your Email', BUNCH_NAME ),
							),
					)
				);

 $bunch_sc['bunch_contact_form']	=	array(
					"name" => __("contact Form", BUNCH_NAME),
					"base" => "bunch_contact_form",
					"class" => "",
					"category" => __('DigitalMedia', BUNCH_NAME),
					"icon" => 'fa-briefcase' ,
					'description' => __('Show Testimonial.', BUNCH_NAME),
					"params" => array(
					   	
					//Title
						array(
							   "type" => "textfield",
							   "holder" => "div",
							   "class" => "",
							   "heading" => __('Title', BUNCH_NAME ),
							   "param_name" => "title",
							   "description" => __('Enter section Title', BUNCH_NAME ),
							   "default" => __('This is Title', BUNCH_NAME ),
							),
						array(
						   "type" => "textarea",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Text', BUNCH_NAME ),
						   "param_name" => "text",
						   "description" => __('Enter Your Text', BUNCH_NAME ),
						   "default" => __("Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis ullam nemo", BUNCH_NAME ),
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Button', BUNCH_NAME ),
						   "param_name" => "btn",
						   "description" => __('Enter Button Text', BUNCH_NAME ),
						   "default" => __('Send Now', BUNCH_NAME ),
						   "group"       => __("Button", BUNCH_NAME),
						),
						
					)
				);	
 
$bunch_sc['bunch_gallery_project']	=	array(
					"name" => __("Gallery Project", BUNCH_NAME),
					"base" => "bunch_gallery_project",
					"class" => "",
					"category" => __('DigitalMedia', BUNCH_NAME),
					"icon" => 'fa-briefcase' ,
					'description' => __('Show Gallery Project.', BUNCH_NAME),
					"params" => array(
					
						array(
						   "type" => "dropdown",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Select Column", BUNCH_NAME),
						   "param_name" => "layout",
						   'value' => array_flip(array('2'=>__('2', BUNCH_NAME),'3'=>__('3', BUNCH_NAME),'4'=>__('4', BUNCH_NAME) ) ),			
						   "description" => __("Set the number of Column to show", BUNCH_NAME),
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Number', BUNCH_NAME ),
						   "param_name" => "num",
						   "description" => __('Enter Number of Projects to Show.', BUNCH_NAME )
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Excluded Categories ID', BUNCH_NAME ),
						   "param_name" => "exclude_cats",
						   "description" => __('Enter Excluded Categories ID seperated by commas(13,14).', BUNCH_NAME )
						),
						array(
						   "type" => "dropdown",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Order By", BUNCH_NAME),
						   "param_name" => "sort",
						   'value' => array_flip( array('select'=>__('Select Options', BUNCH_NAME),'date'=>__('Date', BUNCH_NAME),'title'=>__('Title', BUNCH_NAME) ,'name'=>__('Name', BUNCH_NAME) ,'author'=>__('Author', BUNCH_NAME),'comment_count' =>__('Comment Count', BUNCH_NAME),'random' =>__('Random', BUNCH_NAME) ) ),			
						   "description" => __("Enter the sorting order.", BUNCH_NAME)
						),
						array(
						   "type" => "dropdown",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Order", BUNCH_NAME),
						   "param_name" => "order",
						   'value' => array_flip(array('select'=>__('Select Options', BUNCH_NAME),'ASC'=>__('Ascending', BUNCH_NAME),'DESC'=>__('Descending', BUNCH_NAME) ) ),			
						   "description" => __("Enter the sorting order.", BUNCH_NAME)
						),
						
					)
				); 
$bunch_sc['bunch_team']	=	array(
					"name" => __("Team", BUNCH_NAME),
					"base" => "bunch_team",
					"class" => "",
					"category" => __('DigitalMedia', BUNCH_NAME),
					"icon" => 'fa-briefcase' ,
					'description' => __('Team', BUNCH_NAME),
					"params" => array(
					   	
					//Title
					array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Title', BUNCH_NAME ),
						   "param_name" => "title",
						   "description" => __('Enter The Section Title', BUNCH_NAME ),
						   "default" => __('This is Title', BUNCH_NAME ),
						),
					//SubTitle
					array(
						   "type" => "textarea",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('SubTitle', BUNCH_NAME ),
						   "param_name" => "sub_title",
						   "description" => __('Enter The Section SubTitle', BUNCH_NAME ),
						   "default" => __('This is SubTitle', BUNCH_NAME ),
						),
					/* Custom Post Set up */	
				
					//Number of Post	
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Number of Post', BUNCH_NAME ),
						   "param_name" => "num",
						   "description" => __('Enter The Number of post to Show.', BUNCH_NAME ),
						   "group"       => __("Custom", BUNCH_NAME),
						),
					//Order By	
						array(
						   "type" => "dropdown",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Order By", BUNCH_NAME),
						   "param_name" => "sort",
						   'value' => array_flip( array('date'=>__('Date', BUNCH_NAME),'title'=>__('Title', BUNCH_NAME) ,'name'=>__('Name', BUNCH_NAME) ,'author'=>__('Author', BUNCH_NAME),'comment_count' =>__('Comment Count', BUNCH_NAME),'random' =>__('Random', BUNCH_NAME) ) ),
						   "description" => __("Enter the sorting order.", BUNCH_NAME),
						   "group"       => __("Custom", BUNCH_NAME),
						),
					//Option ASC DES	
						
						array(
						   "type" => "dropdown",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Order", BUNCH_NAME),
						   "param_name" => "order",
						   'value' => array_flip(array('ASC'=>__('Ascending', BUNCH_NAME),'DESC'=>__('Descending', BUNCH_NAME) ) ),			
						   "description" => __("Enter the sorting order.", BUNCH_NAME),
						   "group"       => __("Custom", BUNCH_NAME),
						),
					//Text Limit	
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Text Limit', BUNCH_NAME ),
						   "param_name" => "text_limit",
						   "description" => __('Set the Text Limit', BUNCH_NAME ),
						   "default" => __('20', BUNCH_NAME ),
						   "group"       => __("Custom", BUNCH_NAME),
						),	
						//
					)
				);	
   
 $bunch_sc['bunch_text_block']	=	array(
					"name" => __("Text Block", BUNCH_NAME),
					"base" => "bunch_text_block",
					"class" => "",
					"category" => __('DigitalMedia', BUNCH_NAME),
					"icon" => 'fa-briefcase' ,
					'description' => __('Text Block', BUNCH_NAME),
					"params" => array(
					 	array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Title', BUNCH_NAME ),
						   "param_name" => "title",
						   "description" => __('Set the Title', BUNCH_NAME ),
						),
						array(
						   "type" => "textarea",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('SubTitle', BUNCH_NAME ),
						   "param_name" => "sub_title",
						   "description" => __('Enter The Section SubTitle', BUNCH_NAME ),
						),
						array(
						   "type" => "textarea",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Text', BUNCH_NAME ),
						   "param_name" => "text",
						   "description" => __('Enter Your Text', BUNCH_NAME ),
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Button', BUNCH_NAME ),
						   "param_name" => "btn",
						   "description" => __('Enter Button Text', BUNCH_NAME ),
						   "group"       => __("Button", BUNCH_NAME),
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Page Link', BUNCH_NAME ),
						   "param_name" => "link",
						   "description" => __('Enter Page Link', BUNCH_NAME ),
						   "group"       => __("Button", BUNCH_NAME),
						),
						
					)
				);
   
 $bunch_sc['bunch_parallax']	=	array(
					"name" => __("Call to Action", BUNCH_NAME),
					"base" => "bunch_parallax",
					"class" => "",
					"category" => __('DigitalMedia', BUNCH_NAME),
					"icon" => 'fa-briefcase' ,
					'description' => __('Call to Action', BUNCH_NAME),
					"params" => array(
							array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Title', BUNCH_NAME ),
						   "param_name" => "title",
						   "description" => __('Enter The Section Title', BUNCH_NAME ),
						   "default" => __('This is Title', BUNCH_NAME ),
						),
						 array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Button', BUNCH_NAME ),
						   "param_name" => "btn",
						   "description" => __('Enter Button Text', BUNCH_NAME ),
						   "default" => __('Read More  ', BUNCH_NAME ),
						   "group"       => __("Button", BUNCH_NAME),
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Button Link', BUNCH_NAME ),
						   "param_name" => "link",
						   "description" => __('Enter Button Link', BUNCH_NAME ),
						   "group"       => __("Button", BUNCH_NAME),
						),
					
					)
				);  
 $bunch_sc['bunch_case_study']	=	array(
					"name" => __("Case Study", BUNCH_NAME),
					"base" => "bunch_case_study",
					"class" => "",
					"category" => __('DigitalMedia', BUNCH_NAME),
					"icon" => 'fa-briefcase' ,
					'description' => __('Case Study Custom Post', BUNCH_NAME),
					"params" => array(
					   	
					//Title
					array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Title', BUNCH_NAME ),
						   "param_name" => "title",
						   "description" => __('Enter The Section Title', BUNCH_NAME ),
						   "default" => __('This is Title', BUNCH_NAME ),
						),
					//SubTitle
					array(
						   "type" => "textarea",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('SubTitle', BUNCH_NAME ),
						   "param_name" => "sub_title",
						   "description" => __('Enter The Section SubTitle', BUNCH_NAME ),
						   "default" => __('This is SubTitle', BUNCH_NAME ),
						),
					/* Custom Post Set up */	
				
					array(
						   "type" => "dropdown",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Select Column", BUNCH_NAME),
						   "param_name" => "layout",
						   'value' => array_flip(array('2'=>__('2', BUNCH_NAME),'3'=>__('3', BUNCH_NAME),'4'=>__('4', BUNCH_NAME) ) ),			
						   "description" => __("Set the number of Column to show", BUNCH_NAME),
						   "group"       => __("Custom", BUNCH_NAME),
						),
					//Number of Post	
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Number of Post', BUNCH_NAME ),
						   "param_name" => "num",
						   "description" => __('Enter The Number of post to Show.', BUNCH_NAME ),
						   "group"       => __("Custom", BUNCH_NAME),
						),
					//Order By	
						array(
						   "type" => "dropdown",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Order By", BUNCH_NAME),
						   "param_name" => "sort",
						   'value' => array_flip( array('date'=>__('Date', BUNCH_NAME),'title'=>__('Title', BUNCH_NAME) ,'name'=>__('Name', BUNCH_NAME) ,'author'=>__('Author', BUNCH_NAME),'comment_count' =>__('Comment Count', BUNCH_NAME),'random' =>__('Random', BUNCH_NAME) ) ),
						   "description" => __("Enter the sorting order.", BUNCH_NAME),
						   "group"       => __("Custom", BUNCH_NAME),
						),
					//Option ASC DES	
						
						array(
						   "type" => "dropdown",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Order", BUNCH_NAME),
						   "param_name" => "order",
						   'value' => array_flip(array('ASC'=>__('Ascending', BUNCH_NAME),'DESC'=>__('Descending', BUNCH_NAME) ) ),			
						   "description" => __("Enter the sorting order.", BUNCH_NAME),
						   "group"       => __("Custom", BUNCH_NAME),
						),
					//Text Limit	
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Text Limit', BUNCH_NAME ),
						   "param_name" => "text_limit",
						   "description" => __('Set the Text Limit', BUNCH_NAME ),
						   "default" => __('20', BUNCH_NAME ),
						   "group"       => __("Custom", BUNCH_NAME),
						),	
						//
					)
				);	

$bunch_sc['bunch_welcome_service_two']	=	array(
					"name" => __("Welcome Services Two", BUNCH_NAME),
					"base" => "bunch_welcome_service_two",
					"class" => "",
					"category" => __('DigitalMedia', BUNCH_NAME),
					"icon" => 'fa-briefcase' ,
					'description' => __('Welcome Services Two', BUNCH_NAME),
					"params" => array(
					array(
						"type" => "dropdown",
						"holder" => "div",
						"class" => "",
						"heading" => __( 'Category', BUNCH_NAME ),
						"param_name" => "cat",
						"value" => array_flip( (array)bunch_get_categories( array( 'taxonomy' => 'services_category', 'hide_empty' => FALSE ), true ) ),
						"description" => __( 'Choose Category.', BUNCH_NAME ),
						"group"       => __("Custom", BUNCH_NAME),
						),	
					//Number of Post	
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Number of Post', BUNCH_NAME ),
						   "param_name" => "num",
						   "description" => __('Enter The Number of post to Show.', BUNCH_NAME ),
						   "group"       => __("Custom", BUNCH_NAME),
						),
						//Number of Column
						array(
						   "type" => "dropdown",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Select Column", BUNCH_NAME),
						   "param_name" => "layout",
						   'value' => array_flip(array('2'=>__('2', BUNCH_NAME),'3'=>__('3', BUNCH_NAME),'4'=>__('4', BUNCH_NAME) ) ),			
						   "description" => __("Set the number of Column to show", BUNCH_NAME),
						   "group"       => __("Custom", BUNCH_NAME),
						),
					//Order By	
						array(
						   "type" => "dropdown",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Order By", BUNCH_NAME),
						   "param_name" => "sort",
						   'value' => array_flip( array('date'=>__('Date', BUNCH_NAME),'title'=>__('Title', BUNCH_NAME) ,'name'=>__('Name', BUNCH_NAME) ,'author'=>__('Author', BUNCH_NAME),'comment_count' =>__('Comment Count', BUNCH_NAME),'random' =>__('Random', BUNCH_NAME) ) ),
						   "description" => __("Enter the sorting order.", BUNCH_NAME),
						   "group"       => __("Custom", BUNCH_NAME),
						),
					//Option ASC DES	
						array(
						   "type" => "dropdown",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Order", BUNCH_NAME),
						   "param_name" => "order",
						   'value' => array_flip(array('ASC'=>__('Ascending', BUNCH_NAME),'DESC'=>__('Descending', BUNCH_NAME) ) ),			
						   "description" => __("Enter the sorting order.", BUNCH_NAME),
						   "group"       => __("Custom", BUNCH_NAME),
						),
					//Text Limit	
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Text Limit', BUNCH_NAME ),
						   "param_name" => "text_limit",
						   "description" => __('Set the Text Limit', BUNCH_NAME ),
						   "default" => __('20', BUNCH_NAME ),
						   "group"       => __("Custom", BUNCH_NAME),
						),	
						//
					)
				);   

$bunch_sc['bunch_testimonial_two']	=	array(
					"name" => __("Testimonial Two", BUNCH_NAME),
					"base" => "bunch_testimonial_two",
					"class" => "",
					"category" => __('DigitalMedia', BUNCH_NAME),
					"icon" => 'fa-briefcase' ,
					'description' => __('Show Testimonial Two', BUNCH_NAME),
					"params" => array(
					//Title
						array(
							   "type" => "textfield",
							   "holder" => "div",
							   "class" => "",
							   "heading" => __('Title', BUNCH_NAME ),
							   "param_name" => "title",
							   "description" => __('Enter section Title', BUNCH_NAME ),
							),
						array(
						   "type" => "attach_image",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Image", BUNCH_NAME),
						   "param_name" => "image",
						   "description" => __("Enter the Image to show.", BUNCH_NAME),
						),	
						//Custom Area
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Text Limit', BUNCH_NAME ),
						   "param_name" => "text_limit",
						   "description" => __('Enter Number of Text Limit to Show.', BUNCH_NAME ),
						    "group"       => __("Custom", BUNCH_NAME),
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Number of Post', BUNCH_NAME ),
						   "param_name" => "num",
						   "description" => __('Enter Number of Slides to Show.', BUNCH_NAME ),
						   "group"       => __("Custom", BUNCH_NAME),
						),
						array(
						   "type" => "dropdown",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __( 'Category', BUNCH_NAME ),
						   "param_name" => "cat",
						   "value" => array_flip( (array)bunch_get_categories( array( 'taxonomy' => 'testimonials_category', 'hide_empty' => FALSE ), true ) ),
						   "description" => __( 'Choose Category.', BUNCH_NAME ),
						    "group"       => __("Custom", BUNCH_NAME),
						),
						array(
						   "type" => "dropdown",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Order By", BUNCH_NAME),
						   "param_name" => "sort",
						   'value' => array_flip( array('date'=>__('Date', BUNCH_NAME),'title'=>__('Title', BUNCH_NAME) ,'name'=>__('Name', BUNCH_NAME) ,'author'=>__('Author', BUNCH_NAME),'comment_count' =>__('Comment Count', BUNCH_NAME),'random' =>__('Random', BUNCH_NAME) ) ),			
						   "description" => __("Enter the sorting order.", BUNCH_NAME),
						    "group"       => __("Custom", BUNCH_NAME),
						),
						array(
						   "type" => "dropdown",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Order", BUNCH_NAME),
						   "param_name" => "order",
						   'value' => array_flip(array('ASC'=>__('Ascending', BUNCH_NAME),'DESC'=>__('Descending', BUNCH_NAME) ) ),			
						   "description" => __("Enter the sorting order.", BUNCH_NAME),
						   "group"       => __("Custom", BUNCH_NAME),
						),
					)
				);	
$bunch_sc['bunch_work_process']	=	array(
					"name" => __("Work Process", BUNCH_NAME),
					"base" => "bunch_work_process",
					"class" => "",
					"category" => __('DigitalMedia', BUNCH_NAME),
					"icon" => 'fa-briefcase' ,
					'description' => __('What We Do with Image', BUNCH_NAME),
					"params" => array(
					 	array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Title', BUNCH_NAME ),
						   "param_name" => "title",
						   "description" => __('Enter The Section Title', BUNCH_NAME ),
						),
						array(
						   "type" => "textarea",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('SubTitle', BUNCH_NAME ),
						   "param_name" => "sub_title",
						   "description" => __('Enter The Section SubTitle', BUNCH_NAME ),
						),
					//Tab-1
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Title', BUNCH_NAME ),
						   "param_name" => "title1",
						   "description" => __('Enter The Section Title', BUNCH_NAME ),
						   	"group"       => __("Tab-1", BUNCH_NAME),
						),
						array(
						   "type" => "textarea",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Text', BUNCH_NAME ),
						   "param_name" => "text1",
						   "description" => __('Enter Your Text', BUNCH_NAME ),
						   "default" => __("Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis ullam nemo", BUNCH_NAME ),
						   "group"       => __("Tab-1", BUNCH_NAME),
						),
						array(
						   "type" => "attach_image",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Image", BUNCH_NAME),
						   "param_name" => "image1",
						   "description" => __("Enter the Image to show.", BUNCH_NAME),
						   "group"       => __("Tab-1", BUNCH_NAME),
						),
					//Tab-2
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Title', BUNCH_NAME ),
						   "param_name" => "title2",
						   "description" => __('Enter The Section Title', BUNCH_NAME ),
						   	"group"       => __("Tab-2", BUNCH_NAME),
						),
						array(
						   "type" => "textarea",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Text', BUNCH_NAME ),
						   "param_name" => "text2",
						   "description" => __('Enter Your Text', BUNCH_NAME ),
						   "default" => __("Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis ullam nemo", BUNCH_NAME ),
						   "group"       => __("Tab-2", BUNCH_NAME),
						),
						array(
						   "type" => "attach_image",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Image", BUNCH_NAME),
						   "param_name" => "image2",
						   "description" => __("Enter the Image to show.", BUNCH_NAME),
						   "group"       => __("Tab-2", BUNCH_NAME),
						),
					//Tab-3
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Title', BUNCH_NAME ),
						   "param_name" => "title3",
						   "description" => __('Enter The Section Title', BUNCH_NAME ),
						   	"group"       => __("Tab-3", BUNCH_NAME),
						),
						array(
						   "type" => "textarea",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Text', BUNCH_NAME ),
						   "param_name" => "text3",
						   "description" => __('Enter Your Text', BUNCH_NAME ),
						   "default" => __("Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis ullam nemo", BUNCH_NAME ),
						   "group"       => __("Tab-3", BUNCH_NAME),
						),
						array(
						   "type" => "attach_image",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Image", BUNCH_NAME),
						   "param_name" => "image3",
						   "description" => __("Enter the Image to show.", BUNCH_NAME),
						   "group"       => __("Tab-3", BUNCH_NAME),
						),	
					)
				);   
$bunch_sc['bunch_strategy']	=	array(
					"name" => __("Strategy", BUNCH_NAME),
					"base" => "bunch_strategy",
					"class" => "",
					"category" => __('DigitalMedia', BUNCH_NAME),
					"icon" => 'fa-briefcase' ,
					'description' => __('Strategy Block', BUNCH_NAME),
					"params" => array(
					 	array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Title', BUNCH_NAME ),
						   "param_name" => "title",
						   "description" => __('Set the Title', BUNCH_NAME ),
						),
						array(
						   "type" => "textarea",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Text', BUNCH_NAME ),
						   "param_name" => "text",
						   "description" => __('Enter Your Text', BUNCH_NAME ),
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Title Two', BUNCH_NAME ),
						   "param_name" => "titlex",
						   "description" => __('Set the Title', BUNCH_NAME ),
						),
						
					//Tab1	
						array(
							"type" => "dropdown",
							 "holder" => "div",
							 "class" => "",
							 "heading" => __("Icon", BUNCH_NAME),
							 "param_name" => "icon1",
							 "value" => (array)vp_get_fontawesome_icons(),
							 "description" => __("Choose Icon", BUNCH_NAME),
							 "group"       => __("Tab-1", BUNCH_NAME),
							 ),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Title', BUNCH_NAME ),
						   "param_name" => "title1",
						   "description" => __('Enter The Title', BUNCH_NAME ),
						   "group"       => __("Tab-1", BUNCH_NAME),
						),
						array(
						   "type" => "textarea",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Number', BUNCH_NAME ),
						   "param_name" => "number1",
						   "description" => __('Enter The Number', BUNCH_NAME ),
						   "group"       => __("Tab-1", BUNCH_NAME),
						),
					//Tab2	
						array(
							"type" => "dropdown",
							 "holder" => "div",
							 "class" => "",
							 "heading" => __("Icon", BUNCH_NAME),
							 "param_name" => "icon2",
							 "value" => (array)vp_get_fontawesome_icons(),
							 "description" => __("Choose Icon", BUNCH_NAME),
							 "group"       => __("Tab-2", BUNCH_NAME),
							 ),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Title', BUNCH_NAME ),
						   "param_name" => "title2",
						   "description" => __('Enter The Title', BUNCH_NAME ),
						   "group"       => __("Tab-2", BUNCH_NAME),
						),
						array(
						   "type" => "textarea",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Number', BUNCH_NAME ),
						   "param_name" => "number2",
						   "description" => __('Enter The Number', BUNCH_NAME ),
						   "group"       => __("Tab-2", BUNCH_NAME),
						),	
						
					)
				);   
$bunch_sc['bunch_why_choose_us_two']	=	array(
					"name" => __("Why Choose Us Two", BUNCH_NAME),
					"base" => "bunch_why_choose_us_two",
					"class" => "",
					"category" => __('DigitalMedia', BUNCH_NAME),
					"icon" => 'fa-briefcase' ,
					'description' => __('Why Choose Us Two', BUNCH_NAME),
					"params" => array(
						//Title
						array(
							   "type" => "textfield",
							   "holder" => "div",
							   "class" => "",
							   "heading" => __('Title', BUNCH_NAME ),
							   "param_name" => "title",
							   "description" => __('Enter The Section Title', BUNCH_NAME ),
							),
						//SubTitle
						array(
							   "type" => "textarea",
							   "holder" => "div",
							   "class" => "",
							   "heading" => __('SubTitle', BUNCH_NAME ),
							   "param_name" => "sub_title",
							   "description" => __('Enter The Section SubTitle', BUNCH_NAME ),
							),
						array(
						   "type" => "attach_image",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Left Image", BUNCH_NAME),
						   "param_name" => "image",
						   "description" => __("Enter the Image to show.", BUNCH_NAME),
						),		
						
						//Tab-1
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Title', BUNCH_NAME ),
						   "param_name" => "title1",
						   "description" => __('Enter The Section Title', BUNCH_NAME ),
						   "group"       => __("Tab-1", BUNCH_NAME),
						),
						array(
						   "type" => "textarea",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Text', BUNCH_NAME ),
						   "param_name" => "text1",
						   "description" => __('Enter Your Text', BUNCH_NAME ),
						   "default" => __("Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis ullam nemo", BUNCH_NAME ),
						   "group"       => __("Tab-1", BUNCH_NAME),
						),
						array(
						   "type" => "attach_image",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Image", BUNCH_NAME),
						   "param_name" => "image1",
						   "description" => __("Enter the Image to show.", BUNCH_NAME),
						   "group"       => __("Tab-1", BUNCH_NAME),
						),
					//Tab-1
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Title', BUNCH_NAME ),
						   "param_name" => "title2",
						   "description" => __('Enter The Section Title', BUNCH_NAME ),
						   "group"       => __("Tab-2", BUNCH_NAME),
						),
						array(
						   "type" => "textarea",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Text', BUNCH_NAME ),
						   "param_name" => "text2",
						   "description" => __('Enter Your Text', BUNCH_NAME ),
						   "default" => __("Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis ullam nemo", BUNCH_NAME ),
						   "group"       => __("Tab-2", BUNCH_NAME),
						),
						array(
						   "type" => "attach_image",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Image", BUNCH_NAME),
						   "param_name" => "image2",
						   "description" => __("Enter the Image to show.", BUNCH_NAME),
						   "group"       => __("Tab-2", BUNCH_NAME),
						),
					//Tab-1
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Title', BUNCH_NAME ),
						   "param_name" => "title3",
						   "description" => __('Enter The Section Title', BUNCH_NAME ),
						   "group"       => __("Tab-3", BUNCH_NAME),
						),
						array(
						   "type" => "textarea",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Text', BUNCH_NAME ),
						   "param_name" => "text3",
						   "description" => __('Enter Your Text', BUNCH_NAME ),
						   "default" => __("Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis ullam nemo", BUNCH_NAME ),
						   "group"       => __("Tab-3", BUNCH_NAME),
						),
						array(
						   "type" => "attach_image",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Image", BUNCH_NAME),
						   "param_name" => "image3",
						   "description" => __("Enter the Image to show.", BUNCH_NAME),
						   "group"       => __("Tab-3", BUNCH_NAME),
						),	
					
					)
				);
$bunch_sc['bunch_fun_fact']	=	array(
					"name" => __("Fun Facts", BUNCH_NAME),
					"base" => "bunch_fun_fact",
					"class" => "",
					"category" => __('DigitalMedia', BUNCH_NAME),
					"icon" => 'fa-briefcase' ,
					'description' => __('You May choose the Different Number of Block', BUNCH_NAME),
					"params" => array(
					   
						array(
						   "type" => "dropdown",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Select Column", BUNCH_NAME),
						   "param_name" => "layout",
						   'value' => array_flip(array('2'=>__('2', BUNCH_NAME),'3'=>__('3', BUNCH_NAME),'4'=>__('4', BUNCH_NAME) ) ),			
						   "description" => __("Set the number of Column to show", BUNCH_NAME),
						),
						
						//Tab-1
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Title', BUNCH_NAME ),
						   "param_name" => "title1",
						   "description" => __('Enter The Section Title', BUNCH_NAME ),
						   "group"       => __("Tab-1", BUNCH_NAME),
						),
						array(
						   "type" => "textarea",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Number', BUNCH_NAME ),
						   "param_name" => "number1",
						   "description" => __('Enter The Number', BUNCH_NAME ),
						   "group"       => __("Tab-1", BUNCH_NAME),
						), 
					//Tab-2
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Title', BUNCH_NAME ),
						   "param_name" => "title2",
						   "description" => __('Enter The Section Title', BUNCH_NAME ),
						   "group"       => __("Tab-2", BUNCH_NAME),
						),
						array(
						   "type" => "textarea",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Number', BUNCH_NAME ),
						   "param_name" => "number2",
						   "description" => __('Enter The Number', BUNCH_NAME ),
						   "group"       => __("Tab-2", BUNCH_NAME),
						), 
					//Tab-3
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Title', BUNCH_NAME ),
						   "param_name" => "title3",
						   "description" => __('Enter The Section Title', BUNCH_NAME ),
						   "group"       => __("Tab-3", BUNCH_NAME),
						),
						array(
						   "type" => "textarea",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Number', BUNCH_NAME ),
						   "param_name" => "number3",
						   "description" => __('Enter The Number', BUNCH_NAME ),
						   "group"       => __("Tab-3", BUNCH_NAME),
						), 
					//Tab-4
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Title', BUNCH_NAME ),
						   "param_name" => "title4",
						   "description" => __('Enter The Section Title', BUNCH_NAME ),
						   "group"       => __("Tab-4", BUNCH_NAME),
						),
						array(
						   "type" => "textarea",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Number', BUNCH_NAME ),
						   "param_name" => "number4",
						   "description" => __('Enter The Number', BUNCH_NAME ),
						   "group"       => __("Tab-4", BUNCH_NAME),
						), 	

						
					)
				);
$bunch_sc['bunch_services']	=	array(
					"name" => __("Welcome Services", BUNCH_NAME),
					"base" => "bunch_services",
					"class" => "",
					"category" => __('DigitalMedia', BUNCH_NAME),
					"icon" => 'fa-briefcase' ,
					'description' => __('Welcome Service With Round Images', BUNCH_NAME),
					"params" => array(
					array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Title', BUNCH_NAME ),
						   "param_name" => "title",
						   "description" => __('Enter The Section Title', BUNCH_NAME ),
						),
					//SubTitle
					array(
						   "type" => "textarea",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('SubTitle', BUNCH_NAME ),
						   "param_name" => "sub_title",
						   "description" => __('Enter The Section SubTitle', BUNCH_NAME ),
						),
					array(
						"type" => "dropdown",
						"holder" => "div",
						"class" => "",
						"heading" => __( 'Category', BUNCH_NAME ),
						"param_name" => "cat",
						"value" => array_flip( (array)bunch_get_categories( array( 'taxonomy' => 'services_category', 'hide_empty' => FALSE ), true ) ),
						"description" => __( 'Choose Category.', BUNCH_NAME ),
						"group"       => __("Custom", BUNCH_NAME),
						),	
					//Number of Post	
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Number of Post', BUNCH_NAME ),
						   "param_name" => "num",
						   "description" => __('Enter The Number of post to Show.', BUNCH_NAME ),
						   "group"       => __("Custom", BUNCH_NAME),
						),
						//Number of Column
						array(
						   "type" => "dropdown",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Select Column", BUNCH_NAME),
						   "param_name" => "layout",
						   'value' => array_flip(array('2'=>__('2', BUNCH_NAME),'3'=>__('3', BUNCH_NAME),'4'=>__('4', BUNCH_NAME) ) ),			
						   "description" => __("Set the number of Column to show", BUNCH_NAME),
						   "group"       => __("Custom", BUNCH_NAME),
						),
					//Order By	
						array(
						   "type" => "dropdown",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Order By", BUNCH_NAME),
						   "param_name" => "sort",
						   'value' => array_flip( array('date'=>__('Date', BUNCH_NAME),'title'=>__('Title', BUNCH_NAME) ,'name'=>__('Name', BUNCH_NAME) ,'author'=>__('Author', BUNCH_NAME),'comment_count' =>__('Comment Count', BUNCH_NAME),'random' =>__('Random', BUNCH_NAME) ) ),
						   "description" => __("Enter the sorting order.", BUNCH_NAME),
						   "group"       => __("Custom", BUNCH_NAME),
						),
					//Option ASC DES	
						array(
						   "type" => "dropdown",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Order", BUNCH_NAME),
						   "param_name" => "order",
						   'value' => array_flip(array('ASC'=>__('Ascending', BUNCH_NAME),'DESC'=>__('Descending', BUNCH_NAME) ) ),			
						   "description" => __("Enter the sorting order.", BUNCH_NAME),
						   "group"       => __("Custom", BUNCH_NAME),
						),
					//Text Limit	
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Text Limit', BUNCH_NAME ),
						   "param_name" => "text_limit",
						   "description" => __('Set the Text Limit', BUNCH_NAME ),
						   "default" => __('20', BUNCH_NAME ),
						   "group"       => __("Custom", BUNCH_NAME),
						),	
						//
					)
				);   

$bunch_sc['bunch_clients']	=	array(
					"name" => __("Clients", BUNCH_NAME),
					"base" => "bunch_clients",
					"class" => "",
					"category" => __('DigitalMedia', BUNCH_NAME),
					"icon" => 'fa-briefcase' ,
					'description' => __('Clients', BUNCH_NAME),
					"params" => array(
					   	
						//Image
						array(
						   "type" => "attach_image",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Image", BUNCH_NAME),
						   "param_name" => "image1",
						   "description" => __("Enter the Image to show.", BUNCH_NAME),
						),
						
						//Image
						array(
						   "type" => "attach_image",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Image", BUNCH_NAME),
						   "param_name" => "image2",
						   "description" => __("Enter the Image to show.", BUNCH_NAME),
						),
						
						//Image
						array(
						   "type" => "attach_image",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Image", BUNCH_NAME),
						   "param_name" => "image3",
						   "description" => __("Enter the Image to show.", BUNCH_NAME),
						),
						
						//Image
						array(
						   "type" => "attach_image",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Image", BUNCH_NAME),
						   "param_name" => "image4",
						   "description" => __("Enter the Image to show.", BUNCH_NAME),
						),
						
						//Image
						array(
						   "type" => "attach_image",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Image", BUNCH_NAME),
						   "param_name" => "image5",
						   "description" => __("Enter the Image to show.", BUNCH_NAME),
						),
						
						//Image
						array(
						   "type" => "attach_image",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Image", BUNCH_NAME),
						   "param_name" => "image6",
						   "description" => __("Enter the Image to show.", BUNCH_NAME),
						),
						
						//Image
						array(
						   "type" => "attach_image",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Image", BUNCH_NAME),
						   "param_name" => "image7",
						   "description" => __("Enter the Image to show.", BUNCH_NAME),
						),
						
						//Image
						array(
						   "type" => "attach_image",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Image", BUNCH_NAME),
						   "param_name" => "image8",
						   "description" => __("Enter the Image to show.", BUNCH_NAME),
						),
						
						//Image
						array(
						   "type" => "attach_image",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Image", BUNCH_NAME),
						   "param_name" => "image9",
						   "description" => __("Enter the Image to show.", BUNCH_NAME),
						),
						
					)
				);	


$bunch_sc['bunch_blog']	=	array(
					"name" => __("Blog", BUNCH_NAME),
					"base" => "bunch_blog",
					"class" => "",
					"category" => __('DigitalMedia', BUNCH_NAME),
					"icon" => 'fa-briefcase' ,
					'description' => __('Blog', BUNCH_NAME),
					"params" => array(
					   	
						//Title
					array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Title', BUNCH_NAME ),
						   "param_name" => "title",
						   "description" => __('Enter The Section Title', BUNCH_NAME ),
						   "default" => __('This is Title', BUNCH_NAME ),
						),
					//SubTitle
					array(
						   "type" => "textarea",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('SubTitle', BUNCH_NAME ),
						   "param_name" => "sub_title",
						   "description" => __('Enter The Section SubTitle', BUNCH_NAME ),
						   "default" => __('This is SubTitle', BUNCH_NAME ),
						),
					/* Custom Post Set up */	
				
					array(
						"type" => "dropdown",
						"holder" => "div",
						"class" => "",
						"heading" => __( 'Category', BUNCH_NAME ),
						"param_name" => "cat",
						"value" => array_flip( (array)bunch_get_categories( array( 'taxonomy' => 'category', 'hide_empty' => FALSE ), true ) ),
						"description" => __( 'Choose Category.', BUNCH_NAME )
							),
					//Number of Post	
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Number of Post', BUNCH_NAME ),
						   "param_name" => "num",
						   "description" => __('Enter The Number of post to Show.', BUNCH_NAME ),
						   "group"       => __("Custom", BUNCH_NAME),
						),
						//Number of Column
						array(
						   "type" => "dropdown",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Select Column", BUNCH_NAME),
						   "param_name" => "layout",
						   'value' => array_flip(array('2'=>__('2', BUNCH_NAME),'3'=>__('3', BUNCH_NAME),'4'=>__('4', BUNCH_NAME) ) ),			
						   "description" => __("Set the number of Column to show", BUNCH_NAME),
						   "group"       => __("Custom", BUNCH_NAME),
						),
					//Order By	
						array(
						   "type" => "dropdown",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Order By", BUNCH_NAME),
						   "param_name" => "sort",
						   'value' => array_flip( array('date'=>__('Date', BUNCH_NAME),'title'=>__('Title', BUNCH_NAME) ,'name'=>__('Name', BUNCH_NAME) ,'author'=>__('Author', BUNCH_NAME),'comment_count' =>__('Comment Count', BUNCH_NAME),'random' =>__('Random', BUNCH_NAME) ) ),
						   "description" => __("Enter the sorting order.", BUNCH_NAME),
						   "group"       => __("Custom", BUNCH_NAME),
						),
					//Option ASC DES	
						
						array(
						   "type" => "dropdown",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Order", BUNCH_NAME),
						   "param_name" => "order",
						   'value' => array_flip(array('ASC'=>__('Ascending', BUNCH_NAME),'DESC'=>__('Descending', BUNCH_NAME) ) ),			
						   "description" => __("Enter the sorting order.", BUNCH_NAME),
						   "group"       => __("Custom", BUNCH_NAME),
						),
					//Text Limit	
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Text Limit', BUNCH_NAME ),
						   "param_name" => "text_limit",
						   "description" => __('Set the Text Limit', BUNCH_NAME ),
						   "default" => __('20', BUNCH_NAME ),
						   "group"       => __("Custom", BUNCH_NAME),
						),	
						//
					)
				);	

 $bunch_sc['bunch_testimonial']	=	array(
					"name" => __("Testimonial", BUNCH_NAME),
					"base" => "bunch_testimonial",
					"class" => "",
					"category" => __('DigitalMedia', BUNCH_NAME),
					"icon" => 'fa-briefcase' ,
					'description' => __('Show Testimonial.', BUNCH_NAME),
					"params" => array(
					   	
					//Title
						array(
							   "type" => "textfield",
							   "holder" => "div",
							   "class" => "",
							   "heading" => __('Title', BUNCH_NAME ),
							   "param_name" => "titlex",
							   "description" => __('Enter section Title', BUNCH_NAME ),
							   "default" => __('This is Title', BUNCH_NAME ),
							),
						array(
							   "type" => "textfield",
							   "holder" => "div",
							   "class" => "",
							   "heading" => __('Colourful Title', BUNCH_NAME ),
							   "param_name" => "titley",
							   "description" => __('Enter section Title', BUNCH_NAME ),
							   "default" => __('This is Title', BUNCH_NAME ),
							),	
							
						array(
							   "type" => "textfield",
							   "holder" => "div",
							   "class" => "",
							   "heading" => __('Sub Title', BUNCH_NAME ),
							   "param_name" => "sub_title",
							   "description" => __('Enter section Sub Title', BUNCH_NAME ),
							   "default" => __('This is Sub Title', BUNCH_NAME ),
							),
						array(
						   "type" => "attach_image",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Image", BUNCH_NAME),
						   "param_name" => "image",
						   "description" => __("Enter the Image to show.", BUNCH_NAME),
						),
					
						//Custom Area
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Text Limit', BUNCH_NAME ),
						   "param_name" => "text_limit",
						   "description" => __('Enter Number of Text Limit to Show.', BUNCH_NAME ),
						    "group"       => __("Custom", BUNCH_NAME),
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Number of Post', BUNCH_NAME ),
						   "param_name" => "num",
						   "description" => __('Enter Number of Slides to Show.', BUNCH_NAME ),
						   "group"       => __("Custom", BUNCH_NAME),
						),
						array(
						   "type" => "dropdown",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __( 'Category', BUNCH_NAME ),
						   "param_name" => "cat",
						   "value" => array_flip( (array)bunch_get_categories( array( 'taxonomy' => 'testimonials_category', 'hide_empty' => FALSE ), true ) ),
						   "description" => __( 'Choose Category.', BUNCH_NAME ),
						    "group"       => __("Custom", BUNCH_NAME),
						),
						array(
						   "type" => "dropdown",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Order By", BUNCH_NAME),
						   "param_name" => "sort",
						   'value' => array_flip( array('date'=>__('Date', BUNCH_NAME),'title'=>__('Title', BUNCH_NAME) ,'name'=>__('Name', BUNCH_NAME) ,'author'=>__('Author', BUNCH_NAME),'comment_count' =>__('Comment Count', BUNCH_NAME),'random' =>__('Random', BUNCH_NAME) ) ),			
						   "description" => __("Enter the sorting order.", BUNCH_NAME),
						    "group"       => __("Custom", BUNCH_NAME),
						),
						array(
						   "type" => "dropdown",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Order", BUNCH_NAME),
						   "param_name" => "order",
						   'value' => array_flip(array('ASC'=>__('Ascending', BUNCH_NAME),'DESC'=>__('Descending', BUNCH_NAME) ) ),			
						   "description" => __("Enter the sorting order.", BUNCH_NAME),
						   "group"       => __("Custom", BUNCH_NAME),
						),
					)
				);	
  
$bunch_sc['bunch_pricing']	=	array(
					"name" => __("Pricing", BUNCH_NAME),
					"base" => "bunch_pricing",
					"class" => "",
					"category" => __('DigitalMedia', BUNCH_NAME),
					"icon" => 'fa-briefcase' ,
					'description' => __('Pricing', BUNCH_NAME),
					"params" => array(
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Title', BUNCH_NAME ),
						   "param_name" => "title",
						   "description" => __('Enter The Section Title', BUNCH_NAME ),
						),
							array(
						   "type" => "textarea",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('SubTitle', BUNCH_NAME ),
						   "param_name" => "sub_title",
						   "description" => __('Enter The Section SubTitle', BUNCH_NAME ),
						),
						array(
						   "type" => "dropdown",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Select Column", BUNCH_NAME),
						   "param_name" => "layout",
						   'value' => array_flip(array('2'=>__('2', BUNCH_NAME),'3'=>__('3', BUNCH_NAME),'4'=>__('4', BUNCH_NAME) ) ),			
						   "description" => __("Select the number of  Column to show", BUNCH_NAME),
						),
						
					//Tab1	
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Title', BUNCH_NAME ),
						   "param_name" => "title1",
						   "description" => __('Set the Title', BUNCH_NAME ),
						   "default" => __('NORMAL PLAN', BUNCH_NAME ),
						   "group"       => __("Tab1", BUNCH_NAME),
						),
						
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Currency', BUNCH_NAME ),
						   "param_name" => "currency1",
						   "description" => __('Set the Currency', BUNCH_NAME ),
						   "default" => __('$', BUNCH_NAME ),
						   "group"       => __("Tab1", BUNCH_NAME),
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Amount', BUNCH_NAME ),
						   "param_name" => "amount1",
						   "description" => __('Set the Amount of Money', BUNCH_NAME ),
						   "default" => __('99.99', BUNCH_NAME ),
						   "group"       => __("Tab1", BUNCH_NAME),
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Duration', BUNCH_NAME ),
						   "param_name" => "duration1",
						   "description" => __('Set Duration of the Package', BUNCH_NAME ),
						   "default" => __('/Per Month', BUNCH_NAME ),
						    "group"       => __("Tab1", BUNCH_NAME),
						),
						array(
						   "type" => "exploded_textarea",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Packages', BUNCH_NAME ),
						   "param_name" => "prt_pricing_desc1",
						   "description" => __('Set Packages list', BUNCH_NAME ),
						   "default" => __(' Unlimited traffic,2 GB Disk space,100 GB Monthly bandwidth,Free security service,2 Dashboard accounts', BUNCH_NAME ),
						   "group"       => __("Tab1", BUNCH_NAME),
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Button', BUNCH_NAME ),
						   "param_name" => "bttn1",
						   "description" => __('Set Button Text', BUNCH_NAME ),
						   "default" => __('Order Now', BUNCH_NAME ),
						    "group"       => __("Tab1", BUNCH_NAME),
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Link', BUNCH_NAME ),
						   "param_name" => "link1",
						   "description" => __('Link the Page', BUNCH_NAME ),
						    "group"       => __("Tab1", BUNCH_NAME),
						),
					//Tab2	
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Title', BUNCH_NAME ),
						   "param_name" => "title2",
						   "description" => __('Set the Title', BUNCH_NAME ),
						   "default" => __('BASIC PLAN', BUNCH_NAME ),
						   "group"       => __("Tab2", BUNCH_NAME),
						),
						
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Currency', BUNCH_NAME ),
						   "param_name" => "currency2",
						   "description" => __('Set the Currency', BUNCH_NAME ),
						   "default" => __('$', BUNCH_NAME ),
						   "group"       => __("Tab2", BUNCH_NAME),
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Amount', BUNCH_NAME ),
						   "param_name" => "amount2",
						   "description" => __('Set the Amount of Money', BUNCH_NAME ),
						   "default" => __('99.99', BUNCH_NAME ),
						   "group"       => __("Tab2", BUNCH_NAME),
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Duration', BUNCH_NAME ),
						   "param_name" => "duration2",
						   "description" => __('Set Duration of the Package', BUNCH_NAME ),
						   "default" => __('/Per Month', BUNCH_NAME ),
						    "group"       => __("Tab2", BUNCH_NAME),
						),
						array(
						   "type" => "exploded_textarea",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Packages', BUNCH_NAME ),
						   "param_name" => "prt_pricing_desc2",
						   "description" => __('Set Packages list', BUNCH_NAME ),
						   "default" => __(' Unlimited traffic,2 GB Disk space,100 GB Monthly bandwidth,Free security service,2 Dashboard accounts', BUNCH_NAME ),
						   "group"       => __("Tab2", BUNCH_NAME),
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Button', BUNCH_NAME ),
						   "param_name" => "bttn2",
						   "description" => __('Set Button Text', BUNCH_NAME ),
						   "default" => __('Order Now', BUNCH_NAME ),
						    "group"       => __("Tab2", BUNCH_NAME),
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Link', BUNCH_NAME ),
						   "param_name" => "link2",
						   "description" => __('Link the Page', BUNCH_NAME ),
						    "group"       => __("Tab2", BUNCH_NAME),
						),
					//Tab3	
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Title', BUNCH_NAME ),
						   "param_name" => "title3",
						   "description" => __('Set the Title', BUNCH_NAME ),
						   "default" => __('PREMIUM PLAN', BUNCH_NAME ),
						   "group"       => __("Tab3", BUNCH_NAME),
						),
					
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Currency', BUNCH_NAME ),
						   "param_name" => "currency3",
						   "description" => __('Set the Currency', BUNCH_NAME ),
						   "default" => __('$', BUNCH_NAME ),
						   "group"       => __("Tab3", BUNCH_NAME),
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Amount', BUNCH_NAME ),
						   "param_name" => "amount3",
						   "description" => __('Set the Amount of Money', BUNCH_NAME ),
						   "default" => __('99.99', BUNCH_NAME ),
						   "group"       => __("Tab3", BUNCH_NAME),
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Duration', BUNCH_NAME ),
						   "param_name" => "duration3",
						   "description" => __('Set Duration of the Package', BUNCH_NAME ),
						   "default" => __('/Per Month', BUNCH_NAME ),
						    "group"       => __("Tab3", BUNCH_NAME),
						),
						array(
						   "type" => "exploded_textarea",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Packages', BUNCH_NAME ),
						   "param_name" => "prt_pricing_desc3",
						   "description" => __('Set Packages list', BUNCH_NAME ),
						   "default" => __(' Unlimited traffic,2 GB Disk space,100 GB Monthly bandwidth,Free security service,2 Dashboard accounts', BUNCH_NAME ),
						   "group"       => __("Tab3", BUNCH_NAME),
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Button', BUNCH_NAME ),
						   "param_name" => "bttn3",
						   "description" => __('Set Button Text', BUNCH_NAME ),
						   "default" => __('Order Now', BUNCH_NAME ),
						    "group"       => __("Tab3", BUNCH_NAME),
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Link', BUNCH_NAME ),
						   "param_name" => "link3",
						   "description" => __('Link the Page', BUNCH_NAME ),
						    "group"       => __("Tab3", BUNCH_NAME),
						),
								
					//Tab4	
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Title', BUNCH_NAME ),
						   "param_name" => "title4",
						   "description" => __('Set the Title', BUNCH_NAME ),
						   "default" => __('BUSINESS PLAN', BUNCH_NAME ),
						   "group"       => __("Tab4", BUNCH_NAME),
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Currency', BUNCH_NAME ),
						   "param_name" => "currency4",
						   "description" => __('Set the Currency', BUNCH_NAME ),
						   "default" => __('$', BUNCH_NAME ),
						   "group"       => __("Tab4", BUNCH_NAME),
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Amount', BUNCH_NAME ),
						   "param_name" => "amount4",
						   "description" => __('Set the Amount of Money', BUNCH_NAME ),
						   "default" => __('99.99', BUNCH_NAME ),
						   "group"       => __("Tab4", BUNCH_NAME),
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Duration', BUNCH_NAME ),
						   "param_name" => "duration4",
						   "description" => __('Set Duration of the Package', BUNCH_NAME ),
						   "default" => __('/Per Month', BUNCH_NAME ),
						    "group"       => __("Tab4", BUNCH_NAME),
						),
						array(
						   "type" => "exploded_textarea",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Packages', BUNCH_NAME ),
						   "param_name" => "prt_pricing_desc4",
						   "description" => __('Set Packages list', BUNCH_NAME ),
						   "default" => __(' Unlimited traffic,2 GB Disk space,100 GB Monthly bandwidth,Free security service,2 Dashboard accounts', BUNCH_NAME ),
						   "group"       => __("Tab4", BUNCH_NAME),
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Button', BUNCH_NAME ),
						   "param_name" => "bttn4",
						   "description" => __('Set Button Text', BUNCH_NAME ),
						   "default" => __('Order Now', BUNCH_NAME ),
						    "group"       => __("Tab4", BUNCH_NAME),
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Link', BUNCH_NAME ),
						   "param_name" => "link4",
						   "description" => __('Link the Page', BUNCH_NAME ),
						    "group"       => __("Tab4", BUNCH_NAME),
						),
						
					)
				);  
$bunch_sc['bunch_case_studies']	=	array(
					"name" => __("Case Studies", BUNCH_NAME),
					"base" => "bunch_case_studies",
					"class" => "",
					"category" => __('DigitalMedia', BUNCH_NAME),
					"icon" => 'fa-briefcase' ,
					'description' => __('Case Studies', BUNCH_NAME),
					"params" => array(
						array(
						   "type" => "dropdown",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Select Column", BUNCH_NAME),
						   "param_name" => "layout",
						   'value' => array_flip(array('2'=>__('2', BUNCH_NAME),'3'=>__('3', BUNCH_NAME),'4'=>__('4', BUNCH_NAME) ) ),			
						   "description" => __("Set the number of Column to show", BUNCH_NAME),
						   "group"       => __("Custom", BUNCH_NAME),
						),
						array(
						   "type" => "attach_image",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Image", BUNCH_NAME),
						   "param_name" => "image",
						   "description" => __("Enter the Image to show.", BUNCH_NAME),
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Page Link', BUNCH_NAME ),
						   "param_name" => "link",
						   "description" => __('Enter Page Link', BUNCH_NAME ),
						),	

					));
$bunch_sc['bunch_why_choose_us']	=	array(
					"name" => __("Why Chose Us", BUNCH_NAME),
					"base" => "bunch_why_choose_us",
					"class" => "",
					"category" => __('DigitalMedia', BUNCH_NAME),
					"icon" => 'fa-briefcase' ,
					'description' => __('Why Choose Us with Centred Text', BUNCH_NAME),
					"params" => array(
					 	array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Title', BUNCH_NAME ),
						   "param_name" => "title",
						   "description" => __('Set the Title', BUNCH_NAME ),
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Sub Title', BUNCH_NAME ),
						   "param_name" => "sub_title",
						   "description" => __('Set the Title', BUNCH_NAME ),
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Centred Title', BUNCH_NAME ),
						   "param_name" => "titlex",
						   "description" => __('Set the Centred Title', BUNCH_NAME ),
						  
						),
					//Tab-1
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Title One', BUNCH_NAME ),
						   "param_name" => "title1",
						   "description" => __('Enter The Title', BUNCH_NAME ),
						   "group"       => __("Tab-1", BUNCH_NAME),
						),
						array(
						   "type" => "textarea",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Text', BUNCH_NAME ),
						   "param_name" => "text1",
						   "description" => __('Enter Your Text', BUNCH_NAME ),
						   "group"       => __("Tab-1", BUNCH_NAME),
						),
						array(
							"type" => "dropdown",
							 "holder" => "div",
							 "class" => "",
							 "heading" => __("Icon", BUNCH_NAME),
							 "param_name" => "icon1",
							 "value" => (array)vp_get_fontawesome_icons(),
							 "description" => __("Choose Icon", BUNCH_NAME),
							 "group"       => __("Tab-1", BUNCH_NAME),
							 ),
					//Tab-2
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Title Two', BUNCH_NAME ),
						   "param_name" => "title2",
						   "description" => __('Enter The Title', BUNCH_NAME ),
						   "group"       => __("Tab-2", BUNCH_NAME),
						),
						array(
						   "type" => "textarea",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Text', BUNCH_NAME ),
						   "param_name" => "text2",
						   "description" => __('Enter Your Text', BUNCH_NAME ),
						   "group"       => __("Tab-2", BUNCH_NAME),
						  
						),
						array(
							"type" => "dropdown",
							 "holder" => "div",
							 "class" => "",
							 "heading" => __("Icon", BUNCH_NAME),
							 "param_name" => "icon2",
							 "value" => (array)vp_get_fontawesome_icons(),
							 "description" => __("Choose Icon", BUNCH_NAME),
							 "group"       => __("Tab-2", BUNCH_NAME),
							 ),
					//Tab-3
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Title Three', BUNCH_NAME ),
						   "param_name" => "title3",
						   "description" => __('Enter The Title', BUNCH_NAME ),
						   "group"       => __("Tab-3", BUNCH_NAME),
						),
						array(
						   "type" => "textarea",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Text', BUNCH_NAME ),
						   "param_name" => "text3",
						   "description" => __('Enter Your Text', BUNCH_NAME ),
						   "group"       => __("Tab-3", BUNCH_NAME),
						),
						array(
							"type" => "dropdown",
							 "holder" => "div",
							 "class" => "",
							 "heading" => __("Icon", BUNCH_NAME),
							 "param_name" => "icon3",
							 "value" => (array)vp_get_fontawesome_icons(),
							 "description" => __("Choose Icon", BUNCH_NAME),
							 "group"       => __("Tab-3", BUNCH_NAME),
							 ),
					//Tab-4
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Title Four', BUNCH_NAME ),
						   "param_name" => "title4",
						   "description" => __('Enter The Title', BUNCH_NAME ),
						   "group"       => __("Tab-4", BUNCH_NAME),
						),
						array(
						   "type" => "textarea",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Text', BUNCH_NAME ),
						   "param_name" => "text4",
						   "description" => __('Enter Your Text', BUNCH_NAME ),
						   "group"       => __("Tab-4", BUNCH_NAME),
						),
						array(
							"type" => "dropdown",
							 "holder" => "div",
							 "class" => "",
							 "heading" => __("Icon", BUNCH_NAME),
							 "param_name" => "icon4",
							 "value" => (array)vp_get_fontawesome_icons(),
							 "description" => __("Choose Icon", BUNCH_NAME),
							 "group"       => __("Tab-4", BUNCH_NAME),
							 ),	

						
					
					)
				);   
  $bunch_sc['bunch_featured_one']	=	array(
					"name" => __("Featured One", BUNCH_NAME),
					"base" => "bunch_featured_one",
					"class" => "",
					"category" => __('DigitalMedia', BUNCH_NAME),
					"icon" => 'fa-briefcase' ,
					'description' => __('Featured One Block', BUNCH_NAME),
					"params" => array(
					 array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Title', BUNCH_NAME ),
						   "param_name" => "title",
						   "description" => __('Enter The Section Title', BUNCH_NAME ),
						   
						),
						array(
						   "type" => "textarea",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Text', BUNCH_NAME ),
						   "param_name" => "text",
						   "description" => __('Enter Your Text', BUNCH_NAME ),
						   "default" => __("Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis ullam nemo", BUNCH_NAME ),
						),
						array(
						   "type" => "attach_image",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Image", BUNCH_NAME),
						   "param_name" => "image",
						   "description" => __("Enter the Image to show.", BUNCH_NAME),
						),
						array(
						   "type" => "exploded_textarea",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Listed Text', BUNCH_NAME ),
						   "param_name" => "li_text",
						   "description" => __('Set Listed Text', BUNCH_NAME ),
						   "default" => __(' Unlimited traffic,2 GB Disk space,100 GB Monthly bandwidth,Free security service,2 Dashboard accounts', BUNCH_NAME ),
						),
							

					));
   
$bunch_sc['bunch_section_title']	=	array(
					"name" => __("Section Title", BUNCH_NAME),
					"base" => "bunch_section_title",
					"class" => "",
					"category" => __('DigitalMedia', BUNCH_NAME),
					"icon" => 'fa-briefcase' ,
					'description' => __('Section Title', BUNCH_NAME),
					"params" => array(
						//Title
					array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Title', BUNCH_NAME ),
						   "param_name" => "title",
						   "description" => __('Enter The Section Title', BUNCH_NAME ),
						),
					//SubTitle
					array(
						   "type" => "textarea",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('SubTitle', BUNCH_NAME ),
						   "param_name" => "sub_title",
						   "description" => __('Enter The Section SubTitle', BUNCH_NAME ),
						),
					)
				); 
   
 

																																																																
/*----------------------------------------------------------------------------*/
$bunch_sc = apply_filters( '_bunch_shortcodes_array', $bunch_sc );
	
return $bunch_sc;