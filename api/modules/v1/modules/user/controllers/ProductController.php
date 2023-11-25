<?php

namespace api\modules\v1\modules\user\controllers;

use api\controllers\BaseController;
use api\modules\v1\modules\user\filters\ProductList;
use api\modules\v1\modules\user\forms\ProductForm;
use api\modules\v1\modules\user\requests\ProductDeleteData;
use api\modules\v1\modules\user\requests\ProductPageData;
use common\models\Product;
use yii\web\NotFoundHttpException;

class ProductController extends BaseController
{
    public function actionIndex()
    {
        return $this->sendResponse(
            new ProductList(),
            request()->get(),
        );
    }

    public function actionCreate()
    {
        return $this->sendResponse(
            new ProductForm(
                new Product(),
                request()->post(),
            )
        );
    }

    public function actionUpdate($id)
    {
        return $this->sendResponse(
            new ProductForm(
                $this->getModel($id),
                request()->post(),
            )
        );
    }

    public function actionView($id)
    {
        return $this->sendResponse(
            new ProductPageData(
                $this->getModel($id),
            ),
        );
    }


    public function actionDelete($id)
    {
        return $this->sendResponse(
            new ProductDeleteData(
                $this->getModel($id),
            ),
        );
    }

    /**
     * @throws NotFoundHttpException
     */
    private function getModel($id)
    {
        $model = Product::findOne([
            'id' => $id,
            'created_by' => user()->id,
        ]);
        if ($model !== null) {
            return $model;
        }
        throw new NotFoundHttpException(translate("Not Found"));
    }
}