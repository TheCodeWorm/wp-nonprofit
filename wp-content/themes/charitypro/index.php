<?php charitypro_bunch_global_variable(); 
	$options = _WSH()->option();
	get_header(); 
	if( $wp_query->is_posts_page ) {
		$meta = _WSH()->get_meta('_bunch_layout_settings', get_queried_object()->ID);
		$meta1 = _WSH()->get_meta('_bunch_header_settings', get_queried_object()->ID);
		if(charitypro_set($_GET, 'layout_style')) $layout = charitypro_set($_GET, 'layout_style'); else
		$layout = charitypro_set( $meta, 'layout', 'right' );
		$sidebar = charitypro_set( $meta, 'sidebar', 'default-sidebar' );
		$bg = charitypro_set($meta1, 'header_img');
		$title = charitypro_set($meta1, 'header_title');
	} else {
		$settings  = _WSH()->option(); 
		if(charitypro_set($_GET, 'layout_style')) $layout = charitypro_set($_GET, 'layout_style'); else
		$layout = charitypro_set( $settings, 'archive_page_layout', 'right' );
		$sidebar = charitypro_set( $settings, 'archive_page_sidebar', 'default-sidebar' );
		$bg = charitypro_set($settings, 'archive_page_header_img');
		$title = charitypro_set($settings, 'archive_page_header_title');
	}
	$layout = charitypro_set( $_GET, 'layout' ) ? charitypro_set( $_GET, 'layout' ) : $layout;
	$sidebar = ( $sidebar ) ? $sidebar : 'default-sidebar';
	_WSH()->page_settings = array('layout'=>'right', 'sidebar'=>$sidebar);
	$classes = ( !$layout || $layout == 'full' || charitypro_set($_GET, 'layout_style')=='full' ) ? ' col-lg-12 col-md-12 col-sm-12 col-xs-12 ' : ' col-lg-8 col-md-8 col-sm-12 col-xs-12 ' ;
	?>
	
    <!--Page Title-->
    <section class="page-title" <?php if($bg):?>style="background-image:url('<?php echo esc_url($bg)?>');"<?php endif;?>>
        <div class="auto-container">
            <div class="inner-box">
                <h1><?php esc_html_e('Our Blog', 'charitypro');?></h1>
                
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
                    <section class="blog-section">
                        <!--Blog Post-->
                        <div class="thm-unit-test">
						<?php while( have_posts() ): the_post();?>
                            <!-- blog post item -->
                            <!-- Post -->
                            <div id="post-<?php the_ID(); ?>" <?php post_class();?>>
                                <?php get_template_part( 'blog' ); ?>
                            <!-- blog post item -->
                            </div><!-- End Post -->
                        <?php endwhile;?>
                        </div>
                        <!--Pagination-->
                        <div class="styled-pagination text-left">
                            <?php charitypro_the_pagination(); ?>
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
                <!--Sidebar-->
            </div>
        </div>
    </div>
<?php get_footer(); ?>