<?php $options = _WSH()->option();
	charitypro_bunch_global_variable();
	$icon_href = (charitypro_set( $options, 'site_favicon' )) ? charitypro_set( $options, 'site_favicon' ) : get_template_directory_uri().'/images/favicon.ico';
 ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<?php if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ):?>
	<link rel="shortcut icon" href="<?php echo esc_url($icon_href);?>" type="image/x-icon">
	<link rel="icon" href="<?php echo esc_url($icon_href);?>" type="image/x-icon">
<?php endif;?>
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

<script>var theme_path = '<?php echo get_template_directory_uri(); ?>';</script>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="page-wrapper">
 	
    <?php if(charitypro_set($options, 'preloader')):?>
		<!-- Preloader -->
		<div class="preloader"></div>
	<?php endif;?>
 	
    <?php $header = charitypro_set($options, 'header_style');
	  $header = (charitypro_set($_GET, 'header_style')) ? charitypro_set($_GET, 'header_style') : $header;
	  switch($header){
	  	case "header_v1":
			get_template_part('includes/modules/header_v1');
			break;
		default:
			get_template_part('includes/modules/header_v2');
		} 	
	?>