<?php

namespace ut8ia\medicine\controllers;

use ut8ia\medicine\models\Experts;
use Yii;
use yii\web\Controller;


class DevController extends Controller
{

    public function actionIndex()
    {

        $model = new Experts();

        $model = $model->find()
            ->with('places')
            ->where(['id'=>1])
            ->one();


        dd($model->patientsByExpertGroup);

        return $this->render('index');
    }

}
