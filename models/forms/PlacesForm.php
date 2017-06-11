<?php
namespace ut8ia\medicine\models\forms;

use ut8ia\medicine\models\Buildings;
use ut8ia\medicine\models\Places;
use Yii;

/**
 * Class PlacesForm
 * @package ut8ia\medicine\models\forms
 */
class PlacesForm extends Places
{

    public function findBuildings()
    {
        return Buildings::pairs();
    }

    public function findFloors()
    {
        return $this->buildings->findFloors();
    }

}