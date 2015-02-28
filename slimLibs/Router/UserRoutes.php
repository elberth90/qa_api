<?php

namespace Router;


use Controller\User;

class UserRoutes implements Route
{
    private $di;
    private $slim;

    public function __construct(\Pimple\Container $di)
    {
        $this->di = $di;
        $this->slim = \Slim\Slim::getInstance();
    }

    public function createRoutes()
    {
        $this->slim->group('/user', function () {

            $this->slim->get('/get/:id', function ($id) {
                (new User($this->di))->get($id);
            });

        });

    }
}
