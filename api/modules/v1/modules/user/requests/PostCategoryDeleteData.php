<?php
/*
 *   Jamshidbek Akhlidinov
 *   25 - 11 2023 13:10:13
 *   https://github.com/JamshidbekAkhlidinov
 */

namespace api\modules\v1\modules\user\requests;

use api\modules\v1\base\BaseRequest;
use common\enums\StatusEnum;
use common\models\PostCategory;
use common\models\ProductCategory;

class PostCategoryDeleteData extends BaseRequest
{
    public PostCategory $category;

    public function __construct(PostCategory $category, $config = [])
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