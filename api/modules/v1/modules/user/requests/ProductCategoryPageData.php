<?php
/*
 *   Jamshidbek Akhlidinov
 *   6 - 10 2023 12:22:54
 *   https://github.com/JamshidbekAkhlidinov
 */

namespace api\modules\v1\modules\user\requests;

use api\modules\v1\base\BaseRequest;
use api\modules\v1\modules\user\resources\PostCategoryResource;
use common\models\PostCategory;

class ProductCategoryPageData extends BaseRequest
{

    public PostCategory $category;

    public function __construct(PostCategory $category, $config = [])
    {
        $this->category = $category;
        parent::__construct($config);
    }

    public function getResult()
    {
        return PostCategoryResource::findOne(['id' => $this->category->id]);
    }
}