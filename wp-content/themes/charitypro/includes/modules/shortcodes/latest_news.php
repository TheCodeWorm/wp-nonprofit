<!--News Section-->
<section class="news-section">
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
            <!--Left Column-->
            <?php  
			   global $post ;
			   $count = 0;
			   $query_args = array('post_type' => 'post' , 'showposts' => $num , 'order_by' => $sort , 'order' => $order);
			   if( $cat ) $query_args['category_name'] = $cat;
			   $query = new WP_Query($query_args) ; 
			?>
            <?php if($query->have_posts()):?>   
            <div class="left-column col-md-8 col-sm-12 col-xs-12">
                <!--News Style One / Boxed Style-->
                
                <?php while($query->have_posts()): $query->the_post();
					global $post ; 
					$post_meta = _WSH()->get_meta();
				?>
                
                <div class="news-style-one boxed-style">
                    <div class="inner-box">
                        <div class="row clearfix">
                            <!--Image Column-->
                            <div class="image-column pull-right col-md-6 col-sm-6 col-xs-12">
                                <figure class="image"><a href="<?php echo esc_url(get_permalink(get_the_id()));?>"><?php the_post_thumbnail('charitypro_300x380');?></a></figure>
                            </div>
                            <!--Content Column-->
                            <div class="content-column pull-left col-md-6 col-sm-6 col-xs-12">
                                <h3><a href="<?php echo esc_url(get_permalink(get_the_id()));?>"><?php the_title();?></a></h3>
                                <div class="text"><?php echo balanceTags(charitypro_trim(get_the_content(), $text_limit));?></div>
                                <div class="post-meta">
                                    <ul class="clearfix">
                                        <li><a href="<?php echo esc_url(get_permalink(get_the_id()).'#comments');?>"><span class="icon flaticon-speech-bubble-outline-of-rectangular-shape"></span> <?php echo comments_number( '0', '1', '%' ); ?></a></li>
                            		</ul>
                                </div>
                                <a href="<?php echo esc_url(get_permalink(get_the_id()));?>" class="theme-btn btn-style-four"><?php esc_html_e('Read More', 'charitypro');?></a>
                            </div>
                        </div>
                        
                    </div>
                </div>
                
                <?php endwhile;?>
                
            </div>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
            
            <!--Right Column-->
            <?php  
			   global $post ;
			   $count = 0;
			   $querys_args = array('post_type' => 'post' , 'showposts' => $nums , 'order_by' => $sort , 'order' => $order);
			   if( $cats ) $querys_args['category_name'] = $cats;
			   $querys = new WP_Query($querys_args) ; 
			?>
            <?php if($querys->have_posts()):?> 
            <div class="right-column col-md-4 col-sm-12 col-xs-12">
                <!--News Style One / Bordered-->
                <?php while($querys->have_posts()): $querys->the_post();
					global $post ; 
					$post_meta = _WSH()->get_meta();
				?>
                <div class="news-style-one bordered">
                    <div class="inner-box">
                        <h3><a href="<?php echo esc_url(get_permalink(get_the_id()));?>"><?php the_title();?></a></h3>
                        <div class="text"><?php echo balanceTags(charitypro_trim(get_the_content(), $text_limit));?></div>
                        <div class="post-meta">
                            <ul class="clearfix">
                                <li><a href="<?php echo esc_url(get_permalink(get_the_id()).'#comments');?>"><span class="icon flaticon-speech-bubble-outline-of-rectangular-shape"></span> <?php echo comments_number( '0', '1', '%' ); ?></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <?php endwhile;?>
            </div>
            <?php endif; ?>
			<?php wp_reset_postdata(); ?>
        </div>
    </div>
</section>