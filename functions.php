<?php

/**
*
* aamn oxygen theme functions and definitions
*@package AAMN OXYGEN
*
*/

//if( ! function_exists("oxygen_function_scripts") ):
//
//function oxygen_function_scripts(){
//    wp_enqueue_style( "oxygen_bootstrap", get_template_directory_uri() . "/css/bootstrap.min.css", array(), "3.3.4", "all" );
//}
//
//add_action( "wp_enqueue_scripts", "oxygen_function_scripts" );
//
//
//endif;


if( ! function_exists('rrf_oxygen_scripts') ):

function rrf_oxygen_scripts(){
    
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.3.4', 'all');
    
    wp_enqueue_style('main', get_template_directory_uri() . '/css/main.css', array(), '3.3.4', 'all');
    
}

add_action( 'wp_enqueue_scripts', 'rrf_oxygen_scripts' );

endif;












































