<?php if ( ! defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die(); ?>
<?php include_once __DIR__ . '/partials/sidebar/sidebar.php'; ?>
<section id="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="footer">
                    <?php
                    include_once __DIR__ . '/partials/footer/footer_logo.php';
                    include_once __DIR__ . '/partials/footer/footer_catalog_menu.php';
                    include_once __DIR__ . '/partials/footer/footer_contacts.php';
                    include_once __DIR__ . '/partials/footer/footer_address.php';
                    include_once __DIR__ . '/partials/footer/footer_question.php';
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
//$templatePath = SITE_TEMPLATE_PATH;
//print_r($templatePath);
//use Bitrix\Main\Page\Asset;
//Asset::getInstance()->addJs("$templatePath/assets/js/script.js");

include_once __DIR__ . '/partials/footer/script.php';
?>
</body>
</html>

