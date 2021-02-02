<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<div class="fs-3 mb-3">Меню</div>

<?if (!empty($arResult)):?>
<div class="list-group list-group-flush">
<?
foreach($arResult as $arItem):
	if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) 
		continue;
?>
	<?if($arItem["SELECTED"]):?>
    <a class="list-group-item list-group-item-action _active" href="<?=$arItem["LINK"]?>">
        <?=$arItem["TEXT"]?>
    </a>
	<?else:?>
    <a class="list-group-item list-group-item-action" href="<?=$arItem["LINK"]?>">
        <?=$arItem["TEXT"]?>
    </a>
	<?endif?>
<?endforeach?>
</div>
<?endif?>