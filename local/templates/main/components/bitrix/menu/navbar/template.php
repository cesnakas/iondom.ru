<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<div class="me-3">
    <div style="width: 120px"></div>
</div>

<?if (!empty($arResult)):?>
<ul class="navbar-nav w-100 justify-content-between ms-auto" id="globalNav">
<?
foreach($arResult as $arItem):
	if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) 
		continue;
?>
	<?if($arItem["SELECTED"]):?>
    <li class="nav-item">
        <a class="nav-link text-reset active" href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>
    </li>
	<?else:?>
    <li class="nav-item">
        <a class="nav-link text-reset" href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>
    </li>
	<?endif?>
	
<?endforeach?>

    <li class="nav-item">
        <a class="nav-link text-reset" href="tel:+74994443354">
            <svg width="16" height="16" class="me-2">
                <use xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/icons.svg#phone-call"/>
            </svg>
            8-499-444-33-54
            <span class="ms-1">(с 8 до 20)</span>
        </a>
    </li>

</ul>
<?endif?>