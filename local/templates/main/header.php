<?php if ( ! defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die(); ?>
<!DOCTYPE html>
<html>
<head>
<?php $APPLICATION->showHead(); ?>
    <title><?php $APPLICATION->showTitle(); ?></title>
<?php
use Bitrix\Main\Page\Asset;
// подключаем стили
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/reset.css');
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/style.css');
// подключаем скрипты
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/jquery.min.js');
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/script.js');
// подключаем строки
Asset::getInstance()->addString('<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">');
Asset::getInstance()->addString('<link href="//fonts.googleapis.com/css?family=Monda" rel="stylesheet" type="text/css">');
?>
<body>
<div id="panel"><?$APPLICATION->ShowPanel();?></div>
<main>

    <?php include_once __DIR__ . '/partials/header/top_menu.php'; ?>





