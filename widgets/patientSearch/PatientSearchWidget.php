<?php

namespace ut8ia\medicine\widgets\PatientSearch;

use yii\base\Widget;


class PatientSearchWidget extends Widget
{

    public $model;
    public $form;
    public $type = 'patientSearch';

    public function run()
    {
        return $this->render($this->type,
            [
                'model' => $this->model,
                'form' => $this->form,
            ]);
    }

}
