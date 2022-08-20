<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%task}}`.
 */
class m220820_085208_create_task_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('task', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'description' => $this->text(),
            'status_id' => $this->integer()->notNull()->defaultValue(0),
            'priority' => $this->integer()->notNull()->defaultValue(1),
            'created_at' => $this->datetime()->notNull()->defaultValue(new \yii\db\Expression("NOW()")),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('task');
    }
}
