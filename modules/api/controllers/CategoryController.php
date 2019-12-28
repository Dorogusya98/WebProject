<?php

namespace app\modules\api\controllers;

use app\models\Category;
use app\models\Content;
use yii\rest\Controller;

class CategoryController extends Controller
{
	public function verbs()
	{
		return [
			'last' => ['GET'],
			'add' => ['POST']
		];
	}

	public function actionLast()
	{
		$models = Content::findBySql((string)['id'])
			->limit(10)
			->all();

		return $models;
	}

	public function actionAdd()
	{

	}
}
