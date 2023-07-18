<?php

/**
 * Theme filters.
 */

namespace App;

/**
 * Add "… Continued" to the excerpt.
 *
 * @return string
 */
add_filter('excerpt_more', function () {
    return sprintf(' &hellip; <a href="%s">%s</a>', get_permalink(), __('Continued', 'sage'));
});

add_filter( 'script_loader_tag', function( $tag, $handle, $source ) {
    // array of handles to ignore for Swup
    $handleToIgnore = config('swup.ignore_handle_regex');
    foreach ($handleToIgnore as $regex) {
        if (preg_match($regex, $handle)) {
            // string replace <script with <script data-swup-ignore-script
            $tag = str_replace( '<script', '<script data-swup-ignore-script', $tag );
            break;
        }
    }

    return $tag;
}, 10, 3 );




