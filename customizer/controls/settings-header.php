<?php

//============================HEADER - LOGO SECTION=================================

//LOGO UPLOAD FIELD
$wp_customize->add_setting( 'complete[logo_image_id][url]',array( 
	'type' => 'option',
	'default' => ''. get_template_directory_uri().'/assets/images/logo.png',
	'sanitize_callback' => 'esc_url_raw',
	)
);

			$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'logo_image_id',array(
					'label'       => __( 'Logo Image *', 'complete' ),
					'section'     => 'headlogo_section',
					'settings'    => 'complete[logo_image_id][url]',
					//'description' => __('This image will replace the text logo.','complete'),
						)
					)
			);
			
// Logo Image Height
$wp_customize->add_setting('complete[logo_image_height]', array(
	'type' => 'option',
	'default' => '46px',
	'sanitize_callback' => 'sanitize_text_field',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control('logo_image_height', array(
				'type' => 'text',
				'label' => __('Image Height','complete'),
				'section' => 'headlogo_section',
				'settings' => 'complete[logo_image_height]',
							'input_attrs'	=> array(
								'class'	=> 'mini_control',
							)
			) );
			
// Logo Image Width
$wp_customize->add_setting('complete[logo_image_width]', array(
	'type' => 'option',
	'default' => '106px',
	'sanitize_callback' => 'sanitize_text_field',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control('logo_image_width', array(
				'type' => 'text',
				'label' => __('Image Width','complete'),
				'section' => 'headlogo_section',
				'settings' => 'complete[logo_image_width]',
							'input_attrs'	=> array(
								'class'	=> 'mini_control',
							)
			) );	
			
// Logo Margin Top
$wp_customize->add_setting('complete[logo_margin_top]', array(
	'type' => 'option',
	'default' => '14px',
	'sanitize_callback' => 'sanitize_text_field',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control('logo_margin_top', array(
				'type' => 'text',
				'label' => __('Logo Margin Top','complete'),
				'section' => 'headlogo_section',
				'settings' => 'complete[logo_margin_top]',
							'input_attrs'	=> array(
								'class'	=> 'mini_control',
							)
			) );							
//============================ TOP BAR TEXT SECTION=================================

//Top Bar Left Phone Text
$wp_customize->add_setting('complete[phntp_text_id]', array(
	'type' => 'option',
	'default' => __('<i class="fa fa-phone"></i> 12 8888 6666','complete'),
	'sanitize_callback' => 'wp_kses_post',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control(	new WP_Customize_Textarea_Control( $wp_customize, 'phntp_text_id', array( 
				'type' => 'textarea',
				'label' => __('Topbar Left Text 1','complete'), // Phone Number
				'section' => 'headheader_section',
				'settings' => 'complete[phntp_text_id]',
			)) );
			
			
//Top Bar Left Email Text
$wp_customize->add_setting('complete[emltp_text]', array(
	'type' => 'option',
	'default' => __('<a href="mailto:info@sitename.com"><i class="fa fa-envelope"></i>info@sitename.com </a>','complete'),
	'sanitize_callback' => 'wp_kses_post',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control(	new WP_Customize_Textarea_Control( $wp_customize, 'emltp_text', array( 
				'type' => 'textarea',
				'label' => __('Topbar Left Text 2','complete'),
				'section' => 'headheader_section',
				'settings' => 'complete[emltp_text]',
			)) );	
			
			
//Top Bar Right Sign Up
$wp_customize->add_setting('complete[suptp_text]', array(
	'type' => 'option',
	'default' => __('<a href="#"><i class="fa fa-pencil"></i>Sign Up </a>','complete'),
	'sanitize_callback' => 'wp_kses_post',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control(	new WP_Customize_Textarea_Control( $wp_customize, 'suptp_text', array( 
				'type' => 'textarea',
				'label' => __('Topbar Right Text 1','complete'), 
				'section' => 'headheader_section',
				'settings' => 'complete[suptp_text]',
			)) );
			
						
//Top Bar Right Sign In
$wp_customize->add_setting('complete[sintp_text]', array(
	'type' => 'option',
	'default' => __('<a href="#"><i class="fa fa-user"></i> Sign In</a>','complete'),
	'sanitize_callback' => 'wp_kses_post',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control(	new WP_Customize_Textarea_Control( $wp_customize, 'sintp_text', array( 
				'type' => 'textarea',
				'label' => __('Topbar Right Text 2','complete'), 
				'section' => 'headheader_section',
				'settings' => 'complete[sintp_text]',
			)) );
			
//============================ Header Image/Background =================================

// Header Background Color
	$wp_customize->add_setting( 'complete[header_bg_color]', array(
		'type' => 'option',
		'default' => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport' => 'postMessage',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_bg_color', array(
		'label' => __('Header Background Color','complete'),
		'section' => 'headheader_section',
		'settings' => 'complete[header_bg_color]',
	) ) );

// Header Background Image
	$wp_customize->add_setting( 'complete[header_bg_image]',array( 
		'type' => 'option',
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',
		)
	);
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'header_bg_image',array(
			'label'       => __( 'Header Background Image', 'complete' ),
			'section'     => 'headheader_section',
			'settings'    => 'complete[header_bg_image]'
				)
			)
	);
	