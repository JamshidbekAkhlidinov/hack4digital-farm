<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "answer".
 *
 * @property int $id
 * @property int|null $question_id
 * @property string|null $text
 * @property int|null $status
 * @property string|null $created_at
 * @property int|null $created_by
 *
 * @property User $createdBy
 * @property Question $question
 */
class Answer extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'answer';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['question_id', 'status', 'created_by'], 'integer'],
            [['text'], 'string'],
            [['created_at'], 'safe'],
            [['created_by'], 'exist', 'skipOnError' => true, 'targetClass' => User::class, 'targetAttribute' => ['created_by' => 'id']],
            [['question_id'], 'exist', 'skipOnError' => true, 'targetClass' => Question::class, 'targetAttribute' => ['question_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'question_id' => Yii::t('app', 'Question ID'),
            'text' => Yii::t('app', 'Text'),
            'status' => Yii::t('app', 'Status'),
            'created_at' => Yii::t('app', 'Created At'),
            'created_by' => Yii::t('app', 'Created By'),
        ];
    }

    /**
     * Gets query for [[CreatedBy]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\UserQuery
     */
    public function getCreatedBy()
    {
        return $this->hasOne(User::class, ['id' => 'created_by']);
    }

    /**
     * Gets query for [[Question]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\QuestionQuery
     */
    public function getQuestion()
    {
        return $this->hasOne(Question::class, ['id' => 'question_id']);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\AnswerQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\AnswerQuery(get_called_class());
    }
}
