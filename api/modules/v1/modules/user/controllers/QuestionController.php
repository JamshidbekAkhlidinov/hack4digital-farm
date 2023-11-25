<?php
/*
 *   Jamshidbek Akhlidinov
 *   25 - 11 2023 21:32:18
 *   https://github.com/JamshidbekAkhlidinov
 */

namespace api\modules\v1\modules\user\controllers;

use api\controllers\BaseController;
use api\modules\v1\modules\user\filters\ProductCategoryList;
use api\modules\v1\modules\user\filters\QuestionList;
use api\modules\v1\modules\user\forms\ProductCategoryForm;
use api\modules\v1\modules\user\forms\QuestionForm;
use api\modules\v1\modules\user\requests\ProductCategoryDeleteData;
use api\modules\v1\modules\user\requests\ProductCategoryPageData;
use api\modules\v1\modules\user\requests\QuestionPageData;
use common\models\ProductCategory;
use common\models\Question;
use yii\web\NotFoundHttpException;

class QuestionController extends BaseController
{
    public function actionIndex()
    {
        return $this->sendResponse(
            new QuestionList(),
            request()->get(),
        );
    }

    public function actionCreate()
    {
        return $this->sendResponse(
            new QuestionForm(
                new Question(),
                request()->post(),
            )
        );
    }

    public function actionDelete($id)
    {
        return $this->sendResponse(
            new QuestionPageData(
                $this->getModel($id),
            ),
        );
    }

    public function actionUpdate($id)
    {
        return $this->sendResponse(
            new QuestionForm(
                $this->getModel($id),
                request()->post(),
            )
        );
    }

    public function actionView($id)
    {
        return $this->sendResponse(
            new QuestionPageData(
                $this->getModel($id),
            ),
        );
    }

    /**
     * @throws NotFoundHttpException
     */
    private function getModel($id)
    {
        $model = Question::findOne([
            'id' => $id,
            'created_by' => user()->id,
        ]);
        if ($model !== null) {
            return $model;
        }
        throw new NotFoundHttpException(translate("Not Found"));
    }
}