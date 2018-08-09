<!--Fluid Section One-->
<section class="fluid-section-one">
    <div class="outer clearfix">
        <?php foreach( $atts['services'] as $key => $item ): ?>
        <!--Column-->
        <div class="fluid-column">
            <div class="inner">
                <div class="icon-box"><span class="<?php echo esc_attr($item->icons);?>"></span></div>
                <h3><?php echo balanceTags($item->sub_title);?></h3>
                <h2><?php echo balanceTags($item->title);?></h2>
            </div>
            <a href="<?php echo esc_url($item->btn_link);?>" class="overlay-link"></a>
        </div>
        <?php endforeach;?>
    </div>
</section>
