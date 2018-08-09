<?php
$options = _WSH()->option();
    get_header(); 
?>

<!--Page Title-->
<section class="page-title">
    <div class="auto-container">
        <div class="inner-box">
            <h1><?php esc_html_e('404', 'charitypro');;?></h1>
            
            <?php echo wp_kses_post(charitypro_get_the_breadcrumb()); ?>
        </div>
    </div>
</section>
<!--End Page Title-->

<!--Error Section-->
<section class="eror-section" style="background-image:url(<?php echo get_template_directory_uri();?>/images/resource/error-bg.jpg)">
    <div class="auto-container">
        <h2><?php esc_html_e('404', 'charitypro');?></h2>
        <h4><?php esc_html_e('Oops! Page Not Found', 'charitypro');?></h4>
        <div class="text"><?php esc_html_e('The page you were looking for could not be found.', 'charitypro');?></div>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="theme-btn btn-style-four"><?php esc_html_e('&nbsp; BACK TO HOME', 'charitypro');?> </a>
    </div>
</section>
<!--Error Section-->
  		
<?php get_footer(); ?>