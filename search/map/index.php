<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Карта сайта");
?>

<div class="container">
    <?$APPLICATION->IncludeComponent(
        "bitrix:main.map",
        ".default",
        array(
            "CACHE_TYPE" => "A",
            "CACHE_TIME" => "36000000",
            "SET_TITLE" => "Y",
            "LEVEL" => "4",
            "COL_NUM" => "2",
            "SHOW_DESCRIPTION" => "Y"
        ),
        false
    );?>
</div>

<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
?>