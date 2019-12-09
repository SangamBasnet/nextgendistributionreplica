<?php
function complete_option_defaults() {
	$defaults = array(
		'converted' => '',
		'site_layout_id' => 'site_full',
		'single_post_layout_id' => 'single_layout1',
		'header_layout_id' => 'header_layout1',
		'center_width' => 83.50,
		'content_bg_color' => '#ffffff',
		'divider_icon' => 'fa-stop',
		'head_transparent' => '',
		'trans_header_color' => '#fff',
		'totop_id' => '1',
		'footer_text_id' => __('Copyright 2017 SKT Perfect Lite | All Rights Reserved.', 'complete'),
		'phntp_text_id' => __('<i class="fa fa-phone"></i> 12 8888 6666', 'complete'),
		'emltp_text' => __('<a href="mailto:info@sitename.com"><i class="fa fa-envelope"></i>info@sitename.com </a>', 'complete'),
		'sintp_text' => __('<a href="#"><i class="fa fa-user"></i> Sign In</a>', 'complete'),
		'suptp_text' => __('<a href="#"><i class="fa fa-pencil"></i>Sign Up </a>', 'complete'),
		'footmenu_id' => '1',
		'copyright_center' => '',
		
		'header_bg_color' => '#ffffff',
		'header_bg_image' => '',
		
		'custom_slider' => '',
		
		'slider_type_id' => 'static',
		
		'slideefect' => 'fade',
		'slideanim' => '500',
		'slidepause' => '4000',
		'slidenav' => 'true',
		'slidepage' => 'true',
		
		'n_slide_time_id' => '6000',
		'slide_height' => '500px',
		'slidefont_size_id' => '36px',
		'slider_txt_hide' => '',

		'post_info_id' => '1',
		'post_nextprev_id' => '1',
		'post_comments_id' => '1',
		'page_header_color' => '#545556',
		'pageheader_bg_image' => '',
		'hide_pageheader' => '',
		'page_header_txtcolor' => '#555555',
		
		'post_header_color' => '#545556',
		'postheader_bg_image' => '',
		'hide_postheader' => '',		

		'blog_cat_id' => '',
		'blog_num_id' => '9',
		'blog_layout_id' => '',
		'show_blog_thumb' => '1',
		
		'sec_color_id' => '#228fec',
		'mnbg_color_id' => '#228fec',
		'submnu_textcolor_id' => '#000000',
		'submnbg_color_id' => '#ffffff',
		'mnshvr_color_id' => '#f0f0f0',
		'mobbg_color_id' => '#383939',
		'mobbgtop_color_id' => '#228fec',
		'mobmenutxt_color_id' => '#FFFFFF',
		
		'mobtoggle_color_id' => '#000000',
		'mobtoggleinner_color_id' => '#FFFFFF',
		
		'sectxt_color_id' => '#FFFFFF',
		'content_font_id' =>  array('font-family' => 'Lato', 'font-size' => '14px'),
		'primtxt_color_id' => '#2b2b2b',
		'logo_image_id' => array(  'url'=>''.get_template_directory_uri().'/assets/images/logo.png'),
		'logo_font_id' => array('font-family' => 'Open Sans', 'font-size' => '30px'),
		'logo_color_id' => '#228fec',
		
		'logo_image_height' => '46px;',
		'logo_image_width' => '106px;',
		'logo_margin_top' => '14px;',
		
		'tpbt_font_id' => array('font-family' => 'Lato', 'font-size' => '14px'),
		'tpbt_color_id' => '#ffffff',
		'tpbt_hvcolor_id' => '#edecec',	
		
		'sldtitle_font_id' => array('font-family' => 'Lato', 'font-size' => '38px'),
		'slddesc_font_id' => array('font-family' => 'Roboto', 'font-size' => '14px'),
		'sldbtn_font_id' => array('font-family' => 'Lato', 'font-size' => '14px'),
		
		'slidetitle_color_id' => '#ffffff',	
		'slddesc_color_id' => '#ffffff',	
		'sldbtntext_color_id' => '#ffffff',
		'sldbtn_color_id' => '#228fec',
		'sldbtn_hvcolor_id' => '#ff8800',	
		
		'slide_pager_color_id' => '#ffffff',	
		'slide_active_pager_color_id' => '#228fec',	
		
			
		'global_link_color_id' => '#228fec',
		'global_link_hvcolor_id' => '#ff8800',		
		
		'global_h1_color_id' => '#282828',
		'global_h1_hvcolor_id' => '#228fec',	
		'global_h2_color_id' => '#282828',
		'global_h2_hvcolor_id' => '#228fec',
		'global_h3_color_id' => '#282828',
		'global_h3_hvcolor_id' => '#228fec',
		'global_h4_color_id' => '#282828',
		'global_h4_hvcolor_id' => '#228fec',
		'global_h5_color_id' => '#282828',
		'global_h5_hvcolor_id' => '#228fec',
		'global_h6_color_id' => '#282828',
		'global_h6_hvcolor_id' => '#228fec',	
		
		'post_meta_color_id' => '#282828',
		'team_box_color_id' => '#f7f7f7',
		
		'social_text_color_id' => '#ffffff',
		'social_icon_color_id' => '#545556',
		'social_hover_icon_color_id' => '#228fec',

		'global_h1_font_id' => array('font-family' => 'Lato', 'font-size' => '32px'),
		'global_h2_font_id' => array('font-family' => 'Lato', 'font-size' => '28px'),
		'global_h3_font_id' => array('font-family' => 'Lato', 'font-size' => '20px'),
		'global_h4_font_id' => array('font-family' => 'Lato', 'font-size' => '13px'),
		'global_h5_font_id' => array('font-family' => 'Lato', 'font-size' => '11px'),
		'global_h6_font_id' => array('font-family' => 'Lato', 'font-size' => '9px'),
		
		'head_bg_trans' => '1',
		'head_color_id' => '#ffffff',
		'head_info_color_id' => '#383939',
		'header_border_color' => '#dddddd',
		'menutxt_color_id' => '#282828',
		'menutxt_color_hover' => '#238ee7',
		'menutxt_color_active' => '#238ee7',
		'menu_size_id' => '15px',
		'sidebar_color_id' => '#FFFFFF',
		'sidebarborder_color_id' => '#eeeff5',
		'sidebar_tt_color_id' => '#666666',
		'sidebartxt_color_id' => '#999999',
		'sidebarlink_color_id' => '#228fec',
		'sidebarlink_hover_color_id' => '#999999',
		'divider_color_id' => '#8c8b8b',
		'wgttitle_size_id' => '16px',
 
		'footer_color_id' => '#1d1d1d',
		'footwdgtxt_color_id' => '#757575',
		'footer_title_color' => '#ffffff',
		'ptitle_font_id' =>  array('font-family' => 'Lato', 'subsets'=>'latin'),
		'mnutitle_font_id' =>  array('font-family' => 'Lato', 'subsets'=>'latin'),
		'title_txt_color_id' => '#666666',
		'link_color_id' => '#3590ea',
		'link_color_hover' => '#1e73be',
		'txt_upcase_id' => '',
		'mnutxt_upcase_id' => '',
		'copyright_bg_color' => '#161616',
		'copyright_txt_color' => '#f8f8f8',
		
		'page-setting1' => '0',
		'page-setting2' => '0',
		'hide_boxes' => '',
		
		//Home Section1
		'section1_bgcolor_id' => '#ffffff',
		'section1_bg_image' => '',
		'section1_bg_video' => '',
		'hide_boxes_section1' => '',
		//Home Section1
		
		//Home Section2
		'section2_bgcolor_id' => '',
		'section2_bg_image' => ''.get_template_directory_uri().'/images/section-2-bg.jpg',
		'section2_bg_video' => '',
		'hide_boxes_section2' => '',
		//Home Section2	
		
		//Footer Column 1
		'foot_cols1_title' => __('ABOUT PERFECT', 'complete'),
		'foot_cols1_content' => '<p>Aliquam porta tincidunt enim. Sed temporing nulla sedding facilis egestas, lorem lacus and elementum mi, malesuada ornare ipsum erat convallis ipsum orem lacus elementum porta tincidunt enim.</p><p>Aenean ac convallis nibh. In non arcu vel lacus fringilla tempus. Nullam dictum placerat nisi...</p>',
		//Footer Column 1	
		
		//Footer Column 2
		'foot_cols2_title' => __('NAVIGATION', 'complete'),
		'foot_cols2_content' => '<div class="footmenu"><ul>
	<li><a href="#">Home</a></li>
    <li><a href="#">Blog</a></li>
    <li><a href="#">Gallery</a></li>
    <li><a href="#">My Account</a></li>
    <li><a href="#">Shortcodes</a></li>
    <li><a href="#">About Us</a></li>
	<li><a href="#">Contact</a></li>
	<li><a href="#">Shop</a></li>
	<li><a href="#">Checkout</a></li>
	<li><a href="#">Services</a></li>
</ul></div>',
		//Footer Column 2	
		
		//Footer Column 3
		'foot_cols3_title' => __('QUICK CONTACT', 'complete'),
		'foot_cols3_content' => '<p>Etiam aliquet dictum risus, a pharetra tortor blandit eget. Praesent nec dictum dolor, eget faucibus neque.</p><div class="spacecode" style="height:20px;"></div> Phone:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; +1 500 000 0000<br>E-mail:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;demo@lorem.com<br>Website:&nbsp;&nbsp;&nbsp;&nbsp;http://demo.com',
		//Footer Column 3
		
		//Footer Column 4
		'foot_cols4_title' => __('GET IN TOUCH', 'complete'),
		'foot_cols4_content' => '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>[social_area]
    [social icon="facebook" link="#"]
    [social icon="twitter" link="#"]
    [social icon="google-plus" link="#"]	
    [social icon="linkedin" link="#"]
    [social icon="pinterest" link="#"]
[/social_area]',

		//Footer Column 4																
		'social_button_style' => 'simple',
		'social_show_color' => '',
		'social_bookmark_pos' => 'footer',
		'social_bookmark_size' => 'normal',
		'social_single_id' => '1',
		'social_page_id' => '',
		
		'post_lightbox_id' => '1',
		'post_gallery_id' => '1',
		'cat_layout_id' => '4',
		'hide_mob_slide' => '',
		'hide_mob_rightsdbr' => '',
		'hide_mob_page_header' => '1',
		'custom-css' => '',
	);
	
      $options = get_option('complete',$defaults);

      //Parse defaults again - see comments
      $options = wp_parse_args( $options, $defaults );

	return $options;
}?>