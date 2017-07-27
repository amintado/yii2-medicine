<?php

namespace ut8ia\medicine\widgets\courseSelector;

use ut8ia\medicine\models\Courses;
use yii\base\Widget;


class CourseSelectorWidget extends Widget
{

    public $model;
    public $form;

    public function run()
    {


        return $this->render('selector', [
            'model' => $this->model,
            'form' => $this->form,
            'courses' => Courses::pairs(['status' => Courses::STATUS_OPEN])
        ]);
    }

}
