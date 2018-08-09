<?php $options = _WSH()->option();
	charitypro_bunch_global_variable();
?>
 	
    <!-- Main Header-->
    <header class="main-header">
    	<!-- Header Upper-->
    	<div class="header-upper">
        	<div class="auto-container">
            	<div class="clearfix">
                    
                    <!--Logo Box-->
                    <div class="logo-box">
                        <?php if(charitypro_set($options, 'logo_image')):?>
                            <div class="logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url(charitypro_set($options, 'logo_image'));?>" alt="<?php esc_html_e('CharityPro', 'charitypro');?>" title="<?php esc_html_e('CharityPro', 'charitypro');?>"></a></div>
                        <?php else:?>
                            <div class="logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url(get_template_directory_uri().'/images/logo.png');?>" alt="<?php esc_html_e('CharityPro', 'charitypro');?>"></a></div>
                        <?php endif;?>
                    </div>
                    
                    <!--Upper Right-->
                    <div class="upper-right">
                    	<div class="clearfix">
                        	<!--Info Box-->
                            <?php if((charitypro_set($options, 'phone')) && (charitypro_set($options, 'email'))):?>
                            <div class="info-box">
                            	<div class="icon"><span class="flaticon-technology-2"></span></div>
                                <div class="title"><?php echo wp_kses_post(charitypro_set($options, 'phone')); ?></div>
                                <div class="text"><?php echo sanitize_email(charitypro_set($options, 'email')); ?></div>
                            </div>
                            <?php endif;?>
                            
                            <?php if(charitypro_set($options, 'address')):?>
                            <!--Info Box-->
                            <div class="info-box">
                            	<div class="icon"><span class="flaticon-placeholder-3"></span></div>
                                <div class="title"><?php esc_html_e('Address', 'charitypro');?></div>
                                <div class="text"><?php echo wp_kses_post(charitypro_set($options, 'address')); ?></div>
                            </div>
                            <?php endif;?>
                            
                            <?php if(charitypro_set($options, 'head_social')): ?>
								<?php if(charitypro_set( $options, 'social_media' ) && is_array( charitypro_set( $options, 'social_media' ) )): ?>
                                    <!--Info Box / Social-->
                                    <div class="info-box social">
                                        <ul class="social-links clearfix">
                                            <?php $social_icons = charitypro_set( $options, 'social_media' );
											foreach( charitypro_set( $social_icons, 'social_media' ) as $social_icon ):
												if( isset( $social_icon['tocopy' ] ) ) continue; ?>
												<li><a href="<?php echo esc_url(charitypro_set( $social_icon, 'social_link')); ?>"  class="<?php echo esc_attr(charitypro_set( $social_icon, 'social_class')); ?>"><span class="fa <?php echo esc_attr(charitypro_set( $social_icon, 'social_icon')); ?>"></span></a></li>
											<?php endforeach; ?>
                                        </ul>
                                    </div>
                                <?php endif;?>
                            <?php endif;?>
                        </div>
                    </div>
                    
                </div>
                
            </div>
        </div><!-- Header Upper End -->
        
        
        <!-- Header Lower -->
        <div class="header-lower">
            <div class="auto-container">
                <!--Nav Outer-->
                <div class="nav-outer clearfix">
                    <!-- Main Menu -->
                    <nav class="main-menu">
                        <div class="navbar-header">
                            <!-- Toggle Button -->    	
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            </button>
                        </div>
                        
                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix">
                                <?php wp_nav_menu( array( 'theme_location' => 'main_menu', 'container_id' => 'navbar-collapse-1',
									'container_class'=>'navbar-collapse collapse navbar-right',
									'menu_class'=>'nav navbar-nav',
									'fallback_cb'=>false, 
									'items_wrap' => '%3$s', 
									'container'=>false,
									'walker'=> new Bunch_Bootstrap_walker()  
								) ); ?>
                             </ul>
                        </div>
                    </nav><!-- Main Menu End-->
                    
                    <?php if(charitypro_set($options, 'donate_btn')): ?>
                    <!--Donate Btn-->
                    <a href="<?php echo esc_url(charitypro_set($options, 'btn_link')); ?>" class="donate-btn theme-btn"><?php esc_html_e('Donate Now', 'charitypro');?></a>
                    <?php endif?>
                </div><!--Nav Outer End-->
                
            </div>
        </div>
        
        <!--Sticky Header-->
        <div class="sticky-header">
            <div class="auto-container clearfix">
                <!--Logo-->
                <div class="logo pull-left">
                    <?php if(charitypro_set($options, 'logo_responsive')):?>
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="img-responsive"><img src="<?php echo esc_url(charitypro_set($options, 'logo_responsive'));?>" alt="<?php esc_html_e('CharityPro', 'charitypro');?>" title="<?php esc_html_e('CharityPro', 'charitypro');?>"></a>
                    <?php else:?>
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url(get_template_directory_uri().'/images/logo-small.png');?>" alt="<?php esc_html_e('CharityPro', 'charitypro');?>"></a>
                    <?php endif;?>
                </div>
                
                <!--Menu Colum-->
                <div class="menu-column pull-right">
                    <!-- Main Menu -->
                    <nav class="main-menu">
                        <div class="navbar-header">
                            <!-- Toggle Button -->    	
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            </button>
                        </div>
                        
                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix">
                                <?php wp_nav_menu( array( 'theme_location' => 'main_menu', 'container_id' => 'navbar-collapse-1',
									'container_class'=>'navbar-collapse collapse navbar-right',
									'menu_class'=>'nav navbar-nav',
									'fallback_cb'=>false, 
									'items_wrap' => '%3$s', 
									'container'=>false,
									'walker'=> new Bunch_Bootstrap_walker()  
								) ); ?>
                             </ul>
                        </div>
                    </nav><!-- Main Menu End-->
                </div>
                
            </div>
        </div><!--End Sticky Header-->
    
    </header>
    <!--End Main Header -->