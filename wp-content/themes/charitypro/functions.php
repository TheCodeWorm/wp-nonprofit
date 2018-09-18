<?php
add_action('after_setup_theme', 'charitypro_bunch_theme_setup');
function charitypro_bunch_theme_setup()
{
	global $wp_version;
	if(!defined('CHARITYPRO_VERSION')) define('CHARITYPRO_VERSION', '1.0');
	if( !defined( 'CHARITYPRO_ROOT' ) ) define('CHARITYPRO_ROOT', get_template_directory().'/');
	if( !defined( 'CHARITYPRO_URL' ) ) define('CHARITYPRO_URL', get_template_directory_uri().'/');	
	include_once get_template_directory() . '/includes/loader.php';
	
	
	load_theme_textdomain('charitypro', get_template_directory() . '/languages');
	
	//ADD THUMBNAIL SUPPORT
	add_theme_support('post-thumbnails');
	add_theme_support('woocommerce');
	add_theme_support('menus'); //Add menu support
	add_theme_support('automatic-feed-links'); //Enables post and comment RSS feed links to head.
	add_theme_support('widgets'); //Add widgets and sidebar support
	add_theme_support( "title-tag" );
	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );
	/** Register wp_nav_menus */
	if(function_exists('register_nav_menu'))
	{
		register_nav_menus(
			array(
				/** Register Main Menu location header */
				'main_menu' => esc_html__('Main Menu', 'charitypro'),
			)
		);
	}
	if ( ! isset( $content_width ) ) $content_width = 960;
	add_image_size( 'charitypro_270x200', 270, 200, true ); // '270x200 Recent Causes'
	add_image_size( 'charitypro_555x300', 555, 300, true ); // '555x300 Upcoming Events'
	add_image_size( 'charitypro_370x430', 370, 430, true ); // '370x430 Our Projects'
	add_image_size( 'charitypro_70x70', 70, 70, true ); // '70x70 Testimonial Slider'
	add_image_size( 'charitypro_300x380', 300, 380, true ); // '300x380 Latest News'
	add_image_size( 'charitypro_354x250', 354, 250, true ); // '354x250 Recent Causes 2'
	add_image_size( 'charitypro_165x140', 165, 140, true ); // '165x140 Upcoming Events 2'
	add_image_size( 'charitypro_350x250', 350, 250, true ); // '350x250 Latest News 2'
	add_image_size( 'charitypro_260x320', 260, 320, true ); // '260x320 Our Team'
	add_image_size( 'charitypro_770x320', 770, 320, true ); // '770x320 Event List View'
	add_image_size( 'charitypro_270x250', 270, 250, true ); // '270x250 Causes Two Column'
	add_image_size( 'charitypro_270x220', 270, 220, true ); // '270x220 Project Mixitup'
	add_image_size( 'charitypro_480x340', 480, 340, true ); // '480x340 Project FullWidth'
	add_image_size( 'charitypro_1170x365', 1170, 365, true ); // '1170x365 Our Blog'
	add_image_size( 'charitypro_115x106', 115, 106, true ); // '115x106 widgets'
}
function charitypro_bunch_widget_init()
{
	global $wp_registered_sidebars;
	$theme_options = _WSH()->option();
	if( class_exists( 'Bunch_About_us' ) )register_widget( 'Bunch_About_us' );
	if( class_exists( 'Bunch_Recent_Post' ) )register_widget( 'Bunch_Recent_Post' );
	
	
	
	register_sidebar(array(
	  'name' => esc_html__( 'Default Sidebar', 'charitypro' ),
	  'id' => 'default-sidebar',
	  'description' => esc_html__( 'Widgets in this area will be shown on the right-hand side.', 'charitypro' ),
	  'before_widget'=>'<div id="%1$s" class="widget sidebar-widget %2$s">',
	  'after_widget'=>'</div>',
	  'before_title' => '<div class="sidebar-title"><h3>',
	  'after_title' => '</h3></div>'
	));
	register_sidebar(array(
	  'name' => esc_html__( 'Footer Sidebar', 'charitypro' ),
	  'id' => 'footer-sidebar',
	  'description' => esc_html__( 'Widgets in this area will be shown in Footer Area.', 'charitypro' ),
	  'before_widget'=>'<div class="footer-column col-md-3 col-sm-6 col-xs-12"><div id="%1$s"  class="footer-widget %2$s">',
	  'after_widget'=>'</div></div>',
	  'before_title' => '<h2>',
	  'after_title' => '</h2>'
	));
	
	register_sidebar(array(
	  'name' => esc_html__( 'Blog Listing', 'charitypro' ),
	  'id' => 'blog-sidebar',
	  'description' => esc_html__( 'Widgets in this area will be shown on the right-hand side.', 'charitypro' ),
	  'before_widget'=>'<div id="%1$s" class="widget sidebar-widget %2$s">',
	  'after_widget'=>'</div>',
	  'before_title' => '<div class="sidebar-title"><h3>',
	  'after_title' => '</h3></div>'
	));
	if( !is_object( _WSH() )  )  return;
	$sidebars = charitypro_set(charitypro_set( $theme_options, 'dynamic_sidebar' ) , 'dynamic_sidebar' ); 
	foreach( array_filter((array)$sidebars) as $sidebar)
	{
		if(charitypro_set($sidebar , 'topcopy')) continue ;
		
		$name = charitypro_set( $sidebar, 'sidebar_name' );
		
		if( ! $name ) continue;
		$slug = charitypro_bunch_slug( $name ) ;
		
		register_sidebar( array(
			'name' => $name,
			'id' =>  sanitize_title( $slug ) ,
			'before_widget' => '<div id="%1$s" class="side-bar widget sidebar_widget %2$s">',
			'after_widget' => "</div>",
			'before_title' => '<div class="sec-title"><h3 class="skew-lines">',
			'after_title' => '</h3></div>',
		) );		
	}
	
	update_option('wp_registered_sidebars' , $wp_registered_sidebars) ;
}
add_action( 'widgets_init', 'charitypro_bunch_widget_init' );
// Update items in cart via AJAX
function charitypro_load_head_scripts() {
	$options = _WSH()->option();
    if ( !is_admin() ) {
		$protocol = is_ssl() ? 'https://' : 'http://';
		$map_path = '?key='.charitypro_set($options, 'map_api_key');
		wp_enqueue_script( 'map_api', ''.$protocol.'maps.google.com/maps/api/js'.$map_path, array(), false, false );
	}
}
add_action( 'wp_enqueue_scripts', 'charitypro_load_head_scripts' );
//global variables
function charitypro_bunch_global_variable() {
    global $wp_query;
}

