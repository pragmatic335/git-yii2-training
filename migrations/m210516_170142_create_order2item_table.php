<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%order2item}}`.
 */
class m210516_170142_create_order2Item_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%order2item}}', [
            'id' => $this->primaryKey(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%order2item}}');
    }
}
