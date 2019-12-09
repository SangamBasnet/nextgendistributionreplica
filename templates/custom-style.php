<?php 
/**
 * The Custom Style for Perfect Lite
 *
 * Loads the dynamically generated Css in the header of the template.
 *
 * @package Perfect Lite
 * 
 * @since Perfect Lite 1.0
 */
?>
<?php function complete_dynamic_css() { ?>
<?php global $complete; ?>
<style type="text/css">

.header{background-color: <?php echo $complete['header_bg_color'] ?>; background-image: url(<?php echo $complete['header_bg_image'] ?>);}

.sktmore{background-color:<?php echo $complete['global_link_color_id'] ?>;}
.sktmore:hover{background-color:<?php echo $complete['global_link_hvcolor_id'] ?>;}

.perfectbox{background-color:<?php echo $complete['perfect_bg_color'] ?>; border-color:<?php echo $complete['perfect_border_color'] ?>;}
.perfectborder:hover, .perfectbox:hover{border-color:<?php echo $complete['perfect_hover_border_color'] ?> !important;}

/*Home Section 1*/

.home1_section_area .sect-title h2{color:<?php echo $complete['section1_title_color'] ?>;}
.home1_section_area .sect-title h2:after{border-bottom-color:<?php echo $complete['section1_seprator_color'] ?>;}
.home1_section_area{background-color:<?php echo $complete['section1_bgcolor_id'] ?>;}
.home1_section_area_bg{background:url(<?php echo $complete['section1_bg_image'] ?>);}

/*Home Section 2*/
.home2_section_area .sect-title h2{color:<?php echo $complete['section2_title_color'] ?>;}
.home2_section_area .sect-title h2:after{border-bottom-color:<?php echo $complete['section2_seprator_color'] ?>;}
.home2_section_area{background-color:<?php echo $complete['section2_bgcolor_id'] ?>;}
.home2_section_area_bg{background:url(<?php echo $complete['section2_bg_image'] ?>);}


		/*LOGO*/
		.logo img{height:<?php echo $complete['logo_image_height'] ?>; width:<?php echo $complete['logo_image_width'] ?>; margin-top:<?php echo $complete['logo_margin_top'] ?>;} 

		<?php $logofont = $complete['logo_font_id']; ?>
		.logo h2, .logo h1, .logo h2 a:link, .logo h2 a:visited, .logo h1 a:link, .logo h1 a:visited, .logo h2 a:hover, .logo h1 a:hover{ 
			<?php if(!empty($logofont['font-family'])){ ?>font-family:'<?php echo $logofont['font-family']; ?>'; <?php } ?>
			<?php if(!empty($logofont['font-size'])){ ?>font-size:<?php echo $logofont['font-size']; ?>;<?php } ?>
			color:<?php echo $complete['logo_color_id']; ?>;
		}
		/*HEADER TEXT BAR*/
		<?php $tpbtfont = $complete['tpbt_font_id']; ?>
		.head-info-area, .head-info-area a:link, .head-info-area a:visited{ 
			<?php if(!empty($tpbtfont['font-size'])){ ?>font-size:<?php echo $tpbtfont['font-size']; ?>;<?php } ?>
			color:<?php echo $complete['tpbt_color_id']; ?>;
		}	
		
		.head-info-area a:hover{ 
			color:<?php echo $complete['global_link_hvcolor_id']; ?>;
		}		
		
		a:link, a:visited{color:<?php echo $complete['global_link_color_id']; ?>;}
		a:hover{color:<?php echo $complete['global_link_hvcolor_id']; ?>;}
		
		input[type=submit], .widget_border{background-color:<?php echo $complete['global_link_color_id']; ?>;}
		input[type=submit]:hover{background-color:<?php echo $complete['global_link_hvcolor_id']; ?>;}
		
		
		/*Slider Title*/
		<?php $sldttlefont = $complete['sldtitle_font_id']; ?>
		.title{ 
			<?php if(!empty($sldttlefont['font-family'])){ ?>font-family:'<?php echo $sldttlefont['font-family']; ?>'; <?php } ?>
			<?php if(!empty($sldttlefont['font-size'])){ ?>font-size:<?php echo $sldttlefont['font-size']; ?>;<?php } ?>
			color:<?php echo $complete['slidetitle_color_id']; ?>;
		}	
		
		<?php $slddescfont = $complete['slddesc_font_id']; ?>
		.slidedesc{ 
			<?php if(!empty($slddescfont['font-family'])){ ?>font-family:'<?php echo $slddescfont['font-family']; ?>'; <?php } ?>
			<?php if(!empty($slddescfont['font-size'])){ ?>font-size:<?php echo $slddescfont['font-size']; ?>;<?php } ?>
			color:<?php echo $complete['slddesc_color_id']; ?>;
		}	
		
		<?php $sldbtn = $complete['sldbtn_font_id']; ?>
		.slidebtn{ 
			<?php if(!empty($sldbtn['font-family'])){ ?>font-family:'<?php echo $sldbtn['font-family']; ?>'; <?php } ?>
			<?php if(!empty($sldbtn['font-size'])){ ?>font-size:<?php echo $sldbtn['font-size']; ?>;<?php } ?>;
		}
		.slidebtn a{ 
			color:<?php echo $complete['sldbtntext_color_id']; ?>; background-color:<?php echo $complete['global_link_color_id']; ?>;
		}	
		.slidebtn a:hover{background-color:<?php echo $complete['global_link_hvcolor_id']; ?>}	
		.nivo-controlNav a{background-color:<?php echo $complete['global_link_color_id']; ?>}
		.nivo-controlNav a.active{background-color:<?php echo $complete['global_link_hvcolor_id']; ?>}				




<?php if($complete['primtxt_color_id']){ ?>
/*Body Text Color*/
body, .home_cat a, .contact_submit input, .comment-form-comment textarea{ color:<?php echo $complete['primtxt_color_id']; ?>;}
.single_post_content .tabs li a{ color:<?php echo $complete['primtxt_color_id']; ?>;}
.thn_post_wrap .listing-item .moretag{ color:<?php echo $complete['primtxt_color_id']; ?>;}
<?php } ?>	
	


/*USER'S CUSTOM CSS---------------------------------------------------------*/
<?php if ( ! empty ( $complete['custom-css'] ) ) { ?><?php echo stripslashes($complete['custom-css']); ?><?php } ?>
/*---------------------------------------------------------*/
</style>

<!--[if IE]>
<style type="text/css">
.text_block_wrap, .home .lay1, .home .lay2, .home .lay3, .home .lay4, .home .lay5, .home_testi .looper, #footer .widgets{opacity:1!important;}
#topmenu ul li a{display: block;padding: 20px; background:url(#);}
</style>
<![endif]-->
<?php } ?>
<?php add_action( 'wp_head', 'complete_dynamic_css'); ?>