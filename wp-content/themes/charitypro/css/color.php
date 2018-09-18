<?php


/** Set ABSPATH for execution */
define( 'ABSPATH', dirname(dirname(__FILE__)) . '/' );
define( 'WPINC', 'wp-includes' );


/**
 * @ignore
 */
function add_filter() {}

/**
 * @ignore
 */
function esc_attr($str) {return $str;}

/**
 * @ignore
 */
function apply_filters() {}

/**
 * @ignore
 */
function get_option() {}

/**
 * @ignore
 */
function is_lighttpd_before_150() {}

/**
 * @ignore
 */
function add_action() {}

/**
 * @ignore
 */
function did_action() {}

/**
 * @ignore
 */
function do_action_ref_array() {}

/**
 * @ignore
 */
function get_bloginfo() {}

/**
 * @ignore
 */
function is_admin() {return true;}

/**
 * @ignore
 */
function site_url() {}

/**
 * @ignore
 */
function admin_url() {}

/**
 * @ignore
 */
function home_url() {}

/**
 * @ignore
 */
function includes_url() {}

/**
 * @ignore
 */
function wp_guess_url() {}

if ( ! function_exists( 'json_encode' ) ) :
/**
 * @ignore
 */
function json_encode() {}
endif;



/* Convert hexdec color string to rgb(a) string */
 
function hex2rgba($color, $opacity = false) {
 
	$default = 'rgb(0,0,0)';
 
	//Return default if no color provided
	if(empty($color))
          return $default; 
 
	//Sanitize $color if "#" is provided 
        if ($color[0] == '#' ) {
        	$color = substr( $color, 1 );
        }
 
        //Check if color has 6 or 3 characters and get values
        if (strlen($color) == 6) {
                $hex = array( $color[0] . $color[1], $color[2] . $color[3], $color[4] . $color[5] );
        } elseif ( strlen( $color ) == 3 ) {
                $hex = array( $color[0] . $color[0], $color[1] . $color[1], $color[2] . $color[2] );
        } else {
                return $default;
        }
 
        //Convert hexadec to rgb
        $rgb =  array_map('hexdec', $hex);
 
        //Check if opacity is set(rgba or rgb)
        if($opacity){
        	if(abs($opacity) > 1)
        		$opacity = 1.0;
        	$output = 'rgba('.implode(",",$rgb).','.$opacity.')';
        } else {
        	$output = 'rgb('.implode(",",$rgb).')';
        }
 
        //Return rgb(a) color string
        return $output;
}
$red = $_GET['main_color'];

ob_start(); ?>



.btn-style-one,
.charitable-submit-field .button,
.btn-style-four,
.btn-style-five:hover,
.scroll-to-top:hover,
.main-header .nav-outer .donate-btn,
.main-menu .navigation > li:hover > a,
.main-menu .navigation > li.current > a,
.main-menu .navigation > li.current-menu-item > a,
.sticky-header .main-menu .navigation > li:hover > a,
.sticky-header .main-menu .navigation > li.current > a,
.sticky-header .main-menu .navigation > li.current-menu-item > a,
.fluid-section-one .fluid-column:nth-child(1),
.featured-cause-section .donate-box .donate-bar .bar-inner .bar,
.default-cause-box .donate-box .donate-bar .bar-inner .bar,
.cause-box-two .links li a.donate-btn,
.fullwidth-section-one .content-column .pay-block .link-box:hover .icon-box,
.news-style-two .lower-content .post-cat a,
.main-footer .footer-bottom .social-links li a:hover,
.service-box .inner-box:hover,
.testimonial-style-two,
.team-member .social-links li a:hover,
.cause-details .donate-box .donate-bar .bar-inner .bar,
.donation-form-outer .radio-select input[type="radio"]:checked+label,
.sidebar .search-box .form-group button,
.footer-widget .search-box .form-group button,
.sidebar .search-box .form-group input:focus + button,
.sidebar .search-box .form-group button:hover,
.footer-widget .search-box .form-group button:hover,
.sidebar .popular-tags a:hover,
.sidebar .files li a,
.rangeslider-widget .noUi-horizontal,
.comments-area .comment .reply-btn:hover,
.default-event-post .inner-box .date,
.widget .tagcloud a:hover,
.paginate-links a:hover,
.paginate-links > span,
.post-password-form input[type="submit"],
.main-menu .navbar-header .navbar-toggle,
.fluid-section-one .fluid-column:nth-child(2),
.fluid-section-one .fluid-column:nth-child(3)
{
	background-color: #<?php echo esc_attr($red); ?>;
}


