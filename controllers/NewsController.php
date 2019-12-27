<?php


namespace app\controllers;


use app\models\News;
use yii\base\Controller;

class NewsController extends Controller
{
    public function actionIndex()
    {
        $news = [];
        $mode = new News();
        $mode -> id=1;
        $mode -> title="dgdg";
        $mode -> description = "djgkd";
        $mode -> text = "aaaaa";
        $news[] = $mode;

        $mode = new News();
        $mode -> id=2;
        $mode -> title="sdlf";
        $mode -> description = "dslkfj";
        $mode -> text = "bbb";
        $news[] = $mode;

        return $this -> render('index', ['news' => $news]);
    }

    public function actionView($id)
    {
        $model = new News();
        $model -> title = "sklglksg";
        $model -> description = "dllll";
        $model -> text = "ddd";
        return $this -> $this-> render( 'view',[
            'model' => $model,
        'id' => $id]);
    }

}