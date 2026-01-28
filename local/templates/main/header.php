<?php if ( ! defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die(); ?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width" />
    <meta charset="utf-8" />
    <?$APPLICATION->ShowHead();?>
    <title><?$APPLICATION->ShowTitle()?></title>
    <link rel="icon" type="image/png" href="<?= SITE_TEMPLATE_PATH?>/images/favicon.png" />

<?php
// add css
$templatePath = SITE_TEMPLATE_PATH;
use Bitrix\Main\Page\Asset;
Asset::getInstance()->addCss("$templatePath/assets/css/bootstrap.css");
Asset::getInstance()->addCss("$templatePath/assets/css/style.css");
Asset::getInstance()->addCss("$templatePath/assets/css/owl.carousel.min.css");
Asset::getInstance()->addCss("$templatePath/assets/css/owl.theme.default.min.css");

// add js
Asset::getInstance()->addJs("$templatePath/assets/js/script.js");

// подключаем скрипты
//Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/jquery.min.js');
//Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/script.js');

// add string
Asset::getInstance()->addString('<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">');
Asset::getInstance()->addString('<link rel="preconnect" href="https://fonts.googleapis.com">');
Asset::getInstance()->addString('<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>');
Asset::getInstance()->addString('<link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">');
?>
</head>
<body>
<div id="panel"><?$APPLICATION->ShowPanel();?></div>

<?php //include_once __DIR__ . '/partials/header/top_menu.php'; ?>


<header>

</header>

<section id="banner">

</section>

<section id="runstroke">
    <div class="running-line desktop-running-line">
        <div id="marquee-container"></div>
    </div>
</section>

<section id="hit_prodaj">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="title">ХИТ ПРОДАЖ</h2>
            </div>
        </div>
    </div>
</section>


<section id="main_category">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="title">КАТАЛОГ</h2>
                <div class="list_catalog">
                    <div class="item">
                        <a href="#">
                            <div class="img">
                                <img src="/img/divan.png">
                            </div>
                            <div class="name">
                                <h3>Диваны</h3>
                            </div>
                        </a>
                    </div>

                    <div class="item">
                        <a href="#">
                            <div class="img">
                                <img src="/img/korpus.png">
                            </div>
                            <div class="name">
                                <h3>Корпусная мебель</h3>
                            </div>
                        </a>
                    </div>

                    <div class="item">
                        <a href="#">
                            <div class="img">
                                <img src="/img/kuhni.png">
                            </div>
                            <div class="name">
                                <h3>Кухни</h3>
                            </div>
                        </a>
                    </div>

                    <div class="item">
                        <a href="#">
                            <div class="img">
                                <img src="/img/krovati.png">
                            </div>
                            <div class="name">
                                <h3>Кровати</h3>
                            </div>
                        </a>
                    </div>

                    <div class="item">
                        <a href="#">
                            <div class="img">
                                <img src="/img/obed.png">
                            </div>
                            <div class="name">
                                <h3>Обеденные зоны</h3>
                            </div>
                        </a>
                    </div>

                    <div class="item">
                        <a href="#">
                            <div class="img">

                            </div>
                            <div class="name">
                                <h3>Прочее</h3>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