a,
.btn-style-one:hover,
.btn-style-two:hover,
.btn-style-three:hover,
.btn-style-four:hover,
.btn-style-five,
.theme_color,
.header-style-two .main-menu .navigation > li:hover > a,
.header-style-two .main-menu .navigation > li.current > a,
.header-style-two .main-menu .navigation > li.current-menu-item > a,
.main-menu .navigation > li > ul > li:hover > a,
.main-menu .navigation > li > ul > li > ul > li:hover > a,
.main-menu .navbar-collapse > ul li.dropdown .dropdown-btn,
.fullwidth-section-one .content-column .pay-block .icon-box,
.fullwidth-section-one .content-column .pay-block .link-box:hover,
.default-portfolio-item .overlay-box .more-link:hover,
.testimonial-style-one .slide-item .upper-content .fa,
.news-style-one h3 a:hover,
.news-style-one .post-meta ul li a:hover,
.news-style-one .post-meta ul li a:hover .fa,
.news-style-two .lower-content h3 a:hover,
.news-style-two .post-meta ul li a:hover,
.news-style-two .post-meta .share-btn a:hover,
.main-footer .about-widget .title .count,
.main-footer .links-widget .list li a:hover,
.service-box .inner-box .icon-box,
.page-title .bread-crumb li,
.page-title .bread-crumb li a:hover,
.page-title .bread-crumb li a.current,
.team-member .designation,
.styled-pagination li a:hover,
.styled-pagination li a.active,
.list-style-one li:before,
.single-cause-section .recent-causes-carousel .owl-nav .owl-next:hover,
.single-cause-section .recent-causes-carousel .owl-nav .owl-prev:hover,
.contact-section .contact-info li .icon,
.sidebar .popular-posts .post a,
.sidebar .popular-posts .post a:hover,
.sidebar .popular-posts .post-meta ul li a:hover,
.sidebar .popular-posts .post-meta .share-btn a:hover,
.sidebar .list li a:hover,
.sidebar .archives-list a:hover,
.sidebar .tabbed-nav li:hover a,
.sidebar .tabbed-nav li.current a,
.sidebar .files li:hover a .fa,
.sidebar .contact-widget li .icon-box,
.sidebar .related-posts .post a,
.sidebar .related-posts .post a:hover,
.sidebar .related-posts .post .price,
.sidebar .related-posts .post .rating .fa,
.post-author a:hover,
.default-event-post .inner-box .post-header h3 a:hover,
.default-event-post .post-meta li .fa,
.style-one .time-countdown .counter-column .count,
.pagination li a:hover,
.pagination li span:hover,
.pagination li span.current,
.widget ul li a:hover,
.campaign-summary .campaign-summary-item .amount,
.campaign-summary .campaign-summary-item .donors-count,
.paginate-links a,
.paginate-links > span,
.main-slider .tp-caption .theme-btn.btn-style-two:hover,
.featured-cause-section .donate-box .donate-info .goal,
.featured-cause-section .donate-box .donate-info .goal-amount,
.default-cause-box h3 a:hover,
.default-cause-box .donate-box .donate-info .goal-amount,
.default-event-box h3 a:hover,
.default-event-box .post-meta .location,
.cause-box-two .donate-info .goal,
.cause-box-two .donate-info .goal-amount,
.cause-box-two h3 a:hover,
.event-style-two .post-meta .location,
.event-style-three h3 a:hover,
.event-style-three .post-meta .location,
.event-style-two h3 a:hover
{
	color: #<?php echo esc_attr($red); ?>;
}



