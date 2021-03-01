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

    <header class="navbar navbar-expand-lg fixed-top py-0 pt-lg-5 pb-lg-0 navbar-light bg-white" id="header">
        <div class="container">

            <div class="row row-cols-1 gx-0 w-100">
                <div class="col d-flex justify-content-between align-items-center">
                    <!-- mobile btn -->
                    <button class="navbar-toggler me-5 collapsed" id="navbarMenuBtn" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMenu" aria-controls="navbarMenu" aria-expanded="false" aria-label="Toggle navigation">
                        <svg width="24" height="17">
                            <use xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/icons.svg#menu-btn"/>
                        </svg>
                    </button>
                    <!-- /mobile btn -->
                    <!-- logo -->
                    <a class="navbar-brand mx-auto mx-lg-0 me-lg-3" href="<?=SITE_DIR;?>">
                        <svg width="120" height="53">
                            <use xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/logo.svg#logo"/>
                        </svg>
                    </a>
                    <!-- /logo -->
                    <!-- btn catalog -->
                    <button type="button" class="btn btn-cyan d-none d-lg-inline-flex align-items-center rounded-0" id="btnMenu">
                        <svg width="13" height="13">
                            <use xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/icons.svg#menu"/>
                        </svg>
                        <span class="ms-1">Магазин</span>
                    </button>
                    <!-- /btn catalog -->
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
                    <!-- mobile basket -->
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:sale.basket.basket.line",
                        "mobile-basket",
                        Array(
                            "HIDE_ON_BASKET_PAGES" => "N",
                            "PATH_TO_BASKET" => SITE_DIR."basket/",
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
                </div>
                <div class="col d-flex justify-content-between align-items-center">
                    <div class="collapse navbar-collapse py-2" id="navbarMenu">

                        <!-- mobile menu -->
                        <!--<nav class="list-group list-group-flush d-lg-none my-3">
                            <a href="#" class="list-group-item list-group-item-action">The current link item</a>
                            <a href="#" class="list-group-item list-group-item-action">A second link item</a>
                            <a href="#" class="list-group-item list-group-item-action">A third link item</a>
                            <a href="#" class="list-group-item list-group-item-action">A fourth link item</a>
                            <a href="#" class="list-group-item list-group-item-action">A disabled link item</a>
                        </nav>-->

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
                        <!-- /mobile menu -->

                    </div>
                </div>
                <div class="col position-relative">

                    <!--<ul class="navbar-nav w-100 mx-auto justify-content-center" id="subMenu">
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
                    </ul>-->

                    <!-- // -->

                    <ul class="nav nav-tabs mb-0 d-flex justify-content-center align-items-center" id="subMenu" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">
                                Системы<br>видеонаблюдения
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">
                                СКУД Домофон<br>Шлагбаум
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">
                                Системы охранной<br>сигнализации
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-contact-tab-0" data-bs-toggle="pill" data-bs-target="#pills-contact-0" type="button" role="tab" aria-controls="pills-contact-0" aria-selected="false">
                                Системы пожарной<br>безопасности
                            </button>
                        </li>
                    </ul>
                    <!--//-->
                    <div class="tab-content px-4 py-5 position-absolute bg-primary text-white" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                            <div class="row">
                                <div class="col">
                                    <div class="list-unstyled">
                                        <a href="#" class="nav-link text-white">The current link item</a>
                                        <a href="#" class="nav-link text-white">A second link item</a>
                                        <a href="#" class="nav-link text-white">A third link item</a>
                                        <a href="#" class="nav-link text-white">A fourth link item</a>
                                        <a href="#" class="nav-link text-white">A disabled link item</a>
                                    </div>
                                </div>
                                <div class="col">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci asperiores dolorem id illo itaque, maxime minima minus nam necessitatibus nesciunt nobis optio quod quos sint tempore tenetur veritatis! Error, quam.
                                </div>
                                <div class="col">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium cum dicta ea earum fugiat itaque iure labore laudantium modi necessitatibus praesentium quam repellendus rerum sit tempora tempore, ullam voluptas voluptatibus.
                                </div>
                                <div class="col">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta error excepturi ipsum magnam nihil ratione vitae! Accusantium aperiam commodi excepturi fugit id magnam mollitia nobis voluptatem? Atque laborum nihil soluta?
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus at, consequatur consequuntur et excepturi, facere fuga ipsam itaque, laborum magnam molestias necessitatibus perspiciatis provident quaerat quos sed suscipit tempora ut.
                        </div>
                        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid aperiam, commodi dolore dolorem, facilis fugit molestiae quidem recusandae repellat similique tempore, voluptate voluptatibus voluptatum. Cum eaque numquam quasi quisquam sint.
                        </div>
                        <div class="tab-pane fade" id="pills-contact-0" role="tabpanel" aria-labelledby="pills-contact-tab-0">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias animi autem cum fugit, harum iure laborum molestias nam officiis optio placeat porro quas sequi temporibus ut vitae voluptas voluptate voluptatibus.
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </header>

    <?/* if(
        ($APPLICATION->GetCurPage() != "/") &&
        ($APPLICATION->GetCurPage() != "/catalog/") &&
        ($APPLICATION->GetCurPage() != "/search/")
    ): */?>
    <nav class="fixed-top bottom-0 bg-primary text-white" id="leftNavbar">
        <div class="container">

            <div class="px-3 pt-5 pb-3">
                <a href="<?=SITE_DIR?>">
                    <svg width="120" height="53">
                        <use xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/logo.svg#logo-fill"/>
                    </svg>
                </a>
                <p>Видеонаблюдение</p>
            </div>

            <div class="accordion accordion-flush" id="accordionFlushExample">

                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            Типовые решения
                        </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body px-1">

                            <div class="list-group list-group-flush">
                                <a href="#" class="list-group-item list-group-item-action text-white bg-transparent active">Для дома</a>
                                <a href="#" class="list-group-item list-group-item-action text-white bg-transparent">Для дачи</a>
                                <a href="#" class="list-group-item list-group-item-action text-white bg-transparent">В коттедж</a>
                                <a href="#" class="list-group-item list-group-item-action text-white bg-transparent">Для квартиры</a>
                                <a href="#" class="list-group-item list-group-item-action text-white bg-transparent">Для подъезда, лестницы</a>
                                <a href="#" class="list-group-item list-group-item-action text-white bg-transparent">В лифт</a>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                            Системные особенности
                        </button>
                    </h2>
                    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body px-1">

                            <div class="list-group list-group-flush">
                                <a href="#" class="list-group-item list-group-item-action text-white bg-transparent active">Видеонаблюдение через интернет</a>
                                <a href="#" class="list-group-item list-group-item-action text-white bg-transparent">Беспроводное видеонаблюдение</a>
                                <a href="#" class="list-group-item list-group-item-action text-white bg-transparent">Уличное видеонаблюдение</a>
                                <a href="#" class="list-group-item list-group-item-action text-white bg-transparent">Видеонаблюдение на расстоянии</a>
                                <a href="#" class="list-group-item list-group-item-action text-white bg-transparent">Автономная система видеонаблюдения</a>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                            Услуги и цены
                        </button>
                    </h2>
                    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body px-1">

                            <div class="list-group list-group-flush">
                                <a href="#" class="list-group-item list-group-item-action text-white bg-transparent active">Проектирование</a>
                                <a href="#" class="list-group-item list-group-item-action text-white bg-transparent">Установка и монтаж</a>
                                <a href="#" class="list-group-item list-group-item-action text-white bg-transparent">Настройка</a>
                                <a href="#" class="list-group-item list-group-item-action text-white bg-transparent">Сервисное обслуживание</a>
                                <a href="#" class="list-group-item list-group-item-action text-white bg-transparent">Комплексные услуги</a>
                                <a href="#" class="list-group-item list-group-item-action text-white bg-transparent">Сервис StartHelp</a>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </nav>
    <?/* endif; */?>

    <main class="min-vh-100">
