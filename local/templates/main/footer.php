<?if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true)die();?>

    </main>

    <? if(
        ($APPLICATION->GetCurPage() != "/") &&
        ($APPLICATION->GetCurPage() != "/catalog/") &&
        ($APPLICATION->GetCurPage() != "/search/")
    ): ?>
    <footer class="mt-5 py-5 bg-primary offset-lg-2 col-lg-10" role="contentinfo">
    <? else: ?>
    <footer class="mt-5 py-5 bg-primary" role="contentinfo">
    <? endif; ?>
        <div class="container">

            <div class="pb-4">
                <a href="<?=SITE_DIR?>">
                    <svg width="120" height="53">
                        <use xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/logo.svg#logo-fill"/>
                    </svg>
                </a>
            </div>

            <div class="row d-none d-lg-flex">
                <div class="col-lg">
                    <div class="fs-3 mb-3">Услуги</div>
                    <div class="list-group list-group-flush">
                        <a class="list-group-item list-group-item-action" href="#">Услуга 1</a>
                        <a class="list-group-item list-group-item-action" href="#">Услуга 2</a>
                        <a class="list-group-item list-group-item-action" href="#">Услуга 3</a>
                        <a class="list-group-item list-group-item-action" href="#">Услуга 4</a>
                        <a class="list-group-item list-group-item-action" href="#">Услуга 5</a>
                        <a class="list-group-item list-group-item-action" href="#">Услуга 6</a>
                    </div>
                </div>
                <div class="col-lg">
                    <div class="fs-3 mb-3">Товары</div>
                    <div class="list-group list-group-flush">
                        <a class="list-group-item list-group-item-action" href="#">Группа товаров 1</a>
                        <a class="list-group-item list-group-item-action" href="#">Группа товаров 2</a>
                        <a class="list-group-item list-group-item-action" href="#">Группа товаров 3</a>
                        <a class="list-group-item list-group-item-action" href="#">Группа товаров 4</a>
                        <a class="list-group-item list-group-item-action" href="#">Группа товаров 5</a>
                        <a class="list-group-item list-group-item-action" href="#">Группа товаров 6</a>
                    </div>
                </div>
                <div class="col-lg">
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:menu",
                        "footer",
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
                <div class="col-lg-3">
                    <div class="fs-3 mb-3">Наши контакты</div>
                    <div class="list-group list-group-flush fs-6">
                        <a class="list-group-item list-group-item-action" href="#">+ 7 777 777 7777</a>
                        <a class="list-group-item list-group-item-action" href="#">email@mail.ru</a>
                        <a class="list-group-item list-group-item-action" href="#">г. Москва, ул. Антонова 27</a>
                    </div>
                    <hr>
                    <div class="list-group list-group-horizontal">
                        <a class="list-group-item" target="_blank" href="http://instagram.com">
                            <svg width="30" height="30">
                                <use xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/icons.svg#instagram"/>
                            </svg>
                        </a>
                        <a class="list-group-item" target="_blank" href="https://t.me/">
                            <svg width="30" height="30">
                                <use xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/icons.svg#telegram"/>
                            </svg>
                        </a>
                        <a class="list-group-item" target="_blank" href="https://wa.me">
                            <svg width="30" height="30">
                                <use xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/icons.svg#whatsapp"/>
                            </svg>
                        </a>
                        <a class="list-group-item" target="_blank" href="https://vk.com">
                            <svg width="30" height="30">
                                <use xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/icons.svg#vk"/>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="fs-3 mb-4">Будьте всегда в курсе</div>
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" placeholder="Ваш Email" aria-label="Recipient's username" aria-describedby="button-addon2">
                        <button class="btn btn-light rounded-circle" type="button" id="button-addon2">
                            <svg width="16" height="16">
                                <use xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/icons.svg#arrow-btn"/>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

        </div>

        <!-- mobile -->
        <div class="accordion accordion-flush d-lg-none mb-4" id="footerAccordion">

            <div class="accordion-item">
                <h2 class="accordion-header" id="footer-headingOne">
                    <button class="accordion-button collapsed px-3 text-white bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#footer-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                        Услуги
                    </button>
                </h2>
                <div class="accordion-collapse collapse" id="footer-collapseOne" aria-labelledby="footer-headingOne" data-bs-parent="#footerAccordion">
                    <div class="accordion-body px-3">
                        <div class="list-group list-group-flush">
                            <a class="list-group-item list-group-item-action" href="#">Услуга 1</a>
                            <a class="list-group-item list-group-item-action" href="#">Услуга 2</a>
                            <a class="list-group-item list-group-item-action" href="#">Услуга 3</a>
                            <a class="list-group-item list-group-item-action" href="#">Услуга 4</a>
                            <a class="list-group-item list-group-item-action" href="#">Услуга 5</a>
                            <a class="list-group-item list-group-item-action" href="#">Услуга 6</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="footer-headingTwo">
                    <button class="accordion-button collapsed px-3 text-white bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#footer-collapseTwo" aria-expanded="false" aria-controls="footer-collapseTwo">
                        Товары
                    </button>
                </h2>
                <div class="accordion-collapse collapse" id="footer-collapseTwo" aria-labelledby="footer-headingTwo" data-bs-parent="#footerAccordion">
                    <div class="accordion-body px-3">
                        <div class="list-group list-group-flush">
                            <a class="list-group-item list-group-item-action" href="#">Группа товаров 1</a>
                            <a class="list-group-item list-group-item-action" href="#">Группа товаров 2</a>
                            <a class="list-group-item list-group-item-action" href="#">Группа товаров 3</a>
                            <a class="list-group-item list-group-item-action" href="#">Группа товаров 4</a>
                            <a class="list-group-item list-group-item-action" href="#">Группа товаров 5</a>
                            <a class="list-group-item list-group-item-action" href="#">Группа товаров 6</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="footer-headingThree">
                    <button class="accordion-button collapsed px-3 text-white bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#footer-collapseThree" aria-expanded="false" aria-controls="footer-collapseThree">
                        Меню
                    </button>
                </h2>
                <div class="accordion-collapse collapse" id="footer-collapseThree" aria-labelledby="footer-headingThree" data-bs-parent="#footerAccordion">
                    <div class="accordion-body px-3">
                        <?$APPLICATION->IncludeComponent(
                            "bitrix:menu",
                            "footer",
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
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="footer-headingFour">
                    <button class="accordion-button collapsed px-3 text-white bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#footer-collapseFour" aria-expanded="false" aria-controls="footer-collapseFour">
                        Наши контакты
                    </button>
                </h2>
                <div class="accordion-collapse collapse" id="footer-collapseFour" aria-labelledby="footer-headingFour" data-bs-parent="#footerAccordion">
                    <div class="accordion-body px-3">
                        <div class="list-group list-group-flush fs-6">
                            <a class="list-group-item list-group-item-action" href="#">+ 7 777 777 7777</a>
                            <a class="list-group-item list-group-item-action" href="#">email@mail.ru</a>
                            <a class="list-group-item list-group-item-action" href="#">г. Москва, ул. Антонова 27</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="container d-lg-none">

            <div class="fs-3 mb-4">Будьте всегда в курсе</div>

            <div class="input-group mb-4">
                <input type="email" class="form-control" placeholder="Ваш Email" aria-label="Recipient's username" aria-describedby="button-addon2">
                <button class="btn btn-light rounded-circle" type="button" id="button-addon2">
                    <svg width="16" height="16">
                        <use xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/icons.svg#arrow-btn"/>
                    </svg>
                </button>
            </div>

            <div class="list-group list-group-horizontal justify-content-center">
                <a class="list-group-item" target="_blank" href="http://instagram.com">
                    <svg width="30" height="30">
                        <use xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/icons.svg#instagram"/>
                    </svg>
                </a>
                <a class="list-group-item" target="_blank" href="https://t.me/">
                    <svg width="30" height="30">
                        <use xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/icons.svg#telegram"/>
                    </svg>
                </a>
                <a class="list-group-item" target="_blank" href="https://wa.me">
                    <svg width="30" height="30">
                        <use xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/icons.svg#whatsapp"/>
                    </svg>
                </a>
                <a class="list-group-item" target="_blank" href="https://vk.com">
                    <svg width="30" height="30">
                        <use xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/icons.svg#vk"/>
                    </svg>
                </a>
            </div>

        </div>
        <!-- /mobile -->

    </footer>

</body>
</html>