<?php 
/**
 * Register Footer widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
if( ! function_exists( 'bk_footer_widgets_init' ) ) {
    function bk_footer_widgets_init() {
        register_sidebar( array(
            'name'          => __( 'Footer Area', 'beautyskin' ),
            'id'            => 'sidebar-1',
            'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'beautyskin' ),
            'before_widget' => '<li id="%1$s" class="widget %2$s">',
            'after_widget'  => '</li>',
            'before_title'  => '<h3 class="widgettitle">',
            'after_title'   => '</h3>',
        ) );
    }
}
add_action( 'widgets_init', 'bk_footer_widgets_init' );

?>