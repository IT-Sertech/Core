<?php

/**
 * @author Sergey Tevs
 * @email tevs.sergey@gmail.com
 */

namespace Core\Utils;

class Arr {

    /**
     * @param $value
     * @return array
     */
    public static function wrap($value):array {
        if (is_null($value)) {
            return [];
        }
        return !is_array($value)?[$value]:$value;
    }

}
