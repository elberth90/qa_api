<?php

namespace Config\DependencyInjection;

use Config\Database;
use Controller\Task;
use Pimple\Container;
use Pimple\ServiceProviderInterface;

class RootProvider implements ServiceProviderInterface
{

    /**
     * Registers services on the given container.
     * This method should only be used to configure services and parameters.
     * It should not get services.
     *
     * @param Container $pimple An Container instance
     */
    public function register(Container $pimple)
    {
        $pimple['Db'] = function ($c) {
            return (new Database)->getDb();
        };

        $pimple['TaskController'] = function ($c) {
            return new Task($c);
        };
    }
}
