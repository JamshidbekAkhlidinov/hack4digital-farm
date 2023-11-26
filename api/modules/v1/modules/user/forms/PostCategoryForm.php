<?php
/*
 *   Jamshidbek Akhlidinov
 *   8 - 10 2023 18:47:42
 *   https://github.com/JamshidbekAkhlidinov
 */

namespace api\modules\v1\modules\user\forms;

use api\modules\v1\base\FormRequest;
use common\enums\StatusEnum;
use common\models\PostCategory;

class PostCategoryForm extends FormRequest
{

    public PostCategory $model;

    public $name;

    public $status;

    public function rules()
    {
        return [
            [['name'], 'required'],
        ];
    }

    public function __construct(PostCategory $model, $config = [])
    {
        $this->model = $model;
        $this->name = $model->name;
        parent::__construct($config);
    }

    public function getResult()
    {
        $model = $this->model;
        $model->status = StatusEnum::ACTIVE;
        $model->name = $this->name;
        return $model->save();
    }
}
