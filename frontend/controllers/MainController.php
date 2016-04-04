<?php

namespace frontend\controllers;
use frontend\models\Image;
use yii\base\Controller;

class MainController extends Controller
{
    public function actionIndex()
    {
        $url_image = Image::getImageUrl();
        return $this->render('index',[
            'image' => $url_image
        ]);
    }

}
