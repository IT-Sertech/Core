<?php

/**
 * @author Sergey Tevs
 * @email tevs.sergey@gmail.com
 */

namespace Core\Utils;

use Tracy\Debugger;
use Tracy\Dumper;

class Helper {

    public function __construct(){
        Debugger::enable(true);
    }

    /**
     * @param mixed $var
     * @return void
     */
    public function dump(mixed $var): void {
        Dumper::dump($var, [
            Dumper::LOCATION=>false
        ]);
    }
}
