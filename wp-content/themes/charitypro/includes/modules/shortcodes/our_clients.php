<!--Sponsors Section-->
<section class="sponsors-section <?php if($style_two == 'option_1') echo 'with-border';?>">
    <div class="auto-container">
        
        <ul class="sponsors-carousel owl-theme owl-carousel">
            <?php foreach( $atts['sponsors'] as $key => $item ): ?>
            <li><figure class="image"><a href="<?php echo esc_url($item->link);?>"><img src="<?php echo esc_url($item->image);?>" alt="<?php esc_html_e('Image', 'charitypro');?>"></a></figure></li>
			<?php endforeach;?>
        </ul>
        
    </div>
</section>
