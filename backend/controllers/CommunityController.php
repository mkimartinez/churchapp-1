<?php

namespace backend\controllers;

class CommunityController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

}
