<?php
/*
 *   Jamshidbek Akhlidinov
 *   25 - 11 2023 21:29:33
 *   https://github.com/JamshidbekAkhlidinov
 */

namespace api\modules\v1\modules\user\filters;

use api\modules\v1\base\FilterRequest;
use api\modules\v1\modules\user\resources\QuestionResource;
use common\enums\StatusEnum;

class QuestionList extends FilterRequest
{
    public $text;

    public function rules()
    {
        return [
            [['text'], 'safe'],
        ];
    }

    public function getModels()
    {
        $query = QuestionResource::find();

        $query->orderBy(['id' => SORT_DESC]);

        if ($search = $this->text) {
            $query->andWhere(['like', 'text', $search]);
        }

        $query->andWhere(['status' => StatusEnum::ACTIVE]);
        $query->andWhere(['created_by' => user()->id]);

        return $query;
    }


    public function getResult()
    {
        return [
            'success' => true,
            'result' => $this->getModels()->all(),
        ];
    }
}