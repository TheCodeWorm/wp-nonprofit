<?php  
   $count = 1;
   $query_args = array('post_type' => 'bunch_portfolio' , 'showposts' => $num , 'order_by' => $sort , 'order' => $order);
   if( $cat ) $query_args['portfolio_category'] = $cat;
   $query = new WP_Query($query_args) ; 
   ?>
<?php if($query->have_posts()):  ?>   

<!--Projects Section-->
<section class="projects-section">
    <div class="auto-container">
        <!--Heading-->
        <div class="sec-title centered">
            <h2><?php echo balanceTags($title);?></h2>
            <div class="clearfix">
                <div class="desc-text"><?php echo balanceTags($text);?></div>
            </div>
        </div>
        
        <div class="row clearfix">
			<?php while($query->have_posts()): $query->the_post();
                global $post ; 
                $portfolio_meta = _WSH()->get_meta();
            ?>
            <!--Default Portfolio Item-->
            <div class="default-portfolio-item col-md-4 col-sm-6 col-xs-12">
                <div class="inner-box wow fadeInLeft">
                    <figure class="image-box"><?php the_post_thumbnail('charitypro_370x430');?></figure>
                    <h3 class="title"><a href="<?php echo esc_url(charitypro_set($portfolio_meta, 'ext_url'));?>"><?php the_title();?></a></h3>
                    <div class="overlay-box">
                        <div class="overlay-inner">
                            <div class="content">
                                <h3><a href="<?php echo esc_url(charitypro_set($portfolio_meta, 'ext_url'));?>"><?php the_title();?></a></h3>
                                <a href="<?php echo esc_url(charitypro_set($portfolio_meta, 'ext_url'));?>" class="more-link"><span class="fa fa-long-arrow-right"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endwhile;?>
        </div>
        
        <div class="load-more"><a href="<?php echo esc_url($btn_link);?>" class="theme-btn btn-style-three"><?php echo balanceTags($btn_title);?></a></div>
        
    </div>
</section>

<?php endif; ?>
<?php 
	wp_reset_postdata(); ?>