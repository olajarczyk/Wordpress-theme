<?php

function aleksandrajarczyk_theme_support(){
//Adds dynamic title site

add_theme_support('title_tag');
add_theme_support('custom-logo');
add_theme_support('post-thumbnails');
set_post_thumbnail_size( 600, 600 );

}

add_action('after_setup_theme', 'aleksandrajarczyk_theme_support');

function aleksandrajarczyk_menus(){
    $locations = array(
        'primary' => 'Desktop Primary Left Sidebar', 
        'footer' => 'Footer Menu Items'
    );

    register_nav_menus($locations);
}

add_action('init', 'aleksandrajarczyk_menus');

//Register Styles
$version = wp_get_theme()->get('Version');
function aleksandrajarczyk_register_styles(){
    wp_enqueue_style('aleksandrajarczyk-style', get_template_directory_uri()."/style.css", array('aleksandrajarczyk-bootsrap'));
    wp_enqueue_style('aleksandrajarczyk-bootsrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(), '4.4.1', 'all');
    wp_enqueue_style('aleksandrajarczyk-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), '5.13.0', 'all');

}  

add_action('wp_enqueue_scripts', 'aleksandrajarczyk_register_styles');

//Register Scripts
function aleksandrajarczyk_register_scripts(){
    wp_enqueue_script('aleksandrajarczyk-jquery', "https://code.jquery.com/jquery-3.4.1.slim.min.js", array(), '3.4.1', true);
    wp_enqueue_script('aleksandrajarczyk-popper', "https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js", array(), '1.16.0', true);
    wp_enqueue_script('aleksandrajarczyk-bootsrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js", array(), '4.4.1', true);
    wp_enqueue_script('aleksandrajarczyk-bootsrap', get_template_directory_uri()."/assets/js/main.js", array(), '3.4.1', true);

}  

add_action('wp_enqueue_scripts', 'aleksandrajarczyk_register_scripts');

function aleksandrajarczyk_widget_areas(){

    register_sidebar(
        array(
            'before_title' => '',
            'after_title' => '',
            'before_widget' => '<ul class="social-list list-inline py-3 mx-auto">',
            'after_widget' => '</ul>',
            'name' => 'Sidebar Area',
            'id' => 'sidebar-1', 
            'description' => 'Sidebar Widget Area'
        )
        );

        register_sidebar(
            array(
                'before_title' => '',
                'after_title' => '',
                'before_widget' => '<ul class="social-list list-inline py-3 mx-auto">',
                'after_widget' => '</ul>',
                'name' => 'Footer Area',
                'id' => 'footer-1', 
                'description' => 'Footer Area'
            )
            );
}

add_action('widgets_init', 'aleksandrajarczyk_widget_areas');


?>