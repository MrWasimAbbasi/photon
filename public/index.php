<?php
use App\Core\Router;

require_once __DIR__.'/../vendor/autoload.php';

$router = new Router();
$router->route($_SERVER['REQUEST_URI']);
