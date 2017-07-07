<?php

namespace ut8ia\medicine\widgets\patientSearch\assets;

use yii\web\AssetBundle;

class PatientSearchAsset extends AssetBundle
{
    public $sourcePath = '@vendor/ut8ia/yii2-medicine/widgets/patientSearch/assets';

    public $css = [
    ];
    public $js = [
        'js/patientSearch.js',
    ];
    public $depends = [
        'yii\bootstrap\BootstrapAsset',
    ];
}
