<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title></title>
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon.ico"> 
  <link rel="shortcut icon" href="/favicon.ico">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <link rel="stylesheet/less" type="text/css" href="/css/styles.less">
  <link rel="stylesheet" type="text/css" href="/css/styles.css">
  <link rel="stylesheet" href="/css/slick.css">
	<link rel="stylesheet" href="/css/slick-theme.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous"> -->
</head>
<body>
<header>
<div id="follower">
  <div id="circle1"></div>
  <div id="circle2"></div>
</div>
<div class="sliding__menu">
  <div class="sliding__menu__wrapper">
  <?php require($_SERVER["DOCUMENT_ROOT"]."/svgfiles/basketdeletebtn.php");?>
      <div class="header__menu">
            <a href="/catalog/">
              каталог
            </a>
            <a href="/about/">
              о нас
            </a>
            <a href="/info">
              информация
            </a>
            <a href="/contacts/">
              контакты
            </a>
      </div>
  </div>
</div>
  <div class='logo__div'>
      <a href="/index.php">
        <img src="/images/svg/logo.svg" alt="">
      </a>
  </div>
  <div class="header__icons">
        <a href="/search">
          <?php require($_SERVER["DOCUMENT_ROOT"]."/svgfiles/searchicon.php");?>
        </a>
        <a href="/lk" id='lk'>
          <?php require($_SERVER["DOCUMENT_ROOT"]."/svgfiles/lk.php");?>
        </a>
        <a href="/likes">
          <?php require($_SERVER["DOCUMENT_ROOT"]."/svgfiles/heart.php");?>
        </a>
        <a href="/basket" class='basket__link'>
          <?php require($_SERVER["DOCUMENT_ROOT"]."/svgfiles/basketicon.php");?>
        </a>
        <a href="#">
          <?php require($_SERVER["DOCUMENT_ROOT"]."/svgfiles/menu.php");?>
        </a>
  </div>
  </div>
</header>
