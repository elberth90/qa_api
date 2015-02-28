<?php

require dirname(__FILE__)."/vendor/autoload.php";

$app = new \Slim\Slim(array(
    'debug' => true
));

(new \Middleware\MiddlewareProvider($app))->registerMiddlewares();
new \Router\UserRoutes($app);

$pimple = new \Pimple\Container();
$pimple->register(new \Config\DependencyInjection\RootProvider());
$pimple['slim'] = $app;



$app->run();
