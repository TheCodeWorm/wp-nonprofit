<!--Contact Section-->
<section class="contact-section">
    <div class="auto-container">
        <div class="row clearfix">
            
            <!--Contact Column-->
            <div class="contact-column col-lg-7 col-md-7 col-sm-12 col-xs-12">
            
                <div class="upper-title">
                    <h2><?php echo balanceTags($form_title);?></h2>
                    <div class="text"><?php echo balanceTags($form_text);?></div>
                </div>
                
                <!--Contact Form Form-->
                <div class="contact-us-form">
                    <?php echo do_shortcode($contact_form);?>
                </div>
                
            </div>
            
            <!--Contact Column-->
            <div class="contact-column col-lg-5 col-md-5 col-sm-12 col-xs-12">
                <div class="inner">
                    <div class="upper-title">
                        <h2><?php echo balanceTags($info_title);?></h2>
                    </div>
                    
                    <!--Contact Info-->
                    <div class="contact-info">
                        <ul>
                            <li><div class="icon"><span class="flaticon-at"></span></div> <h4><?php esc_html_e('E-mail', 'charitypro');?></h4><?php echo sanitize_email($email);?></li>
                            <li><div class="icon"><span class="flaticon-technology-2"></span></div> <h4><?php esc_html_e('Phone', 'charitypro');?></h4><?php echo wp_kses_post($phone_no);?></li>
                            <li><div class="icon"><span class="flaticon-printer"></span></div> <h4><?php esc_html_e('Fax', 'charitypro');?></h4><?php echo wp_kses_post($fax_no);?></li>
                            <li><div class="icon"><span class="flaticon-location-marker"></span></div> <h4><?php esc_html_e('Address', 'charitypro');?></h4><?php echo wp_kses_post($address);?></li>
                        </ul>
                    </div>
                    
                </div>
            </div>
            
        </div>
    </div>
</section>
