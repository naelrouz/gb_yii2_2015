<?php

namespace app\modules\main\controllers;

use yii\web\Controller;
use frontend\components\Common;

/**
 * Default controller for the `main` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        //$this->layout = 'bootstrap';
        $this->layout = 'inner';
        return $this->render('index');
    }
    public function actionPath() {
        print \Yii::getAlias('@webroot');
    }
    public function actionEvent () {
        //$component = new Common; // создаем компонент
        $component  = \Yii::$app->common;
        
        $component->on(Common::EVENT_NOT, [$component, 'notfAdmi']); // прикрепляем обработчик к событию
        /* 
         * Common::EVENT_NOT - событие
         * $component - класс вызываемого при событи метода
         * notfAdmi - метот вызываемый при событии
         */
        $component->sendMail('test@ts.com', 'text', 'text');
    }
}
