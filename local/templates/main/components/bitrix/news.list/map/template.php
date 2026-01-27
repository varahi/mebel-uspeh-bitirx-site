<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

$this->setFrameMode(true);
?>


<div class="map">
    <?php foreach ($arResult["ITEMS"] as $item): ?>

        <?php
        // MAP_CODE — HTML-код карты (iframe / script)
        $mapCode = $item["PROPERTIES"]["MAP_CODE"]["~VALUE"]['TEXT'];
        ?>

        <?php if ($mapCode): ?>
            <div class="map__item">
                <?= $mapCode ?>
            </div>
        <?php endif; ?>

    <?php endforeach; ?>
</div>