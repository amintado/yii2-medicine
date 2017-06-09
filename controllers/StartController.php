<?php

namespace ut8ia\medicine\controllers;

use ut8ia\medicine\models\Meets;
use ut8ia\medicine\models\Patients;
use ut8ia\medicine\services\statistic\Statistic;
use Yii;
use yii\web\Controller;


class StartController extends Controller
{

    public function actionIndex()
    {
        $dataSource = new Statistic();
        return $this->render('index',
            [
                'patientsCount' => count($dataSource->patients()),
                'patientsMale' => count($dataSource->patientsBySex(Patients::SEX_MALE)),
                'patientsFemale' => count($dataSource->patientsBySex(Patients::SEX_FEMALE)),
                'patientsMeets' => count($dataSource->patientsMeets(Meets::STATUS_DONE)),
                'patientsFinishedCourses' => count($dataSource->excerpts()),
                'patientsPlannedMeets' => count($dataSource->patientsMeets(Meets::STATUS_PLANNED)),
                'myPatientsToday' => count(Yii::$app->expert->findMeets([
                    'and',
                    ['=', 'status', Meets::STATUS_PLANNED],
                    ['>=', 'time_from', Yii::$app->time->dateDb],
                    ['<', 'time_to', Yii::$app->time->rewDaysDateDb(1)]
                ])),
                'myPatientsTomorrow' => count(Yii::$app->expert->findMeets([
                        'and',
                        ['=', 'status', Meets::STATUS_PLANNED],
                        ['>=', 'time_from', Yii::$app->time->rewDaysDateDb(1)],
                        ['<', 'time_to', Yii::$app->time->rewDaysDateDb(2)]
                    ]
                ))

            ]
        );
    }

}
