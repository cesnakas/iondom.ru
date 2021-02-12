<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>

<a role="button" class="btn d-inline-block d-lg-none" href="/search/">
    <svg width="19" height="20">
        <use xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/icons.svg#search"/>
    </svg>
</a>

<?/*
<form class="input-group ms-4" action="<?=$arResult["FORM_ACTION"]?>">
    <?if($arParams["USE_SUGGEST"] === "Y"):?>
        <?$APPLICATION->IncludeComponent(
            "bitrix:search.suggest.input",
            "",
            array(
                "NAME" => "q",
                "VALUE" => "",
                "INPUT_SIZE" => 15,
                "DROPDOWN_SIZE" => 10,
            ),
            $component,
            array("HIDE_ICONS" => "Y")
        );?>
    <?else:?>
    <input type="search" class="form-control rounded-0" placeholder="Search..." aria-label="Recipient's username" aria-describedby="button-addon2">
    <?endif;?>
    <input
        class="btn btn-primary rounded-start rounded-pill px-3"
        id="button-addon2"
        name="s"
        type="submit"
        value="<?=GetMessage("BSF_T_SEARCH_BUTTON");?>"
    />
</form>
*/?>