<?php

function add_theme_script() {
    wp_enqueue_style('style', get_stylesheet_uri(), array(), '1.0', 'all');
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
    }
}

add_action('after_setup_theme','m2_theme_setup');