<!DOCTYPE html>
<html lang="ja">

<head>

  <?php get_header(); ?>

</head>

<?php get_template_part('includes/header'); ?>

<main>
  <section class="fv">
    <div class="fv__container">
      <h3 class="fv__title">TOEFL対策はEngress</h3>
      <p class="fv__description">日本人へのTOEFL指導歴豊かな講師陣の<br>コーチング型TOEFLスクール</p>
      <a href="<?php echo home_url(); ?>/contact/" class="fv__request">資料請求</a>
      <a href="<?php echo home_url(); ?>/contact/" class="fv__contact">お問い合わせ</a>
    </div>
  </section>

  <section class="trouble">
    <h2 class="trouble__title">TOEFL学習で<br class="sp-only">こんな悩みありませんか？</h2>
    <div class="trouble__wrapper">
      <p class="trouble__paturn">勉強の習慣が<br class="sp-none">身についていない</p>
      <p class="trouble__paturn">勉強しているはず<br class="sp-none">なのに点数が伸びない</p>
      <p class="trouble__paturn">正しい勉強方法が<br class="sp-none">わからない</p>
    </div>
    <div class="trouble__outerBox">
      <div class="trouble__innerBox">
        <h3 class="trouble__subTitle">Engressは<br><span class="trouble__subTitle--strong">TOEFLに特化した<br class="sp-only">スクール</span>です</h3>
        <p class="trouble__description">完全オーダーメイドで、１人１人の悩みに合わせた最適な指導で<br class="sp-none">TOEFLの苦手分野を克服します。</p>
      </div>
    </div>
  </section>

  <section class="features">
    <h2 class="features__title">TOEFL対策に特化した<br class="sp-only">Engress3つの強み</h2>
    <div class="features__container container1">
      <div class="features__wrapper">
        <p class="features__number">特長 １</p>
        <h3 class="features__subTitle">TOEFLに最適化された<br>無駄のないカリキュラム</h3>
        <p class="features__description">
          TOEFLではビジネス英語には登場しない数多くの学術的内容が出題されます。<br class="tab-only">そのため、ベースとなる知識も必要になります。Engressでは過去1000題を分析し、最適なカリキュラムを組んでいます。</p>
      </div>
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/feature01.png" alt="" class="features__image">
    </div>

    <div class="features__container container2">
      <div class="features__wrapper wrapper2">
        <p class="features__number">特長 ２</p>
        <h3 class="features__subTitle">日本人指導歴10年以上の<br>経験豊富な講師陣</h3>
        <p class="features__description">
          Engressの講師陣は、もともと日本人向けにTOEFLを教えていた人が大多数です。また全メンバーがTESOL(英語教授法)を取得しており、知識と経験を兼ね備えている教育のプロフェッショナルです。</p>
      </div>
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/feature02.png" alt="" class="features__image">
    </div>

    <div class="features__container container3">
      <div class="features__wrapper wrapper3">
        <p class="features__number">特長 ３</p>
        <h3 class="features__subTitle">平均3ヶ月でTOEFL iBT20点アップ</h3>
        <p class="features__description">
          Engressは高校生からサラリーマンまで様々な年齢層の方々が通われていますが、完全オーダーメイドのカリキュラムで柔軟に対応しているため、平均3ヶ月でTOEFLスコアを20点アップさせています。</p>
      </div>
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/feature03.png" alt="" class="features__image">
    </div>
    <div class="features__bottom">
      <h3 class="features__guide">Engressの料金プランはこちら</h3>
      <a href="<?php echo home_url(); ?>/price/" class="features__button">料金を見てみる</a>
    </div>
  </section>

  <section class="case">
    <h2 class="case__title">TOEFL成功事例</h2>
    <div class="case__cards">

      <figure class="case__card">
        <figcaption class="case__message">TOEFL iBT 100点を突破してコロンビア大学大学院に進学できました！</figcaption>
        <div class="case__wrapper">
          <img src="<?php the_field('image-1', 2330); ?>" alt="" class="case__image">
        </div>
        <div class="case__label">
          <p class="case__work"><?php the_field('work-1', 2330); ?></p>
          <p class="case__name"><?php the_field('name-1', 2330); ?></p>
        </div>
        <p class="case__score"><?php the_field('score-1', 2330); ?></p>
      </figure>

      <figure class="case__card">
        <figcaption class="case__message">T半年でTOEFL 40点→100点を達成！コロンビア大学大学院に合格</figcaption>
        <div class="case__wrapper">
          <img src="<?php the_field('image-2', 2330); ?>" alt="" class="case__image">
        </div>
        <div class="case__label">
          <p class="case__work"><?php the_field('work-2', 2330); ?></p>
          <p class="case__name"><?php the_field('name-2', 2330); ?></p>
        </div>
        <p class="case__score"><?php the_field('score-2', 2330); ?></p>
      </figure>

      <figure class="case__card">
        <figcaption class="case__message">早稲田大学 国際教養学部AO入試合格！TOEFL iBT 109点</figcaption>
        <div class="case__wrapper">
          <img src="<?php the_field('image-3', 2330); ?>" alt="" class="case__image">
        </div>
        <div class="case__label">
          <p class="case__work"><?php the_field('work-3', 2330); ?></p>
          <p class="case__name"><?php the_field('name-3', 2330); ?></p>
        </div>
        <p class="case__score"><?php the_field('score-3', 2330); ?></p>
      </figure>


    </div>
  </section>

  <section class="flow">
    <h2 class="flow__title">ご利用の流れ</h2>
    <table class="flow__table">
      <tr>
        <td class="flow__number">01</td>
        <td class="flow__name">お問い合わせ</td>
        <td class="flow__description">まずはフォームまたはお電話からお申し込みください。</td>
      </tr>

      <tr>
        <td class="flow__number">02</td>
        <td class="flow__name">ヒアリング</td>
        <td class="flow__description">現在の学習状況やTOEFLスコア、目標のスコアをお聞きします。</td>
      </tr>

      <tr>
        <td class="flow__number">03</td>
        <td class="flow__name">学習プランのご提供</td>
        <td class="flow__description">目標達成のために最適な学習プランをご提供します。</td>
      </tr>

      <tr>
        <td class="flow__number">04</td>
        <td class="flow__name">ご入会</td>
        <td class="flow__description">お申込み完了後、レッスンがスタートします。</td>
      </tr>
    </table>
  </section>

  <section class="faq">
    <h2 class="faq__title">よくある質問</h2>
    <nav class="faq__nav">
      <ul class="faq__list">
        <li class="faq__question q-js open">Engressはサラリーマンでも<br class="sp-only">学習を続けられるでしょうか？</li>
        <li class="faq__answer a-js open">Engressは各個人に最適な学習プランをご提供しております。サラリーマンの方でも継続できます。</li>
      </ul>
      <ul class="faq__list">
        <li class="faq__question q-js close">教材はオリジナルのものを<br class="sp-only">使用しているのでしょうか？</li>
        <li class="faq__answer a-js close">Engressは各個人に最適な学習プランをご提供しております。サラリーマンの方でも継続できます。</li>
      </ul>
      <ul class="faq__list">
        <li class="faq__question q-js close">講師に日本人はいますか？</li>
        <li class="faq__answer a-js close">Engressは各個人に最適な学習プランをご提供しております。サラリーマンの方でも継続できます。</li>
      </ul>
      <ul class="faq__list">
        <li class="faq__question q-js close">TOEFL以外の海外大学合格のサポートも<br class="sp-only">してもらえるのでしょうか？</li>
        <li class="faq__answer a-js close">Engressは各個人に最適な学習プランをご提供しております。サラリーマンの方でも継続できます。</li>
      </ul>
    </nav>
  </section>

  <section class="bottom">
    <section class="blog">
      <h2 class="blog__title">ブログ</h2>
      <!-- ブログ記事を最大3件表示させるループ処理/メインループ -->
      <?php
      $blog_query = new WP_Query(
        array(
          'post_type'      => 'post',
          'posts_per_page' => 3,
        )
      );
      ?>
      <?php if ($blog_query->have_posts()) : ?>
        <?php while ($blog_query->have_posts()) : ?>
          <?php $blog_query->the_post(); ?>

          <!-- /ブログ記事を最大3件表示させるループ処理 -->
          <div class="blog__container">
            <div class="blog__leftWrapper">
           
               <?php
              if(has_post_thumbnail()) {
                the_post_thumbnail('thumbnail', array('class' => 'blog__image'));
              } else { ?>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/feature03.png" alt="" class="blog__image">
                <?php 
              }; ?>



              <p class="blog__category">
                <?php
                $category = get_the_category();
                if ($category[0]) {
                  echo '<a href="' . get_category_link($category[0]->term_id) . '">' . $category[0]->cat_name . '</a>';
                }
                ?>
              </p>
            </div>
            <div class="blog__rightWrapper">
              <p><a href="<?php the_permalink(); ?>" class="blog__description">
              <!--表示文字数の制御 -->
                  <?php
                  if (mb_strlen($post->post_title, 'UTF-8') > 40) {
                    $title = mb_substr($post->post_title, 0, 40, 'UTF-8');
                    echo $title . '…';
                  } else {
                    echo $post->post_title;
                  }
                  ?>
                  </a></p>
              <p class="blog__date"><?php the_date(); ?></p>
            </div>
          </div>
        <?php endwhile; ?>
      <?php endif; ?>

      <?php wp_reset_postdata(); ?>

    </section>

    <section class="info">
      <h2 class="info__title">お知らせ</h2>
      <div class="info__inner">
        <!-- お知らせ記事を最大3件表示させるループ処理/サブループ -->
        <?php
        $news_query = new WP_Query(
          array(
            'post_type'      => 'info',
            'posts_per_page' => 3,
          )
        );
        ?>
        <?php if ($news_query->have_posts()) : ?>
          <?php while ($news_query->have_posts()) : ?>
            <?php $news_query->the_post(); ?>

            <!-- /お知らせ記事を最大3件表示させるループ処理 -->

            <div class="info__inner">
              <p class="info__date"><?php the_time('Y-m-d'); ?></p>
              <a href="<?php the_permalink(); ?>" class="info__description">
                            <!--表示文字数の制御 -->
                            <?php
                  if (mb_strlen($post->post_title, 'UTF-8') > 40) {
                    $title = mb_substr($post->post_title, 0, 40, 'UTF-8');
                    echo $title . '…';
                  } else {
                    echo $post->post_title;
                  }
                  ?>
                  </a>
            <?php endwhile; ?>
          <?php endif; ?>

          <?php wp_reset_postdata(); ?>


            </div>
    </section>
  </section>

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