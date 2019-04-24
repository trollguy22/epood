<?php
/**
 * Plugin Name: Esimene plugin
 * Plugin URL: https://purassonjoel.ikt.khk.ee
 * Description: Esimene plugin
 * Version: 1.0
 * Author URL: https://purassonjoel.ikt.khk.ee
**/

function dh_modify_read_more_link() {
    return '<a class="more-link" href="' . get_permalink() . '">Click to Read!</a>';
}
add_filter( 'the_content_more_link', 'dh_modify_read_more_link' );