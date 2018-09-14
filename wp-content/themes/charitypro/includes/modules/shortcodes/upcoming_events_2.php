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

<!--Upcoming Events Section-->
<section class="upcoming-events">
    <div class="auto-container">
        <!--Heading-->
        <div class="sec-title">
            <h2><?php echo balanceTags($title);?></h2>
            <div class="clearfix">
                <div class="desc-text pull-left"><?php echo balanceTags($text);?></div>
                <div class="link-box pull-right"><a href="<?php echo esc_url($btn_link);?>"><?php echo balanceTags($btn_title);?></a></div>
            </div>
        </div>

        
        <div class="row clearfix">
            
            
            <div class="column col-md-7 col-sm-12 col-xs-12">
                <!--Event Style Two-->
                <div class="event-style-two wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <figure class="image-box"><a href="<?php echo esc_url($link);?>"><img src="<?php echo esc_url($image);?>" alt="<?php esc_html_e('Image', 'charitypro');?>"></a></figure>
                        <div class="over-content">
                            <div class="post-meta"><?php echo balanceTags($date);?> &nbsp;|&nbsp; <span class="location"><?php echo balanceTags($loca);?></span></div>
                            <h3><a href="<?php echo esc_url($link);?>"><?php echo balanceTags($text1);?></a></h3>
                        </div>
                    </div>
                </div>
                
            </div>
            
            <div class="column col-md-5 col-sm-12 col-xs-12">
                <?php
					if ( empty( $events ) ) :
					echo 'Sorry, nothing found.';
					else: 
					foreach( $events as $event ) : //print_r($event);
				?>
                <!--Event Style Three-->
                <div class="event-style-three">
                    <div class="inner-box">
                        <figure class="image-box"><a href="<?php echo esc_url(get_permalink($event->ID));?>"><?php echo balanceTags(get_the_post_thumbnail($event->ID, 'charitypro_165x140'));?></a></figure>
                        <div class="post-meta"><?php echo get_the_date('d M, Y');?> &nbsp;|&nbsp; <span class="location"><?php echo tribe_get_venue( $event->ID );?></span></div>
                        <h3><a href="<?php echo esc_url(get_permalink($event->ID));?>"><?php echo balanceTags(get_the_title( $event->ID ));?></a></h3>
                        <div class="people-status"><strong>2,580</strong> People Going</div>
                    </div>
                </div>
                <?php $count++; endforeach; endif;  ?>
            </div>
            
        </div>
    </div>
</section>

<?php 
   $output = ob_get_contents(); 
   return $output ; ?>
   