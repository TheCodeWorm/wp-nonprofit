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
            <?php while($query->have_posts()): $query->the_post();
                global $post ; 
                $teams_meta = _WSH()->get_meta();
                $campaign = charitable_get_current_campaign();
            ?>
            <!--Default Cause Box-->
            <div class="default-cause-box col-md-6 col-sm-6 col-xs-12">
                <div class="inner-box">
                    <div class="clearfix">
                        <div class="image-column col-md-6 col-sm-12 col-xs-12">
                            <figure class="image-box">
                            	<a href="<?php echo esc_url(get_permalink(get_the_id()));?>">
									<?php the_post_thumbnail('charitypro_270x250');?>
                                </a>
                            </figure>
                        </div>
                        <div class="content-column col-md-6 col-sm-12 col-xs-12">
                            <div class="lower-content">
                                <h3><a href="<?php echo esc_url(get_permalink(get_the_id()));?>"><?php the_title();?></a></h3>
                                <div class="text"><?php echo get_the_content();?></div>
                                <div class="donate-box">
                                    <div class="donate-bar">
                                        <div class="bar-inner"><div class="bar progress-line" data-percent="<?php echo absint($campaign->get_percent_donated_raw());?>"></div></div>
                                    </div>
                                    <div class="donate-info"><?php echo balanceTags($campaign->get_donation_summary());?></div>
                                </div>
                            </div>
                        </div>
                    </div>
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