<?php

/**
 * @author Sergey Tevs
 * @email tevs.sergey@gmail.com
 */

namespace Core\Factory;

use DI\Container;
use DI\ContainerBuilder;
use Exception;

class ContainerFactory {

    /**
     * @param array $settings
     * @return Container
     * @throws Exception
     */
    public static function createInstance(array $settings = []): Container {
        $containerBuilder = new ContainerBuilder();
        $containerBuilder->addDefinitions($settings);
        return $containerBuilder->build();
    }

}
