<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true) die();
/**
 * @global array $arParams
 * @global CUser $USER
 * @global CMain $APPLICATION
 * @global string $cartId
 */
$compositeStub = (isset($arResult['COMPOSITE_STUB']) && $arResult['COMPOSITE_STUB'] == 'Y');
?>

<? if (!$arResult["DISABLE_USE_BASKET"]) : ?>
<a class="btn ms-3 p-0 position-relative" href="<?=$arParams['PATH_TO_BASKET']?>" role="button">
    <svg width="25" height="22">
        <use xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/icons.svg#basket"/>
    </svg>
    <small class="text-primary"><?=GetMessage('TSB1_CART')?></small>
<? endif; ?>
<? if (!$compositeStub) : ?>
    <? if ($arParams['SHOW_NUM_PRODUCTS'] == 'Y' && ($arResult['NUM_PRODUCTS'] > 0 || $arParams['SHOW_EMPTY_VALUES'] == 'Y')) { ?>
    <span class="position-absolute top-0 start-50 badge rounded-pill bg-primary">
        <small><?=$arResult['NUM_PRODUCTS'];?></small>
    </span>
    <? } ?>
<? endif; ?>
</a>