<?php  
   $count = 1;
   $paged = get_query_var('paged');
   $query_args = array('orderby' => 'post_date' , 'number' => $num , 'creator' => '' , 'exclude' => '', 'include_inactive' => false, 'columns' 	=> 2, 'paged'=>$paged);
   if( $cat ) $query_args['category'] = $cat;
   $query = Charitable_Campaigns_Shortcode::get_campaigns( $query_args ); 
   ?>
<?php if($query->have_posts()):  ?>   

<!--Recent Causes Section-->
<section class="recent-causes-section">
    <div class="auto-container">
        
        <div class="row clearfix">
            <!--Cause Box Two-->
            <?php while($query->have_posts()): $query->the_post();
				global $post ; 
				$teams_meta = _WSH()->get_meta();
				$campaign = charitable_get_current_campaign();
			?>
            <!--Cause Box Two-->
            <div class="cause-box-two col-md-4 col-sm-6 col-xs-12">
                <div class="inner-box">
                    <?php if ( has_post_thumbnail( $post->ID ) ) : ?>
                    <figure class="image-box">
                    	<a href="<?php echo esc_url(get_permalink(get_the_id()));?>">
                        	<?php the_post_thumbnail('charitypro_354x250');?>
                        </a>
                    </figure>
                    <?php endif;?>
                    <div class="lower-content">
                        <!--Progress Box-->
                        
                        <div class="progress-box">
                             <div class="graph-outer">
                                <input type="text" class="dial" data-fgColor="#fc2f64" data-bgColor="none" data-width="70" data-height="70" data-linecap="round"  value="<?php echo absint($campaign->get_percent_donated_raw());?>">
                                <?php if ( $campaign->has_goal() ):?>
                                <div class="count-box">
                                    <div class="inner-text"><span class="count-text" data-speed="1800" data-stop="<?php echo absint($campaign->get_percent_donated_raw());?>"><?php echo absint($campaign->get_percent_donated_raw());?></span><span class="percent"><?php esc_html_e('%', 'charitypro');?></span></div>
                                </div>
                                <?php endif;?>
                            </div>
                        </div>
                        
                        <h3><a href="<?php echo esc_url(get_permalink(get_the_id()));?>"><?php the_title();?></a></h3>
                        <div class="text"><?php echo get_the_content();?></div>
                        <div class="donate-box">
                            <div class="donate-info"><strong><?php esc_html_e('Donation :', 'charitypro');?></strong> <?php echo balanceTags($campaign->get_donation_summary());?></div>
                        </div>
                    </div>
                    
                    <ul class="links clearfix">
                        <li><a href="<?php echo esc_url(charitable_get_permalink( 'campaign_donation_page', array( 'campaign' => $campaign ) ));?>" class="theme-btn donate-btn"><?php esc_html_e('DONATE NOW', 'charitypro');?></a></li>
                        <li><a href="<?php echo esc_url(get_permalink(get_the_id()));?>" class="theme-btn more-btn"><?php esc_html_e('MORE DETAILS', 'charitypro');?></a></li>
                    </ul>
                </div>
            </div>
            <?php endwhile;?>
        </div>
        
        <!-- Styled Pagination -->
        <div class="styled-pagination text-center">
            <?php charitypro_the_pagination(array('total'=>$query->max_num_pages, 'next_text' => '<div class="next">Next</div>', 'prev_text' => '<div class="prev">Prev</div>')); ?>
        </div>
            
    </div>
</section>

<?php endif; ?>
<?php 
	wp_reset_postdata(); ?>