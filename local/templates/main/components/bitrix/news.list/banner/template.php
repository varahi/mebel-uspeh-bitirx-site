<!--<pre>--><?php //print_r($arResult["ITEMS"]); ?><!--</pre>-->

<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();



/**
 * Ожидаемые свойства:
 * TITLE
 * SUBTITLE
 * BUTTON_TEXT
 * BUTTON_LINK
 */
?>

<?php if (!empty($arResult["ITEMS"])): ?>
    <div class="banner-list">

        <?php foreach ($arResult["ITEMS"] as $item): ?>
            <div class="banner-item">

                <?php if (!empty($item["PREVIEW_PICTURE"])): ?>
                    <div class="banner-image">
                        <img
                                src="<?= $item["PREVIEW_PICTURE"]["SRC"] ?>"
                                alt="<?= htmlspecialcharsbx($item["NAME"]) ?>"
                        >
                    </div>
                <?php endif; ?>

                <div class="banner-content">
                    <h2 class="banner-title">
                        <?= htmlspecialcharsbx(
                            $item["PROPERTIES"]["TITLE"]["VALUE"] ?: $item["NAME"]
                        ) ?>
                    </h2>

                    <?php if (!empty($item["PROPERTIES"]["SUBTITLE"]["VALUE"])): ?>
                        <div class="banner-subtitle">
                            <?= htmlspecialcharsbx($item["PROPERTIES"]["SUBTITLE"]["VALUE"]) ?>
                        </div>
                    <?php endif; ?>

                    <?php if (
                        !empty($item["PROPERTIES"]["BUTTON_TEXT"]["VALUE"]) &&
                        !empty($item["PROPERTIES"]["BUTTON_LINK"]["VALUE"])
                    ): ?>
                        <a
                                href="<?= $item["PROPERTIES"]["BUTTON_LINK"]["VALUE"] ?>"
                                class="banner-button"
                        >
                            <?= htmlspecialcharsbx($item["PROPERTIES"]["BUTTON_TEXT"]["VALUE"]) ?>
                        </a>
                    <?php endif; ?>
                </div>

            </div>
        <?php endforeach; ?>

    </div>
<?php endif; ?>


