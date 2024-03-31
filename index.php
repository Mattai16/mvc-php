<?php
use DI\Container;
use Psr\Container\ContainerInterface;
use app\settings\settings;
use app\data\DataContext;
use Slim\Factory\AppFactory;
use Slim\Factory\AppFactory;

require __DIR__ . '/vendor/autoload.php';


$container = new Container();

$container->set('settings', function({
    $settings = require __DIR__ . '/app/settings.php';
    return new Settings($settings);
}));

$container->set('db', function(ContainerInterface $container){
    return new DataContext($container->get('settings')->get());
});

/* $app = AppFactory::createFromContainer($container);

$app->get('/', function ($req, $res, $args){
    $res->getBody()->write("Hola mundo");
    return $res;
}); */

$app->addRoutingMiddleware();
$routes = require __DIR__ . '/app/routes.php';
$routes($app);
$app->addErrorMiddleware(true, true, true);
$app->run();