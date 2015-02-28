<?php

namespace View;

class JsonResponse extends \Slim\View {

    public function render($httpCode = 200, $data = null)
    {
        $app = \Slim\Slim::getInstance();
        $response = $this->all();
        unset($response['flash']);
        $app->response->body(json_encode($response));
        $app->response->status($httpCode);
        $app->response->headers->set('Content-Type', 'application/json');
        $app->stop();
    }

}
