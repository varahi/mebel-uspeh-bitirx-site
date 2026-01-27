<?php
$hideSideBar = false;
if($APPLICATION->GetPageProperty('HIDE_SIDEBAR') == 'Y') {
    $hideSideBar = true;
}
?>
<?php if ($hideSideBar == false): ?>
    <div id="sidebar">
        <?$APPLICATION->IncludeComponent("bitrix:menu", "left", array(
                "ROOT_MENU_TYPE" => "left",
                "MENU_CACHE_TYPE" => "A",
                "MENU_CACHE_TIME" => "36000000",
                "MENU_CACHE_USE_GROUPS" => "Y",
                "MENU_CACHE_GET_VARS" => array(
                ),
                "MAX_LEVEL" => "1",
                "CHILD_MENU_TYPE" => "left",
                "USE_EXT" => "Y",
                "ALLOW_MULTI_SELECT" => "N"
        ),
                false,
                array(
                        "ACTIVE_COMPONENT" => "Y"
                )
        );?>
    </div>
<?php endif; ?>

