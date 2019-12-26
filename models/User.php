<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Users".
 *
 * @property int $id
 * @property string $Login
 * @property string $Email
 * @property string $Password
 * @property int $Role
 *
 * @property Content[] $contents
 */
class User extends BaseModel
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Users';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Login', 'Email', 'Password', 'Role'], 'required'],
            [['Role'], 'integer'],
            [['Login', 'Email', 'Password'], 'string', 'max' => 128],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'Login' => 'Login',
            'Email' => 'Email',
            'Password' => 'Password',
            'Role' => 'Role',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getContents()
    {
        return $this->hasMany(Content::className(), ['Users_id' => 'id']);
    }
}
