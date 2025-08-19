<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    // 親テーマのスタイルシートを読み込む
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}
