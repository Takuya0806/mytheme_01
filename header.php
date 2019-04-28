<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
        <link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.18.1/build/cssreset/cssreset-min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>">
        <?php wp_head(); ?>
    </head>
    <body>
        <div id ="header" class ="container">
            <!-- サイトタイトル -->
            <h1><a href ="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a></h1>
            <!-- キャッチフレーズ -->
            <p><?php bloginfo('description'); ?></p>
            <!-- ヘッダー画像の表示 -->
            <?php if (get_header_image()) : ?>
            <img src="<?php header_image(); ?>" width ="<?php echo get_custom_header() -> width ?>" height ="<?php echo get_custom_header() -> height ?>" alt="" />
            <?php endif; ?>
            <!-- ナビゲーションメニューの表示 -->
            <div id ="menu">
                <?php wp_nav_menu(); ?>
            </div><!-- /menu -->
        </div><!-- /header -->