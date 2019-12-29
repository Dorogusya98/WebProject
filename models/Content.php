<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Contents".
 *
 * @property int $id
 * @property string $title
 * @property int $category
 * @property string $description
 * @property int $users_id
 * @property string $genre
 * @property string $cover_path
 *
 * @property User $users
 * @property Image[] $images
 * @property Video[] $videos
 */
class Content extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Contents';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'category', 'description', 'users_id', 'genre', 'cover_path'], 'required'],
            [['category', 'users_id'], 'integer'],
            [['title', 'description', 'genre', 'cover_path'], 'string', 'max' => 128],
            [['users_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['users_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'category' => 'Category',
            'description' => 'Description',
            'users_id' => 'Users ID',
            'genre' => 'Genre',
            'cover_path' => 'Cover Path',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsers()
    {
        return $this->hasOne(User::className(), ['id' => 'users_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getImages()
    {
        return $this->hasMany(Image::className(), ['Content_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVideos()
    {
        return $this->hasMany(Video::className(), ['Content_id' => 'id']);
    }

    public function toArray(array $fields = [], array $expand = [], $recursive = true)
    {
        $data = parent::toArray($fields, $expand, $recursive);

        if (isset($data['cover_path']) && strlen($data['cover_path']) > 0) {
            $data['cover_path'] = Yii::$app->urlManager->hostInfo . '/' . $data['cover_path'];
        }

        return $data;
    }
}
