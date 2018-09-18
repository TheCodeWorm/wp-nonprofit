<?php  
	$count = 1;
	$query_args = array('post_type' => 'bunch_team' , 'showposts' => $num , 'order_by' => $sort , 'order' => $order);
	if( $cat ) $query_args['team_category'] = $cat;
	$query = new WP_Query($query_args) ; 
	?>
<?php if($query->have_posts()):  ?>   

<!--Team Section-->
<section class="team-section">
    <div class="auto-container">
        
        <!--Heading-->
        <?php if(($title) && ($text)):?>
        <div class="sec-title centered">
            <h2><?php echo balanceTags($title);?></h2>
            <div class="clearfix">
                <div class="desc-text"><?php echo balanceTags($text);?> </div>
            </div>
        </div>
        <?php endif;?>
        <div class="row clearfix">
        	<?php while($query->have_posts()): $query->the_post();
				global $post ; 
				$team_meta = _WSH()->get_meta();
			?>
            <!--Team Member-->
            <div class="team-member col-md-3 col-sm-6 col-xs-12">
                <div class="inner-box wow fadeInDown" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <figure class="image"><a href="<?php echo esc_url(charitypro_set($teams_meta, 'ext_url'));?>"><?php the_post_thumbnail('charitypro_260x320');?></a></figure>
                    <div class="lower-content">
                        <h3><a href="<?php echo esc_url(charitypro_set($teams_meta, 'ext_url'));?>"><?php the_title();?></a></h3>
                        <div class="designation"><?php echo wp_kses_post(charitypro_set($teams_meta, 'designation'));?></div>
                        <?php if($socials = charitypro_set($team_meta, 'bunch_team_social')):?>
                        <ul class="social-links">
                            <?php foreach($socials as $key => $value):?>
                            	<li><a href="<?php echo esc_url(charitypro_set($value, 'social_link'));?>"><span class="fa <?php echo esc_attr(charitypro_set($value, 'social_icon'));?>"></span></a></li>
							<?php endforeach;?>
                        </ul>
                        <?php endif;?>
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