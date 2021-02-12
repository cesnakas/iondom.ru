<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("ИонДом");
?>

    <section class="position-relative mb-5" id="homeSlider">
        <div class="swiper-container">
            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <img class="img-fluid" src="/images/slider/slide_01.png" alt="...">
                    <div class="d-flex flex-column justify-content-center card-img-overlay p-0">
                        <div class="container">
                            <h3>Уникальное торговое предложение</h3>
                            <p>При помощи систем управления можно контролировать и регулировать каждый источник света в помещении.</p>
                            <button type="button" class="btn btn-primary px-5">Проекты</button>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <img class="img-fluid" src="/images/slider/slide_01.png" alt="...">
                    <div class="d-flex flex-column justify-content-center card-img-overlay p-0">
                        <div class="container">
                            <h3>Уникальное торговое предложение</h3>
                            <p>При помощи систем управления можно контролировать и регулировать каждый источник света в помещении.</p>
                            <button type="button" class="btn btn-primary px-5">Проекты</button>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <img class="img-fluid" src="/images/slider/slide_01.png" alt="...">
                    <div class="d-flex flex-column justify-content-center card-img-overlay p-0">
                        <div class="container">
                            <h3>Уникальное торговое предложение</h3>
                            <p>При помощи систем управления можно контролировать и регулировать каждый источник света в помещении.</p>
                            <button type="button" class="btn btn-primary px-5">Проекты</button>
                        </div>
                    </div>
                </div>

            </div>
            <!-- pagination -->
            <div class="swiper-pagination swiper-pagination-black"></div>
            <!-- arrows -->
            <div class="swiper-button-next swiper-button-black"></div>
            <div class="swiper-button-prev swiper-button-black"></div>
        </div>
    </section>

    <section class="mb-5">
        <div class="container">

            <h3 class="mb-5 text-center">Интернет-магазин</h3>

            <div class="row text-center">

                <div class="col">
                    <div class="card border-0">
                        <img src="/images/shop/video.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title my-4">Видеонаблюдение</h5>
                            <a href="#" class="btn btn-outline-primary px-5">Все комплекты</a>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card border-0">
                        <img src="/images/shop/internet.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title my-4">Интернет</h5>
                            <a href="#" class="btn btn-outline-primary px-5">Все комплекты</a>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card border-0">
                        <img src="/images/shop/smart-home.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title my-4">Умный дом</h5>
                            <a href="#" class="btn btn-outline-primary px-5">Все комплекты</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="mb-5" id="about-company">
        <div class="container">
            <h3 class="mb-5 pt-5 text-center">О компании</h3>
        </div>

        <div class="position-relative py-5">
            <img
                class="img-fluid card-img-overlay p-0 w-100 rounded-0"
                src="/images/about/story.png"
                alt="..."
                style="z-index: -1; height: 100%; object-fit: cover; object-position: center;"
            />
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">

                        <div class="w-75 m-auto py-5">
                            <h4 class="mb-4">История компании</h4>
                            <p>Мебельная фабрика “Роникон” была создана в 2000 году. За годы своего существования она стала одной из ведущих производственных фирм в своей сфере.</p>
                            <p>На сегодняшний день фабрика мебели “Роникон” имеет 1500 точек реализации своей продукции на всей территории РФ, в числе которых 300 розничных магазинов.</p>
                            <p>Только в столице работают 111 салонов компании. Площадь территории фабрики - 50 000м2.</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="w-75 m-auto py-5">
                            <img class="img-fluid" src="/images/about/mission.png" alt="...">
                        </div>
                    </div>
                    <div class="col-lg-6 d-flex">
                        <div class="w-75 m-auto py-5">
                            <h4>Наша миссия</h4>
                            <p>Мебельная фабрика “Роникон” была создана в 2000 году. За годы своего существования она стала одной из ведущих производственных фирм в своей сфере.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="position-relative py-4">
            <img
                class="img-fluid card-img-overlay p-0 w-100 rounded-0"
                src="/images/about/bg-services.png"
                alt="..."
                style="z-index: -1; height: 100%; object-fit: cover; object-position: bottom;"
            />
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="w-75 m-auto py-5 text-white">
                            <h4 class="mb-4">Продукт и сервис</h4>
                            <p>Мебельная фабрика “Роникон” была создана в 2000 году. За годы своего существования она стала одной из ведущих производственных фирм в своей сфере.</p>
                            <p>На сегодняшний день фабрика мебели “Роникон” имеет 1500 точек реализации своей продукции на всей территории РФ, в числе которых 300 розничных магазинов.</p>
                            <p>Только в столице работают 111 салонов компании. Площадь территории фабрики - 50 000м2. </p>
                        </div>
                    </div>
                    <div class="col-lg-6 d-flex">
                        <div class="position-relative m-auto py-5" style="width: 85%;">
                            <img
                                class="img-fluid position-absolute top-50 start-50 translate-middle"
                                src="/images/about/product.png"
                                alt="..."
                            />
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section>

    <section class="mb-5" id="advantages">
        <div class="container">
            <h3 class="mb-5 pt-5 text-center">Наши преимущества</h3>
            <div class="row justify-content-center">

                <div class="col-6 col-lg-2">
                    <figure class="card align-items-center border-0">
                        <div class="rounded-circle" style="padding: 19px; border: 2px solid #224156; background-color: #F5F9FF;">
                            <img
                                class="card-img-top"
                                src="<?=SITE_TEMPLATE_PATH;?>/img/advantages/innovation.png"
                                alt="..."
                                style="max-width: 58px;"
                            />
                        </div>
                        <figcaption class="card-body text-center">
                            <h5 class="card-title fs-6">Иновации</h5>
                        </figcaption>
                    </figure>
                </div>

                <div class="col-6 col-lg-2">
                    <figure class="card align-items-center border-0">
                        <div class="rounded-circle" style="padding: 16px; border: 2px solid #224156; background-color: #F5F9FF;">
                            <img
                                class="card-img-top"
                                src="<?=SITE_TEMPLATE_PATH;?>/img/advantages/transparency.png"
                                alt="..."
                                style="max-width: 64px;"
                            />
                        </div>
                        <figcaption class="card-body text-center">
                            <h5 class="card-title fs-6">Прозрачность</h5>
                        </figcaption>
                    </figure>
                </div>

                <div class="col-6 col-lg-2">
                    <figure class="card align-items-center border-0">
                        <div class="rounded-circle" style="padding: 14px; border: 2px solid #224156; background-color: #F5F9FF;">
                            <img
                                class="card-img-top"
                                src="<?=SITE_TEMPLATE_PATH;?>/img/advantages/quality.png"
                                alt="..."
                                style="max-width: 68px;"
                            />
                        </div>
                        <figcaption class="card-body text-center">
                            <h5 class="card-title fs-6">Качество</h5>
                        </figcaption>
                    </figure>
                </div>

                <div class="col-6 col-lg-2">
                    <figure class="card align-items-center border-0">
                        <div class="rounded-circle" style="padding: 14.5px; border: 2px solid #224156; background-color: #F5F9FF;">
                            <img
                                class="card-img-top"
                                src="<?=SITE_TEMPLATE_PATH;?>/img/advantages/cooperation.png"
                                alt="..."
                                style="max-width: 67px;"
                            />
                        </div>
                        <figcaption class="card-body text-center">
                            <h5 class="card-title fs-6">Равноправность</h5>
                        </figcaption>
                    </figure>
                </div>

            </div>
        </div>
    </section>

    <section class="pb-5" style="background-color: var(--bs-cyan)">
        <div class="container">
            <h3 class="pt-5">Блог</h3>
            <div class="row">

                <div class="col">
                    <div class="card border-0 rounded-0 shadow">
                        <img src="<?=SITE_TEMPLATE_PATH;?>/img/blog/blog_01.png" class="card-img-top rounded-0" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Название статьи</h5>
                            <p class="card-text">Система по управлению отоплением, а также Система по управлению вентиляцией.</p>
                            <a href="#" class="btn btn-outline-primary px-5">Читать далее</a>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card border-0 rounded-0 shadow">
                        <img src="<?=SITE_TEMPLATE_PATH;?>/img/blog/blog_02.png" class="card-img-top rounded-0" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Название статьи</h5>
                            <p class="card-text">Система по управлению отоплением, а также Система по управлению вентиляцией.</p>
                            <a href="#" class="btn btn-outline-primary px-5">Читать далее</a>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card border-0 rounded-0 shadow">
                        <img src="<?=SITE_TEMPLATE_PATH;?>/img/blog/blog_03.png" class="card-img-top rounded-0" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Название статьи</h5>
                            <p class="card-text">Система по управлению отоплением, а также Система по управлению вентиляцией.</p>
                            <a href="#" class="btn btn-outline-primary px-5">Читать далее</a>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card border-0 rounded-0 shadow">
                        <img src="<?=SITE_TEMPLATE_PATH;?>/img/blog/blog_04.png" class="card-img-top rounded-0" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Название статьи</h5>
                            <p class="card-text">Система по управлению отоплением, а также Система по управлению вентиляцией.</p>
                            <a href="#" class="btn btn-outline-primary px-5">Читать далее</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="mb-5 py-5" style="background-color: rgba(228,241,255,.21);">
        <div class="container">
            <h3 class="py-5 text-center">Наши партнеры</h3>
            <div class="row align-items-center">

                <div class="col-6 col-lg">
                    <img class="img-fluid mb-3" src="/local/templates/main/img/partners/hikvision.png" alt="">
                </div>

                <div class="col-6 col-lg">
                    <img class="img-fluid mb-3" src="/local/templates/main/img/partners/dssl.png" alt="">
                </div>

                <div class="col-6 col-lg">
                    <img class="img-fluid mb-3" src="/local/templates/main/img/partners/beget.png" alt="">
                </div>

                <div class="col-6 col-lg">
                    <img class="img-fluid mb-3" src="/local/templates/main/img/partners/space-technology.png" alt="">
                </div>

                <div class="col-6 col-lg">
                    <img class="img-fluid mb-3" src="/local/templates/main/img/partners/mango-office.png" alt="">
                </div>

                <div class="col-6 col-lg">
                    <img class="img-fluid mb-3" src="/local/templates/main/img/partners/mikrotik.png" alt="">
                </div>

            </div>
        </div>
    </section>

    <section class="pb-5">
        <div class="container">

            <h3 class="pt-5">Выполненные работы</h3>
            <div class="row">

                <div class="col">
                    <div class="card border-0 rounded-0 shadow">
                        <img src="<?=SITE_TEMPLATE_PATH;?>/img/work/work_01.png" class="card-img-top rounded-0" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Название статьи</h5>
                            <p class="card-text">Система по управлению отоплением, а также Система по управлению вентиляцией.</p>
                            <div class="d-grid gap-2">
                                <a href="#" class="btn btn-outline-primary px-5">Читать далее</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card border-0 rounded-0 shadow">
                        <img src="<?=SITE_TEMPLATE_PATH;?>/img/work/work_02.png" class="card-img-top rounded-0" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Название статьи</h5>
                            <p class="card-text">Система по управлению отоплением, а также Система по управлению вентиляцией.</p>
                            <div class="d-grid gap-2">
                                <a href="#" class="btn btn-outline-primary px-5">Читать далее</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card border-0 rounded-0 shadow">
                        <img src="<?=SITE_TEMPLATE_PATH;?>/img/work/work_03.png" class="card-img-top rounded-0" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Название статьи</h5>
                            <p class="card-text">Система по управлению отоплением, а также Система по управлению вентиляцией.</p>
                            <div class="d-grid gap-2">
                                <a href="#" class="btn btn-outline-primary px-5">Читать далее</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card border-0 rounded-0 shadow">
                        <img src="<?=SITE_TEMPLATE_PATH;?>/img/work/work_04.png" class="card-img-top rounded-0" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Название статьи</h5>
                            <p class="card-text">Система по управлению отоплением, а также Система по управлению вентиляцией.</p>
                            <div class="d-grid gap-2">
                                <a href="#" class="btn btn-outline-primary px-5">Читать далее</a>
                            </div>
                        </div>
                    </div>
                </div>

        </div>
    </section>

<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
?>