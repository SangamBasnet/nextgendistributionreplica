<?php
function complete_customizer_register( $wp_customize ) {
	
require(get_template_directory() . '/customizer/includes/control-toggle.php');
require(get_template_directory() . '/customizer/includes/control-info.php');
require(get_template_directory() . '/customizer/includes/control-editor.php');
require(get_template_directory() . '/customizer/includes/control-multicheck.php');
require(get_template_directory() . '/customizer/includes/control-radioimg.php');
require(get_template_directory() . '/customizer/includes/helpers.php');

//========================= ADD PANELS==============================
	$wp_customize->add_panel( 'basic_panel', array(
		'priority' => 1,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'Basic', 'complete' ),
	) );
	
	$wp_customize->add_panel( 'header_panel', array(
		'priority' => 1,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'Header', 'complete' ),
	) );

	
	$wp_customize->add_panel( 'front_panel', array(
		'priority' => 1,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'Front Page', 'complete' ),
	) );
	
	$wp_customize->add_panel( 'footer_panel', array(
		'priority' => 1,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'Footer', 'complete' ),
	) );
	
//========================= ADD SECTIONS==============================

        $wp_customize->add_section( 'general_color_section', array(
            'title'       => __( 'Colors Options', 'complete' ),
            'priority'    => 10,
            'panel'       => 'basic_panel',
        ) );
		
        $wp_customize->add_section( 'customcode_section', array(
            'title'       => __( 'Custom CSS', 'complete' ),
            'priority'    => 10,
            'panel'       => 'basic_panel',
        ) );		
		
        $wp_customize->add_section( 'headtopbar_section', array(
            'title'       => __( 'Topbar', 'complete' ),
            'priority'    => 10,
            'panel'       => 'header_panel',
        ) );
		
        $wp_customize->add_section( 'headheader_section', array(
            'title'       => __( 'Header', 'complete' ),
            'priority'    => 10,
            'panel'       => 'header_panel',
        ) );
		
        $wp_customize->add_section( 'headlogo_section', array(
            'title'       => __( 'Site Title & Logo', 'complete' ),
            'priority'    => 10,
            'panel'       => 'header_panel',
        ) );

        $wp_customize->add_section( 'slider_section', array(
            'title'       => __( 'Slider', 'complete' ),
            'priority'    => 10,
            'panel'       => 'front_panel',
        ) );

        $wp_customize->add_section( 'home_sections1', array(
            'title'       => __( 'Home Section 1', 'complete' ),
            'priority'    => 10,
            'panel'       => 'front_panel',
        ) );
		
        $wp_customize->add_section( 'home_sections2', array(
            'title'       => __( 'Home Section 2', 'complete' ),
            'priority'    => 10,
            'panel'       => 'front_panel',
        ) );																									
				
        $wp_customize->add_section( 'frontpage_section', array(
            'title'       => __( 'Front Page Settings', 'complete' ),
            'priority'    => 10,
            'panel'       => 'front_panel',
        ) );
		
        $wp_customize->add_section( 'footer_columns_section', array(
            'title'       => __( 'Footer Columns', 'complete' ),
            'priority'    => 10,
            'panel'       => 'footer_panel',
        ) );


$wp_customize->remove_section( 'background_image' );
$wp_customize->get_control( 'background_color'  )->section	= 'general_color_section';
$wp_customize->get_control( 'background_image'  )->section	= 'general_color_section';
$wp_customize->get_control( 'background_color' )->label = __('Site Background Color','complete');
$wp_customize->get_control( 'background_image' )->label = __('Site Background Image','complete');
$wp_customize->get_control( 'background_color' )->description = __('Does not affect the front page if the Site Layout is set to Full-Width.','complete');
$wp_customize->get_control( 'background_image' )->description = __('Does not affect the front page if the Site Layout is set to Full-Width.','complete');
$wp_customize->get_section( 'title_tagline'  )->panel		= 'basic_panel';

