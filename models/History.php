<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "history".
 *
 * @property integer $id
 * @property string $user
 * @property string $message
 * @property string $tanggal
 */
class History extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'history';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['users', 'message', 'tanggal'], 'required'],
            [['message'], 'string'],
            [['tanggal'], 'safe'],
            [['users'], 'string', 'max' => 10],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'users' => 'User',
            'message' => 'Message',
            'tanggal' => 'Tanggal',
        ];
    }
}
