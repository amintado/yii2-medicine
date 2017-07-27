<?php

namespace ut8ia\medicine\helpers;

use Yii;

class Converter
{


    public static function makePairs($objArray)
    {
        $out = [];
        if (empty($objArray)) {
            return $out;
        }
        foreach ($objArray as $obj) {
            
        }

        return $out;

    }

    /**
     * @param array $pairs
     * @return array|null
     */
    public static function separatePairs($pairs)
    {
        if (empty($pairs)) {
            return null;
        }
        $out = [];
        foreach ($pairs as $index => $value) {
            $out[] = ['id' => $index, 'name' => $value];
        }
        return $out;
    }

}