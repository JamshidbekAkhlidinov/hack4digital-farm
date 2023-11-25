<?php
/*
 *   Jamshidbek Akhlidinov
 *   25 - 11 2023 21:27:46
 *   https://github.com/JamshidbekAkhlidinov
 */

namespace api\modules\v1\modules\user\forms;

use api\modules\v1\base\FormRequest;
use common\enums\StatusEnum;
use common\models\Question;

class QuestionForm extends FormRequest
{

    public Question $model;

    public $text;

    public function rules()
    {
        return [
            [['text'], 'required'],
        ];
    }

    public function __construct(Question $model, $config = [])
    {
        $this->model = $model;
        $this->text = $model->text;
        parent::__construct($config);
    }

    public function getResult()
    {
        $model = $this->model;
        $model->status = StatusEnum::ACTIVE;
        $model->text = $this->text;
        return $model->save();
    }
}
