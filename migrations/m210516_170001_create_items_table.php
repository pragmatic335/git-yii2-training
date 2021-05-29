<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%items}}`.
 */
class m210516_170001_create_items_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{public.%items}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull()->unique(),

        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%items}}');
    }
}
