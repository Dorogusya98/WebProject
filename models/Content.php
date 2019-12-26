<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Content".
 *
 * @property int $id
 * @property string $Title
 * @property string $Description
 * @property int|null $Users_id
 *
 * @property Users $users
 * @property Images[] $images
 * @property Videos[] $videos
 */
class Content extends BaseModel
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Content';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Title', 'Description'], 'required'],
            [['Users_id'], 'integer'],
            [['Title', 'Description'], 'string', 'max' => 128],
            [['Users_id'], 'exist', 'skipOnError' => true, 'targetClass' => Users::className(), 'targetAttribute' => ['Users_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'Title' => 'Title',
            'Description' => 'Description',
            'Users_id' => 'Users ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsers()
    {
        return $this->hasOne(Users::className(), ['id' => 'Users_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getImages()
    {
        return $this->hasMany(Images::className(), ['Content_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVideos()
    {
        return $this->hasMany(Videos::className(), ['Content_id' => 'id']);
    }
}
