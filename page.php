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
                    </div><!-- /post-header -->
                    <div class ="post-content">
                        <!-- 記事の内容表示（全文） -->
                        <?php the_content(); ?>
                    </div><!-- /post-content -->
                </div><!-- /post -->

                <!-- ループの終了、記事がない場合の処理 -->
                <?php
                    endwhile;
                else:
                ?>

                <p>ページはありません</p>

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