<?php

namespace ut8ia\medicine\controllers;

use ut8ia\medicine\services\autocomplete\Autocomplete;
use yii\web\Controller;
use nizsheanez\jsonRpc\Action;

/**
 * RPC Controller handle remote procedure calls
 */
class RpcController extends Controller
{

    /**
     * @return array
     */
    public function actions()
    {
        return [
            'jsonrpc' => [
                'class' => Action::class
            ],
        ];
    }

    /**
     * @param $request
     * @return array
     */
    public function patientsAutocomplete($request)
    {
        return ['response_list' => Autocomplete::patientAutocomplete($request)];
    }


}
