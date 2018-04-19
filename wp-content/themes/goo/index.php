<?php
/**
 * The main template file
 *
 * @package WordPress
 * @subpackage goo
 * @since goo 2.0.0
 */

get_header(); ?>

  <div class="main">
    <?php
    if ( have_posts() ) :

      /* Start the Loop */
      while ( have_posts() ) : the_post();
        the_content();

      endwhile;

    endif;
    ?>
  </div>


<?php get_footer(); ?>