function charitypro_enqueue_scripts() {
	$theme_options = _WSH()->option();
	$maincolor = str_replace( '#', '' , charitypro_set( $theme_options, 'main_color_scheme', '#fc2c62' ) );
    //styles
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.css' );
	wp_enqueue_style( 'gui', get_template_directory_uri() . '/css/gui.css' );
	wp_enqueue_style( 'slider-setting', get_template_directory_uri() . '/css/slider-setting.css' );
	wp_enqueue_style( 'fontawesom', get_template_directory_uri() . '/css/font-awesome.css' );
	wp_enqueue_style( 'flaticon', get_template_directory_uri() . '/css/flaticon.css' );
	wp_enqueue_style( 'animate', get_template_directory_uri() . '/css/animate.css' );
	wp_enqueue_style( 'owl-theme', get_template_directory_uri() . '/css/owl.css' );
	wp_enqueue_style( 'fancybox', get_template_directory_uri() . '/css/jquery.fancybox.css' );
	wp_enqueue_style( 'charitypro-main-style', get_stylesheet_uri() );
	wp_enqueue_style( 'charitypro-custom-style', get_template_directory_uri() . '/css/custom.css' );
	wp_enqueue_style( 'charitypro-responsive', get_template_directory_uri() . '/css/responsive.css' );
	wp_enqueue_style( 'charitypro-main-color', get_template_directory_uri() . '/css/color.php?main_color='.$maincolor );
	wp_enqueue_style( 'charitypro-color-panel', get_template_directory_uri() . '/css/color-panel.css' );
		
	
    //scripts
	wp_enqueue_script( 'jquery-ui-core');
	wp_enqueue_script( 'bootstrap', get_template_directory_uri().'/js/bootstrap.min.js', array(), false, true );
	wp_enqueue_script( 'mixitup', get_template_directory_uri().'/js/mixitup.js', array(), false, true );
	wp_enqueue_script( 'fancybox.pack', get_template_directory_uri().'/js/jquery.fancybox.pack.js', array(), false, true );
	wp_enqueue_script( 'fancybox-media', get_template_directory_uri().'/js/jquery.fancybox-media.js', array(), false, true );
	wp_enqueue_script( 'countdown', get_template_directory_uri().'/js/jquery.countdown.js', array(), false, true );
	wp_enqueue_script( 'owl', get_template_directory_uri().'/js/owl.js', array(), false, true );
	wp_enqueue_script( 'wow', get_template_directory_uri().'/js/wow.js', array(), false, true );
	wp_enqueue_script( 'appear', get_template_directory_uri().'/js/appear.js', array(), false, true );
	wp_enqueue_script( 'knob', get_template_directory_uri().'/js/knob.js', array(), false, true );
	wp_enqueue_script( 'map-script', get_template_directory_uri().'/js/map-script.js', array(), false, true );
	wp_enqueue_script( 'charitypro-main-script', get_template_directory_uri().'/js/script.js', array(), false, true );
	if( is_singular() ) wp_enqueue_script('comment-reply');
	
}
add_action( 'wp_enqueue_scripts', 'charitypro_enqueue_scripts' );

