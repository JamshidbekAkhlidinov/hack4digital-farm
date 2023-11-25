<?php
/*
 *   Jamshidbek Akhlidinov
 *   6 - 10 2023 12:22:54
 *   https://github.com/JamshidbekAkhlidinov
 */

namespace api\modules\v1\modules\user\requests;

use api\modules\v1\base\BaseRequest;
use api\modules\v1\modules\user\resources\ProductCategoryResource;
use common\models\ProductCategory;

class ProductCategoryPageData extends BaseRequest
{

    public ProductCategory $category;

    public function __construct(ProductCategory $category, $config = [])
    {
        $this->category = $category;
        parent::__construct($config);
    }

    public function getResult()
    {
        return ProductCategoryResource::findOne(['id' => $this->category->id]);
    }
}