<?php
/**
 * Enqueue all styles and scripts
 *
 * Learn more about enqueue_script: {@link https://codex.wordpress.org/Function_Reference/wp_enqueue_script}
 * Learn more about enqueue_style: {@link https://codex.wordpress.org/Function_Reference/wp_enqueue_style }
 *
 * @package WordPress
 * @subpackage breeyn
 * @since breeyn 1.0.0
 */

if ( ! function_exists( 'breeyn_scripts' ) ) :
	function breeyn_scripts() {

		// Enqueue the main Stylesheet.
		wp_enqueue_style( 'stylescss', get_stylesheet_directory_uri() . '/style.css' );

		// Enqueue scripts js
		wp_enqueue_script( 'scriptsjs', get_template_directory_uri() . '/js/scripts.js', array(), '1.0.0', false );

		// Deregister the jquery version bundled with WordPress.
		wp_deregister_script( 'jquery' );

		// Modernizr is used for polyfills and feature detection. Must be placed in header. (Not required).
		// wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/bower_components/foundation-sites/dist/modernizr.js', array(), '2.8.3', false );

		// Fastclick removes the 300ms delay on click events in mobile environments. Must be placed in header. (Not required).
		// wp_enqueue_script( 'fastclick', get_template_directory_uri() . '/js/vendor/fastclick.js', array(), '1.0.0', false );

		// CDN hosted jQuery placed in the header, as some plugins require that jQuery is loaded in the header.
		// wp_enqueue_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js', array(), '2.1.0', true );

		// if( is_front_page() ){
		// 	add_action( 'wp_print_scripts', 'my_deregister_javascript', 100 );
		// 	function my_deregister_javascript() {
		// 	  wp_deregister_script('photoswipe');
		// 	  wp_deregister_script('photoswipe-masonry-js');
		// 	  wp_deregister_script('photoswipe-ui-default');
		// 	  wp_deregister_script('photoswipe-masonry');
		// 	  wp_deregister_script('photoswipe-imagesloaded');
		// 	}
		// 	wp_enqueue_script( 'app', get_template_directory_uri() . '/js/_home.min.js', array(), '', true);
	  // } else {
		// 	wp_enqueue_script( 'app', get_template_directory_uri() . '/js/_app.min.js', array(), '', true);
		//
		// 	// Photoswipe gallery
		// 	$photoswipe_wp_plugin_path =  plugins_url() . '/photoswipe-masonry' ;
		// 	wp_enqueue_script( 'photoswipe', 	$photoswipe_wp_plugin_path.'/photoswipe-dist/photoswipe.min.js', array(), '', true);
		// 	wp_enqueue_script( 'photoswipe-masonry-js', $photoswipe_wp_plugin_path . '/photoswipe-masonry.js', array(), '', true);
		// 	//UI JS file
		// 	wp_enqueue_script( 'photoswipe-ui-default', $photoswipe_wp_plugin_path . '/photoswipe-dist/photoswipe-ui-default.min.js', array(), '', true);
		// 	//Masonry - re-named to move to header
		// 	wp_enqueue_script( 'photoswipe-masonry', 	$photoswipe_wp_plugin_path . '/masonry.pkgd.min.js', array(), '', true);
		// 	//imagesloaded
		// 	// wp_enqueue_script( 'photoswipe-imagesloaded', $photoswipe_wp_plugin_path.'/imagesloaded.pkgd.min.js', array(), '', true);
		//
		// }






		// If you'd like to cherry-pick the foundation components you need in your project, head over to Gruntfile.js and see lines 67-88.
		// It's a good idea to do this, performance-wise. No need to load everything if you're just going to use the grid anyway, you know :)
		// wp_enqueue_script( 'foundation', get_template_directory_uri() . '/bower_components/foundation-sites/dist/foundation.js', array('jquery'), '5.5.2', true );

		// Add the comment-reply library on pages where it is necessary
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}

	}

	add_action( 'wp_enqueue_scripts', 'breeyn_scripts' );



endif;



?>
