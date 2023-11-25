<?php

/*
 *   Jamshidbek Akhlidinov
 *   5 - 10 2023 22:21:41
 *   https://github.com/JamshidbekAkhlidinov
 */

namespace api\modules\v1\modules\user\resources;

use common\models\ProductCategory;

class ProductCategoryResource extends ProductCategory
{
    public function fields()
    {
        return [
            'id',
            'name',
        ];
    }
}