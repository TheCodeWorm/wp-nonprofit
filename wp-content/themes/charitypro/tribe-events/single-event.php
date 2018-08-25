<?php
/**
 * Single Event Template
 * A single event. This displays the event title, description, meta, and
 * optionally, the Google map for the event.
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/single-event.php
 *
 * @package TribeEventsCalendar
 * @version 4.2.4
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}
$time_format = get_option( 'time_format', Tribe__Events__Date_Utils::TIMEFORMAT );

$time_range_separator = tribe_get_option( 'timeRangeSeparator', ' - ' );



$start_datetime = tribe_get_start_date();

$start_date = tribe_get_start_date( null, false );

$start_time = tribe_get_start_date( null, false, $time_format );

$start_ts = tribe_get_start_date( null, false, Tribe__Events__Date_Utils::DBDATEFORMAT );



$end_datetime = tribe_get_end_date();

$end_date = tribe_get_end_date( null, false );

$end_time = tribe_get_end_date( null, false, $time_format );

$end_ts = tribe_get_end_date( null, false, Tribe__Events__Date_Utils::DBDATEFORMAT );



$cost = tribe_get_formatted_cost();

$website = tribe_get_event_website_link();

$phone   = tribe_get_phone();

//exit('sdfsdf');

$events_label_singular = tribe_get_event_label_singular();
$events_label_plural = tribe_get_event_label_plural();

$event_id = get_the_ID();

?>

<?php charitypro_bunch_global_variable();
	$options = _WSH()->option();
	get_header(); 
	$meta = _WSH()->get_term_meta( '_bunch_category_settings' );
	_WSH()->page_settings = $meta; 
	if(charitypro_set($_GET, 'layout_style')) $layout = charitypro_set($_GET, 'layout_style'); else
	$layout = charitypro_set( $meta, 'layout', 'right' );
	$sidebar = charitypro_set( $meta, 'sidebar', 'blog-sidebar' );
	
	$layout = ($layout) ? $layout : 'right';
    $sidebar = ($sidebar) ? $sidebar : 'blog-sidebar';
	
	$classes = ( !$layout || $layout == 'full' || charitypro_set($_GET, 'layout_style')=='full' ) ? ' col-lg-12 col-md-12 col-sm-12 col-xs-12 ' : ' col-lg-8 col-md-8 col-sm-12 col-xs-12 ' ;
	$bg = charitypro_set($meta, 'header_img');
	$title = charitypro_set($meta, 'header_title');
?>

<div id="tribe-events-content" class="tribe-events-single">
	
	<div class="clearfix"></div>
	<!--Sidebar Page-->
    <div class="sidebar-page-container1">
        <div class="auto-container">
            <div class="row clearfix">
            
            	<!-- sidebar area -->
				<?php if( $layout == 'left' ): ?>
					<?php if ( is_active_sidebar( $sidebar ) ) { ?>
                        <div class="sidebar-side col-lg-4 col-md-4 col-sm-12 col-xs-12">        
                            <aside class="sidebar blog-sidebar">
                                <?php dynamic_sidebar( $sidebar ); ?>
                            </aside>
                        </div>
                    <?php } ?>
                <?php endif; ?>
            
                <!--Content Side-->	
                <div class="content-side <?php echo esc_attr($classes);?>">
                    <!--Event Details-->
                    <section class="event-details">
                    
						<?php while ( have_posts() ) :  the_post(); ?>
                            <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                
                                <!--Default Event Post-->
                                <div class="default-event-post">
                                    <div class="image-box">
                                        <figure class="image"><?php echo tribe_event_featured_image( $event_id, 'full', false ); ?></figure>
                                    </div>
                                    <div class="inner-box">
                                        <div class="date"><span class="day"><?php echo balanceTags(date('d', strtotime($event->EventStartDate)));?></span><span class="month"><?php echo balanceTags(date('M', strtotime($event->EventStartDate)));?></span></div>
                                        <div class="post-header">
                                            <h3><?php echo balanceTags(get_the_title( $event->ID ));?></h3>
                                            <div class="post-meta">
                                                <ul class="clearfix">
                                                    <li><span class="fa fa-clock-o"></span> <?php echo date( $time_format, strtotime( $event->EventStartDate ) );?></li>
                                                    <li><span class="fa fa-map-marker"></span> <?php echo tribe_get_venue( $event->ID );?></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="more-content">
                                        <?php do_action( 'tribe_events_single_event_before_the_content' ) ?>
                                            <?php the_content();?>
                                        <?php do_action( 'tribe_events_single_event_after_the_content' ) ?>
                                    </div>
                                    <br>
                                    <!--Countdown Timer-->
                                    
                                    <!--Map Box-->
                                    <div class="map-box">
                                        <!--Map Canvas-->
                                        <?php do_action( 'tribe_events_single_event_before_the_meta' ) ?>
                                            <?php tribe_get_template_part( 'modules/meta' ); ?>
                                        <?php do_action( 'tribe_events_single_event_after_the_meta' ) ?>
                                    </div>
                                </div>
                        	</div>
						<?php endwhile; ?>
                        
                         <!-- Event footer -->
                        <div id="tribe-events-footer">
                            <!-- Navigation -->
                            <h3 class="tribe-events-visuallyhidden"><?php printf( esc_html__( '%s Navigation', 'charitypro' ), $events_label_singular ); ?></h3>
                            <div class="tribe-events-sub-nav posts-nav clearfix">
                                <!--Prev Control-->
                                <div class="post-control prev-control pull-left">
                                <?php tribe_the_prev_event_link( '<span class="icon fa fa-angle-left"></span>' ) ?>
                                </div>
                                <!--Next Control-->
                                <div class="post-control next-control pull-right">
                                <?php tribe_the_next_event_link( '<span class="icon fa fa-angle-right"></span>' ) ?>
                                </div>
                            </div>
                            <!-- .tribe-events-sub-nav -->
                        </div>
                    </section>
                </div>
                
                <!-- sidebar area -->
				<?php if( $layout == 'right' ): ?>
					<?php if ( is_active_sidebar( $sidebar ) ) { ?>
                    	<div class="sidebar-side col-lg-4 col-md-4 col-sm-12 col-xs-12">        
                            <aside class="sidebar blog-sidebar">
                                <?php dynamic_sidebar( $sidebar ); ?>
                            </aside>
                        </div>
                	<?php } ?>
                <?php endif; ?>
                <!--Sidebar-->
                
    		</div>
		</div>
	</div>
</div><!-- #tribe-events-content -->
