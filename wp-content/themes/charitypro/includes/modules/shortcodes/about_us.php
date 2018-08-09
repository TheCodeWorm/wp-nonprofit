<!--About Section-->
<section class="about-section <?php if($style_two == 'option_1') echo 'bg-lightgrey';?>">
    <div class="auto-container">
        
        <div class="row clearfix">
            
            <!--Content Column-->
            <div class="content-column pull-right col-md-6 col-sm-12 col-xs-12">
                <div class="inner">
                    <div class="subtitle"><a href="<?php echo esc_url($btn_link);?>"><?php echo balanceTags($sub_title);?></a></div>
                    <h2><?php echo balanceTags($title);?></h2>
                    <h3><?php echo balanceTags($text1);?></h3>
                    <div class="desc"><?php echo balanceTags($text);?></div>
                    
                    <div class="clearfix">
                        <!--Info-->
                        <div class="info">
                            <figure class="image-thumb img-circle"><img class="img-circle" src="<?php echo esc_url($author_image);?>" alt="<?php esc_html_e('Image', 'charitypro');?>"></figure>
                            <div class="title"><?php echo balanceTags($author_title);?></div>
                            <div class="designation"><?php echo wp_kses_post($author_des);?></div>
                        </div>
                        <!--Signature-->
                        <div class="signature"><img src="<?php echo esc_url($signature_img);?>" alt="<?php esc_html_e('Signature Image', 'charitypro');?>"></div>
                    </div>
                    
                    <a href="<?php echo esc_url($btn_link);?>" class="theme-btn btn-style-three"><?php echo balanceTags($btn_title);?></a>
                </div>
            </div>
            
            <!--Image Column-->
            <div class="image-column pull-left col-md-6 col-sm-12 col-xs-12">
                <figure class="image"><img src="<?php echo esc_url($feature_img);?>" alt="<?php esc_html_e('Image', 'charitypro');?>"></figure>
            </div>
            
        </div>
        
    </div>
</section>