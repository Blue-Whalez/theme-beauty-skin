<?php

function add_theme_script() {
    wp_enqueue_style( 'font-awesome-style', get_template_directory_uri().'/src/fonts/font-awesome/css/font-awesome.min.css', );    
    wp_enqueue_style('style', get_stylesheet_uri(), array('vendor'), '1.0', 'all');
    wp_enqueue_script('script', get_template_directory_uri() . '/src/js/main.js', array('vendor'), '1.0', true);
    
    wp_enqueue_style('vendor', get_template_directory_uri() . '/src/css/vendor.css', array(), '1.0', 'all');
    wp_enqueue_script('vendor', get_template_directory_uri() . '/src/js/vendor.js', array(), '1.0', true);
    
}

add_action('wp_enqueue_scripts','add_theme_script');


if( ! function_exists('m2t_theme_setup') ) {
    function m2_theme_setup() {
        // Enable support for Post Thumbnails on posts and pages.
        add_theme_support('post-thumbnails');

        // Support Custom Logo
        add_theme_support('custom-logo');

        // Register Primary Menu
        register_nav_menus(
            array(
                'menu-1' => esc_html__('Primary Menu', 'm2t'),
                'menu-2' => esc_html__('Secondary Menu', 'm2t')
            )
        );

        // Classic Editor
        add_filter( 'use_block_editor_for_post', '__return_false' );

    }
}

add_action('after_setup_theme','m2_theme_setup');