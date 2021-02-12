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
    // CSS
    Asset::getInstance()->addCss('https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css');
    Asset::getInstance()->addCss('https://cdn.jsdelivr.net/npm/swiper@6.4.1/swiper-bundle.min.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/css/main.css');
    // JS
    Asset::getInstance()->addJs('https://code.jquery.com/jquery-3.5.1.min.js');
    Asset::getInstance()->addJs('https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js');
    Asset::getInstance()->addJs('https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js');
    Asset::getInstance()->addJs('https://cdn.jsdelivr.net/npm/swiper@6.4.1/swiper-bundle.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/js/main.js');
?>

    <title><?$APPLICATION->ShowTitle();?></title>

    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">

</head>
<div id="panel"><?$APPLICATION->ShowPanel();?></div>
<body>

    <header class="navbar navbar-expand-lg py-0 pt-lg-5 pb-lg-0 navbar-light bg-white" id="header">
        <div class="container">

            <button class="navbar-toggler me-5" id="navbarMenuBtn" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMenu" aria-controls="navbarMenu" aria-expanded="false" aria-label="Toggle navigation">
                <svg width="24" height="17">
                    <use xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/icons.svg#menu-btn"/>
                </svg>
            </button>

            <a class="navbar-brand mx-auto mx-lg-0 me-lg-3" href="<?=SITE_DIR;?>">
                <svg width="120" height="53">
                    <use xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/logo.svg#logo"/>
                </svg>
            </a>

            <!-- mobile search -->
            <?$APPLICATION->IncludeComponent(
                "bitrix:search.form",
                "mobile-search",
                Array(
                    "USE_SUGGEST" => "N",
                    "PAGE" => "#SITE_DIR#search/"
                )
            );?>
            <!-- /mobile search -->

            <!-- mobile basket -->
            <?$APPLICATION->IncludeComponent(
                "bitrix:sale.basket.basket.line",
                "mobile-basket",
                Array(
                    "HIDE_ON_BASKET_PAGES" => "N",
                    "PATH_TO_BASKET" => SITE_DIR."personal/cart/",
                    "PATH_TO_ORDER" => SITE_DIR."personal/order/make/",
                    "PATH_TO_PERSONAL" => SITE_DIR."personal/",
                    "PATH_TO_PROFILE" => SITE_DIR."personal/",
                    "PATH_TO_REGISTER" => SITE_DIR."login/",
                    "POSITION_FIXED" => "N",
                    "POSITION_HORIZONTAL" => "right",
                    "POSITION_VERTICAL" => "top",
                    "SHOW_AUTHOR" => "N",
                    "SHOW_DELAY" => "N",
                    "SHOW_EMPTY_VALUES" => "N",
                    "SHOW_IMAGE" => "Y",
                    "SHOW_NOTAVAIL" => "N",
                    "SHOW_NUM_PRODUCTS" => "Y",
                    "SHOW_PERSONAL_LINK" => "N",
                    "SHOW_PRICE" => "Y",
                    "SHOW_PRODUCTS" => "N",
                    "SHOW_SUMMARY" => "Y",
                    "SHOW_TOTAL_PRICE" => "N"
                )
            );?>
            <!-- /mobile basket -->

            <div class="collapse navbar-collapse" id="navbarMenu">

                <!-- menu -->
                <button type="button" class="btn btn-cyan d-inline-flex align-items-center rounded-0" id="btnMenu">
                    <svg width="13" height="13">
                        <use xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/icons.svg#menu"/>
                    </svg>
                    <span class="ms-1">Магазин</span>
                </button>
                <!-- /menu -->

                <!-- search -->
                <?$APPLICATION->IncludeComponent(
                    "bitrix:search.form",
                    ".default",
                    Array(
                        "USE_SUGGEST" => "N",
                        "PAGE" => "#SITE_DIR#search/"
                    )
                );?>
                <!-- /search -->

                <!-- basket -->
                <?$APPLICATION->IncludeComponent(
                    "bitrix:sale.basket.basket.line",
                    "basket",
                    Array(
                        "HIDE_ON_BASKET_PAGES" => "N",
                        "PATH_TO_BASKET" => SITE_DIR."personal/cart/",
                        "PATH_TO_ORDER" => SITE_DIR."personal/order/make/",
                        "PATH_TO_PERSONAL" => SITE_DIR."personal/",
                        "PATH_TO_PROFILE" => SITE_DIR."personal/",
                        "PATH_TO_REGISTER" => SITE_DIR."login/",
                        "POSITION_FIXED" => "N",
                        "POSITION_HORIZONTAL" => "right",
                        "POSITION_VERTICAL" => "top",
                        "SHOW_AUTHOR" => "N",
                        "SHOW_DELAY" => "N",
                        "SHOW_EMPTY_VALUES" => "N",
                        "SHOW_IMAGE" => "Y",
                        "SHOW_NOTAVAIL" => "N",
                        "SHOW_NUM_PRODUCTS" => "Y",
                        "SHOW_PERSONAL_LINK" => "N",
                        "SHOW_PRICE" => "Y",
                        "SHOW_PRODUCTS" => "N",
                        "SHOW_SUMMARY" => "Y",
                        "SHOW_TOTAL_PRICE" => "N"
                    )
                );?>
                <!-- /basket -->

            </div>

        </div>
    </header>

    <nav class="navbar navbar-expand d-none d-lg-flex pt-0">
        <div class="container">

            <?$APPLICATION->IncludeComponent(
                "bitrix:menu",
                "navbar",
                Array(
                    "ALLOW_MULTI_SELECT" => "N",
                    "CHILD_MENU_TYPE" => "top",
                    "DELAY" => "N",
                    "MAX_LEVEL" => "1",
                    "MENU_CACHE_GET_VARS" => array(""),
                    "MENU_CACHE_TIME" => "3600",
                    "MENU_CACHE_TYPE" => "A",
                    "MENU_CACHE_USE_GROUPS" => "Y",
                    "MENU_THEME" => "site",
                    "ROOT_MENU_TYPE" => "top",
                    "USE_EXT" => "N"
                )
            );?>

        </div>
    </nav>

    <nav class="navbar navbar-expand d-none">
        <div class="container">
            <ul class="navbar-nav w-100 mx-auto justify-content-center" id="subMenu">
                <li class="nav-item">
                    <a class="nav-link text-reset" href="/about/howto/">Системы видеонаблюдения</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-reset" href="/security-systems/">СКУД Домофон Шлагбаум</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-reset" href="/about/">Системы охранной сигнализации</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-reset" href="/about/guaranty/">Системы пожарной безопасности</a>
                </li>
            </ul>
        </div>
    </nav>

    <main class="min-vh-100">
