<?php

namespace ut8ia\medicine\models\forms;

use ut8ia\medicine\models\Excerpts;
use Yii;

/**
 * Class ExcerptsForm
 * @package ut8ia\medicine\models\forms
 * @property string $patient_name
 */
class ExcerptsForm extends Excerpts
{

    public $patient_name;


    public function formatParams()
    {
        $this->date = Yii::$app->time->date2front($this->date);

        $this->patient_name = Yii::$app->formatter
            ->asObject([
                'object' => $this->patients,
                'view' => 'search_result'
            ]);
    }

    /**
     * @param bool $insert
     * @return bool
     */
    public function beforeSave($insert)
    {
        if (parent::beforeSave($insert)) {
            $this->date = Yii::$app->time->date2db($this->date);
            return true;
        }
        return false;
    }


}