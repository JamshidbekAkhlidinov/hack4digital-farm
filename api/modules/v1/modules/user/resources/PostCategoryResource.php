<?php
/*
 *   Jamshidbek Akhlidinov
 *   26 - 11 2023 1:1:26
 *   https://github.com/JamshidbekAkhlidinov
 */

namespace api\modules\v1\modules\user\resources;

use common\models\PostCategory;

class PostCategoryResource extends PostCategory
{
    public function fields()
    {
        return [
            'id',
            'name',
        ];
    }
}