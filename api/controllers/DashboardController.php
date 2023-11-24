<?php
/*
 *   Jamshidbek Akhlidinov
 *   2 - 10 2023 17:23:21
 *   https://github.com/JamshidbekAkhlidinov
 */

namespace api\controllers;

use Yii;
use yii\filters\Cors;
use yii\web\NotFoundHttpException;
use yii\web\Response;

class DashboardController extends BaseController
{
    public function behaviors()
    {
        return [
            [
                'class' => 'yii\filters\ContentNegotiator',
                'formats' => [
                    'application/json' => Response::FORMAT_JSON,
                ],
            ],
            'corsFilter' => [
                'class' => Cors::class,
                'cors' => [
                    'Origin' => ['*'],
                    'Access-Control-Request-Method' => ['GET', 'POST', 'PUT', 'PATCH', 'DELETE', 'HEAD', 'OPTIONS'],
                    'Access-Control-Request-Headers' => ['*'],
                    'Access-Control-Allow-Credentials' => null,
                    'Access-Control-Max-Age' => 86400,
                    'Access-Control-Expose-Headers' => [
                        'X-Pagination-Total-Count',
                        'X-Pagination-Page-Count',
                        'X-Pagination-Current-Page',
                        'X-Pagination-Per-Page',
                        'Link',
                    ],
                ],
            ],
        ];
    }

    public function init()
    {
        parent::init(); // TODO: Change the autogenerated stub
        \Yii::$app->response->format = Response::FORMAT_JSON;
        \Yii::$app->language = 'uz';
    }

    public function actionIndex()
    {
        return [
            'success' => false,
        ];
    }

    public function actionError()
    {
        $exception = new NotFoundHttpException(
            Yii::t('yii', 'Page not found.')
        );

        return [
            'success' => false,
            'message' => $exception->getMessage(),
            'code' => $exception->getCode(),
        ];
    }
}