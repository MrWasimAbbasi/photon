<?php
namespace App\Core;

class View
{
    public static function render($viewName, $data = []) {
        include_once('../app/Views/' . $viewName . '.php');
    }
}
