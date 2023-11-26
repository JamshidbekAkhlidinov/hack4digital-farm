<?php
/*
 *   Jamshidbek Akhlidinov
 *   26 - 11 2023 10:58:47
 *   https://github.com/JamshidbekAkhlidinov
 */

namespace frontend\controllers;

use yii\web\Controller;

class PostController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionView()
    {
        return $this->render('view');
    }


}