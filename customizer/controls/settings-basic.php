<?php
	
	// Register the radio image control class as a JS control type.
	$wp_customize->register_control_type( 'complete_Control_Radio_Image' );


//---------General Color SETTINGS---------------------	

//Site content Text Color
$wp_customize->add_setting( 'complete[primtxt_color_id]', array(
	'type' => 'option',
	'default' => '#2b2b2b',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'primtxt_color_id', array(
				'label' => __('Site content Text Color','complete'),
				'section' => 'general_color_section',
				'settings' => 'complete[primtxt_color_id]',
			) ) );
		
// Link Color
$wp_customize->add_setting( 'complete[global_link_color_id]', array(
	'type' => 'option',
	'default' => '#228fec',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'global_link_color_id', array(
				'label' => __('Default Anchor Color','complete'),
				'section' => 'general_color_section',
				'settings' => 'complete[global_link_color_id]',
			) ) );
			
// Link Hover Color
$wp_customize->add_setting( 'complete[global_link_hvcolor_id]', array(
	'type' => 'option',
	'default' => '#999999',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'global_link_hvcolor_id', array(
				'label' => __('Default Anchor Hover Color','complete'),
				'section' => 'general_color_section',
				'settings' => 'complete[global_link_hvcolor_id]',
			) ) );		
			


//---------------LAYOUT CALLBACK-------------------//
function complete_layout_callback( $control ) {
    $layout_setting = $control->manager->get_setting('complete[site_layout_id]')->value();
     
    if ( $layout_setting == 'site_boxed' ) return true;
     
    return false;
}


//---------------HEADER CALLBACK-------------------//
function complete_transparent_header_callback( $control ) {
    $header_setting = $control->manager->get_setting('complete[head_transparent]')->value();
     
    if ( $header_setting == 1 ) return true;
     
    return false;
}
