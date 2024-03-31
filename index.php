<?php
use Slim\Factory\AppFactory;

require __DIR__ . '/vendor/autoload.php';

$app = AppFactory::create();

$app->get('/', function ($req, $res, $args){
    $res->getBody()->write("Hola mundo");
    return $res;
});

$app->run();