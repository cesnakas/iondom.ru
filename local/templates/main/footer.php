<?if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true)die();?>

    </main>

    <footer class="mt-5 py-5 bg-primary" role="contentinfo">
        <div class="container">

            <div class="pb-4">
                <a href="<?=SITE_DIR?>">
                    <svg width="120" height="53">
                        <use xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/logo.svg#logo-fill"/>
                    </svg>
                </a>
            </div>

            <div class="row">
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
    </footer>

</body>
</html>