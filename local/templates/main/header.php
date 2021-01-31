<?if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true)die();?>
<!DOCTYPE html>
<html lang="<?=LANGUAGE_ID;?>">
<head>

<?
    $APPLICATION->ShowHead();
    // Bitrix
    use Bitrix\Main\Page\Asset;

    // Meta
    Asset::getInstance()->addString('<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, viewport-fit=cover, user-scalable=0">');

    // Bootstrap v4
    // use Bitrix\Main\UI\Extension;
    //Extension::load('ui.bootstrap4');

    // CSS
    Asset::getInstance()->addCss('https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css');
    Asset::getInstance()->addCss('https://cdn.jsdelivr.net/npm/swiper@6.4.1/swiper-bundle.min.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/css/main.css');

    // JS
    Asset::getInstance()->addJs('https://code.jquery.com/jquery-3.5.1.min.js');
    Asset::getInstance()->addJs('https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js');
    Asset::getInstance()->addJs('https://cdn.jsdelivr.net/npm/swiper@6.4.1/swiper-bundle.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/js/main.js');
?>

    <title><?$APPLICATION->ShowTitle();?></title>

    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">

</head>
<div id="panel"><?$APPLICATION->ShowPanel();?></div>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container">

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <a class="navbar-brand" href="<?=SITE_DIR;?>">
                <svg width="139" height="53">
                    <use xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/logo.svg#logo"/>
                </svg>
            </a>

            <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">

                <button type="button" class="btn btn-primary">
                    Магазин
                </button>

                <div class="input-group ms-4">
                    <input type="text" class="form-control rounded-0" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2">
                    <button type="button" class="btn btn-primary rounded-start rounded-pill px-3" id="button-addon2">
                        Найти
                    </button>
                </div>

                <button type="button" class="btn ms-3 p-0 position-relative">
                    <svg width="25" height="22">
                        <use xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/icons.svg#basket"/>
                    </svg>
                    <small class="text-primary">Корзина</small>
                    <span class="position-absolute top-0 start-50 badge rounded-pill bg-primary">
                        <small>12</small>
                    </span>
                </button>

            </div>

        </div>
    </nav>
