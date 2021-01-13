<body>
  <header class="header">
    <div class="header__container">
      <div class="header__left">
        <h1 class="header__title"><a href="<?php echo home_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/header-logo.png" alt="Engress"
              class="header__logo"></a></h1>
        <nav class="header__nav">
          <ul class="header__list">
            <li class="header__menu"><a href="<?php echo home_url(); ?>" class="header__link">ホーム</a></li>
            <li class="header__menu"><a href="<?php echo home_url(); ?>/info/" class="header__link">お知らせ</a></li>
            <li class="header__menu"><a href="<?php echo home_url(); ?>/blog/" class="header__link">ブログ</a></li>
            <li class="header__menu"><a href="<?php echo home_url(); ?>/price/" class="header__link">コース・料金</a></li>
          </ul>
        </nav>
        <a href="#!" class="header__button menu pc-none">メニュー</a>
      </div>
      <div class="header__right">
        <div class="header__rightBox">
          <p class="header__activeTime">平日08:00〜20:00</p>
          <div class="header__tel">
            <svg width="10px" height="14.71px" aria-hidden="true" focusable="false" data-prefix="fas"
              data-icon="phone-alt" class="svg-inline--fa fa-phone-alt fa-w-16" role="img"
              xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
              <path fill="currentColor" class="header__telIcon"
                d="M497.39 361.8l-112-48a24 24 0 0 0-28 6.9l-49.6 60.6A370.66 370.66 0 0 1 130.6 204.11l60.6-49.6a23.94 23.94 0 0 0 6.9-28l-48-112A24.16 24.16 0 0 0 122.6.61l-104 24A24 24 0 0 0 0 48c0 256.5 207.9 464 464 464a24 24 0 0 0 23.4-18.6l24-104a24.29 24.29 0 0 0-14.01-27.6z">
              </path>
            </svg>
            <p class="header__telNumber">0123-456-7890</p>
          </div>
        </div>
      <a href="<?php echo home_url(); ?>/contact/" class="header__button request">資料請求</a>
      <a href="<?php echo home_url(); ?>/contact/" class="header__button contact">お問い合わせ</a>
      </div>
    </div>
  </header>

  <!-- ドロワー -->
  <div class="drawer">
    <div class="drawer__container">
      <nav class="drawer__nav">
        <ul class="drawer__list">
          <li class="drawer__menu"><a href="<?php echo home_url(); ?>" class="drawer__link">ホーム</a></li>
          <li class="drawer__menu"><a href="<?php echo home_url(); ?>/info/" class="drawer__link">お知らせ</a></li>
          <li class="drawer__menu"><a href="<?php echo home_url(); ?>/blog/" class="drawer__link">ブログ</a></li>
          <li class="drawer__menu"><a href="<?php echo home_url(); ?>/price/" class="drawer__link">コース・料金</a></li>
        </ul>
      </nav>
      <a href="<?php echo home_url(); ?>/contact/" class="drawer__button request">資料請求</a>
      <a href="<?php echo home_url(); ?>/contact/" class="drawer__button contact">お問い合わせ</a>
      <a href="#!" class="drawer__button close">閉じる</a>
    </div>
  </div>