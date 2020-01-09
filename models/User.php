<?php

namespace app\models;

use Yii;
use yii\web\IdentityInterface;

/**
 * This is the model class for table "Users".
 *
 * @property int $id
 * @property string $login
 * @property string $email
 * @property string $password
 * @property int $role
 * @property string $authKey
 * @property string $accessToken
 *
 * @property Content[] $contents
 */
class User extends \yii\db\ActiveRecord implements IdentityInterface
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
            [['login', 'email', 'password', 'role', 'authKey', 'accessToken'], 'required'],
            [['role'], 'integer'],
            [['login', 'email', 'password', 'authKey', 'accessToken'], 'string', 'max' => 128],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'login' => 'Login',
            'email' => 'Email',
            'password' => 'Password',
            'role' => 'Role',
            'authKey' => 'Auth Key',
            'accessToken' => 'Access Token',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getContents()
    {
        return $this->hasMany(Content::className(), ['users_id' => 'id']);
    }

    /**
     * @inheritDoc
     */
    public static function findIdentity($id)
    {
        return static::findOne($id);
    }

    /**
     * @inheritDoc
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        return static::findOne(['accessToken' => $token]);
    }

    /**
     * @inheritDoc
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @inheritDoc
     */
    public function getAuthKey()
    {
        return $this->authKey;
    }

    /**
     * @inheritDoc
     */
    public function validateAuthKey($authKey)
    {
        return $this->authKey === $authKey;
    }

    /**
     * @param $password
     * @return bool
     */
    public function validatePassword($password)
    {
        return Yii::$app->security->validatePassword($password, $this->password);
    }

    public static function findByEmail($email)
    {
        return static::findOne(['email' => $email]);
    }

    public static function findByLogin($login)
    {
        return static::findOne(['login' => $login]);
    }

    public function beforeSave($insert)
    {
        if(!parent::beforeSave($insert))
            return false;

        if($insert) {
            $this->password = Yii::$app->security->generatePasswordHash($this->password);
            $this->accessToken = Yii::$app->security->generateRandomString();
            $this->authKey = Yii::$app->security->generateRandomString();
        }

        return true;
    }
}
