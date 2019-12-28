<?php

namespace app\models;

use app\components\ImageHelper;
use Yii;
use yii\web\UploadedFile;

/**
 * This is the model class for table "news".
 *
 * @property int $id
 * @property string $title  Заголовок
 * @property string $description Описание
 * @property string $text Текст
 * @property int $categoryId ид категории
 * @property string $createdAt Создано
 * @property string $updatedAt Обновлено
 *
 * @property Category $category
 * @property Image[] $images
 */
class News extends BaseModel
{
    public $image;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'news';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()//Валидаторы
    {
        return [
            [['title', 'text'], 'required'],
            [['description', 'text'], 'string'],
            [['categoryId'], 'integer'],
            [['createdAt', 'updatedAt'], 'safe'],
            [['title'], 'string', 'max' => 128],
            [['categoryId'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['categoryId' => 'id']],
            [['image'], 'string']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => ' Заголовок',
            'description' => 'Описание',
            'text' => 'Текст',
            'categoryId' => 'ид категории',
            'createdAt' => 'Создано',
            'updatedAt' => 'Обновлено',
            'image' => 'Изображение'
        ];
    }

    public function afterSave($insert, $changedAttributes)
    {
        parent::afterSave($insert, $changedAttributes); // TODO: Change the autogenerated stub

        $this->uploadImage('image');
    }

    public function uploadImage($attribute)
    {
        $file = UploadedFile::getInstance($this, $attribute);

        if($file === null){
            return;
        }

        $filename = ImageHelper::create($file);

        $model = new Image();
        $model->newsid = $this->id;
        $model->fileName = $filename;
        $model->save();

        $file->saveAs($filename);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'categoryId']);
    }

    public function getImages()
    {
        return $this->hasMany(Image::className(), ['newsId' => 'id']);
    }
}