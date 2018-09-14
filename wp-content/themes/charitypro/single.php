<?php $options = _WSH()->option();
	get_header(); 
	$settings  = charitypro_set(charitypro_set(get_post_meta(get_the_ID(), 'bunch_page_meta', true) , 'bunch_page_options') , 0);
	$meta = _WSH()->get_meta('_bunch_layout_settings');
	$meta1 = _WSH()->get_meta('_bunch_header_settings');
	$meta2 = _WSH()->get_meta();
	_WSH()->page_settings = $meta;
	if(charitypro_set($_GET, 'layout_style')) $layout = charitypro_set($_GET, 'layout_style'); else
	$layout = charitypro_set( $meta, 'layout', 'right' );
	if( !$layout || $layout == 'full' || charitypro_set($_GET, 'layout_style')=='full' ) $sidebar = ''; else
	$sidebar = charitypro_set( $meta, 'sidebar', 'blog-sidebar' );
	
	$layout = ($layout) ? $layout : 'right';
	$sidebar = ($sidebar) ? $sidebar : 'blog-sidebar';
	
	$classes = ( !$layout || $layout == 'full' || charitypro_set($_GET, 'layout_style')=='full' ) ? ' col-lg-12 col-md-12 col-sm-12 col-xs-12 ' : ' col-lg-8 col-md-8 col-sm-12 col-xs-12 ' ;
	_WSH()->post_views( true );
	$bg = charitypro_set($meta1, 'header_img');
	$title = charitypro_set($meta1, 'header_title');
?>

<!--Page Title-->
<section class="page-title" <?php if($bg):?>style="background-image:url('<?php echo esc_url($bg)?>');"<?php endif;?>>
    <div class="auto-container">
        <div class="inner-box">
            <h1><?php if($title) echo wp_kses_post($title); else wp_title('');?></h1>
            
            <?php echo wp_kses_post(charitypro_get_the_breadcrumb()); ?>
        </div>
    </div>
</section>
<!--End Page Title-->

<!--Sidebar Page-->
<div class="sidebar-page-container">
    <div class="auto-container">
        <div class="row clearfix">
            
            <!-- sidebar area -->
			<?php if( $layout == 'left' ): ?>
				<?php if ( is_active_sidebar( $sidebar ) ) { ?>
                	<div class="sidebar-side col-lg-4 col-md-4 col-sm-12 col-xs-12">        
                        <aside class="sidebar blog-sidebar">
                            <?php dynamic_sidebar( $sidebar ); ?>
                        </aside>
                    </div>
				<?php } ?>
			<?php endif; ?>
            
            <!--Content Side-->	
            <div class="content-side <?php echo esc_attr($classes);?>">
                
                <!--Default Section-->
                <section class="blog-section blog-details">
                    <div class="thm-unit-test">
					<?php while( have_posts() ): the_post(); 
						$post_meta = _WSH()->get_meta();
					?>
                    
                    <!--News Style Two-->
                    <div class="news-style-two">
                        <div class="inner-box">
                            <?php if(has_post_thumbnail()):?>
                            	<figure class="image"><a href="<?php echo esc_url(get_permalink(get_the_id()));?>"><?php the_post_thumbnail('charitypro_1170x365');?></a></figure>
                            <?php endif;?>
                            <div class="lower-content">
                                <?php if(charitypro_set($post_meta, 'btn_title')):?>
                                <div class="post-cat"><a href="<?php echo esc_url(charitypro_set($post_meta, 'ext_url'));?>" class="education"><?php echo balanceTags(charitypro_set($post_meta, 'btn_title'));?></a></div>
                                <?php endif;?>
                                <?php the_content();?>
                                <span class="tags"><?php the_tags('Tags: ', ', ');?></span>
                                <?php wp_link_pages(array('before'=>'<div class="paginate-links">'.esc_html__('Pages: ', 'charitypro'), 'after' => '</div>', 'link_before'=>'<span>', 'link_after'=>'</span>')); ?>
                            	<br>
                            </div>
                            <div class="post-meta clearfix">
                                <ul class="clearfix">
                                    <li><a href="<?php echo esc_url(get_permalink(get_the_id()).'#comments');?>"><span class="icon flaticon-speech-bubble-outline-of-rectangular-shape"></span> <?php echo comments_number( '0', '1', '%' ); ?></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <!-- comment area -->
                    <?php comments_template(); ?><!-- end comments -->    
                    
                    <?php endwhile;?>
                    </div>
                </section>
            </div>
            <!--Content Side-->
            
            <!-- sidebar area -->
			<?php if( $layout == 'right' ): ?>
				<?php if ( is_active_sidebar( $sidebar ) ) { ?>
                	<div class="sidebar-side col-lg-4 col-md-4 col-sm-12 col-xs-12">        
                        <aside class="sidebar blog-sidebar">
                            <?php dynamic_sidebar( $sidebar ); ?>
                        </aside>
                    </div>
				<?php } ?>
			<?php endif; ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>