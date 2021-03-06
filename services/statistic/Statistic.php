<?php

namespace ut8ia\medicine\services\statistic;

use ut8ia\medicine\models\Excerpts;
use ut8ia\medicine\models\Meets;
use ut8ia\medicine\models\Patients;
use yii\base\Object;

/**
 * Class Statistic
 */
class Statistic extends Object
{

    public $time_from;
    public $time_to;
    

    public function patients()
    {
        return Patients::find()->all();
    }


    public function patientsBySex($sex)
    {
        return Patients::find()
            ->where(['sex' => $sex])
            ->all();
    }


    public function patientsMeets($status = null)
    {
        return Meets::find()
            ->andFilterWhere(['status' => $status])
            ->andFilterWhere(['<=', 'time_to', $this->time_to])
            ->andFilterWhere(['>=', 'time_from', $this->time_from])
            ->all();
    }


    public function excerpts()
    {
        return Excerpts::find()->all();
    }


}