<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File: 			header.inc.php
* @Package:		GetSimple
* @Action:		Innovation theme for GetSimple CMS
*
*****************************************************/
?><!DOCTYPE html>
<head>
<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php get_theme_url(); ?>/css/main.css">
  <link rel="stylesheet" href="<?php get_theme_url(); ?>/css/owl.carousel.min.css">
  <link rel="stylesheet" href="<?php get_theme_url(); ?>/css/owl.theme.green.min.css">
  <link rel="stylesheet" href="<?php get_theme_url(); ?>/css/animate.css">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,700,600,800&amp;subset=cyrillic" rel="stylesheet" type="text/css">
  <script src="https://use.fontawesome.com/9cd7824b2e.js"></script>

  <title><?php get_site_name(); ?> - <?php get_page_clean_title(); ?></title>

	<meta name="robots" content="index, follow">
	<link href="<?php get_theme_url(); ?>/style.css?v=<?php echo get_site_version(); ?>" rel="stylesheet">
	<?php get_header(); ?>

</head>
<body>
  <div class="page_wrapper">
  <!--HEADER-->
    <header class="header">
      <div class="header_top-panel">
        <div class="row">
          <ul class="header_contact-details">
            <li class="header_contact-item phone">
              <a href="tel:+79991234567" title="Позвонить нам"><i class="fa fa-phone" aria-hidden="true"></i>+7(999) 123-45-67</a></li>
            <li class="header_contact-item mail">
              <a href="mailto:info@pochta.ru" title="Написать нам"><i class="fa fa-envelope" aria-hidden="true"></i>info@pochta.ru</a></li>
            <li class="header_contact-item clock"><i class="fa fa-map-marker" aria-hidden="true"></i>г. Пермь</li>
          </ul>
          <button class="header_intouch-btn">Связаться с нами</button>
        </div>
      </div>
      <div class="header_main">
        <div class="row flexible">
          <a href="/get/" class="header_logo" ></a><a href="#" class="header_mobtoggle">
            <span></span>
            <span></span>
            <span></span>
          </a>
          <ul class="header_mobmenu">
            <!-- <li><a class="header_mobmenu-item" href="about.html">О нас</a></li>
            <li><a class="header_mobmenu-item" href="services.html">Услуги</a></li>
            <li><a class="header_mobmenu-item" href="">Полезное</a></li>
            <li><a class="header_mobmenu-item" href="">Новости</a></li>
            <li><a class="header_mobmenu-item" href="contacts.html">Контакты</a></li> -->
            <?php get_navigation_mobile(return_page_slug(),$classPrefix = ""); ?>
          </ul>

          <ul class="header_menu">
          <?php get_navigation_main(return_page_slug(),$classPrefix = ""); ?>
          </ul>
        </div>
      </div>
    </header>
    <?php if (return_page_slug()!='index') {
       get_component('breadcrumbs');
      }
    ?>

