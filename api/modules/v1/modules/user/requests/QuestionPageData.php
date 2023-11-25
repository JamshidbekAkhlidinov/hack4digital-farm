<?php
/*
 *   Jamshidbek Akhlidinov
 *   25 - 11 2023 21:25:59
 *   https://github.com/JamshidbekAkhlidinov
 */

namespace api\modules\v1\modules\user\requests;

use api\modules\v1\base\BaseRequest;
use api\modules\v1\modules\user\resources\QuestionResource;
use common\models\Question;

class QuestionPageData extends BaseRequest
{
    public Question $category;

    public function __construct(Question $category, $config = [])
    {
        $this->category = $category;
        parent::__construct($config);
    }

    public function getResult()
    {
        return QuestionResource::findOne(['id' => $this->category->id]);
    }
}