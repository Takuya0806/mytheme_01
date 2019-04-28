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
                    <div class ="pots-header">
                        <h2>
                            <!-- 記事のタイトルとパーマリンクの表示 -->
                            <a href ="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h2>
                        <div class ="post-meta">
                            <!-- 投稿日とカテゴリーの表示 -->
                            <?php echo get_the_date(); ?> / <?php the_category(', '); ?>
                        </div><!-- /post-meta -->
                    </div><!-- /post-header -->
                    <div class ="post-content">
                        <!-- 記事の内容表示（全文） -->
                        <?php the_content(); ?>
                    </div><!-- /post-content -->
                </div><!-- /post -->

                <div class ="navi">
                    <!-- ナビゲーションリンクの設定（post_link は記事のループの中に設定） -->
                    <div class ="prev"><?php previous_post_link(); ?></div>
                    <div class ="next"><?php next_post_link(); ?></div>
                </div><!-- /navi -->

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

            </div><!-- /posts-->

            <!-- sidebar.phpの読み込み -->
            <?php get_sidebar(); ?>
        </div><!-- /main -->

<!-- footer.phpの読み込み -->
<?php get_footer(); ?>