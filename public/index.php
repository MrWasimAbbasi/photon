<?php

use App\Core\Router;

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../bootstrap/EnvParser.php';

use App\Core\ErrorHandler;

set_exception_handler([ErrorHandler::class, 'handleException']);


$router = new Router();
$router->route($_SERVER['REQUEST_URI']);
