<?php

/**
 * @author Sergey Tevs
 * @email tevs.sergey@gmail.com
 */

namespace Core\Config\Driver;

use Core\Config\Driver;

class Ini implements Driver {

    /**
     * @param string $file
     * @return array
     */
    public function read(string $file): array {
        return parse_ini_file($file, true) ? : [];
    }
}
