<?php
$custom_header_args = array(
    'default-image' => get_template_directory_uri() . '/img/lotus_01.jpg',
    'width' => 1200,
    'height' => 280,
    // ヘッダー画像の横幅を自由に切り取れるかどうか(trueもしくはfalse)
    'flex-width' => true,
    // ヘッダー画像の縦幅を自由に切り取れるかどうか(trueもしくはfalse)
    'flex-height' => true,

);

add_theme_support('custom-header', $custom_header_args);
// 管理画面にカスタムメニューの追加
add_theme_support('menus');

// 管理画面にウィジェットの追加
register_sidebar(
    array(
        'before_widget' => '<div class ="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    )
);

// アイキャッチ機能の有効化
add_theme_support('post-thumbnails');

// ショートコード
function shortcode_tw() {
    return '<a href ="https://twitter.com/Takuya_0806">＠Takuya_0806</a>をフォロー';
}

add_shortcode('tw', 'shortcode_tw');