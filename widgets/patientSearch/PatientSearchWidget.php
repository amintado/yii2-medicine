<?php

namespace ut8ia\medicine\widgets\patientSearch;

use yii\base\Widget;

/**
 * Class PatientSearchWidget
 * @package ut8ia\medicine\widgets\patientSearch
 */
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
