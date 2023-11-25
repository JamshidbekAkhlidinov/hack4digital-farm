<?php

namespace common\models\query;

/**
 * This is the ActiveQuery class for [[\common\models\PostCategoryLinker]].
 *
 * @see \common\models\PostCategoryLinker
 */
class PostCategoryLinkerQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return \common\models\PostCategoryLinker[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\PostCategoryLinker|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
