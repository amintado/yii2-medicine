<?php

namespace ut8ia\medicine\assets;

use yii\web\AssetBundle;

class JsonRpcAsset extends AssetBundle
{
    public $sourcePath = '@vendor/ut8ia/yii2-medicine/assets';
    public $css = [];
    public $js = ['js/JsonRpcWrapper.js'];
}
