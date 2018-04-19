<?php
/**
 * Register widget areas
 *
 * @package WordPress
 * @subpackage goo
 * @since goo 1.0.0
 */

if ( ! function_exists( 'goo_sidebar_widgets' ) ) :
function goo_sidebar_widgets() {
	register_sidebar(array(
	  'id' => 'sidebar-widgets',
	  'name' => __( 'Sidebar widgets', 'goo' ),
	  'description' => __( 'Drag widgets to this sidebar container.', 'goo' ),
	  'before_widget' => '<article id="%1$s" class="row widget %2$s"><div class="small-12 columns">',
	  'after_widget' => '</div></article>',
	  'before_title' => '<h6>',
	  'after_title' => '</h6>',
	));

	register_sidebar(array(
	  'id' => 'footer-widgets',
	  'name' => __( 'Footer widgets', 'goo' ),
	  'description' => __( 'Drag widgets to this footer container', 'goo' ),
	  'before_widget' => '<article id="%1$s" class="large-4 columns widget %2$s">',
	  'after_widget' => '</article>',
	  'before_title' => '<h6>',
	  'after_title' => '</h6>',
	));
}

add_action( 'widgets_init', 'goo_sidebar_widgets' );
endif;
?>
