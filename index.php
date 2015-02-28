<?php

require dirname(__FILE__)."/vendor/autoload.php";

$app = new \Slim\Slim(array(
    'debug' => true,
    'log.enabled' => true,
    'log.writer' => new \Slim\LogWriter(fopen('./tmp/log-'.date('Y-m-d'), 'a'))
));

(new \Middleware\MiddlewareProvider)->registerMiddlewares();

$pimple = new \Pimple\Container();
$pimple->register(new \Config\DependencyInjection\RootProvider());

$pimple['slim'] = $app;

(new \Router\RoutesProvider($pimple))->register();
$app->view(new \View\JsonResponse());

$app->run();
