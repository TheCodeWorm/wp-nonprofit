<?php
/**
 * Kingcomposer array
 *
 * @package Student WP
 * @author Shahbaz Ahmed <shahbazahmed9@hotmail.com>
 * @version 1.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	die( 'Restricted' );
}

$orderby = array(
				"type"			=>	"select",
				"label"			=>	esc_html__("Order By", BUNCH_NAME),
				"name"			=>	"sort",
				'options'		=>	array('date'=>esc_html__('Date', BUNCH_NAME),'title'=>esc_html__('Title', BUNCH_NAME) ,'name'=>esc_html__('Name', BUNCH_NAME) ,'author'=>esc_html__('Author', BUNCH_NAME),'comment_count' =>esc_html__('Comment Count', BUNCH_NAME),'random' =>esc_html__('Random', BUNCH_NAME) ),
				"description"	=>	esc_html__("Enter the sorting order.", BUNCH_NAME)
			);
$order = array(
				"type"			=>	"select",
				"label"			=>	esc_html__("Order", BUNCH_NAME),
				"name"			=>	"order",
				'options'		=>	(array('ASC'=>esc_html__('Ascending', BUNCH_NAME),'DESC'=>esc_html__('Descending', BUNCH_NAME) ) ),			
				"description"	=>	esc_html__("Enter the sorting order.", BUNCH_NAME)
			);
$number = array(
				"type"			=>	"text",
				"label"			=>	esc_html__('Number', BUNCH_NAME ),
				"name"			=>	"num",
				"description"	=>	esc_html__('Enter Number of posts to Show.', BUNCH_NAME )
			);
$numbers = array(
				"type"			=>	"text",
				"label"			=>	esc_html__('Number', BUNCH_NAME ),
				"name"			=>	"nums",
				"description"	=>	esc_html__('Enter Number of posts to Show.', BUNCH_NAME )
			);			
$text_limit = array(
				"type"			=>	"text",
				"label"			=>	esc_html__('Text Limit', BUNCH_NAME ),
				"name"			=>	"text_limit",
				"description"	=>	esc_html__('Enter text limit of posts to Show.', BUNCH_NAME )
			);
$title = array(
				"type"			=>	"text",
				"label"			=>	esc_html__('Title', BUNCH_NAME ),
				"name"			=>	"title",
				"description"	=>	esc_html__('Enter section title.', BUNCH_NAME )
			);
$sub_title = array(
				"type"			=>	"text",
				"label"			=>	esc_html__('Sub-Title', BUNCH_NAME ),
				"name"			=>	"sub_title",
				"description"	=>	esc_html__('Enter section subtitle.', BUNCH_NAME )
			);
$text  = array(
				"type"			=>	"textarea",
				"label"			=>	esc_html__('Text', BUNCH_NAME ),
				"name"			=>	"text",
				"description"	=>	esc_html__('Enter text to show.', BUNCH_NAME )
			);
$btn_title = array(
				"type"			=>	"text",
				"label"			=>	esc_html__('Button Title', BUNCH_NAME ),
				"name"			=>	"btn_title",
				"description"	=>	esc_html__('Enter section Button title.', BUNCH_NAME )
			);
$btn_link = array(
				"type"			=>	"text",
				"label"			=>	esc_html__('Button Link', BUNCH_NAME ),
				"name"			=>	"btn_link",
				"description"	=>	esc_html__('Enter section Button Link.', BUNCH_NAME )
			);
$bg_img = array(
				"type"			=>	"attach_image_url",
				"label"			=>	esc_html__('Background Image', BUNCH_NAME ),
				"name"			=>	"bg_img",
				'admin_label' 	=> 	false,
				"description"	=>	esc_html__('Choose Background image.', BUNCH_NAME )
			);

$options = array();


// Revslider Start.
$options['bunch_revslider']	=	array(
					'name' => esc_html__('Revslider', BUNCH_NAME),
					'base' => 'bunch_revslider',
					'class' => '',
					'category' => esc_html__('CharityPro', BUNCH_NAME),
					'icon' => 'fa-briefcase' ,
					'description' => esc_html__('Show  Revolution slider.', BUNCH_NAME),
					'params' => array(
						array(
							'type' => 'dropdown',
							'label' => esc_html__('Choose Slider', BUNCH_NAME ),
							'name' => 'slider_slug',
							'options' => bunch_get_rev_slider( 0 ),
							'description' => esc_html__('Choose Slider', BUNCH_NAME )
						),

					),
			);
//Banner 3 Column
$options['bunch_banner_3_col']	=	array(
					'name' => esc_html__('Banner 3 Column', BUNCH_NAME),
					'base' => 'bunch_banner_3_col',
					'class' => '',
					'category' => esc_html__('CharityPro', BUNCH_NAME),
					'icon' => 'fa-briefcase' ,
					'description' => esc_html__('Show Banner 3 Column.', BUNCH_NAME),
					'params' => array(
								esc_html__( 'Services', BUNCH_NAME ) => array(
									array(
										'type' => 'group',
										'label' => esc_html__( 'Services', BUNCH_NAME ),
										'name' => 'services',
										'description' => esc_html__( 'Enter the Services.', BUNCH_NAME ),
										'params' => array(
													array(
														 'type' => 'icon_picker',
														 'label' => esc_html__( 'Icon', BUNCH_NAME ),
														 'name' => 'icons',
														 'description' => esc_html__( 'Enter The Icon.', BUNCH_NAME ),
													),
													$sub_title,
													$title,
													$btn_link,
												),
											),
										),
									),
								);
//Featured Causes
$options['bunch_featured_cause']	=	array(
					'name' => esc_html__('Featured Causes', BUNCH_NAME),
					'base' => 'bunch_featured_cause',
					'class' => '',
					'category' => esc_html__('CharityPro', BUNCH_NAME),
					'icon' => 'fa-briefcase' ,
					'description' => esc_html__('Show The Featured Causes.', BUNCH_NAME),
					'params' => array(
								array(
									"type"			=>	"textarea",
									"label"			=>	esc_html__('Title', BUNCH_NAME ),
									"name"			=>	"title",
									"description"	=>	esc_html__('Enter section Title.', BUNCH_NAME )
								),
								$number,
								array(
									"type" => "dropdown",
									"label" => __( 'Category', BUNCH_NAME),
									"name" => "cat",
									"options" =>  bunch_get_categories(array( 'taxonomy' => 'campaign_category'), true),
									"description" => __( 'Choose Category.', BUNCH_NAME)
								),
							),
						);
//Recent Causes
$options['bunch_recent_cause']	=	array(
					'name' => esc_html__('Recent Causes', BUNCH_NAME),
					'base' => 'bunch_recent_cause',
					'class' => '',
					'category' => esc_html__('CharityPro', BUNCH_NAME),
					'icon' => 'fa-briefcase' ,
					'description' => esc_html__('Show The Recent Causes.', BUNCH_NAME),
					'params' => array(
								$title,
								$text,
								$btn_title,
								$btn_link,
								$number,
								array(
									"type" => "dropdown",
									"label" => __( 'Category', BUNCH_NAME),
									"name" => "cat",
									"options" =>  bunch_get_categories(array( 'taxonomy' => 'campaign_category'), true),
									"description" => __( 'Choose Category.', BUNCH_NAME)
								),
							),
						);
//Call To Action
$options['bunch_call_to_action']	=	array(
					'name' => esc_html__('Call To Action', BUNCH_NAME),
					'base' => 'bunch_call_to_action',
					'class' => '',
					'category' => esc_html__('CharityPro', BUNCH_NAME),
					'icon' => 'fa-briefcase' ,
					'description' => esc_html__('Show The Call To Action.', BUNCH_NAME),
					'params' => array(
								$bg_img,
								$sub_title,
								$title,
								$btn_title,
								$btn_link,
							),
						);
//Upcomming Events
$options['bunch_upcoming_events']	=	array(
					'name' => esc_html__('Upcoming Events', BUNCH_NAME),
					'base' => 'bunch_upcoming_events',
					'class' => '',
					'category' => esc_html__('CharityPro', BUNCH_NAME),
					'icon' => 'fa-briefcase',
					'description' => esc_html__('Show Upcoming Events .', BUNCH_NAME),
					'params' => array(
								$title,
								$text,
								$btn_title,
								$btn_link,
								$number,
								array(
									 "type" => "dropdown",
									 "label" => __( 'Category', BUNCH_NAME),
									 "name" => "cat",
									 "options" =>  charitypro_bunch_get_categories(array( 'taxonomy' => 'tribe_events_cat'), true),
									 "description" => __( 'Choose Category.', BUNCH_NAME)
								),
							),
						);
//Sponsor Project
$options['bunch_sponsor_project']	=	array(
					'name' => esc_html__('Sponsor Project', BUNCH_NAME),
					'base' => 'bunch_sponsor_project',
					'class' => '',
					'category' => esc_html__('CharityPro', BUNCH_NAME),
					'icon' => 'fa-briefcase' ,
					'description' => esc_html__('Show Sponsor Project.', BUNCH_NAME),
					'params' => array(
								$bg_img,
								$title,
								array(
									"type"			=>	"editor",
									"label"			=>	esc_html__('Sub Title', BUNCH_NAME ),
									"name"			=>	"sub_title",
									"description"	=>	esc_html__('Enter section Sub Title.', BUNCH_NAME )
								),
								$text,
								array(
										'type' => 'group',
										'label' => esc_html__( 'Featured', BUNCH_NAME ),
										'name' => 'services',
										'description' => esc_html__( 'Enter the Featured.', BUNCH_NAME ),
										'params' => array(
													array(
														'type' => 'icon_picker',
														'label' => esc_html__( 'Icon', BUNCH_NAME ),
														'name' => 'icons',
														'description' => esc_html__( 'Enter The Icon.', BUNCH_NAME ),
													),
													array(
														"type"			=>	"text",
														"label"			=>	esc_html__('Title', BUNCH_NAME ),
														"name"			=>	"title1",
														"description"	=>	esc_html__('Enter section Title.', BUNCH_NAME )
													),
													array(
														"type"			=>	"text",
														"label"			=>	esc_html__('External Link', BUNCH_NAME ),
														"name"			=>	"link",
														"description"	=>	esc_html__('Enter The External Link.', BUNCH_NAME )
													),
												),
											),
											$btn_title,
											$btn_link,
										),
									);
//Our Projects
$options['bunch_our_projects']	=	array(
					'name' => esc_html__('Our Projects', BUNCH_NAME),
					'base' => 'bunch_our_projects',
					'class' => '',
					'category' => esc_html__('CharityPro', BUNCH_NAME),
					'icon' => 'fa-briefcase' ,
					'description' => esc_html__('Show The Our Projects.', BUNCH_NAME),
					'params' => array(
								$title,
								$text,
								$number,
								array(
									"type" => "dropdown",
									"label" => __( 'Category', BUNCH_NAME),
									"name" => "cat",
									"options" =>  bunch_get_categories(array( 'taxonomy' => 'portfolio_category'), true),
									"description" => __( 'Choose Category.', BUNCH_NAME)
								),
								$orderby,
								$order,
								$btn_title,
								$btn_link,
							),
						);
//Testimonial Slider
$options['bunch_testimonial_slider']	=	array(
					'name' => esc_html__('Testimonial Slider', BUNCH_NAME),
					'base' => 'bunch_testimonial_slider',
					'class' => '',
					'category' => esc_html__('CharityPro', BUNCH_NAME),
					'icon' => 'fa-briefcase' ,
					'description' => esc_html__('Show The Testimonial Slider.', BUNCH_NAME),
					'params' => array(
								$bg_img,
								$title,
								$text_limit,
								$number,
								array(
									"type" => "dropdown",
									"label" => __( 'Category', BUNCH_NAME),
									"name" => "cat",
									"options" =>  bunch_get_categories(array( 'taxonomy' => 'testimonials_category'), true),
									"description" => __( 'Choose Category.', BUNCH_NAME)
								),
								$orderby,
								$order,
							),
						);
//Latest News
$options['bunch_latest_news']	=	array(
					'name' => esc_html__('Latest News', BUNCH_NAME),
					'base' => 'bunch_latest_news',
					'class' => '',
					'category' => esc_html__('CharityPro', BUNCH_NAME),
					'icon' => 'fa-briefcase' ,
					'description' => esc_html__('Show The Latest News.', BUNCH_NAME),
					'params' => array(
								esc_html__( 'Gernel', BUNCH_NAME ) => array(
								$title,
								$text,
								$btn_title,
								$btn_link,
								$text_limit,
								$orderby,
								$order,
								),
								esc_html__( 'Left Column', BUNCH_NAME ) => array(
									$number,
									array(
										"type" => "dropdown",
										"label" => __( 'Category', BUNCH_NAME),
										"name" => "cat",
										"options" =>  bunch_get_categories(array( 'taxonomy' => 'category'), true),
										"description" => __( 'Choose Category.', BUNCH_NAME)
									),
								),
								esc_html__( 'Right Column', BUNCH_NAME ) => array(
									$numbers,
									array(
										"type" => "dropdown",
										"label" => __( 'Category', BUNCH_NAME),
										"name" => "cats",
										"options" =>  bunch_get_categories(array( 'taxonomy' => 'category'), true),
										"description" => __( 'Choose Category.', BUNCH_NAME)
									),
								),
							),
						);
//Parallax Volunteer
$options['bunch_parallax_volunteer']	=	array(
					'name' => esc_html__('Parallax Volunteer', BUNCH_NAME),
					'base' => 'bunch_parallax_volunteer',
					'class' => '',
					'category' => esc_html__('CharityPro', BUNCH_NAME),
					'icon' => 'fa-briefcase' ,
					'description' => esc_html__('Show The Parallax Volunteer.', BUNCH_NAME),
					'params' => array(
								$bg_img,
								array(
									"type"			=>	"editor",
									"label"			=>	esc_html__('Title', BUNCH_NAME ),
									"name"			=>	"title",
									"description"	=>	esc_html__('Enter section Title.', BUNCH_NAME )
								),
								$text,
								$btn_title,
								$btn_link,
							),
						);
//Our Clients
$options['bunch_our_clients']	=	array(
					'name' => esc_html__('Our Clients', BUNCH_NAME),
					'base' => 'bunch_our_clients',
					'class' => '',
					'category' => esc_html__('CharityPro', BUNCH_NAME),
					'icon' => 'fa-briefcase' ,
					'description' => esc_html__('Show Our Clients.', BUNCH_NAME),
					'params' => array(
								array(
									'type' => 'group',
									'label' => esc_html__( 'Our Sponsors Image', BUNCH_NAME ),
									'name' => 'sponsors',
									'description' => esc_html__( 'Enter the Our Sponsors Image.', BUNCH_NAME ),
									'params' => array(
												array(
													"type"			=>	"attach_image_url",
													"label"			=>	esc_html__('Sponsors Image', BUNCH_NAME ),
													"name"			=>	"image",
													'admin_label' 	=> 	false,
													"description"	=>	esc_html__('Choose Sponsors image Url.', BUNCH_NAME )
												),
												array(
													"type"			=>	"text",
													"label"			=>	esc_html__('External Link', BUNCH_NAME ),
													"name"			=>	"link",
													"description"	=>	esc_html__('Enter The External Link.', BUNCH_NAME )
												),
											),
										),
										array(
											"type"			=>	"checkbox",
											"label"			=>	esc_html__('Style Two', BUNCH_NAME ),
											"name"			=>	"style_two",
											'options' => array(
												'option_1' => 'Style Two',
											),
											"description"	=>	esc_html__('Choose whether you want to show The Border Top.', BUNCH_NAME  )
										),
									),
								);
//Services 3 Column
$options['bunch_services_3_col']	=	array(
					'name' => esc_html__('Services 3 Column', BUNCH_NAME),
					'base' => 'bunch_services_3_col',
					'class' => '',
					'category' => esc_html__('CharityPro', BUNCH_NAME),
					'icon' => 'fa-briefcase' ,
					'description' => esc_html__('Show The Services 3 Column.', BUNCH_NAME),
					'params' => array(
								$sub_title,
								array(
									"type"			=>	"textarea",
									"label"			=>	esc_html__('Title', BUNCH_NAME ),
									"name"			=>	"title",
									"description"	=>	esc_html__('Enter The Title.', BUNCH_NAME )
								),
								$text,
								$text_limit,
								$number,
								array(
									"type" => "dropdown",
									"label" => __( 'Category', BUNCH_NAME),
									"name" => "cat",
									"options" =>  bunch_get_categories(array( 'taxonomy' => 'services_category'), true),
									"description" => __( 'Choose Category.', BUNCH_NAME)
								),
								$orderby,
								$order,
							),
						);
//About Us
$options['bunch_about_us']	=	array(
					'name' => esc_html__('About Us', BUNCH_NAME),
					'base' => 'bunch_about_us',
					'class' => '',
					'category' => esc_html__('CharityPro', BUNCH_NAME),
					'icon' => 'fa-briefcase' ,
					'description' => esc_html__('Show The About Us.', BUNCH_NAME),
					'params' => array(
								$sub_title,
								array(
									"type"			=>	"editor",
									"label"			=>	esc_html__('Title', BUNCH_NAME ),
									"name"			=>	"title",
									"description"	=>	esc_html__('Enter The Title.', BUNCH_NAME )
								),
								array(
									"type"			=>	"textarea",
									"label"			=>	esc_html__('Small Description', BUNCH_NAME ),
									"name"			=>	"text1",
									"description"	=>	esc_html__('Enter The Small Description.', BUNCH_NAME )
								),
								$text,
								array(
									"type"			=>	"attach_image_url",
									"label"			=>	esc_html__('Author Image', BUNCH_NAME ),
									"name"			=>	"author_image",
									'admin_label' 	=> 	false,
									"description"	=>	esc_html__('Choose Author image Url.', BUNCH_NAME )
								),
								array(
									"type"			=>	"text",
									"label"			=>	esc_html__('Author Title', BUNCH_NAME ),
									"name"			=>	"author_title",
									"description"	=>	esc_html__('Enter The Author Title.', BUNCH_NAME )
								),
								array(
									"type"			=>	"text",
									"label"			=>	esc_html__('Author Designation', BUNCH_NAME ),
									"name"			=>	"author_des",
									"description"	=>	esc_html__('Enter The Author Designation.', BUNCH_NAME )
								),
								array(
									"type"			=>	"attach_image_url",
									"label"			=>	esc_html__('Signature Image', BUNCH_NAME ),
									"name"			=>	"signature_img",
									'admin_label' 	=> 	false,
									"description"	=>	esc_html__('Choose Signature image Url.', BUNCH_NAME )
								),
								$btn_title,
								$btn_link,
								array(
									"type"			=>	"attach_image_url",
									"label"			=>	esc_html__('Feature Image', BUNCH_NAME ),
									"name"			=>	"feature_img",
									'admin_label' 	=> 	false,
									"description"	=>	esc_html__('Choose Feature image Url.', BUNCH_NAME )
								),
								array(
									"type"			=>	"checkbox",
									"label"			=>	esc_html__('Style Two', BUNCH_NAME ),
									"name"			=>	"style_two",
									'options' => array(
										'option_1' => 'Style Two',
									),
									"description"	=>	esc_html__('Choose whether you want to show The Background Color.', BUNCH_NAME  )
								),
							),
						);
//Recent Causes 2
$options['bunch_recent_cause_2']	=	array(
					'name' => esc_html__('Recent Causes 2', BUNCH_NAME),
					'base' => 'bunch_recent_cause_2',
					'class' => '',
					'category' => esc_html__('CharityPro', BUNCH_NAME),
					'icon' => 'fa-briefcase' ,
					'description' => esc_html__('Show The Recent Causes 2.', BUNCH_NAME),
					'params' => array(
								$title,
								$text,
								$btn_title,
								$btn_link,
								$number,
								array(
									"type" => "dropdown",
									"label" => __( 'Category', BUNCH_NAME),
									"name" => "cat",
									"options" =>  bunch_get_categories(array( 'taxonomy' => 'campaign_category'), true),
									"description" => __( 'Choose Category.', BUNCH_NAME)
								),
							),
						);
//Upcomming Events 2
$options['bunch_upcoming_events_2']	=	array(
					'name' => esc_html__('Upcoming Events 2', BUNCH_NAME),
					'base' => 'bunch_upcoming_events_2',
					'class' => '',
					'category' => esc_html__('CharityPro', BUNCH_NAME),
					'icon' => 'fa-briefcase',
					'description' => esc_html__('Show Upcoming Events 2.', BUNCH_NAME),
					'params' => array(
								esc_html__( 'General', BUNCH_NAME ) => array(
									$title,
									$text,
									$btn_title,
									$btn_link,
									array(
										"type"			=>	"attach_image_url",
										"label"			=>	esc_html__('Feature Image', BUNCH_NAME ),
										"name"			=>	"image",
										'admin_label' 	=> 	false,
										"description"	=>	esc_html__('Choose Feature image Url.', BUNCH_NAME )
									),
									array(
										"type"			=>	"text",
										"label"			=>	esc_html__('External Link', BUNCH_NAME ),
										"name"			=>	"link",
										"description"	=>	esc_html__('Enter The External Link.', BUNCH_NAME )
									),
									array(
										"type"			=>	"text",
										"label"			=>	esc_html__('Date', BUNCH_NAME ),
										"name"			=>	"date",
										"description"	=>	esc_html__('Enter The Date.', BUNCH_NAME )
									),
									array(
										"type"			=>	"text",
										"label"			=>	esc_html__('Location', BUNCH_NAME ),
										"name"			=>	"loca",
										"description"	=>	esc_html__('Enter The Location.', BUNCH_NAME )
									),
									array(
										"type"			=>	"textarea",
										"label"			=>	esc_html__('Title', BUNCH_NAME ),
										"name"			=>	"text1",
										"description"	=>	esc_html__('Enter The Title.', BUNCH_NAME )
									),
								),
								esc_html__( 'Events List', BUNCH_NAME ) => array(
									
									$number,
									array(
										"type" => "dropdown",
										"label" => __( 'Category', BUNCH_NAME),
										"name" => "cat",
										"options" =>  charitypro_bunch_get_categories(array( 'taxonomy' => 'tribe_events_cat'), true),
										"description" => __( 'Choose Category.', BUNCH_NAME)
									),
								),
							),
						);
//Testimonial Slider 2
$options['bunch_testimonial_slider_2']	=	array(
					'name' => esc_html__('Testimonial Slider 2', BUNCH_NAME),
					'base' => 'bunch_testimonial_slider_2',
					'class' => '',
					'category' => esc_html__('CharityPro', BUNCH_NAME),
					'icon' => 'fa-briefcase' ,
					'description' => esc_html__('Show The Testimonial Slider 2.', BUNCH_NAME),
					'params' => array(
								$bg_img,
								$title,
								$text_limit,
								$number,
								array(
									"type" => "dropdown",
									"label" => __( 'Category', BUNCH_NAME),
									"name" => "cat",
									"options" =>  bunch_get_categories(array( 'taxonomy' => 'testimonials_category'), true),
									"description" => __( 'Choose Category.', BUNCH_NAME)
								),
								$orderby,
								$order,
							),
						);
//Latest News 2
$options['bunch_latest_news_2']	=	array(
					'name' => esc_html__('Latest News 2', BUNCH_NAME),
					'base' => 'bunch_latest_news_2',
					'class' => '',
					'category' => esc_html__('CharityPro', BUNCH_NAME),
					'icon' => 'fa-briefcase' ,
					'description' => esc_html__('Show The Latest News 2.', BUNCH_NAME),
					'params' => array(
								$title,
								$text,
								$btn_title,
								$btn_link,
								$text_limit,
								$number,
								array(
									"type" => "dropdown",
									"label" => __( 'Category', BUNCH_NAME),
									"name" => "cat",
									"options" =>  bunch_get_categories(array( 'taxonomy' => 'category'), true),
									"description" => __( 'Choose Category.', BUNCH_NAME)
								),
								$orderby,
								$order,
							),
						);
//About Services
$options['bunch_about_services']	=	array(
					'name' => esc_html__('About Services', BUNCH_NAME),
					'base' => 'bunch_about_services',
					'class' => '',
					'category' => esc_html__('CharityPro', BUNCH_NAME),
					'icon' => 'fa-briefcase' ,
					'description' => esc_html__('Show The About Services.', BUNCH_NAME),
					'params' => array(
								$text_limit,
								$number,
								array(
									"type" => "dropdown",
									"label" => __( 'Category', BUNCH_NAME),
									"name" => "cat",
									"options" =>  bunch_get_categories(array( 'taxonomy' => 'services_category'), true),
									"description" => __( 'Choose Category.', BUNCH_NAME)
								),
								$orderby,
								$order,
							),
						);
//Our Team
$options['bunch_our_team']	=	array(
					'name' => esc_html__('Our Team', BUNCH_NAME),
					'base' => 'bunch_our_team',
					'class' => '',
					'category' => esc_html__('CharityPro', BUNCH_NAME),
					'icon' => 'fa-briefcase' ,
					'description' => esc_html__('Show The Our Team.', BUNCH_NAME),
					'params' => array(
								$title,
								$text,
								$number,
								array(
									"type" => "dropdown",
									"label" => __( 'Category', BUNCH_NAME),
									"name" => "cat",
									"options" =>  bunch_get_categories(array( 'taxonomy' => 'team_category'), true),
									"description" => __( 'Choose Category.', BUNCH_NAME)
								),
								$orderby,
								$order,
							),
						);
//Event List View
$options['bunch_event_list_view']	=	array(
					'name' => esc_html__('Event List View', BUNCH_NAME),
					'base' => 'bunch_event_list_view',
					'class' => '',
					'category' => esc_html__('CharityPro', BUNCH_NAME),
					'icon' => 'fa-briefcase',
					'description' => esc_html__('Show Event List View .', BUNCH_NAME),
					'params' => array(
								$text_limit,
								$number,
								array(
									 "type" => "dropdown",
									 "label" => __( 'Category', BUNCH_NAME),
									 "name" => "cat",
									 "options" =>  charitypro_bunch_get_categories(array( 'taxonomy' => 'tribe_events_cat'), true),
									 "description" => __( 'Choose Category.', BUNCH_NAME)
								),
							),
						);
//Causes 4 Column
$options['bunch_causes_4_col']	=	array(
					'name' => esc_html__('Causes 4 Column', BUNCH_NAME),
					'base' => 'bunch_causes_4_col',
					'class' => '',
					'category' => esc_html__('CharityPro', BUNCH_NAME),
					'icon' => 'fa-briefcase' ,
					'description' => esc_html__('Show The Causes 4 Column.', BUNCH_NAME),
					'params' => array(
								$number,
								array(
									"type" => "dropdown",
									"label" => __( 'Category', BUNCH_NAME),
									"name" => "cat",
									"options" =>  bunch_get_categories(array( 'taxonomy' => 'campaign_category'), true),
									"description" => __( 'Choose Category.', BUNCH_NAME)
								),
							),
						);
//Causes 2 Column
$options['bunch_causes_2_col']	=	array(
					'name' => esc_html__('Causes 2 Column', BUNCH_NAME),
					'base' => 'bunch_causes_2_col',
					'class' => '',
					'category' => esc_html__('CharityPro', BUNCH_NAME),
					'icon' => 'fa-briefcase' ,
					'description' => esc_html__('Show The Causes 2 Column.', BUNCH_NAME),
					'params' => array(
								$number,
								array(
									"type" => "dropdown",
									"label" => __( 'Category', BUNCH_NAME),
									"name" => "cat",
									"options" =>  bunch_get_categories(array( 'taxonomy' => 'campaign_category'), true),
									"description" => __( 'Choose Category.', BUNCH_NAME)
								),
							),
						);
//Causes 3 Column
$options['bunch_causes_3_col']	=	array(
					'name' => esc_html__('Causes 3 Column', BUNCH_NAME),
					'base' => 'bunch_causes_3_col',
					'class' => '',
					'category' => esc_html__('CharityPro', BUNCH_NAME),
					'icon' => 'fa-briefcase' ,
					'description' => esc_html__('Show The Causes 3 Column.', BUNCH_NAME),
					'params' => array(
								$number,
								array(
									"type" => "dropdown",
									"label" => __( 'Category', BUNCH_NAME),
									"name" => "cat",
									"options" =>  bunch_get_categories(array( 'taxonomy' => 'campaign_category'), true),
									"description" => __( 'Choose Category.', BUNCH_NAME)
								),
							),
						);
//Project Mixitup
$options['bunch_project_mixitup']	=	array(
					'name' => esc_html__('Project Mixitup', BUNCH_NAME),
					'base' => 'bunch_project_mixitup',
					'class' => '',
					'category' => esc_html__('CharityPro', BUNCH_NAME),
					'icon' => 'fa-briefcase' ,
					'description' => esc_html__('Show Project Mixitup.', BUNCH_NAME),
					'params' => array(
								$number,
								array(
								   "type" => "textfield",
								   "label" => __('Excluded Categories ID', BUNCH_NAME ),
								   "name" => "exclude_cats",
								   "description" => __('Enter Excluded Categories ID seperated by commas(13,14).', BUNCH_NAME )
								),
								$orderby,
								$order,
							),
						);
//Project Fullwidth
$options['bunch_project_fullwidth']	=	array(
					'name' => esc_html__('Project Fullwidth', BUNCH_NAME),
					'base' => 'bunch_project_mixitup',
					'class' => '',
					'category' => esc_html__('CharityPro', BUNCH_NAME),
					'icon' => 'fa-briefcase' ,
					'description' => esc_html__('Show Project Fullwidth.', BUNCH_NAME),
					'params' => array(
								$number,
								array(
								   "type" => "textfield",
								   "label" => __('Excluded Categories ID', BUNCH_NAME ),
								   "name" => "exclude_cats",
								   "description" => __('Enter Excluded Categories ID seperated by commas(13,14).', BUNCH_NAME )
								),
								$orderby,
								$order,
							),
						);
//Contact Form
$options['bunch_contact_form']	=	array(
					'name' => esc_html__('Contact Form', BUNCH_NAME),
					'base' => 'bunch_contact_form',
					'class' => '',
					'category' => esc_html__('CharityPro', BUNCH_NAME),
					'icon' => 'fa-briefcase' ,
					'description' => esc_html__('Show Contact Form.', BUNCH_NAME),
					'params' => array(
								esc_html__( 'Contact Form', BUNCH_NAME ) => array(
									array(
										"type"			=>	"text",
										"label"			=>	esc_html__('Title', BUNCH_NAME ),
										"name"			=>	"form_title",
										"description"	=>	esc_html__('Enter The Title.', BUNCH_NAME )
									),
									array(
										"type"			=>	"textarea",
										"label"			=>	esc_html__('Text', BUNCH_NAME ),
										"name"			=>	"form_text",
										"description"	=>	esc_html__('Enter The Text.', BUNCH_NAME )
									),
									array(
										"type"			=>	"textarea",
										"label"			=>	esc_html__('Contact Form', BUNCH_NAME ),
										"name"			=>	"contact_form",
										"description"	=>	esc_html__('Enter The Contact Form.', BUNCH_NAME )
									),
								),
								esc_html__( 'Contact Info', BUNCH_NAME ) => array(
									array(
										"type"			=>	"text",
										"label"			=>	esc_html__('Title', BUNCH_NAME ),
										"name"			=>	"info_title",
										"description"	=>	esc_html__('Enter The Title.', BUNCH_NAME )
									),
									array(
										"type"			=>	"text",
										"label"			=>	esc_html__('Email', BUNCH_NAME ),
										"name"			=>	"email",
										"description"	=>	esc_html__('Enter The Email.', BUNCH_NAME )
									),
									array(
										"type"			=>	"text",
										"label"			=>	esc_html__('Phone Number', BUNCH_NAME ),
										"name"			=>	"phone_no",
										"description"	=>	esc_html__('Enter The Phone Number.', BUNCH_NAME )
									),
									array(
										"type"			=>	"text",
										"label"			=>	esc_html__('Fax Number', BUNCH_NAME ),
										"name"			=>	"fax_no",
										"description"	=>	esc_html__('Enter The Fax Number.', BUNCH_NAME )
									),
									array(
										"type"			=>	"textarea",
										"label"			=>	esc_html__('Address', BUNCH_NAME ),
										"name"			=>	"address",
										"description"	=>	esc_html__('Enter The Address.', BUNCH_NAME )
									),
								),
							),
						);
//Google Map
$options['bunch_google_map']	=	array(
					'name' => esc_html__('Google Map', BUNCH_NAME),
					'base' => 'bunch_google_map',
					'class' => '',
					'category' => esc_html__('CharityPro', BUNCH_NAME),
					'icon' => 'fa-briefcase' ,
					'description' => esc_html__('Show Google Map.', BUNCH_NAME),
					'params' => array(
								array(
									"type"			=>	"text",
									"label"			=>	esc_html__('Latitude', BUNCH_NAME ),
									"name"			=>	"lat",
									"description"	=>	esc_html__('Enter The Latitude.', BUNCH_NAME )
								),
								array(
									"type"			=>	"text",
									"label"			=>	esc_html__('Longitude', BUNCH_NAME ),
									"name"			=>	"long",
									"description"	=>	esc_html__('Enter The Longitude.', BUNCH_NAME )
								),
								array(
									"type"			=>	"text",
									"label"			=>	esc_html__('Mark Title', BUNCH_NAME ),
									"name"			=>	"mark_title",
									"description"	=>	esc_html__('Enter The Mark Title.', BUNCH_NAME )
								),
								array(
									"type"			=>	"text",
									"label"			=>	esc_html__('Mark Address', BUNCH_NAME ),
									"name"			=>	"mark_adress",
									"description"	=>	esc_html__('Enter The Mark Address.', BUNCH_NAME )
								),
								array(
									"type"			=>	"text",
									"label"			=>	esc_html__('Email', BUNCH_NAME ),
									"name"			=>	"email",
									"description"	=>	esc_html__('Enter The Email.', BUNCH_NAME )
								),
							),
						);

return $options;