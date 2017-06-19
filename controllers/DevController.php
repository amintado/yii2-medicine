<?php

namespace ut8ia\medicine\controllers;

use ut8ia\medicine\models\Experts;
use Yii;
use yii\web\Controller;


class DevController extends Controller
{

    public function actionIndex()
    {

        return $this->render('index');
    }


}
