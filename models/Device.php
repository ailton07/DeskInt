<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "device".
 *
 * @property string $iddevices
 * @property string $name
 * @property string $ip
 * @property string $security
 * @property string $description
 */
class Device extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'device';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name', 'security', 'description'], 'string', 'max' => 45],
            [['ip'], 'string', 'max' => 12],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'iddevices' => 'Iddevices',
            'name' => 'Name',
            'ip' => 'Ip',
            'security' => 'Security',
            'description' => 'Description',
        ];
    }
}
