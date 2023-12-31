<?php
/*
 *   Jamshidbek Akhlidinov
 *   2 - 10 2023 17:30:21
 *   https://github.com/JamshidbekAkhlidinov
 */

namespace api\controllers;

use api\modules\v1\base\BaseRequest;
use yii\filters\AccessControl;
use yii\filters\auth\HttpBearerAuth;
use yii\filters\Cors;
use yii\rest\Controller;
use yii\web\Response;

class BaseController extends Controller
{
    public $serializer = [
        'class' => 'yii\rest\Serializer',
        'collectionEnvelope' => 'items',
        'linksEnvelope' => 'links',
        'metaEnvelope' => 'options',
    ];

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

            'authenticator' => [
                'class' => HttpBearerAuth::class,
                'except' => [
                    'login', 'signup', 'ok', 'error',
                    'request-password-reset', 'reset-password', 'verify-email',
                    'resend-verification-email',
                    'add', 'roles',
                ],
            ],
            'access' => [
                'class' => AccessControl::class,
                'rules' => [
//                    [
//                        'allow' => true,
//                        'roles' => UserRolesEnum::ROLE_ADMINISTRATOR
//                    ],
                    [
                        'allow' => true,
                    ],
                ]
            ],
        ];
    }

    public function init()
    {
        parent::init(); // TODO: Change the autogenerated stub
        \Yii::$app->response->format = Response::FORMAT_JSON;
        \Yii::$app->language = 'uz';
    }

    protected function verbs()
    {
        return [
            'index' => ['GET', 'HEAD'],
            'view' => ['GET', 'HEAD'],
            'create' => ['POST'],
            'update' => ['PUT', 'PATCH'],
            'delete' => ['DELETE'],
        ];
    }

    public function actionOk()
    {
        return ['success' => true, 'method' => 'OPTIONS'];
    }

    public function sendResponse(BaseRequest $request, $params = [])
    {
        $request->load($params, '');
        if ($request->validate()) {
            return $request->getResult();
        }
        return $request;
    }
}