<?php
/**
 * Custom Query Courses Function
 *
 *
 * @package Bulmapress
 */

function mytheme_has_featured_posts( $minimum = 1 ) {
    if ( is_paged() )
        return false;
 
    $minimum = absint( $minimum );
    $featured_posts = apply_filters( 'featured', array() );
 
    if ( ! is_array( $featured_posts ) )
        return false;
 
    if ( $minimum > count( $featured_posts ) )
        return false;
 
    return true;

	echo $output;
}
