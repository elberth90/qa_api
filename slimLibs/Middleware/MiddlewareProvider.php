<?php

namespace Middleware;

class MiddlewareProvider
{
    private $slimApp;

    public function __construct(\Slim\Slim $slimApp)
    {
        $this->slimApp = $slimApp;
    }

    public function registerMiddlewares()
    {
        $this->slimApp->add(new Auth());
    }
}
