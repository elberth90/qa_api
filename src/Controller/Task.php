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
        $testTable = $this->di['Db']->test();
        foreach ($testTable as $t) {
            var_dump($t['first']);
        }
//        $this->di['Db']->test()->insert(array('first' => 4));
    }
}
