<?php  
   $count = 1;
   $query_args = array('orderby' => 'post_date' , 'number' => $num , 'creator' => '' , 'exclude' => '', 'include_inactive' => false, 'columns' 	=> 2);
   if( $cat ) $query_args['category'] = $cat;
   $query = Charitable_Campaigns_Shortcode::get_campaigns( $query_args ); 
   ?>
<?php if($query->have_posts()):  ?>   

<!--Recent Causes Section-->
<section class="recent-causes-section bg-lightgrey">
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
            <?php while($query->have_posts()): $query->the_post();
				global $post ; 
				$teams_meta = _WSH()->get_meta();
				$campaign = charitable_get_current_campaign();
			?>
            <!--Default Cause Box-->
            <div class="default-cause-box col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="inner-box">
                    <?php if ( has_post_thumbnail( $post->ID ) ) : ?>
                    <figure class="image-box">
                    	<a href="<?php echo esc_url(get_permalink(get_the_id()));?>">
                        	<?php the_post_thumbnail('charitypro_270x200');?>
                        </a>
                    </figure>
                    <?php endif;?>
                    
                    <div class="lower-content">
                        <h3><a href="<?php echo esc_url(get_permalink(get_the_id()));?>"><?php the_title();?></a></h3>
                        <div class="text"><?php echo get_the_content();?></div>
                        
						<div class="donate-box">
                            <?php if ( $campaign->has_goal() ):?>
                            <div class="donate-bar">
                                <div class="bar-inner"><div class="bar progress-line" data-percent="<?php echo absint($campaign->get_percent_donated_raw());?>"></div></div>
                            </div>
                            <?php endif;?>
                            <div class="donate-info"><?php echo balanceTags($campaign->get_donation_summary());?></div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <?php endwhile;?>
        </div>
    </div>
</section>

<?php endif; ?>
<?php 
	wp_reset_postdata(); ?>