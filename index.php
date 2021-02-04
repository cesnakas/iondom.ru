<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("ИонДом");
?>

    <section class="position-relative mb-5">
        <img class="img-fluid" src="/images/slider/slide_01.png" alt="...">
        <div class="d-flex flex-column justify-content-center card-img-overlay p-0">
            <div class="container">
                <h3>Уникальное торговое предложение</h3>
                <p>При помощи систем управления можно контролировать и регулировать каждый источник света в помещении.</p>
                <button type="button" class="btn btn-primary px-5">Проекты</button>
            </div>
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
                style="z-index: -1; height: 100%; object-fit: cover; object-position: center;"
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

<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
?>