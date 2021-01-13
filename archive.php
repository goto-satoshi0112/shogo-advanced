<!DOCTYPE html>
<html lang="ja">

<head>

  <?php get_header(); ?>

  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/css/blog.css">

</head>

<?php get_template_part('includes/header'); ?>


<main>
  <section class="fv">
    <h2 class="fv__title">ブログ</h2>
  </section>

  <!-- パンクズ -->
  <section class="breadcrumb">
    <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
      <?php if (function_exists('bcn_display')) {
        bcn_display();
      } ?>
    </div>
  </section>


  <section class="newList">
    <h3 class="newList__title">
      <?php if (is_category()) {
        $category = get_the_category();
        echo $category[0]->cat_name . '一覧';
      } else {
        echo '新着一覧';
      } ?>
    </h3>


    <?php
    $args = array(
      'posts_per_page' => 10
    );
    $the_query = get_posts($args);
    if ($the_query) : foreach ($the_query as $post) : setup_postdata($post); ?>

        <div class="newList__container">
          <div class="newList__inner--left">
          <!-- サムネイル画像有無で画像差し替え -->
          <?php
              if(has_post_thumbnail()) {
                the_post_thumbnail('thumbnail', array('class' => 'newList__image'));
              } else { ?>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/feature03.png" alt="" class="newList__image">
                <?php 
              }; ?>

            <p class="newList__label">
            <!-- サムネイルにカテゴリーラベル -->
              <?php
              $category = get_the_category();
              if ($category[0]) {
                echo '<a href="' . get_category_link($category[0]->term_id) . '">' . $category[0]->cat_name . '</a>';
              }
              ?>
              </p>
          </div>
          <div class="newList__inner--right">
            <p class="newList__date"><?php the_time('Y-m-d'); ?></p>
            <p class="newList__subTitle">
            <a href="<?php the_permalink(); ?>">

              <!--表示文字数の制御 -->
              <?php
              if (mb_strlen($post->post_title, 'UTF-8') > 20) {
                $title = mb_substr($post->post_title, 0, 20, 'UTF-8');
                echo $title . '…';
              } else {
                echo $post->post_title;
              }
              ?>
            </a>
            </p>
            <p class="newList__description">
              <!--記事本文の概要（冒頭50単語）を表示 -->
              <?php
              echo get_the_excerpt();
              ?>
            </p>
          </div>
        </div>

      <?php endforeach; ?>
    <?php endif; ?>
    <?php wp_reset_postdata(); ?>

  </section>

  <?php the_posts_pagination( array (
      'prev_text' => '前へ',
      'next_text' => '次へ',
      'mid_size' => 1,
    )); ?>





  <footer class="footer">
    <div class="footer--top">
      <h2 class="footer--top__title">まずは無料で資料請求から</h2>
      <a href="<?php echo home_url(); ?>/contact/" class="footer--top__button">資料請求</a>
      <a href="<?php echo home_url(); ?>/contact/" class="footer--top__contact">お問い合わせ</a>
    </div>
    <div class="footer--middle">
      <p class="footer--middle__message">お電話でのお問い合わせはこちら</p>
      <p class="footer--middle__tel">0123-456-7890</p>
      <p class="footer--middle__activeTime">平日 08:00~20:00</p>
    </div>

    <?php get_template_part('includes/footer'); ?>

    <?php get_footer(); ?>