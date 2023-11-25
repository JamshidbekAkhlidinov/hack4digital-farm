<?php

use common\enums\StatusEnum;
use yii\db\Migration;

/**
 * Handles the creation of table `{{%product}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%product_category}}`
 * - `{{%user}}`
 * - `{{%user}}`
 */
class m231125_045812_create_product_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%product}}', [
            'id' => $this->primaryKey(),
            'product_category_id' => $this->integer(),
            'name' => $this->string(),
            'photo' => $this->string(),
            'price' => $this->double(),
            'status' => $this->integer()->defaultValue(StatusEnum::ACTIVE),
            'sub_text' => $this->text(),
            'body' => $this->text(),
            'created_at' => $this->datetime(),
            'updated_at' => $this->datetime(),
            'created_by' => $this->integer(),
            'updated_by' => $this->integer(),
        ]);

        // creates index for column `product_category_id`
        $this->createIndex(
            '{{%idx-product-product_category_id}}',
            '{{%product}}',
            'product_category_id'
        );

        // add foreign key for table `{{%product_category}}`
        $this->addForeignKey(
            '{{%fk-product-product_category_id}}',
            '{{%product}}',
            'product_category_id',
            '{{%product_category}}',
            'id',
            'CASCADE',
            'CASCADE'
        );

        // creates index for column `created_by`
        $this->createIndex(
            '{{%idx-product-created_by}}',
            '{{%product}}',
            'created_by'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-product-created_by}}',
            '{{%product}}',
            'created_by',
            '{{%user}}',
            'id'
        );

        // creates index for column `updated_by`
        $this->createIndex(
            '{{%idx-product-updated_by}}',
            '{{%product}}',
            'updated_by'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-product-updated_by}}',
            '{{%product}}',
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
        // drops foreign key for table `{{%product_category}}`
        $this->dropForeignKey(
            '{{%fk-product-product_category_id}}',
            '{{%product}}'
        );

        // drops index for column `product_category_id`
        $this->dropIndex(
            '{{%idx-product-product_category_id}}',
            '{{%product}}'
        );

        // drops foreign key for table `{{%user}}`
        $this->dropForeignKey(
            '{{%fk-product-created_by}}',
            '{{%product}}'
        );

        // drops index for column `created_by`
        $this->dropIndex(
            '{{%idx-product-created_by}}',
            '{{%product}}'
        );

        // drops foreign key for table `{{%user}}`
        $this->dropForeignKey(
            '{{%fk-product-updated_by}}',
            '{{%product}}'
        );

        // drops index for column `updated_by`
        $this->dropIndex(
            '{{%idx-product-updated_by}}',
            '{{%product}}'
        );

        $this->dropTable('{{%product}}');
    }
}
