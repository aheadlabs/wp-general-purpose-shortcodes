<?php
/*
Plugin Name: WP general purpose shortcodes
Plugin URI:   https://developer.wordpress.org/plugins/wp-general-purpose-shortcodes/
Description:  General purpose shortcodes for WordPress
Version:      0.2.0
Author:       Iván Sainz (Ahead Labs)
Author URI:   https://ivansainz.es/
License:      GPL-2.0
License URI:  https://github.com/ivansainz/wp-general-purpose-shortcodes/blob/master/LICENSE
*/

/**
 * Shortcode functions
 */
function ahlCurrentYear() {
    return date('Y');
}

function ahlYearsFromDate($atts) {
    $date1 = date_create($atts["date"]);
    $date2 = date_create();

    $interval = date_diff($date2, $date1);
    return $interval->format('%y');
}

/**
 * Wiring everything up...
 */

// adds the shortcode functions one by one
function ahlShortcodesInit(){
    add_shortcode('ahl_year', 'ahlCurrentYear');
    add_shortcode('ahl_yearsFromDate', 'ahlYearsFromDate');
}

// adds all shortcodes
add_action('init', 'ahlShortcodesInit');

?>