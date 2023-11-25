<?php
/*
 *   Jamshidbek Akhlidinov
 *   25 - 11 2023 13:5:56
 *   https://github.com/JamshidbekAkhlidinov
 */

namespace api\modules\v1\modules\user\resources;

use common\models\Product;

class ProductResource extends Product
{
    public function fields()
    {
        return [
            'id',
            'product_category_id',
            'name',
            'photo',
            'price',
            'sub_text',
            'created_at',
        ];
    }

    public function extraFields()
    {
        return [
            'body',
        ];
    }
}