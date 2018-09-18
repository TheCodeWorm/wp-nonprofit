<!--News Style Two-->
<?php $post_meta = _WSH()->get_meta();?>
<div class="news-style-two">
    <div class="inner-box">
        <?php if(has_post_thumbnail()):?>
        <figure class="image"><a href="<?php echo esc_url(get_permalink(get_the_id()));?>"><?php the_post_thumbnail('charitypro_1170x365');?></a></figure>
        <?php endif;?>
        <div class="lower-content">
        	<?php $ext_url = charitypro_set($post_meta, 'ext_url');
			$btn_title = charitypro_set($post_meta, 'btn_title') ;?>
            <?php if($ext_url && $btn_title):?>
            <div class="post-cat"><a href="<?php echo esc_url($ext_url);?>" class="education"><?php echo balanceTags($btn_title);?></a></div>
            <?php endif;?>
            <h3><a href="<?php echo esc_url(get_permalink(get_the_id()));?>"><?php the_title();?></a></h3>
            <div class="text"><?php the_excerpt();?></div>
        </div>
        <div class="post-meta clearfix">
            <ul class="clearfix">
                <li><a href="<?php echo esc_url(get_permalink(get_the_id()).'#comments');?>"><span class="icon flaticon-speech-bubble-outline-of-rectangular-shape"></span> <?php echo comments_number( '0', '1', '%' ); ?></a></li>
			</ul>
        </div>
    </div>
</div>