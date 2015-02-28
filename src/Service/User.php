<?php

namespace Service;

class User
{
    private $di;

    public function __construct(\Pimple\Container $di)
    {
        $this->di = $di;
    }
}
