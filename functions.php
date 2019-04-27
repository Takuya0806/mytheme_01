<?php

add_theme_support('menus');

register_sidebar(
    array(
        'before_widget' => '<div class ="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    )
);

add_theme_support('post-thumbnails');

// ショートコード
function shortcode_tw() {
    return '<a href ="https://twitter.com/Takuya_0806">＠Takuya_0806</a>をフォロー';
}

add_shortcode('tw', 'shortcode_tw');