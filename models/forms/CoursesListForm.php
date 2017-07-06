<?php
namespace ut8ia\medicine\models\forms;

use ut8ia\medicine\models\CoursesList;
use Yii;

/**
 * Class CoursesListForm
 * @package ut8ia\medicine\models\forms
 */
class CoursesListForm extends CoursesList
{

    public function formatParams()
    {
        $this->date_from = Yii::$app->time->date2front($this->date_from);
        $this->date_to = Yii::$app->time->date2front($this->date_to);
    }

    /**
     * @param bool $insert
     * @return bool
     */
    public function beforeSave($insert)
    {
        if (parent::beforeSave($insert)) {
            $this->date_from = Yii::$app->time->date2db($this->date_from);
            $this->date_to = Yii::$app->time->date2db($this->date_to);
            return true;
        }
        return false;
    }


}