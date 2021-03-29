<?php 

function cptui_register_my_cpts() {

	/**
	 * Post Type: Services.
	 */

	$labels = [
		"name" => __( "Services", "custom-post-type-ui" ),
		"singular_name" => __( "Service", "custom-post-type-ui" ),
	];

	$args = [
		"label" => __( "Services", "custom-post-type-ui" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "service", "with_front" => true ],
		"query_var" => true,
		"menu_icon" => "dashicons-clipboard",
		"supports" => [ "title", "editor", "thumbnail", "excerpt" ],
	];

	register_post_type( "service", $args );

	/**
	 * Post Type: Our Team.
	 */

	$labels = [
		"name" => __( "Our Team", "custom-post-type-ui" ),
		"singular_name" => __( "Member", "custom-post-type-ui" ),
	];

	$args = [
		"label" => __( "Our Team", "custom-post-type-ui" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "our-team", "with_front" => true ],
		"query_var" => true,
		"menu_icon" => "dashicons-groups",
		"supports" => [ "title", "editor", "thumbnail" ],
	];

	register_post_type( "our-team", $args );

	/**
	 * Post Type: Testimonials.
	 */

	$labels = [
		"name" => __( "Testimonials", "custom-post-type-ui" ),
		"singular_name" => __( "Testimonial", "custom-post-type-ui" ),
	];

	$args = [
		"label" => __( "Testimonials", "custom-post-type-ui" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "testimonial", "with_front" => true ],
		"query_var" => true,
		"menu_icon" => "dashicons-thumbs-up",
		"supports" => [ "title", "editor", "thumbnail" ],
	];

	register_post_type( "testimonial", $args );
}

add_action( 'init', 'cptui_register_my_cpts' );


?>