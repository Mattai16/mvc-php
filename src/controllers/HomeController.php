<?php
namespace app\controllers;

use Psr\Http\Message\ResponseInterface as Response; 
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Container\ContainerInterface;
class HomeController

class HomeController
{
    private $path = 'Home/';
    private $view; private $db;

    public function __construct(ContainerIterface $container)
    {
        $this->view = $container->get('view');
        $this->db = $container->get('db');
    }

    public function index(Request $req, Response $res, $args)
    {
        $libros = $this->db->obten_libros();
        return $this->view->render($res, "{$this->path}index.html", ['model' => $libros]);
    }

}