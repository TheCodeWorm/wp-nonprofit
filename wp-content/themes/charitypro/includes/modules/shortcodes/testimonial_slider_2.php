<?php  
   $count = 1;
   $query_args = array('post_type' => 'bunch_testimonials' , 'showposts' => $num , 'order_by' => $sort , 'order' => $order);
   if( $cat ) $query_args['testimonials_category'] = $cat;
   $query = new WP_Query($query_args) ; 
   ?>
<?php if($query->have_posts()):  ?>   

<!--Testimonial Style Two-->
<section class="testimonial-style-two" style="background-image:('<?php echo esc_url($bg_img);?>')">
    <div class="auto-container">
        
        <!--Heading-->
        <div class="sec-title"><h2><?php echo balanceTags($title);?></h2></div>
        
        <div class="testimonial-three-column owl-theme owl-carousel">
            <?php while($query->have_posts()): $query->the_post();
				global $post ; 
				$testimonial_meta = _WSH()->get_meta();
			?>
            <!--Slide Item-->
            <div class="slide-item">
                <div class="inner">
                    <div class="info">
                        <figure class="author-thumb img-circle"><?php the_post_thumbnail('charitypro_70x70', array('class'=>'img-circle'));?></figure>
                        <h4><?php the_title();?></h4>
                        <div class="location"><?php echo wp_kses_post(charitypro_set($testimonial_meta, 'designation'));?></div>
                    </div>
                    <div class="content">
                        <div class="text"><?php echo balanceTags(charitypro_trim(get_the_content(), $text_limit));?></div>
                        <div class="date"><?php echo get_the_date('d M, Y');?></div>
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