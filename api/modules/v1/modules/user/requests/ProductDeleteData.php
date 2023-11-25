<?php
/*
 *   Jamshidbek Akhlidinov
 *   25 - 11 2023 13:10:13
 *   https://github.com/JamshidbekAkhlidinov
 */

namespace api\modules\v1\modules\user\requests;

use api\modules\v1\base\BaseRequest;
use api\modules\v1\modules\user\resources\ProductResource;
use common\enums\StatusEnum;
use common\models\Product;

class ProductDeleteData extends BaseRequest
{
    public Product $category;

    public function __construct(Product $category, $config = [])
    {
        $this->category = $category;
        parent::__construct($config);
    }

    public function getResult()
    {
        $this->category->status = StatusEnum::INACTIVE;
        return $this->category->save();
    }
}