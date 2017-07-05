<?php

namespace ut8ia\medicine\models\forms;

use Yii;
use ut8ia\medicine\models\ScheduleExceptionDays;

class ScheduleExceptionDaysForm extends ScheduleExceptionDays
{
    public function formatParams()
    {
        $this->date = Yii::$app->time->date2front($this->date);
    }

    public function beforeSave($insert)
    {
        if (parent::beforeSave($insert)) {
            $this->date = Yii::$app->time->date2db($this->date);
            return true;
        }
        return false;
    }

}
