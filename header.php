<?php 
/**
 * The Header for Perfect Lite
 *
 * Displays all of the <head> section and everything
 *
 * @package Perfect Lite
 * 
 * @since SKT Perfect Lite 1.0
 */
/*OPTION DEFAULTS*/ 
global $complete;
$complete = complete_option_defaults();
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo( 'charset' ); ?>" />	
<?php // Google Chrome Frame for IE ?>
<!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
<meta name="viewport" content="width=device-width, initial-scale=1.1"/>
<link rel="profile" href="http://gmpg.org/xfn/11"/>
<link href="https://fonts.googleapis.com/css?family=Open+Sans:100|Raleway&display=swap" rel="stylesheet">
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" /> 
<?php wp_head(); ?>
</head>

<body <?php body_class();?>>
<!--HEADER-->
<div class="header_wrap layer_wrapper">
	<?php 
		$headertype = $complete['header_layout_id']; 
		$typenum = preg_replace("/[^0-9]/","",$headertype);
	?>
	<?php get_template_part('templates/head','type'.$typenum); ?>
</div><!--layer_wrapper class END-->

<!--Slider START-->
    <?php if (is_front_page()) { ?>
        <div id="slidera" class="layer_wrapper <?php if(!empty($complete['hide_mob_slide'])){ echo 'mobile_hide_slide';} ?>">
            <?php $slidertype = $complete['slider_type_id']; ?>
            <?php get_template_part('frontpage/slider',''.$slidertype.''); ?>
        </div> 
      <?php } ?> 
<!--Slider END-->