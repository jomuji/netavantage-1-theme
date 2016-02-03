<?php

   
//add_action( 'widgets_init', 'netavantage-1_widgets_init' );
// Load Bootstrap stylesheet
wp_enqueue_style( 'netavantage-1', get_template_directory_uri() . '/css/bootstrap.css');
// Load the main stylesheet
wp_enqueue_style( 'netavantage-1-style', get_stylesheet_uri() );

require get_template_directory() . '/inc/customizer.php';