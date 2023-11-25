<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "post_category_linker".
 *
 * @property int $id
 * @property int|null $post_id
 * @property int|null $post_category_id
 *
 * @property Post $post
 * @property PostCategory $postCategory
 */
class PostCategoryLinker extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'post_category_linker';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['post_id', 'post_category_id'], 'integer'],
            [['post_category_id'], 'exist', 'skipOnError' => true, 'targetClass' => PostCategory::class, 'targetAttribute' => ['post_category_id' => 'id']],
            [['post_id'], 'exist', 'skipOnError' => true, 'targetClass' => Post::class, 'targetAttribute' => ['post_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'post_id' => Yii::t('app', 'Post ID'),
            'post_category_id' => Yii::t('app', 'Post Category ID'),
        ];
    }

    /**
     * Gets query for [[Post]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\PostQuery
     */
    public function getPost()
    {
        return $this->hasOne(Post::class, ['id' => 'post_id']);
    }

    /**
     * Gets query for [[PostCategory]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\PostCategoryQuery
     */
    public function getPostCategory()
    {
        return $this->hasOne(PostCategory::class, ['id' => 'post_category_id']);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\PostCategoryLinkerQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\PostCategoryLinkerQuery(get_called_class());
    }
}
