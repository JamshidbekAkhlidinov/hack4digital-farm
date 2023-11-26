<?php
/*
 *   Jamshidbek Akhlidinov
 *   26 - 11 2023 1:2:9
 *   https://github.com/JamshidbekAkhlidinov
 */

namespace api\modules\v1\modules\user\requests;

use api\modules\v1\base\BaseRequest;
use api\modules\v1\modules\user\resources\ProductCategoryResource;
use common\models\PostCategory;
use common\models\ProductCategory;

class PostCategoryPageData extends BaseRequest
{

    public PostCategory $category;

    public function __construct(PostCategory $category, $config = [])
    {
        $this->category = $category;
        parent::__construct($config);
    }

    public function getResult()
    {
        return ProductCategoryResource::findOne(['id' => $this->category->id]);
    }
}