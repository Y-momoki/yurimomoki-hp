<?php
// Front: 子テーマCSSを単独で読み込む（親に非依存）
add_action('wp_enqueue_scripts', function () {
    $rel = '/style.css';
    $abs = get_stylesheet_directory() . $rel;

    if (file_exists($abs)) {
        wp_enqueue_style(
            'tt5-child-style',
            get_stylesheet_directory_uri() . $rel,
            [],
            filemtime($abs) ?: null
        );
    }
}, 50);

// Editor: ブロックエディタにも同じCSSを読み込む（任意）
add_action('enqueue_block_editor_assets', function () {
    $rel = '/style.css';
    $abs = get_stylesheet_directory() . $rel;

    if (file_exists($abs)) {
        wp_enqueue_style(
            'tt5-child-style-editor',
            get_stylesheet_directory_uri() . $rel,
            [],
            filemtime($abs) ?: null
        );
    }
});
