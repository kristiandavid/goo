<?php
/**
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @package WordPress
 * @subpackage breeyn
 * @since breeyn 3.0.0
 */

/** Various clean up functions */
require_once( 'library/cleanup.php' );

/** Register all navigation menus */
require_once( 'library/navigation.php' );

/** Add desktop menu walker */
// require_once( 'library/menu-walker.php' );

/** Add off-canvas menu walker */
// require_once( 'library/offcanvas-walker.php' );

/** Create widget areas in sidebar and footer */
require_once( 'library/widget-areas.php' );

/** Return entry meta information for posts */
require_once( 'library/entry-meta.php' );

/** Enqueue scripts */
require_once( 'library/enqueue-scripts.php' );

/** Add theme support */
require_once( 'library/theme-support.php' );

/** Add Nav Options to Customer */
require_once( 'library/custom-nav.php' );

/** Add protocol relative theme assets */
require_once( 'library/protocol-relative-theme-assets.php' );


// Custom functions
function ifExists($field, $wrap){
  if($field){
    echo '<'.$wrap.'>'.$field.'</'.$wrap.'>';
  }
}

function getSVG($icon){
  $icons = get_field_object($icon);
  $svg = $icons['name'];
  if( $svg ):
	  foreach( $svg as $iconSVG ):
		  get_template_part('img/icons/svg/php/icon', $iconSVG.'.svg');
	  endforeach;
  endif;
}


add_action('wp_head', 'add_your_stuff');
function add_your_stuff() {
    ?>
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_stylesheet_directory_uri();?>/img/icons/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_stylesheet_directory_uri();?>/img/icons/apple-touch-icon-60x60.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_stylesheet_directory_uri();?>/img/icons/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_stylesheet_directory_uri();?>/img/icons/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_stylesheet_directory_uri();?>/img/icons/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_stylesheet_directory_uri();?>/img/icons/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_stylesheet_directory_uri();?>/img/icons/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_stylesheet_directory_uri();?>/img/icons/apple-touch-icon-152x152.png" />
    <?php
}
