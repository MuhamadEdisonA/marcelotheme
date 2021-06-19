<?php

//Requiring theme customization
require get_template_directory() . '/inc/customizer.php';


function load_scripts(){
    //Load bootstrap-Js
    wp_enqueue_script( 'bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js', array( 'jquery' ), '4.0.0', 'true' );
    //Load bootstrap-CSS
    wp_enqueue_style( 'bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css', array(), '4.0.0', 'all' );
    //Load CSS
    wp_enqueue_style( 'template', get_template_directory_uri() . '/css/template.css', array(), '1.0', 'all' );
}
add_action( 'wp_enqueue_scripts', 'load_scripts' );

//add theme support


//Main configuration function
function learnwp_config(){

    //Registering our menus
    register_nav_menus(
        array(
            'my_main_menu' => 'Main Menu',
            'footer_menu' => 'Footer Menu'
        )
    );

    $args = array(
        'height' => 225,
        'width' => 1920
    );
    add_theme_support( 'custom-header', $args );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'post-formats', array( 'video', 'image' ) );
    add_theme_support( 'title-tag' );

}
add_action( 'after_setup_theme', 'learnwp_config', 0 );

//Registering our sidebar
add_action( 'widgets_init', 'learnwp_sidebars');
function learnwp_sidebars(){
    register_sidebar(
        array(
            'name' => 'Home Page SIdebar',
            'id' => 'sidebar-1',
            'description' => 'This is the Home Page Sidebar. You can add your widgets here.',
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>'
        )
    );
    register_sidebar(
        array(
            'name' => 'Blog SIdebar',
            'id' => 'sidebar-2',
            'description' => 'This is the Blog Page Sidebar. You can add your widgets here.',
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>'
        )
    );
    register_sidebar(
        array(
            'name' => 'Service 1',
            'id' => 'service-1',
            'description' => 'First area service.',
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>'
        )
    );
    register_sidebar(
        array(
            'name' => 'Service 2',
            'id' => 'service-2',
            'description' => 'Second area service.',
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>'
        )
    );
    register_sidebar(
        array(
            'name' => 'Service 3',
            'id' => 'service-3',
            'description' => 'Third area service.',
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>'
        )
    );
    register_sidebar(
        array(
            'name' => 'Social Media Icons',
            'id' => 'social-media',
            'description' => 'Social Media Icon Widget Area. Drag and drop your widget here.',
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>'
        )
    );
}

