<?php
add_action('wp_enqueue_scripts', function () {
    $ver = filemtime(get_stylesheet_directory() . '/style.css');
    wp_enqueue_style(
        'tt5-child-style',
        get_stylesheet_uri(),
        ['twentytwentyfive-style'],
        $ver
    );
}, 20);
