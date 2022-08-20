<?php

namespace frontend\models;

use Yii;
use frontend\models\Status;

/**
 * This is the model class for table "task".
 *
 * @property int $id
 * @property string $name
 * @property string|null $description
 * @property int $status_id
 * @property int $priority
 * @property string $created_at
 */
class Task extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'task';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['description'], 'string'],
            [['status_id', 'priority'], 'integer'],
            [['created_at'], 'safe'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'description' => 'Description',
            'status_id' => 'Status',
            'priority' => 'Priority',
            'created_at' => 'Created At',
        ];
    }

    public function getStatus()
    {
         return $this->hasOne(Status::className(), ['id' => 'status_id']);
    }
}
