<?php

/** @var \yii\web\View $this */

/** @var string $content */

use common\widgets\Alert;
use frontend\assets\AppAsset;
use frontend\assets\FarmAsset;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;
use yii\helpers\Url;

FarmAsset::register($this);
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>" class="h-100">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <?php $this->registerCsrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body class="d-flex flex-column h-100">
    <?php $this->beginBody() ?>

    <div class="cursor js-cursor"></div>
    <!-- header -->
    <header class="header-area header">
        <div id="header-sticky" class="menu-area">
            <div class="container">
                <div class="second-menu">
                    <div class="row align-items-center">
                        <div class="col-xl-3 col-lg-3">
                            <div class="logo">
                                <a href="<?= Url::home() ?>"><img src="img/logo/Present_logo.png" width="70px"
                                                                  alt="logo"></a>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">

                            <div class="main-menu text-right text-xl-right">
                                <nav id="mobile-menu">
                                    <ul>
                                        <li class="has-sub">
                                            <a href="<?= Url::home() ?>">Bosh sahifa</a>
                                        </li>
                                        <li class="has-sub">
                                            <a href="services">Xizmatlar</a>
                                        </li>

                                        <li class="has-sub">
                                            <a href="#">Yangiliklar</a>
                                        </li>
                                        <li><a href="contact">Aloqa</a></li>
                                        <li><a href="contact">Ro'yxatdan o'tish</a></li>
                                        <li><a href="contact">Kirish</a></li>


                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 text-right d-none d-lg-block text-right text-xl-right">
                            <div class="login">
                                <ul>
                                    <li>
                                        <div class="second-header-btn">
                                            <a href="tel:901234567" class="btn">+998(90) 123 45 67 </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="mobile-menu"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->
    <!-- offcanvas-area -->
    <div class="offcanvas-overly"></div>
    <!-- offcanvas-end -->
    <!-- main-area -->
    <main>
        <!-- slider-area -->
        <section id="parallax" class="slider-area slider-two fix p-relative">
            <div class="slider-shape ss-four layer" data-depth="0.40"><img src="img/bg/slider_shape04.png" alt="shape">
            </div>
            <div class="slider-active">
                <div class="single-slider slider-bg slider-bg2 d-flex align-items-center"
                     style="background: url(img/slider/slider-bg-1.jpg) no-repeat; ">
                    <div class="container">
                        <div class="row justify-content-center align-items-center">
                            <div class="col-lg-7 col-md-8">
                                <div class="slider-content s-slider-content pt-100">
                                    <h5 data-animation="fadeInUp" data-delay=".4s">Tabiy maxsulotlar</h5>
                                    <h2 data-animation="fadeInUp" data-delay=".4s">Eng yangi va tabiy fermerlik maxsulotlari</h2>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-4">

                            </div>
                        </div>
                    </div>
                </div>

            </div>


        </section>
        <!-- slider-area-end -->
        <!-- service-area -->
        <section class="service-details-three p-relative fix">
            <div class="container">
                <div class="row sbox">

                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="services-box mb-30 text-center wow fadeInUp animated" data-animation="fadeInUp"
                             data-delay=".4s">

                            <div class="sr-contner">
                                <span style="font-size:30px">
                                    2394+
                                </span>
                                <div class="text">
                                    <h3><a href="services">Fermerlar</a></h3>
                                </div>
                            </div>


                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="services-box mb-30 text-center wow fadeInUp animated" data-animation="fadeInUp"
                             data-delay=".4s">
                            <div class="sr-contner">
                                <span style="font-size:30px">
                                    1244+
                                </span>
                                <div class="text">
                                    <h3><a href="services"> Sotuvchilar</a></h3>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="services-box mb-30 text-center wow fadeInUp animated" data-animation="fadeInUp"
                             data-delay=".4s">
                            <div class="sr-contner">
                                <span style="font-size:30px">
                                    12342+
                                </span>
                                <div class="text">
                                    <h3><a href="services">Foydalanuvchilar</a></h3>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- service-details2-area-end -->
        <!-- services-five-area -->
        <section id="services-05" class="services-05 pt-120 pb-100 p-relative fix"
                 style="background: url(img/bg/services-bg.png); background-repeat: no-repeat;">
            <div class="container">
                <div class="row justify-content-center align-items-center center-align">
                    <div class="col-lg-6 col-md-12">
                        <div class="section-title text-center mb-20 wow fadeInDown  animated"
                             data-animation="fadeInDown" data-delay=".4s">
                            <h2>
                                Eng yangi texnologiyalar va dori maxulotlari
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-4">
                        <div class="services-box-05 mb-30 hover-zoomin wow fadeInUp  animated" data-animation="fadeInUp"
                             data-delay=".4s">
                            <div class="services-icon-05">
                                <a href="single-service"><img src="img/bg/services-08.jpg" alt="icon01"></a>
                            </div>
                            <div class="services-content-05">
                                <div class="icon">
                                    <h4><a href="single-service">Agriculture Products</a></h4>
                                </div>
                                <p>Seamlessly visualize quality ellectual capital without superior collaboration and
                                    idea such and asser sharing listically</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="services-box-05 mb-30 hover-zoomin wow fadeInUp  animated" data-animation="fadeInUp"
                             data-delay=".4s">
                            <div class="services-icon-05">
                                <a href="single-service"><img src="img/bg/services-09.jpg" alt="icon01"></a>
                            </div>
                            <div class="services-content-05">
                                <div class="icon">
                                    <h4><a href="single-service">Fresh Vegetables</a></h4>
                                </div>
                                <p>Seamlessly visualize quality ellectual capital without superior collaboration and
                                    idea such and asser sharing listically</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="services-box-05 mb-30 hover-zoomin wow fadeInUp  animated" data-animation="fadeInUp"
                             data-delay=".4s">
                            <div class="services-icon-05">
                                <a href="single-service"><img src="img/bg/services-10.jpg" alt="icon01"></a>
                            </div>
                            <div class="services-content-05">
                                <div class="icon">
                                    <h4><a href="single-service">Organic Products</a></h4>
                                </div>
                                <p>Seamlessly visualize quality ellectual capital without superior collaboration and
                                    idea such and asser sharing listically</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="services-box-05 mb-30 hover-zoomin wow fadeInUp  animated" data-animation="fadeInUp"
                             data-delay=".4s">
                            <div class="services-icon-05">
                                <a href="single-service"><img src="img/bg/services-11.jpg" alt="icon01"></a>
                            </div>
                            <div class="services-content-05">
                                <div class="icon">
                                    <h4><a href="single-service">Ecological Farming</a></h4>
                                </div>
                                <p>Seamlessly visualize quality ellectual capital without superior collaboration and
                                    idea such and asser sharing listically</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="services-box-05 mb-30 hover-zoomin wow fadeInUp  animated" data-animation="fadeInUp"
                             data-delay=".4s">
                            <div class="services-icon-05">
                                <a href="single-service"><img src="img/bg/services-05.jpg" alt="icon01"></a>
                            </div>
                            <div class="services-content-05">
                                <div class="icon">
                                    <h4><a href="single-service">Dairy Products</a></h4>
                                </div>
                                <p>Seamlessly visualize quality ellectual capital without superior collaboration and
                                    idea such and asser sharing listically</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="services-box-05 mb-30 hover-zoomin wow fadeInUp  animated" data-animation="fadeInUp"
                             data-delay=".4s">
                            <div class="services-icon-05">
                                <a href="single-service"><img src="img/bg/services-13.jpg" alt="icon01"></a>
                            </div>
                            <div class="services-content-05">
                                <div class="icon">
                                    <h4><a href="single-service">Fresh Berries</a></h4>
                                </div>
                                <p>Seamlessly visualize quality ellectual capital without superior collaboration and
                                    idea such and asser sharing listically</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- services-three-area -->
        <!-- steps-area -->
        <!-- steps-area-end -->
        <!-- gallery-area -->
        <section id="portfolio" class="pt-120 pb-90">
            <div class="container">
                <div class="portfolio ">
                    <div class="row align-items-end mb-50">
                        <div class="col-lg-12">
                            <div class="section-title text-center wow fadeInLeft  animated" data-animation="fadeInLeft"
                                 data-delay=".4s">
                                <h5>Fermerlar tajribasi</h5>
                                <h2>
                                    Fermerlar yetishtiradigan<br> maxsulotlar
                                </h2>

                            </div>

                        </div>
                    </div>
                    <div class="row align-items-end mb-50">
                        <div class="col-lg-12">
                            <div class="my-masonry text-center wow fadeInRight  animated" data-animation="fadeInRight"
                                 data-delay=".4s">
                                <div class="button-group filter-button-group ">
                                    <button class="active" data-filter="*">Hammasini ko'rish</button>
                                    <button data-filter=".financial">Cattles</button>
                                    <button data-filter=".banking">Equipment</button>
                                    <button data-filter=".insurance">Farming</button>
                                    <button data-filter=".family">Organic</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid col3 wow fadeInUp  animated" data-animation="fadeInUp" data-delay=".4s">
                        <div class="grid-item financial">
                            <a href="single-projects">
                                <figure class="gallery-image">
                                    <img src="img/gallery/protfolio-img01.jpg" alt="img" class="img">

                                </figure>
                            </a>
                        </div>
                        <div class="grid-item financial banking">
                            <a href="single-projects">
                                <figure class="gallery-image">
                                    <img src="img/gallery/protfolio-img02.jpg" alt="img" class="img">
                                </figure>
                            </a>
                        </div>
                        <div class="grid-item insurance">
                            <a href="single-projects">
                                <figure class="gallery-image">
                                    <img src="img/gallery/protfolio-img03.jpg" alt="img" class="img">
                                </figure>
                            </a>
                        </div>
                        <div class="grid-item family">
                            <a href="single-projects">
                                <figure class="gallery-image">
                                    <img src="img/gallery/protfolio-img04.jpg" alt="img" class="img">
                                </figure>
                            </a>
                        </div>
                        <div class="grid-item business">
                            <a href="single-projects">
                                <figure class="gallery-image">
                                    <img src="img/gallery/protfolio-img05.jpg" alt="img" class="img">
                                </figure>
                            </a>
                        </div>
                        <div class="grid-item financial">
                            <a href="single-projects">
                                <figure class="gallery-image">
                                    <img src="img/gallery/protfolio-img06.jpg" alt="img" class="img">
                                </figure>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- gallery-area-end -->

        <!-- testimonial-area -->
        <section class="testimonial-area pt-120 pb-100 p-relative fix"
                 style="background: url(img/bg/services-bg.png); background-repeat: no-repeat;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title mb-50 wow fadeInDown animated text-center" data-animation="fadeInDown"
                             data-delay=".4s">
                            <h2>
                                Eng zo'r kamentariya yozganlar
                            </h2>
                        </div>

                    </div>

                    <div class="col-lg-12">
                        <div class="testimonial-active">
                            <div class="single-testimonial">
                                <div class="testi-author">
                                    <img src="img/testimonial/testi_avatar.png" alt="img">
                                    <div class="ta-info">
                                        <h6>Jina Nilson</h6>
                                        <span>Client</span>
                                    </div>
                                </div>
                                <p class="pt-10 pb-20"><img src="img/testimonial/review-icon.png" alt="img"></p>
                                <p>“Phasellus aliquam quis lorem amet dapibus feugiat vitae purus vitae efficitur.
                                    Vestibulum sed elit id orci rhoncus ultricies. Morbi vitae semper consequat ipsum
                                    semper quam”.</p>

                                <div class="qt-img">
                                    <img src="img/testimonial/qt-icon.png" alt="img">
                                </div>
                            </div>
                            <div class="single-testimonial">
                                <div class="testi-author">
                                    <img src="img/testimonial/testi_avatar_02.png" alt="img">
                                    <div class="ta-info">
                                        <h6>Braitly Dcosta</h6>
                                        <span>Client</span>
                                    </div>
                                </div>
                                <p class="pt-10 pb-20"><img src="img/testimonial/review-icon.png" alt="img"></p>
                                <p>“Phasellus aliquam quis lorem amet dapibus feugiat vitae purus vitae efficitur.
                                    Vestibulum sed elit id orci rhoncus ultricies. Morbi vitae semper consequat ipsum
                                    semper quam”.</p>

                                <div class="qt-img">
                                    <img src="img/testimonial/qt-icon.png" alt="img">
                                </div>
                            </div>
                            <div class="single-testimonial">
                                <div class="testi-author">
                                    <img src="img/testimonial/testi_avatar.png" alt="img">
                                    <div class="ta-info">
                                        <h6>Jina Nilson</h6>
                                        <span>Client</span>
                                    </div>
                                </div>
                                <p class="pt-10 pb-20"><img src="img/testimonial/review-icon.png" alt="img"></p>
                                <p>“Phasellus aliquam quis lorem amet dapibus feugiat vitae purus vitae efficitur.
                                    Vestibulum sed elit id orci rhoncus ultricies. Morbi vitae semper consequat ipsum
                                    semper quam”.</p>

                                <div class="qt-img">
                                    <img src="img/testimonial/qt-icon.png" alt="img">
                                </div>
                            </div>
                            <div class="single-testimonial">
                                <div class="testi-author">
                                    <img src="img/testimonial/testi_avatar_02.png" alt="img">
                                    <div class="ta-info">
                                        <h6>Braitly Dcosta</h6>
                                        <span>Client</span>
                                    </div>
                                </div>
                                <p class="pt-10 pb-20"><img src="img/testimonial/review-icon.png" alt="img"></p>
                                <p>“Phasellus aliquam quis lorem amet dapibus feugiat vitae purus vitae efficitur.
                                    Vestibulum sed elit id orci rhoncus ultricies. Morbi vitae semper consequat ipsum
                                    semper quam”.</p>

                                <div class="qt-img">
                                    <img src="img/testimonial/qt-icon.png" alt="img">
                                </div>
                            </div>
                            <div class="single-testimonial">
                                <div class="testi-author">
                                    <img src="img/testimonial/testi_avatar.png" alt="img">
                                    <div class="ta-info">
                                        <h6>Jina Nilson</h6>
                                        <span>Client</span>
                                    </div>
                                </div>
                                <p class="pt-10 pb-20"><img src="img/testimonial/review-icon.png" alt="img"></p>
                                <p>“Phasellus aliquam quis lorem amet dapibus feugiat vitae purus vitae efficitur.
                                    Vestibulum sed elit id orci rhoncus ultricies. Morbi vitae semper consequat ipsum
                                    semper quam”.</p>

                                <div class="qt-img">
                                    <img src="img/testimonial/qt-icon.png" alt="img">
                                </div>
                            </div>
                            <div class="single-testimonial">
                                <div class="testi-author">
                                    <img src="img/testimonial/testi_avatar_02.png" alt="img">
                                    <div class="ta-info">
                                        <h6>Braitly Dcosta</h6>
                                        <span>Client</span>
                                    </div>
                                </div>
                                <p class="pt-10 pb-20"><img src="img/testimonial/review-icon.png" alt="img"></p>
                                <p>“Phasellus aliquam quis lorem amet dapibus feugiat vitae purus vitae efficitur.
                                    Vestibulum sed elit id orci rhoncus ultricies. Morbi vitae semper consequat ipsum
                                    semper quam”.</p>

                                <div class="qt-img">
                                    <img src="img/testimonial/qt-icon.png" alt="img">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- testimonial-area-end -->

        <!-- frequently-area -->
        <section class="faq-area pb-120 p-relative fix">
            <div class="container">
                <div class="row justify-content-center">

                    <div class="col-lg-6">
                        <div class="faq-wrap pr-30 wow fadeInUp animated" data-animation="fadeInUp" data-delay=".4s">
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header" id="headingThree">
                                        <h2 class="mb-0">
                                            <button class="faq-btn" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseThree">
                                                01 Cras turpis felis, elementum sed mi at arcu ?
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseThree" class="collapse show"
                                         data-bs-parent="#accordionExample">
                                        <div class="card-body">
                                            Our community is being called to reimagine the future. As the only
                                            university where a renowned design school comes together with premier
                                            colleges, we are making learning more relevant and transformational. We are
                                            enriched by the wide range.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <h2 class="mb-0">
                                            <button class="faq-btn collapsed" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseOne">
                                                02 Vestibulum nibh risus, in neque eleifendulputate sem ?
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseOne" class="collapse" data-bs-parent="#accordionExample">
                                        <div class="card-body">
                                            Our community is being called to reimagine the future. As the only
                                            university where a renowned design school comes together with premier
                                            colleges, we are making learning more relevant and transformational. We are
                                            enriched by the wide range.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingTwo">
                                        <h2 class="mb-0">
                                            <button class="faq-btn collapsed" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseTwo">
                                                03 Donec maximus, sapien id auctor ornare ?
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseTwo" class="collapse" data-bs-parent="#accordionExample">
                                        <div class="card-body">
                                            Our community is being called to reimagine the future. As the only
                                            university where a renowned design school comes together with premier
                                            colleges, we are making learning more relevant and transformational. We are
                                            enriched by the wide range.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="section-title wow fadeInLeft animated mb-20" data-animation="fadeInDown animated"
                             data-delay=".2s">
                            <h5>Bizing yordam</h5>
                            <h2>Eng kop berilgan savollar</h2>
                        </div>
                        <p>
                            Siz o'zingizni qiziqtirgan savollarga shu joydan javob olishingiz va qiziriqtirgan
                            savolingizni berishingiz mumkun.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- frequently-area-end -->
        <!-- blog-area -->
        <section id="blog" class="blog-area p-relative fix pt-120 pb-90"
                 style="background: url(img/bg/services-bg.png); background-repeat: no-repeat;">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="section-title center-align mb-50 text-center wow fadeInDown animated"
                             data-animation="fadeInDown" data-delay=".4s">
                            <h5>Bizning Blog</h5>
                            <h2>
                                Eng oxirgi chiqqan yangilikalar
                            </h2>

                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-post2 hover-zoomin mb-30 wow fadeInUp animated" data-animation="fadeInUp"
                             data-delay=".4s">
                            <div class="blog-thumb2">
                                <a href="blog-details"><img src="img/blog/blog7.jpg" alt="img"></a>
                            </div>
                            <div class="blog-content2">
                                <div class="date-home">
                                    <i class="fal fa-calendar-alt"></i> 24th March 2023
                                </div>
                                <div class="b-meta">
                                    <div class="meta-info">
                                        <ul>
                                            <li><i class="fal fa-user"></i> By Admin</li>
                                            <li><i class="fal fa-comments"></i> 3 Comments</li>
                                        </ul>
                                    </div>
                                </div>
                                <h4><a href="blog-details">Cras accumsan nulla nec lacus ultricies placerat.</a>
                                </h4>
                                <p>Curabitur sagittis libero tincidunt tempor finibus. Mauris at dignissim ligula, nec
                                    tristique orci.</p>
                                <div class="blog-btn"><a href="blog-details">Read More <i
                                                class="fal fa-long-arrow-right"></i></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-post2 mb-30 hover-zoomin wow fadeInUp animated" data-animation="fadeInUp"
                             data-delay=".4s">
                            <div class="blog-thumb2">
                                <a href="blog-details"><img src="img/blog/blog8.jpg" alt="img"></a>
                            </div>
                            <div class="blog-content2">
                                <div class="date-home">
                                    <i class="fal fa-calendar-alt"></i> 24th March 2023
                                </div>
                                <div class="b-meta">
                                    <div class="meta-info">
                                        <ul>
                                            <li><i class="fal fa-user"></i> By Admin</li>
                                            <li><i class="fal fa-comments"></i> 3 Comments</li>
                                        </ul>
                                    </div>
                                </div>
                                <h4><a href="blog-details">Dras accumsan nulla nec lacus ultricies placerat.</a>
                                </h4>
                                <p>Curabitur sagittis libero tincidunt tempor finibus. Mauris at dignissim ligula, nec
                                    tristique orci.</p>
                                <div class="blog-btn"><a href="blog-details">Read More <i
                                                class="fal fa-long-arrow-right"></i></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-post2 mb-30 hover-zoomin wow fadeInUp animated" data-animation="fadeInUp"
                             data-delay=".4s">
                            <div class="blog-thumb2">
                                <a href="blog-details"><img src="img/blog/blog9.jpg" alt="img"></a>
                            </div>
                            <div class="blog-content2">
                                <div class="date-home">
                                    <i class="fal fa-calendar-alt"></i> 24th March 2023
                                </div>
                                <div class="b-meta">
                                    <div class="meta-info">
                                        <ul>
                                            <li><i class="fal fa-user"></i> By Admin</li>
                                            <li><i class="fal fa-comments"></i> 3 Comments</li>
                                        </ul>
                                    </div>
                                </div>
                                <h4><a href="blog-details">Seas accumsan nulla nec lacus ultricies placerat.</a>
                                </h4>
                                <p>Curabitur sagittis libero tincidunt tempor finibus. Mauris at dignissim ligula, nec
                                    tristique orci.</p>
                                <div class="blog-btn"><a href="blog-details">Read More <i
                                                class="fal fa-long-arrow-right"></i></a></div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </section>
        <!-- blog-area-end -->

        <!-- brand-area -->
        <div class="brand-area pb-120">
            <div class="container">
                <div class="row brand-active">
                    <div class="col-xl-2">
                        <div class="single-brand">
                            <img src="img/brand/b-logo1.png" alt="img">
                        </div>
                    </div>
                    <div class="col-xl-2">
                        <div class="single-brand">
                            <img src="img/brand/b-logo2.png" alt="img">
                        </div>
                    </div>
                    <div class="col-xl-2">
                        <div class="single-brand">
                            <img src="img/brand/b-logo3.png" alt="img">
                        </div>
                    </div>
                    <div class="col-xl-2">
                        <div class="single-brand">
                            <img src="img/brand/b-logo4.png" alt="img">
                        </div>
                    </div>
                    <div class="col-xl-2">
                        <div class="single-brand">
                            <img src="img/brand/b-logo5.png" alt="img">
                        </div>
                    </div>
                    <div class="col-xl-2">
                        <div class="single-brand">
                            <img src="img/brand/b-logo1.png" alt="img">
                        </div>
                    </div>
                    <div class="col-xl-2">
                        <div class="single-brand">
                            <img src="img/brand/b-logo2.png" alt="img">
                        </div>
                    </div>
                    <div class="col-xl-2">
                        <div class="single-brand">
                            <img src="img/brand/b-logo3.png" alt="img">
                        </div>
                    </div>
                    <div class="col-xl-2">
                        <div class="single-brand">
                            <img src="img/brand/b-logo4.png" alt="img">
                        </div>
                    </div>
                    <div class="col-xl-2">
                        <div class="single-brand">
                            <img src="img/brand/b-logo5.png" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- brand-area-end -->

    </main>
    <!-- main-area-end -->

    <!-- footer -->
    <footer class="footer-bg footer-p pt-150"
            style="background-color: #fff; background-image: url(img/bg/footer-bg.png); background-position: 0 0;">
        <div class="footer-top pb-70">
            <div class="container">
                <div class="row justify-content-between">

                    <div class="col-xl-4 col-lg-4 col-sm-6">
                        <div class="footer-widget mb-30">
                            <div class="f-widget-title mb-30">
                                <a href="<?= Url::home() ?>"><img src="img/logo/Present_logo.png" alt="img"></a>
                            </div>
                            <div class="f-contact">
                                <p>
                                    Ushbu web sayt orqali fermerlar, sotuvchilar va eng asosiysi davlat foydalanishi
                                    mumkun va o'zi qiziqtirgan malumotlarni olishlari mumkun.
                                </p>

                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-sm-6">
                        <div class="footer-widget mb-30">
                            <div class="f-widget-title">
                                <h2>Our Links</h2>
                            </div>
                            <div class="footer-link">
                                <ul>
                                    <li><a href="<?= Url::home() ?>">Bosh sahifa</a></li>
                                    <li><a href="about"> Malumot</a></li>
                                    <li><a href="services"> Xizmatlar </a></li>
                                    <li><a href="contact"> Bog'lanish</a></li>
                                    <li><a href="blog">Yangiliklar </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-sm-6">
                        <div class="footer-widget mb-30">
                            <div class="f-widget-title">
                                <h2>Bog'lanish uchun</h2>
                            </div>
                            <div class="f-contact">
                                <ul>
                                    <li>
                                        <i class="icon fal fa-phone"></i>
                                        <span><a href="tel:+998 (90) 1234567">+998 (90) 1234567</a><br>
                                           <a href="tel:+998 (90) 1234567">+998 (90) 1234567</a></span>
                                    </li>
                                    <li><i class="icon fal fa-envelope"></i>
                                        <span>
                                            <a href="mailto:info@farm.uz">info@farm.uz</a>
                                       <br>
                                       <a href="mailto:help@farm.com">help@farm.uz</a>
                                       </span>
                                    </li>
                                </ul>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer-end -->
    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage();
