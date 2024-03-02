<?php

namespace App\Core;
class ErrorHandler
{
    public static function handleException($exception)
    {
        http_response_code(500);

        View::render('/core/error', ['exception' => $exception]);

        exit;
    }
}