if($wp_customize->get_section( 'static_front_page'  )){
	$wp_customize->get_section( 'static_front_page'  )->panel	= 'front_panel';
}
if($wp_customize->get_section( 'color'  )){
	$wp_customize->get_section( 'color'  )->panel		= 'basic_panel';
}

$wp_customize->get_control( 'blogname' )->section	= 'headlogo_section';
$wp_customize->get_control( 'blogdescription' )->section	= 'headlogo_section';
$wp_customize->get_setting( 'blogname' )->transport	= 'postMessage';
$wp_customize->get_setting( 'blogdescription' )->transport	= 'postMessage';


//Wordpress 4.7+ Remove Wordpress's own custom css 
$wp_customize->remove_section( 'custom_css' );

//Integer
function complete_sanitize_integer( $input ) {
    if( is_numeric( $input ) ) {
        return intval( $input );
    }
}

//--------------------INCLUDE CONTROLS
require(get_template_directory() . '/customizer/controls/settings-basic.php');
require(get_template_directory() . '/customizer/controls/settings-header.php');
require(get_template_directory() . '/customizer/controls/settings-frontpage.php');
require(get_template_directory() . '/customizer/controls/settings-footer.php');
require(get_template_directory() . '/customizer/controls/settings-misc.php');
require(get_template_directory() . '/customizer/controls/settings-shortcodes.php');
require(get_template_directory() . '/customizer/controls/settings-code.php');
}
add_action( 'customize_register', 'complete_customizer_register' );
 
//==========================ENQEUE CSS & JS FILES===============================

function complete_live_preview()
{
	wp_enqueue_script(  'complete-live', get_template_directory_uri().'/customizer/assets/live.js',array( 'jquery','customize-preview' ),true);
}
add_action( 'customize_preview_init', 'complete_live_preview' );



function enqueue_customizer_scripts(){
	wp_enqueue_script( 'jquery-ui-tooltip' );
	wp_enqueue_script( 'hoverIntent' );
    wp_enqueue_style( 'complete-customizer-css', get_template_directory_uri().'/customizer/assets/customizer.css', 'customizer-css');
	wp_enqueue_script('complete-customizer-js',get_template_directory_uri().'/customizer/assets/customizer.js', array('customize-controls'), true);
	
	//Wordpress 4.7 FIXES
	if ( function_exists( 'wp_update_custom_css_post' ) ) {  $wp4_7 = 'wp4_7';  }else{  $wp4_7 = '';  }	
	
	wp_localize_script( 'complete-customizer-js', 'objectL10n', array(
		'sitettfont' => __( 'Site Title Font', 'complete' ),
		'tpbarfont' => __( 'Topbar Font', 'complete' ),
		'sldefont' => __( 'Slider Font Typography & Colors', 'complete' ),
		'menufont' => __( 'Headings and Post Titles Font', 'complete' ),
		'mnufont' => __( 'Menu Font', 'complete' ),
		'logofont' => __( 'Site Content Font', 'complete' ),
		'globalh1' => __( 'For H1', 'complete' ),
		'globalh2' => __( 'For H2', 'complete' ),
		'globalh3' => __( 'For H3', 'complete' ),
		'globalh4' => __( 'For H4', 'complete' ),
		'globalh5' => __( 'For H5', 'complete' ),
		'globalh6' => __( 'For H6', 'complete' ),
		'image' => __( 'Image', 'complete' ),
		'button1' => __( 'Button 1', 'complete' ),
		'button2' => __( 'Button 2', 'complete' ),
		'slideshow' => __( 'Slideshow', 'complete' ),
		'video' => __( 'Video', 'complete' ),
		'switchtheme' => __( 'Switch Theme', 'complete' ),
		'widgetareas' => __( 'Your Sidebars', 'complete' ),
		'statictitle' => __( 'Static Slide Settings', 'complete' ),
		'nivotitle' => __( 'Nivo / Accordion Slider Settings', 'complete' ),
		'wp4_7' => $wp4_7,
) );
}
add_action( 'customize_controls_enqueue_scripts', 'enqueue_customizer_scripts' );


include_once(get_template_directory() . '/customizer/extra.php');