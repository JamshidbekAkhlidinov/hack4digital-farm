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
                        <div class="col-xl-1 col-lg-1">
                            <div class="logo">
                                <a href="<?= Url::home() ?>"><img src="/img/logo/Present_logo.png" width="70px"
                                                                  alt="logo"></a>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-8">

                            <div class="main-menu text-right text-xl-right">
                                <nav id="mobile-menu">
                                    <ul>
                                        <li class="has-sub">
                                            <a href="<?= Url::home() ?>">Bosh sahifa</a>
                                        </li>
                                        <li class="has-sub">
                                            <a href="<?=Url::to(['post/index'])?>">Xizmatlar</a>
                                        </li>

                                        <li class="has-sub">
                                            <a href="<?=Url::to(['post/index'])?>">Yangiliklar</a>
                                        </li>
                                        <li><a href="<?= Url::to(['site/contact']) ?>">Aloqa</a></li>

                                        <?php if (user()->isGuest): ?>
                                            <li about="active"><a href="<?= Url::to(['site/signup']) ?>">Ro'yxatdan o'tish</a></li>
                                            <li about="active"><a href="<?= Url::to(['site/login']) ?>">Kirish</a></li>
                                        <?php else: ?>
                                            <li class="active"><a href="<?= Url::to(['site/logout']) ?>" data-method="POST">Chiqish
                                                    (<?= user()->identity->getFullName() ?>)</a></li>
                                        <?php endif; ?>

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
    <?php if (!in_array(Yii::$app->controller->route, ['site/index','post/index'])) {
        $options = ' class="container" style="padding-top:150px"';
    } else {
        $options = "";
    } ?>
    <main <?= $options ?>>
        <?= $content ?>
    </main>
    <!-- main-area-end -->

    <!-- footer -->
    <footer class="footer-bg footer-p pt-150"
            style="background-color: #fff; background-image: url(/img/bg/footer-bg.png); background-position: 0 0;">
        <div class="footer-top pb-70">
            <div class="container">
                <div class="row justify-content-between">

                    <div class="col-xl-4 col-lg-4 col-sm-6">
                        <div class="footer-widget mb-30">
                            <div class="f-widget-title mb-30">
                                <a href="<?= Url::home() ?>"><img src="/img/logo/Present_logo.png" alt="img"></a>
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
                                <h2>Havolalar</h2>
                            </div>
                            <div class="footer-link">
                                <ul>
                                    <li><a href="<?= Url::home() ?>">Bosh sahifa</a></li>
                                    <li><a href="<?=Url::to(['site/about'])?>"> Malumot</a></li>
                                    <li><a href="<?=Url::to(['post/index'])?>"> Xizmatlar </a></li>
                                    <li><a href="<?=Url::to(['site/contact'])?>"> Bog'lanish</a></li>
                                    <li><a href="<?=Url::to(['post/index'])?>">Yangiliklar </a></li>
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
