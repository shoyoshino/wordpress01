<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <?php wp_head(); ?>
</head>

<body>
    <header class="">
        <a href="<?php echo home_url(); ?>">ホーム</a>
        <a href="<?php echo home_url(); ?>/service">サービス</a>
        <a href="<?php echo home_url(); ?>/price">料金案内</a>
        <a href="<?php echo home_url(); ?>/company">会社概要</a>
        <a href="<?php echo home_url(); ?>/contact">お問い合わせ</a>
        <a href="<?php echo home_url(); ?>/news">ニュース</a>
    </header>
    <?php
    if (is_front_page()) {
    ?>
        <div>TOPページ用</div>
    <?php
    } else if (is_page('service')) {
    ?>
        <div>サービス用</div>
    <?php
    } else if (is_page('price')) {
    ?>
        <div>料金案内用</div>
    <?php
    } else if (is_page('company')) {
    ?>
        <div>会社概要用</div>
    <?php
    } else if (is_page('contact')) {
    ?>
        <div>お問い合わせ用</div>
    <?php
    } else if (is_archive()) {
    ?>
        <div>ニュース用</div>
    <?php
    } else {
    }
    ?>