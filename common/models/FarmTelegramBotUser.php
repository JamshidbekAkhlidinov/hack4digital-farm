<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "farm_telegram_bot_user".
 *
 * @property int $id
 * @property string|null $telegram_id
 * @property int|null $status
 * @property int|null $platform_user_id
 * @property int|null $step
 * @property string|null $created_at
 *
 * @property User $platformUser
 */
class FarmTelegramBotUser extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'farm_telegram_bot_user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['status', 'platform_user_id', 'step'], 'integer'],
            [['created_at'], 'safe'],
            [['telegram_id'], 'string', 'max' => 255],
            [['platform_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::class, 'targetAttribute' => ['platform_user_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'telegram_id' => Yii::t('app', 'Telegram ID'),
            'status' => Yii::t('app', 'Status'),
            'platform_user_id' => Yii::t('app', 'Platform User ID'),
            'step' => Yii::t('app', 'Step'),
            'created_at' => Yii::t('app', 'Created At'),
        ];
    }

    /**
     * Gets query for [[PlatformUser]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\UserQuery
     */
    public function getPlatformUser()
    {
        return $this->hasOne(User::class, ['id' => 'platform_user_id']);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\FarmTelegramBotUserQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\FarmTelegramBotUserQuery(get_called_class());
    }
}
