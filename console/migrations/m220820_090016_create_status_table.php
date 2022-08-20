<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%status}}`.
 */
class m220820_090016_create_status_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('status', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
        ]);

        $this->batchInsert('status', [
            'name',
        ], [
            ['Создана'],
            ['В работе'],
            ['Выполнена'],
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('status');
    }
}
