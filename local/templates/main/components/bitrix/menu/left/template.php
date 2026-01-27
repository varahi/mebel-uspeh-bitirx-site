<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Loader;

if (!Loader::includeModule("iblock")) {
    return;
}

$IBLOCK_ID = 1;   // ID инфоблока каталога
$MAX_ITEMS = 10; // сколько элементов показывать
?>

<ul class="sidebar-menu">
    <?php
    // 1. Разделы верхнего уровня (DEPTH_LEVEL = 1)
    $sections = CIBlockSection::GetList(
            ["SORT" => "ASC"],
            [
                    "IBLOCK_ID" => $IBLOCK_ID,
                    "DEPTH_LEVEL" => 1,
                    "ACTIVE" => "Y",
                    "GLOBAL_ACTIVE" => "Y",
            ],
            false,
            ["ID", "NAME", "SECTION_PAGE_URL", "DEPTH_LEVEL"]
    );

    while ($section = $sections->GetNext()):
        ?>
        <li class="level-1">
        <a href="<?= $section["SECTION_PAGE_URL"] ?>">
            <?= htmlspecialcharsbx($section["NAME"]) ?>
        </a>

        <?php
        // 2. Подразделы текущего раздела
        $subSections = CIBlockSection::GetList(
                ["SORT" => "ASC"],
                [
                        "IBLOCK_ID" => $IBLOCK_ID,
                        "SECTION_ID" => $section["ID"],
                        "DEPTH_LEVEL" => $section["DEPTH_LEVEL"] + 1,
                        "ACTIVE" => "Y",
                        "GLOBAL_ACTIVE" => "Y",
                ],
                false,
                ["ID", "NAME", "SECTION_PAGE_URL", "DEPTH_LEVEL"]
        );

        $hasSub = false;
        ob_start();

        //print_r($subSections);

        while ($sub = $subSections->GetNext()):
            $hasSub = true;
            ?>
            <li class="level-2">
            <a href="<?= $sub["SECTION_PAGE_URL"] ?>">
                <?= htmlspecialcharsbx($sub["NAME"]) ?>
            </a>

            <?php
            // 3. Элементы в подразделе
            $items = CIBlockElement::GetList(
                    ["SORT" => "ASC"],
                    [
                            "IBLOCK_ID" => $IBLOCK_ID,
                            "IBLOCK_SECTION_ID" => $sub["ID"], // ← ВАЖНО
                            "ACTIVE" => "Y",
                    ],
                    false,
                    ["nTopCount" => $MAX_ITEMS],
                    ["ID", "NAME", "DETAIL_PAGE_URL"]
            );

            $hasItems = false;
            ob_start();

            while ($item = $items->GetNext()):
                $hasItems = true;
                ?>
                <li class="level-3">
                    <a href="<?= $item["DETAIL_PAGE_URL"] ?>">
                        <?= htmlspecialcharsbx($item["NAME"]) ?>
                    </a>
                </li>
            <?php endwhile; ?>

            <?php
            $itemsHtml = ob_get_clean();
            if ($hasItems):
                ?>
                <ul class="sidebar-items">
                    <?= $itemsHtml ?>
                </ul>
            <?php endif; ?>

            </li>
        <?php endwhile; ?>

        <?php
        $subHtml = ob_get_clean();
        if ($hasSub):
            ?>
            <ul class="sidebar-submenu">
                <?= $subHtml ?>
            </ul>
        <?php endif; ?>

        </li>
    <?php endwhile; ?>
</ul>

