<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%question}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%user}}`
 */
class m231125_050420_create_question_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%question}}', [
            'id' => $this->primaryKey(),
            'text' => $this->text(),
            'status' => $this->integer(),
            'created_at' => $this->datetime(),
            'created_by' => $this->integer(),
        ]);

        // creates index for column `created_by`
        $this->createIndex(
            '{{%idx-question-created_by}}',
            '{{%question}}',
            'created_by'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-question-created_by}}',
            '{{%question}}',
            'created_by',
            '{{%user}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%user}}`
        $this->dropForeignKey(
            '{{%fk-question-created_by}}',
            '{{%question}}'
        );

        // drops index for column `created_by`
        $this->dropIndex(
            '{{%idx-question-created_by}}',
            '{{%question}}'
        );

        $this->dropTable('{{%question}}');
    }
}
