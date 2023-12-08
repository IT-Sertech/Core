<?php

/**
 * @author Sergey Tevs
 * @email tevs.sergey@gmail.com
 */

namespace Core\Config\Driver;

use Core\Config\Driver;

class Json implements Driver {

    /**
     * @param string $file
     * @return array
     */
    public function read(string $file): array {
        $result = json_decode(file_get_contents($file), true);
        return $result ?: [];
    }
}
