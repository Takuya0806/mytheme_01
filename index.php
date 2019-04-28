<!-- header.phpの情報を読み込み -->
<?php get_header(); ?>
        <div id ="main" class ="container">

            <div id ="posts" class ="container">

                <!-- 記事の数だけループさせる -->
                <?php 
                if (have_posts()) :
                    while (have_posts()) :
                        the_post();
                ?>

                <div class ="post">
                    <div class ="post-header">
                        <!-- 記事のタイトルとパーマリンクの表示 -->
                        <h2><a href ="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <div class ="post-meta">
                            <!-- 投稿日とカテゴリーの表示 -->
                            <?php echo get_the_date(); ?> / <?php the_category(', '); ?>
                        </div><!-- /post-meta -->
                    </div><!-- /post-header -->
                    <div class ="post-content">
                        <div class ="post-image">

                            <!-- アイキャッチ画像があるか調べる -->
                            <?php if (has_post_thumbnail()) : ?>
                                <!--アイキャッチ画像があれば表示（array()でサイズ指定可能） -->
                                <?php the_post_thumbnail(array(150, 150)); ?>
                            <?php else: ?>
                                <!-- なければnoimage.pngを表示（テンプレートディレクトリを指定） -->
                                <img src ="<?php echo get_template_directory_uri(); ?>/img/noimage.png" width ="150" height ="150">
                            <?php endif; ?>

                        </div><!-- /post-image -->
                        <div class ="post-body">
                            <!-- 記事の内容表示（抜粋） -->
                            <?php the_excerpt(); ?>
                        </div><!-- /post-body -->
                    </div><!-- /post-content -->
                </div><!-- /post -->

                <!-- ループの終了、記事がない場合の処理 -->
                <?php
                    endwhile;
                else:
                ?>

                <p>投稿はありません</p>

                <!-- if文の終了 -->
                <?php 
                    endif;
                ?>

                <div class ="navi">
                    <!-- ナビゲーションリンクの設定（posts_link は記事のループの外でのみ使用可能） -->
                    <div class ="prev"><?php previous_posts_link(); ?></div>
                    <div class ="next"><?php next_posts_link(); ?></div>
                </div><!-- /navi -->
            </div><!-- /posts-->

            <!-- sidebar.phpの読み込み -->
            <?php get_sidebar(); ?>
        </div><!-- /main -->

<!-- footer.phpの読み込み -->
<?php get_footer(); ?>