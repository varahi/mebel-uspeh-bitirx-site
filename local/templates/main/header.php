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

// add string
Asset::getInstance()->addString('<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">');
Asset::getInstance()->addString('<link rel="preconnect" href="https://fonts.googleapis.com">');
Asset::getInstance()->addString('<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>');
Asset::getInstance()->addString('<link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">');
?>
</head>
<body>
<div id="panel"><?$APPLICATION->ShowPanel();?></div>
<?php include_once __DIR__ . '/partials/header/top_menu.php'; ?>



