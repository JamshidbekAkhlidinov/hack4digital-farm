<?php
/*
 *   Jamshidbek Akhlidinov
 *   25 - 11 2023 14:12:38
 *   https://github.com/JamshidbekAkhlidinov
 */

namespace api\modules\v1\modules\user\filters;

use api\modules\v1\base\FilterRequest;
use api\modules\v1\modules\user\resources\ProductResource;
use common\enums\StatusEnum;

class ProductList extends FilterRequest
{
    public $name;
    public $product_category_id;

    public function rules()
    {
        return [
            [['name', 'product_category_id'], 'safe'],
        ];
    }

    public function getModels()
    {
        $query = ProductResource::find();

        $query->orderBy(['id' => SORT_DESC]);

        if ($search = $this->name) {
            $query->andWhere(['like', 'name', $search]);
        }
        if ($search = $this->product_category_id) {
            $query->andWhere(['product_category_id' => $search]);
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