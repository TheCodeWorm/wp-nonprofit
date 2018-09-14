<?php /* Template Name: KC Page */
	get_header() ;
	$meta = _WSH()->get_meta('_bunch_header_settings');
	$bg = charitypro_set($meta, 'header_img');
	$title = charitypro_set($meta, 'header_title');
?>
<?php if(charitypro_set($meta, 'breadcrumb')):?>
	
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

<?php endif;?>
<?php while( have_posts() ): the_post(); ?>
    <?php the_content(); ?>
<?php endwhile;  ?>
<?php get_footer() ; ?>