<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "usuario".
 *
 * @property string $iduser
 * @property string $login
 * @property string $password
 * @property string $email
 * @property string $nome
 */
class Usuario extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'usuario';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['login', 'password', 'nome'], 'required'],
            [['login', 'password'], 'string', 'max' => 20],
            [['email', 'nome'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'iduser' => 'Iduser',
            'login' => 'Login',
            'password' => 'Password',
            'email' => 'Email',
            'nome' => 'Nome',
        ];
    }
}
