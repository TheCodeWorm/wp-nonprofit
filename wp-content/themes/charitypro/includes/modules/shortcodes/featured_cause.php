<?php  
   $count = 1;
   $query_args = array('orderby' => 'post_date' , 'number' => $num , 'creator' => '' , 'exclude' => '', 'include_inactive' => false, 'columns' 	=> 2);
   if( $cat ) $query_args['category'] = $cat;
   $query = Charitable_Campaigns_Shortcode::get_campaigns( $query_args ); 
   ?>
<?php if($query->have_posts()):  ?>   

<!--Featured Cause Section-->
<section class="featured-cause-section">
    <div class="auto-container">
        <!--Title-->
        <div class="title"><h2><?php echo balanceTags($title);?></h2></div>
        
        <div class="row clearfix">
            <?php while($query->have_posts()): $query->the_post();
				global $post ; 
				$teams_meta = _WSH()->get_meta();
				$campaign = charitable_get_current_campaign();
			?>
            
            <?php if ( has_post_thumbnail( $post->ID ) ) : ?>
                <!--Image Column-->
                <div class="image-column col-md-6 col-sm-12 col-xs-12">
                    <figure class="image">
                        <a href="<?php echo esc_url(get_permalink(get_the_id()));?>">
                            <?php the_post_thumbnail('570x400');?>
                        </a>
                    </figure>
                </div>
                <?php endif;?>
                <!--Content Column-->
                <div class="content-column col-md-6 col-sm-12 col-xs-12">
                    <div class="inner">
                        <div class="cause-cat"><a href="<?php echo esc_url(get_permalink(get_the_id()));?>"><?php esc_html_e('Featured Cause', 'charitypro');?></a></div>
                        <h3><a href="<?php echo esc_url(get_permalink(get_the_id()));?>"><?php the_title();?>  </a></h3>
                        <div class="desc"><?php echo get_the_content();?></div>
                        <div class="donate-box">
                            <div class="donate-info"><strong><?php esc_html_e('Raised :', 'charitypro');?></strong> <?php echo balanceTags($campaign->get_donation_summary());?></div>
                            <?php if ( $campaign->has_goal() ):?>
                            <div class="donate-bar">
                                <div class="bar-inner"><div class="bar progress-line" data-percent="<?php echo absint($campaign->get_percent_donated_raw());?>"><div class="count-box"><span class="count-text" data-speed="2000" data-stop="<?php echo absint($campaign->get_percent_donated_raw());?>"><?php echo absint($campaign->get_percent_donated_raw());?></span><?php esc_html_e('%', 'charitypro');?></div></div></div>
                            </div>
                            <?php endif;?>
                        </div>
                        <a href="<?php echo esc_url(get_permalink(get_the_id()));?>" class="theme-btn btn-style-three"><?php esc_html_e('Donate now', 'charitypro');?></a>
                    </div>
                </div>
            <?php endwhile;?>
        </div>
        
    </div>
</section>

<?php endif; ?>
<?php 
	wp_reset_postdata(); ?>