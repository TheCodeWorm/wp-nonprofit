<?php  
   $count = 1;
   $query_args = array('post_type' => 'bunch_services' , 'showposts' => $num , 'order_by' => $sort , 'order' => $order);
   if( $cat ) $query_args['services_category'] = $cat;
   $query = new WP_Query($query_args) ; 
   ?>
<?php if($query->have_posts()):  ?>   

<!--What We Do-->
<section class="what-we-do">
    <div class="auto-container">
        
        <div class="row clearfix">
        	<?php while($query->have_posts()): $query->the_post();
				global $post ; 
				$service_meta = _WSH()->get_meta();
			?>
            <!--Service Box-->
            <div class="service-box col-md-4 col-sm-6 col-xs-12">
                <div class="inner-box">
                    <div class="icon-box"><span class="<?php echo str_replace("icon ", "", charitypro_set($service_meta, 'fontawesome'));?>"></span></div>
                    <div class="title">
                        <h3><?php the_title();?></h3>
                        <div class="txt"><?php echo balanceTags(charitypro_set($service_meta, 'subtitle'));?></div>
                    </div>
                    <div class="text-content"><?php echo balanceTags(charitypro_trim(get_the_content(), $text_limit));?></div>
                    <a href="<?php echo esc_url(charitypro_set($service_meta, 'ext_url'));?>" class="overlay-link"></a>
                </div>
            </div>
            <?php endwhile;?>
        </div>
        
    </div>
</section>

<?php endif; ?>
<?php 
	wp_reset_postdata(); ?>