<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
$this->setFrameMode(true);
?>

<div class="popular-products">
    <?php foreach ($arResult["ITEMS"] as $item): ?>
        <?php
        $img = $item["PREVIEW_PICTURE"]
                ? CFile::GetPath($item["PREVIEW_PICTURE"])
                : '/local/templates/main/assets/no-image.png';
        $price = $item["PROPERTIES"]["PRICE"]["VALUE"];
        ?>
        <div class="popular-product">
            <a href="<?= $item["DETAIL_PAGE_URL"] ?>" class="popular-product__image">
                <img src="<?= $img ?>" alt="<?= htmlspecialcharsbx($item["NAME"]) ?>">
            </a>

            <div class="popular-product__content">
                <a href="<?= $item["DETAIL_PAGE_URL"] ?>" class="popular-product__title">
                    <?= htmlspecialcharsbx($item["NAME"]) ?>
                </a>

                <?php if ($item["PREVIEW_TEXT"]): ?>
                    <div class="popular-product__text">
                        <?= $item["PREVIEW_TEXT"] ?>
                    </div>
                <?php endif; ?>

                <?php if ($price): ?>
                    <div class="popular-product__price">
                        <?= number_format($price, 0, '', ' ') ?> ₽
                    </div>
                <?php endif; ?>
            </div>
        </div>
    <?php endforeach; ?>
</div>
