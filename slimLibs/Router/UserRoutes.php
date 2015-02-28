<?php

namespace Router;

class UserRoutes implements Route
{
    private $slim;

    public function __construct(\Slim\Slim $app)
    {
        $this->slim = $app;
    }

    public function createRoutes()
    {
        $this->slim->group('/user', function () {

            $this->slim->get('/get/:id', function ($id) {
                echo "{$id}";
            } );

        });

    }
}
