<?php

namespace Router;

class RoutesProvider
{
    private $di;

    public function __construct(\Pimple\Container $di)
    {
        $this->di = $di;
    }

    public function register()
    {
        (new UserRoutes($this->di))->createRoutes();
    }
}
