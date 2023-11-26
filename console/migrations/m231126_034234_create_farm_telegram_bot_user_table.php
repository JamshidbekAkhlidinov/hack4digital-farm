<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%farm_telegram_bot_user}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%user}}`
 */
class m231126_034234_create_farm_telegram_bot_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%farm_telegram_bot_user}}', [
            'id' => $this->primaryKey(),
            'telegram_id' => $this->string(),
            'status' => $this->integer()->defaultValue(1),
            'platform_user_id' => $this->integer(),
            'step' => $this->integer(),
            'created_at' => $this->datetime(),
        ]);

        // creates index for column `platform_user_id`
        $this->createIndex(
            '{{%idx-farm_telegram_bot_user-platform_user_id}}',
            '{{%farm_telegram_bot_user}}',
            'platform_user_id'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-farm_telegram_bot_user-platform_user_id}}',
            '{{%farm_telegram_bot_user}}',
            'platform_user_id',
            '{{%user}}',
            'id'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%user}}`
        $this->dropForeignKey(
            '{{%fk-farm_telegram_bot_user-platform_user_id}}',
            '{{%farm_telegram_bot_user}}'
        );

        // drops index for column `platform_user_id`
        $this->dropIndex(
            '{{%idx-farm_telegram_bot_user-platform_user_id}}',
            '{{%farm_telegram_bot_user}}'
        );

        $this->dropTable('{{%farm_telegram_bot_user}}');
    }
}
