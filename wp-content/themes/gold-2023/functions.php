<?php

function getFile($path) {
    return dirname(__FILE__) . '/' . $path;
}


// disable admin bar
add_filter('show_admin_bar', '__return_false');


// load css into the website's front-end (via wp_head)
function gc_enqueue_styles() {
    wp_enqueue_style('my-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'gc_enqueue_styles');


// (function name says what it is ;)
function register_my_menu() {
    register_nav_menu('site-menu', __('Site menu'));
}
add_action('init', 'register_my_menu');


// load css into the website's front-end (via wp_footer)
// ?
