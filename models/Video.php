<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Videos".
 *
 * @property int $id
 * @property string $Path
 * @property int $Content_id
 *
 * @property Contents $content
 */
class Video extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Videos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Path', 'Content_id'], 'required'],
            [['Content_id'], 'integer'],
            [['Path'], 'string', 'max' => 128],
            [['Content_id'], 'exist', 'skipOnError' => true, 'targetClass' => Contents::className(), 'targetAttribute' => ['Content_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'Path' => 'Path',
            'Content_id' => 'Content ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getContent()
    {
        return $this->hasOne(Contents::className(), ['id' => 'Content_id']);
    }
}
