<?php

namespace Core\Handler;

use Psr\Http\Message\ResponseFactoryInterface;

class HttpExceptionMiddleware {

    /**
     * @param ResponseFactoryInterface $responseFactory
     */
    public function __construct(ResponseFactoryInterface $responseFactory) {}
}
