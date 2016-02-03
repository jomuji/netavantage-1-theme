<?php

$args = array(
    'flex-width'    => true,
	'width'         => 1620,
    'flex-height'    => true,
	'height'        => 1080,
	'default-image' => get_template_directory_uri() . '/assets/images/netavantage.png',
    'section' => 'header_settings_section',
);
add_theme_support( 'custom-header', $args );

function netav_customize_register( $wp_customize ) {
    $wp_customize->add_setting( 'netav_logo' ); // Add setting for logo uploader
         
    // Add control for logo uploader (actual uploader)
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'netav_logo', array(
        'label'    => __( 'Upload Logo (replaces text)', 'netav' ),
        'section'  => 'title_tagline',
        'settings' => 'netav_logo',
    ) ) );
}
add_action( 'customize_register', 'netav_customize_register' );

/*Customizer Code HERE*/

function theme_header_customizer($wp_customize){
    //adding section in wordpress customizer   
    $wp_customize->add_section('header_settings_section', array(
      'title'          => 'Header Text Section'
     ));
    //adding setting for footer text area
    $wp_customize->add_setting('text_setting', array(
     'default'        => 'Default Text For Header Section',
     ));
    $wp_customize->add_control('text_setting', array(
        'label'   => 'Header Text Here',
        'section' => 'header_settings_section',
        'type'    => 'textarea',
    ));
}
add_action('customize_register', 'theme_header_customizer');


