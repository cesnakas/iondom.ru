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

    <header class="navbar navbar-expand-lg pt-1 pt-lg-5 pb-lg-0 navbar-light bg-white" id="header">
        <div class="container">

            <button class="navbar-toggler me-5" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <a class="navbar-brand mx-auto mx-lg-0 me-lg-3" href="<?=SITE_DIR;?>">
                <svg width="120" height="53">
                    <use xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/logo.svg#logo"/>
                </svg>
            </a>

            <!-- mobile btn -->
            <button type="button" class="btn ms-auto d-inline-block d-lg-none">
                <svg width="19" height="20">
                    <use xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/icons.svg#search"/>
                </svg>
            </button>

            <button type="button" class="btn d-inline-block d-lg-none position-relative">
                <svg width="20" height="18">
                    <use xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/icons.svg#basket"/>
                </svg>
                <span class="position-absolute top-0 start-50 badge rounded-pill bg-primary">
                    <small>12</small>
                </span>
            </button>
            <!-- /mobile btn -->

            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <button type="button" class="btn btn-cyan d-inline-flex align-items-center rounded-0" id="btnMenu">
                    <svg width="13" height="13">
                        <use xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/icons.svg#menu"/>
                    </svg>
                    <span class="ms-1">Магазин</span>
                </button>

                <div class="input-group ms-4">
                    <input type="search" class="form-control rounded-0" placeholder="Search..." aria-label="Recipient's username" aria-describedby="button-addon2">
                    <button type="button" class="btn btn-primary rounded-start rounded-pill px-3" id="button-addon2">
                        Найти
                    </button>
                </div>

                <a class="btn ms-3 p-0 position-relative" href="<?=SITE_DIR?>basket/" role="button">
                    <svg width="25" height="22">
                        <use xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/icons.svg#basket"/>
                    </svg>
                    <small class="text-primary">Корзина</small>
                    <span class="position-absolute top-0 start-50 badge rounded-pill bg-primary">
                        <small>12</small>
                    </span>
                </a>

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

    <nav class="navbar navbar-expand">
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
