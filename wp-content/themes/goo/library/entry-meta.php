<?php
/**
 * Entry meta information for posts
 *
 * @package WordPress
 * @subpackage goo
 * @since goo 1.0.0
 */

if ( ! function_exists( 'goo_entry_meta' ) ) :
	function goo_entry_meta() {
		echo '<time class="updated" datetime="'. get_the_time( 'c' ) .'">'. sprintf( __( 'Posted on %s at %s.', 'goo' ), get_the_date(), get_the_time() ) .'</time>';
		echo '<p class="byline author">'. __( 'Written by', 'goo' ) .' <a href="'. get_author_posts_url( get_the_author_meta( 'ID' ) ) .'" rel="author" class="fn">'. get_the_author() .'</a></p>';
	}
endif;
?>
