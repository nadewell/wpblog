<?php 

$header_widget = get_option('redux_options')['header-widget'];

if($header_widget != ''){
    echo do_shortcode($header_widget);
}