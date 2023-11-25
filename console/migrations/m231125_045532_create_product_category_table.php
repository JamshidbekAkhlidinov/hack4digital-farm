<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%product_category}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%user}}`
 * - `{{%user}}`
 */
class m231125_045532_create_product_category_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%product_category}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'status' => $this->integer(),
            'created_at' => $this->datetime(),
            'updated_at' => $this->datetime(),
            'created_by' => $this->integer(),
            'updated_by' => $this->integer(),
        ]);

        // creates index for column `created_by`
        $this->createIndex(
            '{{%idx-product_category-created_by}}',
            '{{%product_category}}',
            'created_by'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-product_category-created_by}}',
            '{{%product_category}}',
            'created_by',
            '{{%user}}',
            'id'
        );

        // creates index for column `updated_by`
        $this->createIndex(
            '{{%idx-product_category-updated_by}}',
            '{{%product_category}}',
            'updated_by'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-product_category-updated_by}}',
            '{{%product_category}}',
            'updated_by',
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
            '{{%fk-product_category-created_by}}',
            '{{%product_category}}'
        );

        // drops index for column `created_by`
        $this->dropIndex(
            '{{%idx-product_category-created_by}}',
            '{{%product_category}}'
        );

        // drops foreign key for table `{{%user}}`
        $this->dropForeignKey(
            '{{%fk-product_category-updated_by}}',
            '{{%product_category}}'
        );

        // drops index for column `updated_by`
        $this->dropIndex(
            '{{%idx-product_category-updated_by}}',
            '{{%product_category}}'
        );

        $this->dropTable('{{%product_category}}');
    }
}