.btn-style-one,
.charitable-submit-field .button,
.btn-style-two:hover,
.btn-style-three:hover,
.btn-style-four,
.btn-style-five,
.main-menu .navigation > li > ul,
.main-menu .navigation > li > ul > li > ul,
.fullwidth-section-one .content-column .pay-block .link-box:hover .icon-box,
.blog-details blockquote,
.main-footer .footer-bottom .social-links li a:hover,
.service-box .inner-box:hover,
.about-section .content-column .theme-btn,
.team-member .social-links li a:hover,
.styled-pagination li a:hover,
.styled-pagination li a.active,
.single-cause-section .recent-causes-carousel .owl-nav .owl-next:hover,
.single-cause-section .recent-causes-carousel .owl-nav .owl-prev:hover,
.contact-us-form input:focus,
.contact-us-form select:focus,
.contact-us-form textarea:focus,
.sidebar .search-box .form-group input:focus,
.footer-widget .search-box .form-group input:focus,
.sidebar .popular-tags a:hover,
.comment-form .form-group input[type="text"]:focus,
.comment-form .form-group input[type="password"]:focus,
.comment-form .form-group input[type="tel"]:focus,
.comment-form .form-group input[type="email"]:focus,
.comment-form .form-group select:focus,
.comment-form .form-group textarea:focus,
.default-form .form-group input[type="text"]:focus,
.default-form .form-group input[type="password"]:focus,
.default-form .form-group input[type="tel"]:focus,
.default-form .form-group input[type="email"]:focus,
.default-form .form-group textarea:focus,
.pagination li a:hover,
.pagination li span:hover,
.pagination li span.current,
.widget .tagcloud a:hover,
.paginate-links a,
.paginate-links > span,
.paginate-links a:hover,
.paginate-links > span,
.post-password-form input[type="password"],
.main-menu .navbar-header .navbar-toggle,
.sec-title .link-box a,
.fullwidth-section-one .content-column .read-more
{
	border-color: #<?php echo esc_attr($red); ?>;
}


.rangeslider-widget .noUi-handle
{
	border-color: #<?php echo esc_attr($red); ?> !important;
}


.fancybox-next:hover span:before,
.fancybox-prev:hover span:before,
.rangeslider-widget .noUi-connect,
.campaign-summary .campaign-donation .donate-button
{
	background-color: #<?php echo esc_attr($red); ?> !important;
}


.default-portfolio-item .overlay-inner
{
    background-color: <?php echo esc_attr(hex2rgba($red, 0.8));?> !important;
}

@media only screen and (max-width: 767px){
.main-menu .navbar-collapse > .navigation,
.main-menu .navbar-collapse > .navigation > li > a, .main-menu .navbar-collapse > .navigation > li > ul > li > a, .main-menu .navbar-collapse > .navigation > li > ul > li > ul > li > a,
.main-menu .navbar-collapse > .navigation > li > a:hover, .main-menu .navbar-collapse > .navigation > li > a:active, .main-menu .navbar-collapse > .navigation > li > a:focus,
.main-menu .navbar-collapse > .navigation > li > ul, .main-menu .navbar-collapse > .navigation > li > ul > li > ul, .main-menu .navigation > li > ul, .main-menu .navigation > li > ul > li > ul,
.main-menu .navbar-collapse > .navigation > li:hover > a, .main-menu .navbar-collapse > .navigation > li > ul > li:hover > a, .main-menu .navbar-collapse > .navigation > li > ul > li > ul > li:hover > a, .main-menu .navbar-collapse > .navigation > li.current > a, .main-menu .navbar-collapse > .navigation > li.current-menu-item > a{
	background-color: #<?php echo esc_attr($red); ?>;
}
}
<?php 

$out = ob_get_clean();
$expires_offset = 31536000; // 1 year
header('Content-Type: text/css; charset=UTF-8');
header('Expires: ' . gmdate( "D, d M Y H:i:s", time() + $expires_offset ) . ' GMT');
header("Cache-Control: public, max-age=$expires_offset");
header('Vary: Accept-Encoding'); // Handle proxies
header('Content-Encoding: gzip');

echo gzencode($out);
exit;