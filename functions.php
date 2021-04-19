<?php

function beautyskin_files() {

    if (strstr($_SERVER['SERVER_NAME'], 'hocwp1.local')) {
      wp_enqueue_style( 'font-awesome-style', get_template_directory_uri().'/src/fonts/font-awesome/css/font-awesome.min.css', );    
      wp_enqueue_script('main-js', 'http://localhost:3000/bundled.js', NULL, '1.0', true);
    } else {
      wp_enqueue_style( 'font-awesome-style', get_template_directory_uri().'/src/fonts/font-awesome/css/font-awesome.min.css', );    
      wp_enqueue_script('vendors-js', get_theme_file_uri('/dist/vendors~scripts.3f506ba6b128de71c108.js'), NULL, '1.0', true);
      wp_enqueue_script('main-js', get_theme_file_uri('/dist/scripts.3848c357d6c642f86df9.js'), NULL, '1.0', true);
      wp_enqueue_style('main-styles', get_theme_file_uri('/dist/styles.3848c357d6c642f86df9.css'));
    }

  }
  
add_action('wp_enqueue_scripts', 'beautyskin_files');

// Theme Setup
if( ! function_exists('m2t_theme_setup') ) {

    function m2_theme_setup() {
        
		// Make theme available for translation.
		load_theme_textdomain( 'beautyskin', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

        // Let WordPress manage the document title.
        add_theme_support( 'title-tag' );

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
        
        // Add widgets support
        add_theme_support( 'widgets' );

        // Classic Editor
        add_filter( 'use_block_editor_for_post', '__return_false' );

    }
}

add_action('after_setup_theme','m2_theme_setup');

/**
 * Custom Post Type: service, our-team, testimonial
 */
require get_template_directory() . '/inc/custom-post-type.php';

require get_template_directory() . '/inc/helpers.php';

require get_template_directory() . '/inc/widgets.php';
