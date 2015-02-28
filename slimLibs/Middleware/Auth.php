<?php

namespace Middleware;

use Slim\Middleware;

class Auth extends Middleware
{
    private $isAuthenticated;

    /**
     * Call
     * Perform actions specific to this middleware and optionally
     * call the next downstream middleware.
     */
    public function call()
    {
        $this->authenticate();
        var_dump($this->isAuthenticated);
        if ($this->isAuthenticated) {
            return $this->next->call();
        }
        $this->app->response()->status(401);
    }

    private function authenticate()
    {
        $this->isAuthHeaderPresent();
    }

    private function isAuthHeaderPresent()
    {
        $this->isAuthenticated = !is_null($this->app->request->headers('AuthToken'));
    }
}
