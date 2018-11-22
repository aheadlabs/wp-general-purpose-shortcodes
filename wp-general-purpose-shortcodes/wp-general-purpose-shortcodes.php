<?php
/*
Plugin Name: WP general purpose shortcodes
Plugin URI:   https://developer.wordpress.org/plugins/wp-general-purpose-shortcodes/
Description:  General purpose shortcodes for WordPress
Version:      0.0.1
Author:       Iván Sainz (Ahead Labs)
Author URI:   https://ivansainz.es/
License:      GPL-2.0
License URI:  https://github.com/ivansainz/wp-general-purpose-shortcodes/blob/master/LICENSE
*/

function ahlCurrentYear() {
    return date('Y');
}

function ahlShortcodesInit(){
    add_shortcode('ahl_year', 'ahlCurrentYear');
}

add_action('init', 'ahlShortcodesInit');

?>