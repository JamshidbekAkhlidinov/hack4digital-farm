<?php
/*
 *   Jamshidbek Akhlidinov
 *   26 - 11 2023 9:0:4
 *   https://github.com/JamshidbekAkhlidinov
 */

namespace console\controllers;

use yii\console\Controller;
use ziya\Proxy\ProxyLoop;

class UpdateController extends Controller
{
    public function actionIndex()
    {
        $bot_api_key = "6983540930:AAEFoP_Dr6DjqExqdJJi7SZkZ1j4oonOtfo";
        $url = "http://admin.farm.lc/bot/bot";
        $proxy = new ProxyLoop($bot_api_key, $url);
        $proxy->loop(1, true, true);
    }
}