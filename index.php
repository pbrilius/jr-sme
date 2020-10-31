<?php
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', '/tmp/wp-errors.log' );
define( 'WP_DEBUG_DISPLAY', true );

get_header();
 
if ( have_posts() ) : 
    while ( have_posts() ) : the_post();
        the_content();
    endwhile;
else :
    _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
endif;
 
get_sidebar();
get_footer();
