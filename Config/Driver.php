<?php

/**
 * @author Sergey Tevs
 * @email tevs.sergey@gmail.com
 */

namespace Core\Config;

interface Driver {

    /**
     * @param string $file
     * @return array
     */
    public function read(string $file): array;
}
