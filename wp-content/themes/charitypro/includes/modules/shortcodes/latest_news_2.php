<?php  
   global $post ;
   $count = 0;
   $query_args = array('post_type' => 'post' , 'showposts' => $num , 'order_by' => $sort , 'order' => $order);
   if( $cat ) $query_args['category_name'] = $cat;
   $query = new WP_Query($query_args) ; 
   ?>
<?php if($query->have_posts()):  ?>   

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
            <?php while($query->have_posts()): $query->the_post();
                global $post ; 
                $post_meta = _WSH()->get_meta();
            ?>
            <!--News Style Two-->
            <div class="news-style-two col-md-4 col-sm-6 col-xs-12">
                <div class="inner-box">
                    <figure class="image"><a href="<?php echo esc_url(get_permalink(get_the_id()));?>"><?php the_post_thumbnail('charitypro_350x250');?></a></figure>
                    <div class="lower-content">
                        <div class="post-cat"><a href="<?php echo esc_url(charitypro_set($post_meta, 'ext_url'));?>" class="education"><?php echo balanceTags(charitypro_set($post_meta, 'btn_title'));?></a></div>
                        <h3><a href="<?php echo esc_url(get_permalink(get_the_id()));?>"><?php the_title();?></a></h3>
                        <div class="text"><?php echo balanceTags(charitypro_trim(get_the_content(), $text_limit));?></div>
                    </div>
                    <div class="post-meta clearfix">
                        <ul class="clearfix">
                            <li><a href="<?php echo esc_url(get_permalink(get_the_id()).'#comments');?>"><span class="icon flaticon-speech-bubble-outline-of-rectangular-shape"></span> <?php echo comments_number( '0', '1', '%' ); ?></a></li>
                            
                            <li>
                            	<?php $like = get_post_meta( get_the_id(), '_jolly_like_it', true );?>
								<a href="javascript:void(0);" class="jolly_like_it"  data-id="<?php echo get_the_ID();?>"><span class="icon flaticon-heart-2"></span> <?php (int)$like;?></a>
                            	<?php echo balanceTags($like);?>
                            </li>
                        </ul>
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