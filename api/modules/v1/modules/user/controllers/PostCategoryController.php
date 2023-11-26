<?php

namespace api\modules\v1\modules\user\controllers;

use api\controllers\BaseController;
use api\modules\v1\modules\user\filters\PostCategoryList;
use api\modules\v1\modules\user\filters\ProductCategoryList;
use api\modules\v1\modules\user\forms\PostCategoryForm;
use api\modules\v1\modules\user\forms\ProductCategoryForm;
use api\modules\v1\modules\user\requests\PostCategoryDeleteData;
use api\modules\v1\modules\user\requests\ProductCategoryDeleteData;
use api\modules\v1\modules\user\requests\ProductCategoryPageData;
use common\models\PostCategory;
use common\models\ProductCategory;
use yii\web\NotFoundHttpException;

class PostCategoryController extends BaseController
{
    public function actionIndex()
    {
        return $this->sendResponse(
            new PostCategoryList(),
            request()->get(),
        );
    }

    public function actionCreate()
    {
        return $this->sendResponse(
            new PostCategoryForm(
                new PostCategory(),
                request()->post(),
            )
        );
    }

    public function actionDelete($id)
    {
        return $this->sendResponse(
            new PostCategoryDeleteData(
                $this->getModel($id),
            ),
        );
    }

    public function actionUpdate($id)
    {
        return $this->sendResponse(
            new PostCategoryForm(
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
        $model = PostCategory::findOne([
            'id' => $id,
            'created_by' => user()->id,
        ]);
        if ($model !== null) {
            return $model;
        }
        throw new NotFoundHttpException(translate("Not Found"));
    }
}