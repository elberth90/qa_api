<?php

namespace Middleware;

class MiddlewareProvider
{
    private $slim;

    public function __construct()
    {
        $this->slim = \Slim\Slim::getInstance();
    }

    public function registerMiddlewares()
    {
        $this->slim->add(new Auth());
    }
}
