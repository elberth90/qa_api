<?php

namespace Controller;

class Task
{
    private $di;

    public function __construct(\Pimple\Container $di)
    {
        $this->di = $di;
    }

    public function get($taskId)
    {
        echo "działam";
    }
}
