<?php

namespace frontend\modules\main\controllers;
use frontend\models\Image;
use yii\base\Controller;

class MainController extends Controller
{
    public function actionIndex()
    {
        $this->layout = 'bootstrap';
        return $this->render('index');
    }

}
