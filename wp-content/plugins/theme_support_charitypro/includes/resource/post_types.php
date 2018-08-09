<?php
$theme_option = get_option(BUNCH_NAME.'_theme_options');  //printr($options);
$services_slug = bunch_set($theme_option , 'services_permalink' , 'services') ;
$portfolio_slug = bunch_set($theme_option , 'gallery_permalink' , 'gallery') ;
$team_slug = bunch_set($theme_option , 'team_permalink' , 'teams') ;
$testimonials_slug = bunch_set($theme_option , 'testimonials_permalink' , 'testimonials') ;
$options = array();
$options['bunch_services'] = array(
								'labels' => array(__('Service', BUNCH_NAME), __('Service', BUNCH_NAME)),
								'slug' => $services_slug ,
								'label_args' => array('menu_name' => __('Services', BUNCH_NAME)),
								'supports' => array( 'title' , 'editor' , 'thumbnail' ),
								'label' => __('Service', BUNCH_NAME),
								'args'=>array(
										'menu_icon'=>'dashicons-products' , 
										'taxonomies'=>array('services_category')
								)
							);
							
$options['bunch_portfolio'] = array(
								'labels' => array(__('Portfolio', BUNCH_NAME), __('Portfolio', BUNCH_NAME)),
								'slug' => $portfolio_slug ,
								'label_args' => array('menu_name' => __('Portfolio', BUNCH_NAME)),
								'supports' => array( 'title' , 'editor' , 'thumbnail'),
								'label' => __('Portfolio', BUNCH_NAME),
								'args'=>array(
											'menu_icon'=>'dashicons-format-gallery' , 
											'taxonomies'=>array('portfolio_category')
								)
							);							
							
$options['bunch_team'] = array(
								'labels' => array(__('Member', BUNCH_NAME), __('Member', BUNCH_NAME)),
								'slug' => $team_slug ,
								'label_args' => array('menu_name' => __('Teams', BUNCH_NAME)),
								'supports' => array( 'title', 'editor' , 'thumbnail'),
								'label' => __('Member', BUNCH_NAME),
								'args'=>array(
											'menu_icon'=>'dashicons-groups' , 
											'taxonomies'=>array('team_category')
								)
							);
							
$options['bunch_testimonials'] = array(
								'labels' => array(__('Testimonial', BUNCH_NAME), __('Testimonial', BUNCH_NAME)),
								'slug' => $testimonials_slug ,
								'label_args' => array('menu_name' => __('Testimonials', BUNCH_NAME)),
								'supports' => array( 'title' , 'editor' , 'thumbnail' ),
								'label' => __('Testimonial', BUNCH_NAME),
								'args'=>array(
										'menu_icon'=>'dashicons-testimonial' , 
										'taxonomies'=>array('testimonials_category')
								)
							);
