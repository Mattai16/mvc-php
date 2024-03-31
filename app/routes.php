<?php

use Slim\App;

return function (App, $app) {
    $app->get('/', 'App\controllers\HomeController:index');
    $app->get('/home', 'App\controllers\HomeController:index');
}