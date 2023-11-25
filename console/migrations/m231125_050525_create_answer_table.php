<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%answer}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%question}}`
 * - `{{%user}}`
 */
class m231125_050525_create_answer_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%answer}}', [
            'id' => $this->primaryKey(),
            'question_id' => $this->integer(),
            'text' => $this->text(),
            'status' => $this->integer(),
            'created_at' => $this->datetime(),
            'created_by' => $this->integer(),
        ]);

        // creates index for column `question_id`
        $this->createIndex(
            '{{%idx-answer-question_id}}',
            '{{%answer}}',
            'question_id'
        );

        // add foreign key for table `{{%question}}`
        $this->addForeignKey(
            '{{%fk-answer-question_id}}',
            '{{%answer}}',
            'question_id',
            '{{%question}}',
            'id'
        );

        // creates index for column `created_by`
        $this->createIndex(
            '{{%idx-answer-created_by}}',
            '{{%answer}}',
            'created_by'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-answer-created_by}}',
            '{{%answer}}',
            'created_by',
            '{{%user}}',
            'id'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%question}}`
        $this->dropForeignKey(
            '{{%fk-answer-question_id}}',
            '{{%answer}}'
        );

        // drops index for column `question_id`
        $this->dropIndex(
            '{{%idx-answer-question_id}}',
            '{{%answer}}'
        );

        // drops foreign key for table `{{%user}}`
        $this->dropForeignKey(
            '{{%fk-answer-created_by}}',
            '{{%answer}}'
        );

        // drops index for column `created_by`
        $this->dropIndex(
            '{{%idx-answer-created_by}}',
            '{{%answer}}'
        );

        $this->dropTable('{{%answer}}');
    }
}
