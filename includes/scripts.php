<?php

function to_do_js_css()
{
    wp_enqueue_style('main style', plugins_url() . 'to_do_list_plugin/css/main.css');
    wp_enqueue_script('main js', plugins_url() . 'to_do_list_plugin/js/main.js');
}

add_action('wp_enqueue_scripts', 'to_do_js_css');
