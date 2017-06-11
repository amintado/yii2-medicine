<?php

namespace ut8ia\medicine\helpers;

use Yii;

class Converter
{

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