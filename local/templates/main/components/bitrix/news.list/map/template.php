<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

$this->setFrameMode(true);

if (empty($arResult["ITEMS"])) {
    return;
}
$item = $arResult["ITEMS"][0];
$mapCode = $item["PROPERTIES"]["MAP_CODE"]["~VALUE"]["TEXT"] ?? '';
$mapTitle = $item["PROPERTIES"]["MAP_TITLE"]["VALUE"] ?: 'НАШИ МАГАЗИНЫ';

?>

<?php if ($mapCode): ?>
    <section id="main_map">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="title"><?= $mapTitle ?></h2>
                </div>
            </div>
        </div>
        <?= $mapCode ?>
    </section>
<?php endif; ?>


