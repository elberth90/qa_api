<?php

namespace Router;

class RoutesProvider
{
    private $slim;

    public function __construct(\Slim\Slim $app)
    {
        $this->slim = $app;
    }

    public function register()
    {
        (new UserRoutes($this->slim))->createRoutes();
    }
}
