<?php
/*
 *   Jamshidbek Akhlidinov
 *   25 - 11 2023 13:11:41
 *   https://github.com/JamshidbekAkhlidinov
 */

namespace api\modules\v1\modules\user\forms;

use api\modules\v1\base\FormRequest;
use common\enums\StatusEnum;
use common\models\Product;
use common\models\ProductCategory;
use yii\web\UploadedFile;

class ProductForm extends FormRequest
{

    public Product $model;

    public $product_category_id;
    public $name;
    public $photo;
    public $price;
    public $sub_text;
    public $body;


    public function rules()
    {
        return [
            [['product_category_id'], 'integer'],
            [['price'], 'number'],
            [['sub_text', 'body'], 'string'],
            [['name'], 'string', 'max' => 255],
            ['photo', 'safe'],
            [['product_category_id'], 'exist', 'skipOnError' => true, 'targetClass' => ProductCategory::class, 'targetAttribute' => ['product_category_id' => 'id']],
        ];
    }

    public function __construct(Product $model, $config = [])
    {
        $this->model = $model;
        $this->product_category_id = $model->product_category_id;
        $this->name = $model->name;
        $this->photo = $model->photo;
        $this->price = $model->price;
        $this->sub_text = $model->sub_text;
        $this->body = $model->body;
        parent::__construct($config);
    }

    public function getResult()
    {
        $model = $this->model;
        $file = UploadedFile::getInstanceByName('photo');
        if ($file) {
            $name = str_replace([' ', '-'], ['', ''], $file->name);
            $file->saveAs("images/" . $name);
            $model->photo = "images/" . $name;
        }
        $model->status = StatusEnum::ACTIVE;
        $model->product_category_id = $this->product_category_id;
        $model->name = $this->name;
        $model->price = $this->price;
        $model->sub_text = $this->sub_text;
        $model->body = $this->body;
        return $model->save();
    }
}