/*-------------------------------------------------------------*/
function charitypro_theme_slug_fonts_url() {
    $fonts_url = '';
 
    /* Translators: If there are characters in your language that are not
    * supported by Lora, translate this to 'off'. Do not translate
    * into your own language.
    */
    $montserrat = _x( 'on', 'Montserrat Script: on or off', 'charitypro' );
	$pt_serif = _x( 'on', 'PT Serif font: on or off', 'charitypro' );
	$crimson_text = _x( 'on', 'Crimson Text font: on or off', 'charitypro' );
    $merriweather = _x( 'on', 'Merriweather font: on or off', 'charitypro' );
 
    if ( 'off' !== $montserrat || 'off' !== $pt_serif || 'off' !== $crimson_text || 'off' !== $merriweather ) {
        $font_families = array();
 
        if ( 'off' !== $montserrat ) {
            $font_families[] = 'Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i';
        }
		
		if ( 'off' !== $pt_serif ) {
            $font_families[] = 'PT Serif:400,400i,700,700i';
        }
		
		if ( 'off' !== $crimson_text ) {
            $font_families[] = 'Crimson Text:400,400i,600,600i,700,700i';
        }
		
		if ( 'off' !== $merriweather ) {
            $font_families[] = 'Merriweather:300,300i,400,400i,700,700i';
        }
 
        $opt = get_option('charitypro'.'_theme_options');
		if ( charitypro_set( $opt, 'body_custom_font' ) ) {
			if ( $custom_font = charitypro_set( $opt, 'body_font_family' ) )
				$font_families[] = $custom_font . ':300,300i,400,400i,600,700';
		}
		if ( charitypro_set( $opt, 'use_custom_font' ) ) {
			$font_families[] = charitypro_set( $opt, 'h1_font_family' ) . ':300,300i,400,400i,600,700';
			$font_families[] = charitypro_set( $opt, 'h2_font_family' ) . ':300,300i,400,400i,600,700';
			$font_families[] = charitypro_set( $opt, 'h3_font_family' ) . ':300,300i,400,400i,600,700';
			$font_families[] = charitypro_set( $opt, 'h4_font_family' ) . ':300,300i,400,400i,600,700';
			$font_families[] = charitypro_set( $opt, 'h5_font_family' ) . ':300,300i,400,400i,600,700';
			$font_families[] = charitypro_set( $opt, 'h6_font_family' ) . ':300,300i,400,400i,600,700';
		}
		$font_families = array_unique( $font_families);
        
		
		$query_args = array(
            'family' => urlencode( implode( '|', $font_families ) ),
            'subset' => urlencode( 'latin,latin-ext' ),
        );
 
        $fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
    }
 
    return esc_url_raw( $fonts_url );
}
function charitypro_theme_slug_scripts_styles() {
    wp_enqueue_style( 'charitypro-theme-slug-fonts', charitypro_theme_slug_fonts_url(), array(), null );
}
add_action( 'wp_enqueue_scripts', 'charitypro_theme_slug_scripts_styles' );
/*---------------------------------------------------------------------*/
function charitypro_add_editor_styles() {
    add_editor_style( 'custom-editor-style.css' );
}
add_action( 'admin_init', 'charitypro_add_editor_styles' );
/**
 * WooCommerce Extra Feature
 * --------------------------
 *
 * Change number of related products on product page
 * Set your own value for 'posts_per_page'
 *
 */ 
function charitypro_woo_related_products_limit() {
  global $product;
	
	$args['posts_per_page'] = 6;
	return $args;
}
add_filter( 'woocommerce_output_related_products_args', 'charitypro_jk_related_products_args' );
  function charitypro_jk_related_products_args( $args ) {
	$args['posts_per_page'] = 3; // 4 related products
	$args['columns'] = 3; // arranged in 2 columns
	return $args;
}