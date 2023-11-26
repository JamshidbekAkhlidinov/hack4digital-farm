<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class FarmAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web/farm';
    public $css = [
        "css/bootstrap.min.css",
        "css/animate.min.css",
        "css/magnific-popup.css",
        "fontawesome/css/all.min.css",
        "css/dripicons.css",
        "css/slick.css",
        "css/meanmenu.css",
        "css/default.css",
        "css/style.css",
        "css/responsive.css",
    ];
    public $js = [
        "js/vendor/modernizr-3.5.0.min.js",
        //"js/vendor/jquery-3.6.4.min.js",
        "js/popper.min.js",
        "js/bootstrap.min.js",
        "js/slick.min.js",
        "js/ajax-form.js",
        "js/paroller.js",
        "js/wow.min.js",
        "js/js_isotope.pkgd.min.js",
        "js/imagesloaded.min.js",
        "js/parallax.min.js",
        "js/jquery.waypoints.min.js",
        "js/jquery.counterup.min.js",
        "js/jquery.scrollUp.min.js",
        "js/jquery.meanmenu.min.js",
        "js/parallax-scroll.js",
        "js/jquery.magnific-popup.min.js",
        "js/element-in-view.js",
        "js/main.js",
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset',
    ];
}
