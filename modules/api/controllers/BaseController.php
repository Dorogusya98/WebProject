<?php
namespace app\modules\api\controllers;
use yii\rest\Controller;
use yii\web\Response;
use yii\filters;
use yii\filters\Cors;

class BaseController extends Controller
 {
     public function behaviors()
     {
         return [
             'contentNegotiator' => [
                 'class' => ContentNegotiator::className(),
                 'formats' => [
                     'application/json' => Response::FORMAT_JSON,
                     'application/xml' => Response::FORMAT_XML,
                 ],
             ],
             'verbFilter' => [
                 'class' => VerbFilter::className(),
                 'action' => $this->verbs(),
             ],
             'cors' => [
                 'class' => Cors::class
             ]
         ];
         return parent::behaviors(); // TODO: Change the autogenerated stub
     }
 }
