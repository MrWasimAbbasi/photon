<?php

use Dotenv\Dotenv;

function loadEnv()
{
    $dotenv = Dotenv::createImmutable(__DIR__.'/../');
    $dotenv->load();
}

loadEnv();