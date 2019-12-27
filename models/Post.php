<?php

namespace app\models;
use yii\base\Model;

class Post extends Model
{
    // Заголовок объявления
    public $title;
    // Номер телефона
    public $phoneNumber;
    // Текст объявления
    public $text;
}