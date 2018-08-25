<?php  
   $count = 1;
   $events = tribe_get_events(array(
  'posts_per_page' => $num,
  'tax_query'=> array(
     array(
      'taxonomy' => 'tribe_events_cat',
      'field' => 'slug',
      'terms' => $cat
     )
    )
  ));
   $date_format = get_option('date_format');
   $time_format = get_option('time_format');
   $location = get_option('location');
?>

<!--Content Side-->
<div class="content-side">
    <!--Events-->
    <section class="events">
        <?php
			if ( empty( $events ) ) :
			echo 'Sorry, nothing found.';
			else: 
			foreach( $events as $event ) : //print_r($event);
		?>
        <!--Default Event Post-->
        <div class="default-event-post">
            <div class="image-box">
                <figure class="image"><?php echo balanceTags(get_the_post_thumbnail($event->ID, 'charitypro_770x320'));?></figure>
                <div class="overlay-box">
                    <!--Countdown Timer-->
                    <div class="time-counter style-one"><div class="time-countdown clearfix" data-countdown="2017/11/01"></div></div>
                </div>
            </div>
            <div class="inner-box">
                <div class="date"><span class="day"><?php echo balanceTags(date('d', strtotime($event->EventStartDate)));?></span><span class="month"><?php echo balanceTags(date('M', strtotime($event->EventStartDate)));?></span></div>
                <div class="post-header">
                    <h3><a href="<?php echo esc_url(get_permalink($event->ID));?>"><?php echo balanceTags(get_the_title( $event->ID ));?></a></h3>
                    <div class="post-meta">
                        <ul class="clearfix">
                            <li><span class="fa fa-clock-o"></span> <?php echo date( $time_format, strtotime( $event->EventStartDate ) );?></li>
                            <li><span class="fa fa-map-marker"></span> <?php echo tribe_get_venue( $event->ID );?></li>
                        </ul>
                    </div>
                </div>
                <div class="text"><?php echo balanceTags(charitypro_trim($event->post_content, $text_limit));?></div>
            </div>
        </div>
        
        <?php $count++; endforeach; endif;  ?>

    </section>

</div>
<!--Content Side-->

<?php 
   $output = ob_get_contents(); 
   return $output ; ?>
   