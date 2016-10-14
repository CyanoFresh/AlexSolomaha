<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\LoginForm;

class SiteController extends Controller
{
    public function actions()
    {
        return [
            'error' => [
                'class' => 'app\components\ErrorAction',
                'view' => '/error/index',
            ],
        ];
    }

    public function actionIndex()
    {
        return $this->render('index');
    }
}
