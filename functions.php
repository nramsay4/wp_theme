<?php

$functions_path = TEMPLATEPATH . '/inc/';

// Register Bootstrap Navigation Walker
include TEMPLATEPATH . '/wp_bootstrap_navwalker.php';

//require_once ($functions_path . 'flex.php');

	function add_scripts(){
		// Load jQuery
		if ( !is_admin() ) {
		     wp_enqueue_script('jquery');
		     
		
  			wp_register_style( 'main-style', '/wp-content/themes/temp/style.css' , array('google-fonts'), filemtime( get_stylesheet_directory() . '/style.css' ), null, 'screen' );
  			
  		
     // Enqueue
		wp_enqueue_style( 'main-style' );
		wp_enqueue_style( 'font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css' );    
		wp_enqueue_style( 'google-fonts', '//fonts.googleapis.com/css?family=Open+Sans:300,400,700,900,300italic,400italic,700italic,900', false );
		}
  }
	add_action('wp_enqueue_scripts','add_scripts');	


  add_theme_support( 'post-thumbnails' );	
	add_theme_support( 'menus' );
	
	// register wp_nav_menu
	add_action( 'init', 'register_my_menus' );
	function register_my_menus() {
		register_nav_menus( array('primary' => __( 'Primary', 'thriveu' )));
	}

	// remove ul wp_nav_menu
	function remove_ul ( $menu ){
	    return preg_replace( array( '#^<ul[^>]*>#', '#</ul>$#' ), '', $menu );
	}
	add_filter( 'wp_nav_menu', 'remove_ul' );
	
	

//Page Slug Body Class
function add_slug_body_class( $classes ) {
	global $post;
	if ( isset( $post ) ) {
	$classes[] = $post->post_type . '-' . $post->post_name;
}
return $classes;
}
add_filter( 'body_class', 'add_slug_body_class' );



if ( function_exists('acf_add_options_page')) {
  $option_page = acf_add_options_page(array(
		'page_title' 	=> 'Global Options',
		'menu_title' 	=> 'Global Options',
		'menu_slug' 	=> 'global_options',
		'capability' 	=> 'edit_posts',
		'redirect' 	=> false
	));

	$option_page = acf_add_options_page(array(
		'page_title' 	=> 'Endorsements',
		'menu_title' 	=> 'Endorsements',
		'menu_slug' 	=> 'coaches',
		'capability' 	=> 'edit_posts',
		'parent_slug' => 'global_options',
		'redirect' 	=> false
	));
	
	$option_page = acf_add_options_page(array(
		'page_title' 	=> 'Photo Gallery Slider',
		'menu_title' 	=> 'Photo Gallery Slider',
		'menu_slug' 	=> 'photo-gallery',
		'capability' 	=> 'edit_posts',
		'parent_slug' => 'global_options',
		'redirect' 	=> false
	));
}

// ADD SVG SUPPORT TO WP-MEDIA
function cc_mime_types($mimes) {
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');




?>
