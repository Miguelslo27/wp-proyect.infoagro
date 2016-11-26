<?php

if (!current_user_can('manage_options')) {
    show_admin_bar(false);
}

remove_filter('the_content', 'wpautop');
remove_filter('the_excerpt', 'wpautop');

add_theme_support( 'post-thumbnails' ); 

if (!function_exists('book_rev_lite_theme_setup')) {
	function book_rev_lite_theme_setup() { 
		// Takes care of the <title> tag.
		add_theme_support('title-tag');

		// Add theme support for custom logo.
		add_theme_support( 'custom-logo' );

		// Make theme available for translation
		load_theme_textdomain('book-rev-lite', get_template_directory() . '/languages');

		// Add theme support for featured images.
		add_theme_support( 'post-thumbnails' ); 

		// Add theme support for automatic feed links in the header.
		add_theme_support( 'automatic-feed-links' );

		// register menus
		// register_nav_menus( array(
		//     'primary' => __( 'Primary Header Menu', 'book-rev-lite' ),
		// 	'secondary' => __( 'Top Bar Menu', 'book-rev-lite' ),
		// ));

		// Setup theme customizer settings & controls.
		require_once(get_template_directory() . "/inc/cc_settings.php");
		require_once(get_template_directory() . '/inc/customizer-info/class/class-singleton-customizer-info-section.php' );
	}	
}

?>