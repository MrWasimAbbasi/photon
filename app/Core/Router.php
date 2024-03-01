<?php

namespace App\Core;
class Router
{
    public function route($url)
    {
        $urlParts = explode('/', trim($url, '/'));

        $controllerName = ucfirst(!empty($urlParts[0]) ? $urlParts[0] : 'Home') . 'Controller';
        $actionName = $urlParts[1] ?? 'index';

        $controllerClassName = 'App\\Controllers\\' . $controllerName;
        $controller = new $controllerClassName();

        if (method_exists($controller, $actionName)) {
            $controller->$actionName();
        } else {
            // Handle 404 error
            echo '404 Not Found';
        }
    }
}
