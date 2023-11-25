<?php
/*
 *   Jamshidbek Akhlidinov
 *   8 - 10 2023 18:47:42
 *   https://github.com/JamshidbekAkhlidinov
 */

namespace api\modules\v1\modules\user\forms;

use api\modules\v1\base\FormRequest;
use common\enums\StatusEnum;
use common\models\ProductCategory;

class ProductCategoryForm extends FormRequest
{

    public ProductCategory $model;

    public $name;

    public $status;

    public function rules()
    {
        return [
            [['name'], 'required'],
        ];
    }

    public function __construct(ProductCategory $model, $config = [])
    {
        $this->model = $model;
        $this->name = $model->name;
        $this->status = StatusEnum::ACTIVE;
        parent::__construct($config);
    }

    public function getResult()
    {
        $model = $this->model;
        $model->status = $this->status;
        $model->name = $this->name;
        return $model->save();
    }
}
