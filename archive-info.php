<!DOCTYPE html>
<html lang="ja">

<head>

  <?php get_header(); ?>

  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/css/info.css">

</head>

<?php get_template_part('includes/header'); ?>


<main>
  <section class="fv">
    <h2 class="fv__title">お知らせ</h2>
  </section>

  <!-- パンクズ -->
  <section class="breadcrumb">
    <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
      <?php if (function_exists('bcn_display')) {
        bcn_display();
      } ?>
    </div>
  </section>

  <section class="info">
    <h3 class="info__title">お知らせ一覧</h3>
    <table class="info__table">

      <?php
      $args = array(
        'post_type' => 'info',
        'posts_per_page' => 10
      );
      $the_query = get_posts($args);
      if ($the_query) : foreach ($the_query as $post) : setup_postdata($post); ?>

          <tr class="info__row">
            <td class="info__date" style="width: 136.5px;"><?php the_time('Y-m-d'); ?></td>
            <td class="info__content"><a class="info__link" href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></td>

          </tr>

        <?php endforeach; ?>
      <?php endif; ?>
      <?php wp_reset_postdata(); ?>

    </table>

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