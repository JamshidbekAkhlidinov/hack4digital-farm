<?php

namespace api\modules\v1\modules\user\controllers;

use api\controllers\BaseController;
use api\modules\v1\modules\user\filters\ProductCategoryList;
use api\modules\v1\modules\user\forms\ProductCategoryForm;
use api\modules\v1\modules\user\requests\ProductCategoryDeleteData;
use api\modules\v1\modules\user\requests\ProductCategoryPageData;
use common\models\ProductCategory;
use yii\web\NotFoundHttpException;

class ProductCategoryController extends BaseController
{
    public function actionIndex()
    {
        return $this->sendResponse(
            new ProductCategoryList(),
            request()->get(),
        );
    }

    public function actionCreate()
    {
        return $this->sendResponse(
            new ProductCategoryForm(
                new ProductCategory(),
                request()->post(),
            )
        );
    }

    public function actionDelete($id)
    {
        return $this->sendResponse(
            new ProductCategoryDeleteData(
                $this->getModel($id),
            ),
        );
    }

    public function actionUpdate($id)
    {
        return $this->sendResponse(
            new ProductCategoryForm(
                $this->getModel($id),
                request()->post(),
            )
        );
    }

    public function actionView($id)
    {
        return $this->sendResponse(
            new ProductCategoryPageData(
                $this->getModel($id),
            ),
        );
    }

    /**
     * @throws NotFoundHttpException
     */
    private function getModel($id)
    {
        $model = ProductCategory::findOne([
            'id' => $id,
            'created_by' => user()->id,
        ]);
        if ($model !== null) {
            return $model;
        }
        throw new NotFoundHttpException(translate("Not Found"));
    }
}