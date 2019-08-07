<?php

use Psr\Http\Message\ResponseInterface as Response;


$app->get('/', function ($request, $response, $args) {
    $response->getBody()->write("Welcome to Slim !");
    return $response;
});

$app->get('/info', function ($request, $response, $args) {
    $response->getBody()->write(phpinfo());
    return $response;
});