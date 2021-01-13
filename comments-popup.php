<!DOCTYPE html>
<html lang="ja">

<head>

<?php get_header(); ?>

<link rel="stylesheet" href="<?php  echo get_stylesheet_directory_uri() ?>/css/thanks.css">

</head>

<?php get_template_part('includes/header'); ?>

  <main>

    <section class="breadcrumb">
      <!-- パンクズ -->
      <section class="breadcrumb">
    <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
      <?php if (function_exists('bcn_display')) {
        bcn_display();
      } ?>
    </div>
    </section>

    <section class="thanks">
        <p class="thanks__message">お問い合わせいただきありがとうございます<br>内容を確認した後、担当者よりご連絡いたします</p>
        <a href="" class="thanks__link">ホームへ戻る</a>

    </section>


    <footer class="footer">

    <?php get_template_part('includes/footer'); ?>

    <?php get_footer(); ?>