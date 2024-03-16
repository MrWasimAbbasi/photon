<?php

namespace App\Controllers;

use App\Core\View;
use DB\DB;

class HomeController
{
    public function index()
    {
        View::render('/home/index', ['welcome' => 'Hello World!', 'users' => $rows]);
    }
}