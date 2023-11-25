<?php
/*
 *   Jamshidbek Akhlidinov
 *   25 - 11 2023 21:25:21
 *   https://github.com/JamshidbekAkhlidinov
 */

namespace api\modules\v1\modules\user\resources;

use common\models\Question;

class QuestionResource extends Question
{
    public function fields()
    {
        return [
            'id',
            'text',
        ];
    }
}