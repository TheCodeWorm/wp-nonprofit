<!--Fullwidth Section One-->
<section class="fullwidth-section-one">
    <div class="outer clearfix">
        <!--Image Column-->
        <div class="image-column" style="background-image:url('<?php echo esc_url($bg_img);?>');"><figure class="image"><img src="<?php echo esc_url($bg_img);?>" alt="<?php esc_html_e('Image', 'charitypro');?>"></figure></div>
        
        <!--Content Column-->
        <div class="content-column">
            <div class="inner">
                <h2><?php echo balanceTags($title);?></h2>
                <h3><?php echo balanceTags($sub_title);?></h3>
                <div class="text-content"><?php echo balanceTags($text);?></div>
                
                <div class="pay-for">
                    <div class="row clearfix">
                        <?php foreach( $atts['services'] as $key => $item ): ?>
                        <!--Pay Block-->
                        <div class="pay-block col-md-4 col-sm-4 col-xs-12">
                            <a href="<?php echo esc_url($item->link);?>" class="link-box">
                                <div class="icon-box"><span class="<?php echo balanceTags($item->icons);?>"></span></div>
                                <div class="text"><?php echo balanceTags($item->title1);?></div>
                            </a>
                        </div>
                        <?php endforeach;?>
                    </div>
                </div>
                
                <a href="<?php echo esc_url($btn_link);?>" class="read-more"><?php echo balanceTags($btn_title);?></a>
                
            </div>
        </div>
        
    </div>
</section>
