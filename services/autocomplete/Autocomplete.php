<?php

namespace ut8ia\medicine\services\autocomplete;

use ut8ia\medicine\models\Patients;

class Autocomplete
{

    public static function patientAutocomplete($request, $limit = 25)
    {
        $found = Patients::find()
            ->where(['like', 'surname', $request])
            ->all();

        if (!$found) {
            return null;
        }

        $ans = [];
        $c = 0;
        foreach ($found as $patient) {
            $ans[$c]['id'] = $patient->id;
            $ans[$c]['label'] = Yii::$app->formatter->asObject(['object' => $patient, 'view' => 'search_result']);
        }
        return $ans;

    }

}