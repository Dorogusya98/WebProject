<?php

namespace app\modules\api\controllers;

use app\models\LoginForm;
use app\models\User;
use Yii;

class UserController extends BaseActiveController
{
    public $modelClass = "app\models\User";

    public function verbs()
    {
        return [
            'index' => ['GET', 'HEAD', 'OPTIONS'],
            'view' => ['GET', 'HEAD', 'OPTIONS'],
            'create' => ['POST', 'OPTIONS'],
            'update' => ['PUT', 'PATCH', 'OPTIONS'],
            'delete' => ['DELETE', 'OPTIONS'],
            'signup' => ['POST', 'OPTIONS'],
            'signin' => ['POST', 'OPTIONS']
        ];
    }

    public function actionSignup()
    {
        $model = new User();

        if ($model->load(Yii::$app->request->getBodyParams(), '') && $model->save(false,null)) {
            return $model;
        }
    }

    public function actionSignin()
    {
        $model = new LoginForm();
        $model->load(Yii::$app->request->getBodyParams(), '');

        if($model->login()){
            return $model->getUser();
        }

        return $model;
    }
}
