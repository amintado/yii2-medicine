<?php

namespace ut8ia\medicine\controllers;

use Yii;
use yii\web\Controller;


class ProfileController extends Controller
{


    public function actionIndex()
    {
        return $this->render('index');
    }

}
