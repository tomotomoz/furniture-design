<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title><?php bloginfo('name'); ?></title>
  <meta name="description" content="テキスト">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="<?php echo esc_url(get_theme_file_uri('img/favicon.ico')); ?>" type="image/x-icon">
  <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
  <script src="script.js" defer></script>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <!-- header -->
  <header id="header" class="header wrapper">
    <h1 class="site-title">
      <a href="<?php echo esc_url(home_url()); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt=""></a>
    </h1>
    <div id="nav-area">
      <div id="nav">
        <ul class="nav-menu">
          <li><a href="<?php echo esc_url(home_url('/category/PRODUCTS/')); ?>">PRODUCTS</a></li>
          <li><a href="<?php echo esc_url(home_url('/about/')); ?>">ABOUT</a></li>
          <li><a href="<?php echo esc_url(home_url('/company/')); ?>">COMPANY</a></li>
          <li><a href="mailto:xxxxx@xxx.xxx?subject=お問い合わせ">CONTACT</a></li>
        </ul>
      </div>

      <!-- ハンバーガー -->
      <div class="toggle-btn">
        <span></span>
        <span></span>
      </div>

      <div id="mask"></div>
    </div>
  </header>