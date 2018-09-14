<?php $options = get_option('charitypro'.'_theme_options');?>
	
	<div class="clearfix"></div>
    <!--Main Footer-->
    <footer class="main-footer">
    	<?php if(!(charitypro_set($options, 'hide_upper_footer'))):?>
        <!--Widgets Section-->
    	<?php if ( is_active_sidebar( 'footer-sidebar' ) ) { ?>
        <div class="widgets-section">
        	<div class="auto-container">
                <div class="row clearfix">
                    <?php dynamic_sidebar( 'footer-sidebar' ); ?>
                </div>
            </div>
        </div>
        <?php } ?>
        <?php endif;?>
        
		<?php if(!(charitypro_set($options, 'hide_bottom_footer'))):?>
        <!--Footer Bottom-->
        <div class="footer-bottom">
        	<div class="auto-container">
            	<div class="bottom-box">
                	
                    <?php if(charitypro_set($options, 'footer_social')): ?>
						<?php if(charitypro_set( $options, 'social_media' ) && is_array( charitypro_set( $options, 'social_media' ) )): ?>
                            <!--Social Links-->
                            <div class="social-links">
                                <ul class="clearfix">
                                    <?php $social_icons = charitypro_set( $options, 'social_media' );
                                    foreach( charitypro_set( $social_icons, 'social_media' ) as $social_icon ):
                                        if( isset( $social_icon['tocopy' ] ) ) continue; ?>
                                        <li><a href="<?php echo esc_url(charitypro_set( $social_icon, 'social_link')); ?>"><span class="fa <?php echo esc_attr(charitypro_set( $social_icon, 'social_icon')); ?>"></span></a></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        <?php endif;?>
                    <?php endif;?>
                    
                    <!--BIg Title-->
                    <div class="bottom-title"><?php echo wp_kses_post(charitypro_set($options, 'title'));?></div>
                    <!--Copyright-->
                    <div class="copyright-text"><?php echo wp_kses_post(charitypro_set($options, 'copyright'));?></div>
                </div>
            </div>
        </div>
        <?php endif;?>
    </footer>
        
</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-long-arrow-up"></span></div>

		<p class="animated zoomIn myfooter" style="font-size: 12px; text-align: center; animation-delay: 2.0s;"><?php _e( '<a href = "//www.theguardianfoundationbhc.org/"></a> &#169; '.date('Y'),""); ?> <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>.</p>

<?php wp_footer(); ?>
</body>
</html>