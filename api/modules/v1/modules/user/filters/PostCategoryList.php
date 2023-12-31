<?php
/*
 *   Jamshidbek Akhlidinov
 *   5 - 10 2023 12:35:20
 *   https://github.com/JamshidbekAkhlidinov
 */

namespace api\modules\v1\modules\user\filters;

use api\modules\v1\base\FilterRequest;
use api\modules\v1\modules\user\resources\PostCategoryResource;
use common\enums\StatusEnum;

class PostCategoryList extends FilterRequest
{
    public $name;

    public function rules()
    {
        return [
            [['name'], 'safe'],
        ];
    }

    public function getModels()
    {
        $query = PostCategoryResource::find();

        $query->orderBy(['id' => SORT_DESC]);

        if ($search = $this->name) {
            $query->andWhere(['like', 'name', $search]);
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